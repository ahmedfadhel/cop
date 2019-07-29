<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Category;
use App\Photo;
use Storage;
use Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
    /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth',['except' => ['allcats','catvideos']]);
  }
  // Get All Category for API
  public function allcats()
  {
    $cats = Category::orderBy('name','ASC')->with(['photos'])->paginate(8);
    return response()->json([
      'cats'    => $cats,
      'status'  => 'success'
    ]);
  }
  public function catvideos($name)
  {
    $cat = Category::where('name',$name)->first();
    $videos = $cat->videos()->with(['photos'])->get();
    return response()->json([
      'videos'  =>$videos,
      'cat'     => $cat,
      'status'  => 'success'
    ]);
    # code...
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
      $cats = Category::all()->load('photos');
      return view('dashboard.categories.index')->withCats($cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
      return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

      $validator = Validator::make($request->all(), [
        'name'        => 'required|min:3|max:20|string|unique:categories',
        'description' => 'required|min:3|string',
        'image'       =>  'required|image|mimes:jpeg,bmp,png|max:2048'
      ]);

      if ($validator->fails()) {
          $request->session()->flash('errors', $validator->messages());
          return redirect()->route('category.create');
      }
        $name = $request->input('name');
        $description = $request->input('description');
        $image = $request->image;
        $image->storeAs('public/categories', Str::slug($name,'_').'.'.$request->image->getClientOriginalExtension());

        $category = new Category;
        $category->name = $name;
        $category->description = $description;

        if(!$category->save()){
          return view('dashboard.categories.index');
        }
        $photo = new Photo;
        $photo->url = Str::slug($name,'_').'.'.$request->image->getClientOriginalExtension();
        if(!$photo->save()){
          return view('dashboard.categories.index');
        }

        $category->photos()->attach($photo->id);
        $request->session()->flash('success', $category->name.' has been created successfully!');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //
        $cat = Category::findOrFail($id)->load('photos');
        return view('dashboard.categories.edit')->withCat($cat);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = Validator::make($request->all(), [
        'name'        => 'required|min:3|max:50|string|unique:categories,name,'.$id,
        'description' => 'required|min:3|string',
        'image'                                 =>  'nullable|image|mimes:jpeg,bmp,png|max:2048',
      ]);

      if ($validator->fails()) {
        $request->session()->flash('errors', $validator->messages());
        return redirect()->route('category.edit',$id);
      }
      $category = Category::findOrFail($id)->load('photos');
      $name = $request->input('name');
      $description = $request->input('description');
      // $image = $request->input('image');
      $image = $request->image;
      try {
        //code...

        $category->name = $name;
        $category->description = $description;
        if($request->input('image') || $request->has('image')){ //Check if request has image or input image
          if(Storage::disk('local')->exists("public/categories\/".$category->photos[0]->url)){ //check if the old image are exists
            Storage::disk('local')->delete("public/categories\/".$category->photos[0]->url); //Delete the old image
          }
          $image->storeAs('public/categories', Str::slug($name,'_').'.'.$request->image->getClientOriginalExtension()); //Save the new image
          $category->photos()->whereId($category->photos[0]->id)->update([
            'url' => Str::slug($name,'_').'.'.$request->image->getClientOriginalExtension() //Update the url of the image
          ]);
        }
        $category->save();
      } catch (\Exception $th) {
        //throw $th;
        $request->session()->flash('failed', 'Failed to updated ' . $th->getMessage());
        return redirect()->route('category.index');
      }
      $request->session()->flash('success', $category->name.' has been updated successfully!');

      return redirect()->route('category.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //
      if(Auth::check()){
        $cat = Category::findOrFail($id)->load('photos');
        try {
          if(Storage::disk('local')->exists("public/categories\/".$cat->photos[0]->url)){ //check if the old image are exists
            Storage::disk('local')->delete("public/categories\/".$cat->photos[0]->url); //Delete the old image
          }
          $cat->photos()->whereId($cat->photos[0]->id)->delete();
          $cat->delete();
          return response()->json([
            'status'  => 'success',
            'message' => $cat->name . ' has been Deleted',

          ],200);
        } catch (\Exception $th) {
          return response()->json([
            'status'  =>'failed',
            'message' => $th->getMessage()
          ]);
        }
      }

    }
}
