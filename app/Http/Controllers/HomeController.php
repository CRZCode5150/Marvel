<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Auth::id();
        return view('home');
    }

    public function comics()
    {
        $curl = curl_init();

        $date = time();
        $pubkey = 'ac1460a853b140d3b2662d214b79565d';
        $privatekey = '05884e6cf99d7ccc8ad1d55cd4966e96acfec952';
        $hash = md5($date.$privatekey.$pubkey);

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://gateway.marvel.com/v1/public/comics?ts=$date&apikey=$pubkey&hash=$hash&format=comic&formatType=comic&characters=1009262&limit=3",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "Postman-Token: 0b997aae-1698-57fe-caa7-6f109444d6bf"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $comics = json_decode($response, TRUE);

        $data = [
            'comics' => $comics
        ];

        return view('home')->with($data);
    }

    public function getFavoritedComics()
    {
        $favoritedComics = Favorite::where('user_id', '=', Auth::id())->get();
        return $favoritedComics;
    }

    public function comicDetails($id)
    {
        $curl = curl_init();

        $date = time();
        $pubkey = 'ac1460a853b140d3b2662d214b79565d';
        $privatekey = '05884e6cf99d7ccc8ad1d55cd4966e96acfec952';
        $hash = md5($date.$privatekey.$pubkey);

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://gateway.marvel.com/v1/public/comics/$id?ts=$date&apikey=$pubkey&hash=$hash",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "Postman-Token: 0b997aae-1698-57fe-caa7-6f109444d6bf"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $comics1 = json_decode($response, TRUE);
        $data = [
            'comics1' => $comics1


        ];

        return view('comicdetails')->with($data);
    }

    public function saveFavorite(Request $request){
        // save that data to the favorites table
        $recordExists = Favorite::where('comic_id', '=', $request->id)->where('user_id','=',Auth::id())->first();

        if ($recordExists) {
            // delete
            $recordExists->delete();
        } else {
            // add
            $newFavorite = new Favorite;
            $newFavorite->comicsname = $request->name;
            $newFavorite->comic_id = $request->id;
            $newFavorite->user_id = Auth::id();
            $newFavorite->save();
        }

        return "Success";
    }

    public function viewFavorites(){
        $favorites = Favorite::where('user_id', '=', Auth::id())->get();


        $allFavorites = [];
        foreach($favorites as $fav) {
            $id = $fav->comic_id;
            $curl = curl_init();

            $date = time();
            $pubkey = 'ac1460a853b140d3b2662d214b79565d';
            $privatekey = '05884e6cf99d7ccc8ad1d55cd4966e96acfec952';
            $hash = md5($date.$privatekey.$pubkey);

            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://gateway.marvel.com/v1/public/comics/$id?ts=$date&apikey=$pubkey&hash=$hash",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Postman-Token: 0b997aae-1698-57fe-caa7-6f109444d6bf"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            $allFavorites[] = json_decode($response, TRUE);
        }

        // call the marvel api to get the data you need to view descriptions, and the image

        $data = [
            'allFavorites'=> $allFavorites
        ];
        return view('favorites')->with($data);
    }
}
