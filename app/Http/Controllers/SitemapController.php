<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use App\Video;
use Storage;
class SitemapController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    // $this->middleware('auth');
    $this->middleware('auth');

  }
  public function generate()
  {
    $xml_def = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
    if(Storage::disk('sitemap')->exists('sitemap.xml')){
      Storage::disk('sitemap')->delete('sitemap.xml');
    }

    Storage::disk('sitemap')->prepend('sitemap.xml',$xml_def);
    $videos = Video::all()->load('photos','links','tags','cats');
    foreach ($videos as $key => $video) {
      Storage::disk('sitemap')->append('sitemap.xml','<url>');
      Storage::disk('sitemap')->append('sitemap.xml','<lastmod> http://pornezium.com/video/'.$video->updated_at->tz('UTC')->toAtomString().'</lastmod>');
      Storage::disk('sitemap')->append('sitemap.xml','<loc> http://pornezium.com/video/'.$video->slug.'</loc>');
      Storage::disk('sitemap')->append('sitemap.xml','<video:video>');
      Storage::disk('sitemap')->append('sitemap.xml',' <video:thumbnail_loc>'.$video->photos[0]->url.'</video:thumbnail_loc>');
      Storage::disk('sitemap')->append('sitemap.xml',' <video:title>'.$video->title.'</video:title>');
      Storage::disk('sitemap')->append('sitemap.xml',' <video:description>'.preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $video->description).'</video:description>');
      foreach ($video->links as $link) {
        Storage::disk('sitemap')->append('sitemap.xml',' <video:content_loc>'.$link->url.'</video:content_loc>');
      }
      Storage::disk('sitemap')->append('sitemap.xml',' <video:duration>'.$video->length.'</video:duration>');
      Storage::disk('sitemap')->append('sitemap.xml',' <video:rating>'.(4+lcg_value())*(abs(5-4)).'</video:rating>');
      Storage::disk('sitemap')->append('sitemap.xml',' <video:view_count>'.$video->views.'</video:view_count>');
      Storage::disk('sitemap')->append('sitemap.xml',' <video:publication_date>'.$video->created_at->tz('UTC')->toAtomString().'</video:publication_date>');
      Storage::disk('sitemap')->append('sitemap.xml',' <video:family_friendly>no</video:family_friendly>');
      Storage::disk('sitemap')->append('sitemap.xml',' <video:family_friendly>no</video:family_friendly>');
      Storage::disk('sitemap')->append('sitemap.xml',' <video:live>no</video:live>');
      foreach ($video->tags as $tag) {
        Storage::disk('sitemap')->append('sitemap.xml',' <video:tag>'.$tag->name.'</video:tag>');
      }
      foreach ($video->cats as $cat) {
        Storage::disk('sitemap')->append('sitemap.xml',' <video:tag>'.$cat->name.'</video:tag>');
      }
      // Storage::disk('sitemap')->append('sitemap.xml','<lastmod>'.$video->updated_at->tz('UTC')->toAtomString().'</lastmod>');
      Storage::disk('sitemap')->append('sitemap.xml','</video:video>');

      Storage::disk('sitemap')->append('sitemap.xml','</url>');
    }
    Storage::disk('sitemap')->append('sitemap.xml','</urlset>');
    return redirect()->route('stats');
  }
}
