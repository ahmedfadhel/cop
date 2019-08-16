<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use App\Video;
use App\Album;
use Storage;
use Carbon;
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
    $xml_def = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
    if(Storage::disk('sitemap')->exists('sitemap_videos.xml')){
      Storage::disk('sitemap')->delete('sitemap_videos.xml');
    }

    Storage::disk('sitemap')->prepend('sitemap_videos.xml',$xml_def);
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
      Storage::disk('sitemap')->append('sitemap_videos.xml',$prevideo);
      foreach ($video->tags as $tag) {
        $tags = $tags .' <video:tag>'.$tag->name.'</video:tag>';
      }
      Storage::disk('sitemap')->append('sitemap_videos.xml',$tags);
      foreach ($video->cats as $cat) {
        $cats = $cats. '<video:category>'.$cat->name.'</video:category>';
      }
      Storage::disk('sitemap')->append('sitemap_videos.xml',$cats);
      Storage::disk('sitemap')->append('sitemap_videos.xml','</video:video>'.'</url>');

      // Storage::disk('sitemap')->append('sitemap_videos.xml','</url>');

    }
    Storage::disk('sitemap')->append('sitemap_videos.xml','</urlset>');
    return redirect()->route('stats');
  }
  public function images()
  {
    $albums = Album::all()->load('photos');
    $image_xml_def = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';
    if(Storage::disk('sitemap')->exists('sitemap_images.xml')){
      Storage::disk('sitemap')->delete('sitemap_images.xml');
    }
    Storage::disk('sitemap')->prepend('sitemap_images.xml',$image_xml_def);
    foreach ($albums as $key => $album) {
      # code...
      $pre_image = '';
      $images='';
      $pre_image = $pre_image .'<url>'.'<loc>http://pornezium.com/ablums/'.$album->slug.'</loc><image:image><image:loc>http://pornezium.com/storage/posters/'.$album->poster.'</image:loc></image:image>';

      if(!empty($album->photos)){
        foreach ($album->photos as $key => $photo) {
          $images = $images.'<image:image><image:loc>http://pornezium.com/storage/albums/'.$album->id.'/'.$photo->url.'</image:loc></image:image>';
        }
      }

      $pre_image = $pre_image.$images;
      $pre_image = $pre_image.'</url>';
      Storage::disk('sitemap')->append('sitemap_images.xml',$pre_image);
    }
    Storage::disk('sitemap')->append('sitemap_images.xml','</urlset>');
    return redirect()->route('stats');

  }
  public function all()
  {
    $index_def  = '<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    $video      = '<sitemap><loc>http://pornezium.com/sitemap_videos.xml</loc><lastmod>'.\Carbon\Carbon::now()->tz('UTC')->toAtomString().'</lastmod></sitemap>';
    $images     = '<sitemap><loc>http://pornezium.com/sitemap_images.xml</loc><lastmod>'.\Carbon\Carbon::now()->tz('UTC')->toAtomString().'</lastmod></sitemap></sitemapindex>';
    if(Storage::disk('sitemap')->exists('sitemap.xml')){
      Storage::disk('sitemap')->delete('sitemap.xml');
    }
    Storage::disk('sitemap')->append('sitemap.xml',$index_def.$video.$images);
    return redirect()->route('stats');
  }
}
