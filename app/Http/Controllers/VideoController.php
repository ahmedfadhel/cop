<?php

namespace App\Http\Controllers;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use App\Video;
use App\Tag;
use App\Category;
use App\Link;
use App\Star;
use App\Part;
use App\Photo;

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    // $this->middleware('auth');
    $this->middleware('auth', ['except' => ['best', 'videos','getvideo','getrelated']]);

  }

  /**
   * Display a Best Videos  resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function best()
    {
      //Get 10 Random High Views Videos
      $best= Video::with('photos')->inRandomOrder()->where('views','>',1000)->take(4)->get();
      return response()->json([
          'best'      => $best,
          'Status'    => 'Success'
      ],200);
    }
    public function videos()
    {
      //Get 10 Random High Views Videos
      $videos = Video::orderBy('updated_at','DESC')->with('photos')->paginate(12);
      return response()->json([
        'videos'    => $videos,
        'Status'    => 'Success',
      ],200);
    }

    public function getvideo($id){
      // return $id;

      $video = Video::find($id)->load('photos','links','tags','cats','stars');
      // dd($video);
      return response()->json([
        'video'=>$video,

      ],200);
    }
    public function getrelated($tag){
      $videos = Video::with(['photos','tags'])->get()->filter(function($video) use ($tag){
        if(!is_null($video->tags()->where('name',$tag)->first())){
          return $video;
        }
      });

      if($videos){
        return response()->json([
          'status' =>'success',
          'videos'=>$videos,

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
      $videos = Video::all()->load('photos','links','tags','cats','stars');
      return view('dashboard.videos.index')->withVideos($videos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tag::all('id as value','name as text');
        $cats = Category::all('id as value','name as text');
        $stars = Star::all('id as value','name as text')->load('photos');
        $videos = Video::all('id as value','title as text');
        return view('dashboard.videos.create')->withTags($tags)->withCats($cats)->withStars($stars)->withVideos($videos);
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
        'title'                                 => 'required|min:20|max:100|string|unique:videos',
        'description'                           => 'required|min:10|string',
        'tags'                                  => 'required|array',
        'cats'                                  => 'required|array',
        'image'                                 => 'required|active_url',
        'servers["openload]"'                   => 'active_url|nullable',
        'servers["ks"]'                         => 'active_url|nullable',
        'servers["verystream"]'                 => 'active_url|nullable',
        'length'                                => 'required|string',
      ]);
      // Check Validation
      if ($validator->fails()) {

        $request->session()->flash('errors', $validator->messages());
        return redirect()->route('videos.create');
      }
      // Get paraments
      $title = $request->input('title');
      $description = $request->input('description');
      $length = $request->input('length');
      $tags = $request->input('tags');
      $cats = $request->input('cats');
      $stars = $request->input('stars');
      $image = $request->input('image');
      $newTags = explode(',', $tags[0]);
      $newCats = explode(',', $cats[0]);
      $newStars = explode(',', $stars[0]);

      // Create the video


      try {
        //Initiate New Video
        $video = new Video;
        $video->title = $title;
        $video->description = $description;
        $video->length = $length;
        $video->views = random_int ( 1000 , 5000 );
        // Save the New Video
        $video->save();
      } catch (\Exception $th) {
        //throw $th;
        $request->session()->flash('failed', 'Failed to Store ' . $th->getMessage());
        return redirect()->route('videos.index');
      }


      try {
        //code...

        foreach($request->servers as $key => $value){
          $link = new Link;
          $link->server_name = $key;
          $link->url = $value;
          $link->video_id = $video->id;
          $link->save();
        }
      } catch (\Exception $th) {
        $request->session()->flash('failed', 'Failed to Store ' . $th->getMessage());
        return redirect()->route('videos.index');
      }

      // create Video photo
      try {
        $photo = new Photo;
        $photo->url = $image;
        $photo->save();
      } catch (\Exception $th) {
        $request->session()->flash('failed', 'Failed to Store ' . $th->getMessage());
        return redirect()->route('videos.index');
      }
      // cretae video relationships with Tags Categories and Stars
      try {
        //code...
        $video->tags()->attach($newTags);
        $video->cats()->attach($newCats);
        $video->stars()->attach($newStars);
        $video->photos()->attach($photo->id);
        $request->session()->flash('success', $video->title.' has been Stored successfully!');
        return redirect()->route('videos.index');
      } catch (\Throwable $th) {
        //throw $th;
        $request->session()->flash('failed', 'Failed to Store ' . $th->getMessage());
        return redirect()->route('videos.index');
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
      //
      $tags = Tag::all('id as value','name as text');
      $cats = Category::all('id as value','name as text');
      $stars = Star::all('id as value','name as text')->load('photos');
      // $video = Video::findOrFail($id)->load('tags','photos','links','cats');
      $video = Video::where('id',$id)->with([
        'tags'=>function($q){
          $q->select('id as value','name as text');
        },
        'cats'=>function($q){
          $q->select('id as value','name as text');
        },
        'stars'=>function($q){
          $q->select('id as value','name as text');
        },
        'links',
        'photos'
      ])->get();
      return view('dashboard.videos.edit')->withVideo($video)->withTags($tags)->withCats($cats)->withStars($stars);
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

      // Validation Rule Section
      $validator = Validator::make($request->all(), [
        'title'                                 => 'required|min:20|max:100|string|unique:videos,title,'.$id,
        'description'                           => 'required|min:10|string',
        'tags'                                  => 'required|array',
        'cats'                                  => 'required|array',
        'image'                                 => 'required|active_url',
        'servers["vidlox"]'                     => 'active_url|nullable',
        'servers["openload"]'                   => 'active_url||nullable',
        'servers["verystream"]'                 => 'active_url|nullable',
        'length'                                => 'required|string',
      ]);
      // Check Validation
      if ($validator->fails()) {
        $request->session()->flash('errors', $validator->messages());
        return redirect()->route('videos.edit',$id);
      }
      // Get paraments
      $title = $request->input('title');
      $description = $request->input('description');
      $length = $request->input('length');
      $tags = $request->input('tags');
      $cats = $request->input('cats');
      $stars = $request->input('stars');
      $image = $request->input('image');
      $newTags = explode(',', $tags[0]);
      $newCats = explode(',', $cats[0]);
      $newStars = explode(',', $stars[0]);
      // Update the video
      $video = Video::findOrFail($id)->load('photos','links');
      try {
        //Update Video Main Info
        $video->title = $title;
        $video->description = $description;
        $video->length = $length;
        $video->views = random_int ( 1000 , 5000 );
        // Update Video Photo
        $video->photos()->whereId($video->photos[0]->id)->update([
          'url' => $image
        ]);

        foreach ($request->servers as $key => $value) {
          // Update Video Links
          if(is_null($video->links()->where('server_name',$key)->first()) && !is_null($value)){
            $newLink = new Link;
            $newLink->server_name = $key;
            $newLink->url = $value;
            $newLink->video_id = $video->id;
            $newLink->save();
          }
          if(is_null($value)){
            $video->links()->where('server_name',$key)->delete();
          }
          $video->links()->where('server_name',$key)->update([
            'url' => $value
          ]);
        }
        // Save the Video New Photos
        $video->save();
        // Update new Tags Categories & Stars
        $video->tags()->sync($newTags);
        $video->cats()->sync($newCats);
        $video->stars()->sync($newStars);
        $request->session()->flash('success', $video->title . ' has been Updated Successfully!');
        return redirect()->route('videos.index');
      } catch (\Exception $th) {

        $request->session()->flash('failed', 'Failed to updated ' . $th->getMessage());
        return redirect()->route('videos.index');
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
      if (Auth::check()) { //Check if User is Authenticated

        // Find the Video one
        $video = Video::findOrFail($id);
        try {
          //Delete the Video
          $video->delete();
          return response()->json([
                'status'  => 'success',
                'message' => $video->title.' has been Deleted ' ,

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
