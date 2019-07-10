<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Star;
use App\Photo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class StarController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stars = Star::orderByDesc('updated_at')->get()->load('photos');
        return view('dashboard.stars.index')->withStars($stars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
      return view('dashboard.stars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Request Validation Section
      $validator = Validator::make($request->all(), [
        'name'        => 'required|min:3|max:30|string|unique:stars',
        'alias'       => 'min:3|max:30|string|nullable',
        'image'       => 'required|url',
        'gender'      => 'required|alpha'
      ]);

      if ($validator->fails()) {
        $request->session()->flash('errors', $validator->messages());
        return redirect()->route('stars.create');
      }
        $name   = $request->input('name');
        $alias  = $request->input('alias');
        $image  = $request->input('image');
        $gender = $request->input('gender');
      try {
        // Create New Star Section
        $star = new Star;
        $star->name = $name;
        $star->alias_name = $alias;
        $star->gender = $gender;
        $star->save();
        // Create New Star Photo Section
        $photo = new Photo;
        $photo->url = $image;
        $photo->save();
        // Attach New Star Photo to the New Star Section
        $star->photos()->attach($photo->id);
        $request->session()->flash('success', $star->name.' has been Created successfully!');
        return redirect()->route('stars.index');
      } catch (\Exception $th) {
        $request->session()->flash('failed', 'Failed to updated ' . $th->getMessage());
        return redirect()->route('stars.index');
      }

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

    $star = Star::findOrFail($id)->load('photos');
    return view('dashboard.stars.edit')->withStar($star);

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
    // Request Validation Section
    $validator = Validator::make($request->all(), [
      'name'        => 'required|min:3|max:30|string|unique:stars,name,'.$id,
      'alias'       => 'min:3|max:30|string|nullable',
      'image'       => 'required|url',
      'gender'      => 'required|alpha'
    ]);

    if ($validator->fails()) {
      $request->session()->flash('errors', $validator->messages());
      return redirect()->route('stars.edit',$id);
    }
      // Get The Star to Updated
      $star = Star::findOrFail($id)->load('photos');
      $name   = $request->input('name');
      $alias  = $request->input('alias');
      $image  = $request->input('image');
      $gender = $request->input('gender');
    try {
      // Update the Star with new Values
      $star->name = $name;
      $star->alias_name = $alias;
      $star->gender = $gender;
      // Update the new Photo
      $star->photos()->whereId($star->photos[0]->id)->update([
        'url' => $image
      ]);
      $star->save();
      $request->session()->flash('success', $star->name.' has been updated successfully!');
      return redirect()->route('stars.index');
      //code...
    } catch (\Throwable $th) {
      // Return to Edit Page with Error page
      $request->session()->flash('failed', 'Failed to updated ' . $th->getMessage());
      return redirect()->route('stars.index');
    }
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
        $star = Star::findorFail($id);
        $star->delete();
        return response()->json([
          'status'  => 'success',
          'message' => $star->name.' has been Deleted ' ,

        ],200);
        try {
          //code...
        } catch (\Exception $th) {
          return response()->json([
            'status'  => 'failed',
            'message' => 'Failed To Delete the Record' ,

          ]);
        }
      }
    }
}
