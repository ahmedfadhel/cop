<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class DownloadController extends Controller
{
    //

    public function prepare($file)
    {
      # code...
      $client = new Client();
      if($file){
        $response = $client->request('GET','https://api.verystream.com/file/dlticket?file='.$file);

        if($response->getStatusCode() === 200){
          return response()->json([
            'res' => json_decode($response->getBody()->getContents())
          ]);
        }
      }
    }
    public function download(Request $request)
    {
      // Create new Guzzle instance
      $client = new Client();
      //Get the download link that contain valid ticket
      $download = $request->input('link');
      // Make Get Request to generate download link
      $response   = $client->request('GET', base64_decode($request->input('link')));
      // if the response success send the result
      if($response->getStatusCode() === 200){
      return response()->json([
          'res'=>json_decode($response->getBody()->getContents())
      ]);
      }else{
        return response()->json([
          'failed'  => json_decode($response->getBody()->getContents())
        ]);
      }
    }
}
