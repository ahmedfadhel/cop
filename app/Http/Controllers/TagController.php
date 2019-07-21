<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Tag;
use Session;
class TagController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth',['except' => ['alltags','tagvideos']]);
    }

    public function alltags()
    {
      $tags = Tag::all();
      return response()->json([
        'tags'    => $tags,
        'status'  => 'success'
      ]);
    }
    public function tagvideos($name)
    {
      $tag = Tag::where('name',$name)->first();
      $videos = $tag->videos()->with(['photos'])->get();
      return response()->json([
        'videos'  =>$videos,
        'tag'     => $tag,
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
      $tags = Tag::orderByDesc('updated_at')->get();
      return view('dashboard.tags.index')->withTags($tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //

      return view('dashboard.tags.create');

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
        'name'        => 'required|min:2|max:20|string|unique:tags',
        'description' => 'required|min:3|max:50|string'
      ]);

      if ($validator->fails()) {
        $request->session()->flash('errors', $validator->messages());
        return redirect()->route('tags.create');
      }

      $name = $request->input('name');
      $description = $request->input('description');
      try {
        //code...
        $tag = new Tag;
        $tag->name = $name;
        $tag->description = $description;
        $tag->save();
        $request->session()->flash('success', $tag->name.' has been created successfully!');
        return redirect()->route('tags.index');
      } catch (\Throwable $th) {
        //throw $th;
        return view('dashboard.tags.create')->withErrors($th->getMessage);
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

      $tag = Tag::findorFail($id);
      return view('dashboard.tags.edit')->withTag($tag);

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
      //
      $validator = Validator::make($request->all(), [
        'name'        => 'required|min:2|max:20|string|unique:tags,name,'.$id,
        'description' => 'required|min:3|max:50|string'
      ]);

      if ($validator->fails()) {
        $request->session()->flash('errors', $validator->messages());
        return redirect()->route('tags.edit',$id);
      }
      $name = $request->input('name');
      $description = $request->input('description');
      $tag = Tag::findOrFail($id);
      try {

        $tag->name = $name;
        $tag->description = $description;
        $tag->save();

      } catch (\Throwable $th) {
        $request->session()->flash('failed', 'Failed to updated ' . $th->getMessage());
        return redirect()->route('tags.index');
      }
      $request->session()->flash('success', $tag->name.' has been updated successfully!');
      return redirect()->route('tags.index');
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
      if (Auth::check()) {
        // The user is logged in...
        $tag = Tag::findOrFail($id);
        try {
          //code...
          $tag->delete();
          return response()->json([
            'status'  => 'success',
            'message' => $tag->name.' has been Deleted' ,

          ],200);
        } catch (\Throwable $th) {
          //throw $th;
          return response()->json([
            'status'  => 'failed',
            'message' => $th->getMessage() ,

          ]);
        }
      }
    }
}
