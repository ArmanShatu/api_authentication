<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //return view('home');

        try {

            // $request = Request::create('http://localhost:8000/api/user', 'GET');

            // // dd($request);
            // $response = Route::dispatch($request)->getContent();

            // $client = new Client([
            //     'headers'  => [
            //         'Authorization' => ''
            //     ]
            // ]);


            $client = new Client();
            $response = $client->get('https://jsonplaceholder.typicode.com/todos');
            //$response = Route::dispatch($response);
            // dd($response->getStatusCode());


            $user = $response->getBody();
            $user = json_decode($user);

            // dd($user);
            //dd(json_decode($response));
            return view('home')->with('data', $user);
        } catch (Exception $e) {
            dd($e->getCode());
        }
    }
}
