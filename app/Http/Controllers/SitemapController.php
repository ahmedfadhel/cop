<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use App\Video;
use App\Album;
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
      $prevideo = '';
      $tags ='';
      $cats = '';
      $links='';
      $parsed = date_parse($video->length);
      $duration = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
      $prevideo = $prevideo.'<url>'.'<lastmod>'.$video->updated_at->tz('UTC')->toAtomString().'</lastmod>'.'<loc> http://pornezium.com/videos/'.$video->slug.'</loc>'.'<video:video>'.'<video:thumbnail_loc>http://pornezium.com/storage/videos/'.$video->photos[0]->url.'</video:thumbnail_loc>'.'<video:title>'.preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $video->title).'</video:title>'.'<video:description>'.preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $video->description).'</video:description>'.'<video:duration>'.$duration.'</video:duration>'.'<video:rating>'.(4+lcg_value())*(abs(5-4)).'</video:rating>'.'<video:view_count>'.$video->views.'</video:view_count>'.'<video:publication_date>'.$video->created_at->tz('UTC')->toAtomString().'</video:publication_date>'.'<video:family_friendly>no</video:family_friendly>'.'<video:live>no</video:live>';
      foreach ($video->links as $link) {
        $links = $links.'<video:content_loc>'.$link->url.'</video:content_loc>';
      }
      // For Future Cause the Server hang when try to add tags and categories
      Storage::disk('sitemap')->append('sitemap.xml',$prevideo);
      foreach ($video->tags as $tag) {
        $tags = $tags .' <video:tag>'.$tag->name.'</video:tag>';
      }
      Storage::disk('sitemap')->append('sitemap.xml',$tags);
      foreach ($video->cats as $cat) {
        $cats = $cats. '<video:category>'.$cat->name.'</video:category>';
      }
      Storage::disk('sitemap')->append('sitemap.xml',$cats);
      Storage::disk('sitemap')->append('sitemap.xml','</video:video>'.'</url>');

      // Storage::disk('sitemap')->append('sitemap.xml','</url>');

    }
    Storage::disk('sitemap')->append('sitemap.xml','</urlset>');
    return redirect()->route('stats');
  }
  public function images()
  {
    // $albums = Album::all()->load('photos');
    // $image_xml_def = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';
    // if(Storage::disk('sitemap')->exists('sitemap_albums.xml')){
    //   Storage::disk('sitemap')->delete('sitemap_albums.xml');
    // }
    // foreach ($albums as $key => $album) {
    //   # code...
    //   $pre_image = '';

    //   $pre_image = $pre_image .'<url>'.'<loc>http://pornezium.com/ablums/'.$album->$slug.'</loc>
    // }
  }
}
