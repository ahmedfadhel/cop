<?php

namespace App\Http\Controllers;

use App\Album;
use App\Category;
use App\Tag;
use App\Photo;
use Str;
use Storage;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    // $this->middleware('auth');
    $this->middleware('auth', ['except' => ['allalbums','displayalbum','related']]);

  }

  public function allalbums()
  {
    # code...
    $albums = Album::orderBy('title', 'ASC')->with(['photos','tags','cats'])->get();
    return response()->json([
      'albums'    => $albums,
      'status'  => 'success'
    ],200);
  }

  public function displayalbum($slug)
  {
    $album = Album::where('slug',$slug)->with(['photos','tags','cats'])->first();
    Session::put('poster',$album->poster);
    return view('albums.display')->withAlbum($album);
  }
  public function related($type)
  {
    $albums = Album::with(['photos','cats'])->get()->filter(function($album) use ($type){
      if(!is_null($album->cats()->where('name',$type)->first())){
        return $album;
      }
    })->take(8);
    if($albums){
      return response()->json([
        'status' =>'success',
        'albums'=>$albums,

      ],200);
    }
    return response()->json([
      'status' =>'success',
      'videos'=>'No Related Video Found',

    ],200);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $albums = Album::all()->load('photos','tags','cats');
        return view('dashboard.albums.index')->withAlbums($albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tags = Tag::all('id as value','name as text');
      $cats = Category::all('id as value','name as text');
      return view('dashboard.albums.create')->withTags($tags)->withCats($cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // Validation Rule Section
      $validator = Validator::make($request->all(), [
        'title'                                   =>  'required|min:3|max:100|string|unique:albums',
        'poster'                                  =>  'required|image|mimes:jpeg,bmp,png|max:2048',
        'tags'                                    =>  'required|array',
        'cats'                                    =>  'required|array',
        'images'                                  =>  'nullable|array'
      ]);
      // Check Validation
      if ($validator->fails()) {
        $request->session()->flash('errors', $validator->messages());
        return redirect()->route('album.create');
      }
      //Get Form input
      $title = $request->input('title');
      $poster = $request->poster;
      $slug = Str::slug($title,'_');
      $tags = $request->input('tags');
      $cats = $request->input('cats');

      $newTags = explode(',', $tags[0]);
      $newCats = explode(',', $cats[0]);

      try {
        //Create new Album Instance
        $album = new Album;
        $album->title = $title;
        $album->slug = $slug;
        $album->poster = Str::slug($title,'_').'.'.$request->poster->getClientOriginalExtension();

        $album->save(); //Save album instance
        $poster->storeAs('public/posters',Str::slug($title,'_').'.'.$request->poster->getClientOriginalExtension());
        if($request->has('images')){
          Storage::makeDirectory('public/albums/'.$album->id); //Create album folder according to album id
          $image_ids = [];
          foreach ($request->images as $key => $image){
            $image->storeAs('public/albums/'.$album->id,$key.'_'.$album->poster); //save album photos in the created directory and save name in database
            $photo = new Photo;
            $photo->url = $key.'_'.$album->poster;
            $photo->save();
            $image_ids[$key]  = $photo->id;
          }
          // Attach album photos
          $album->photos()->attach($image_ids);
        }

        // Attach Tags and Categories

        $album->tags()->attach($newTags);
        $album->cats()->attach($newCats);
        $request->session()->flash('success', $album->title.' has been Stored successfully!');
        return redirect()->route('album.index');
      } catch (\Exception $th) {
        $request->session()->flash('failed', 'Failed to Store ' . $th->getMessage());
        return redirect()->route('album.index');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show($album)
    {
      //
      // dd($album->load('photos','cats','tags'));
      return view('dashboard.albums.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($album)
    {
      //
      // dd($album);
      $tags = Tag::all('id as value','name as text');
      $cats = Category::all('id as value','name as text');
      $album = Album::where('id',$album)->with(['photos','tags'=>function($q){
        $q->select('id as value','name as text');
      },
      'cats'=>function($q){
        $q->select('id as value','name as text');
      }])->first();
      // dd($album);
      return view('dashboard.albums.edit')->withAlbum($album)->withTags($tags)->withCats($cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $album)
    {
      //
      // dd($album);
      // Validation Rule Section
      $validator = Validator::make($request->all(), [
        'title'                                   =>  'required|min:3|max:100|string|unique:albums,title,'.$album,
        'poster'                                  =>  'required|image|mimes:jpeg,bmp,png|max:2048',
        'tags'                                    =>  'required|array',
        'cats'                                    =>  'required|array',
        'images'                                  =>  'nullable|array'
      ]);
      // Check Validation
      if ($validator->fails()) {
        $request->session()->flash('errors', $validator->messages());
        return redirect()->route('album.edit');
      }
      try {
        $title = $request->input('title');
        $poster = $request->poster;
        $slug = Str::slug($title,'_');
        $images = $request->images;
        $newTags = explode(',', $request->input('tags')[0]);
        $newCats = explode(',', $request->input('cats')[0]);
        $edit = Album::findOrFail($album)->load('photos','tags','cats');

        if(Storage::disk('local')->exists("public/posters\/".$edit->poster)){
          Storage::disk('local')->delete("public/posters\/".$edit->poster);
        }
        if(Storage::disk('local')->exists("public/albums/".$edit->id)){
          Storage::disk('local')->deleteDirectory("public/albums\/".$edit->id);
        }
        $edit->photos()->detach();
        foreach ($edit->photos as $key => $photo) {
          # code...
          $image = Photo::find($photo->id);
          $image->delete();
        }
        $poster->storeAs('public/posters',Str::slug($title,'_').'.'.$request->poster->getClientOriginalExtension());
        $edit->poster = Str::slug($title,'_').'.'.$request->poster->getClientOriginalExtension();
        $edit->title = $title;
        $edit->slug = $slug;
        $edit->save();
        $image_ids=[];
        if($request->has('images')){
          foreach ($images as $key => $image){
            $image->storeAs('public/albums/'.$edit->id,$key.'_'.$edit->poster); //save album photos in the created directory and save name in database
            $photo = new Photo;
            $photo->url = $key.'_'.$edit->poster;
            $photo->save();
            $image_ids[$key]  = $photo->id;
          }
        }

        $edit->photos()->attach($image_ids);
        $edit->tags()->sync($newTags);
        $edit->cats()->sync($newCats);
        $request->session()->flash('success', $edit->title.' has been Stored successfully!');
        return redirect()->route('album.index');
      } catch (\Exception $th) {
        $request->session()->flash('failed', 'Failed to Store ' . $th->getMessage());
        return redirect()->route('album.index');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($album)
    {
      //
      if(Auth::check()){
        $deleted = Album::findOrFail($album)->load('photos');
        try {
          //code...
          if(Storage::disk('local')->exists("public/posters\/".$deleted->poster)){
            Storage::disk('local')->delete("public/posters\/".$deleted->poster);
          }
          if(Storage::disk('local')->exists("public/albums/".$deleted->id)){
            Storage::disk('local')->deleteDirectory("public/albums\/".$deleted->id);
          }
          $deleted->photos()->detach();
          foreach ($deleted->photos as $key => $photo) {
            # code...
            $image = Photo::find($photo->id);
            $image->delete();
          }
          $deleted->delete();
          return response()->json([
            'status'  => 'success',
            'message' => $deleted->title.' has been Deleted ' ,

          ],200);
        } catch (\Exception $th) {
          return response()->json([
            'status'  => 'failed',
            'message' => $th->getMessage(),

          ]);
        }
      }

    }
}
