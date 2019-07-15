<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Star;
use App\Tag;
use App\Category;
class StatsController extends Controller
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

    //
    public function index()
    {
      //get last videos
      $videos = Video::orderBy('id','desc')->with(['photos'])->take(5)->get();
      $stars = Star::orderBy('id','desc')->with(['photos'])->take(5)->get();
      $totalVideos = Video::all()->count();
      $totalStars= Star::all()->count();
      $totalTags = Tag::all()->count();
      $totalCats = Category::all()->count();
      // dd($totalS);
      return view('dashboard.stats.index')
              ->withTotalVideos($totalVideos)
              ->withTotalStars($totalStars)
              ->withTotalTags($totalTags)
              ->withTotalCats($totalCats)
              ->withVideos($videos)
              ->withStars($stars);
    }
}
