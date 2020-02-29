<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayersChristmas;
use App\House;
use App\Helper\Helper;

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
        return view('home');
    }

    public function getPlayers(Request $request)
    {
        if($request->ajax()) {
            $players = PlayersChristmas::NotHalloween()->get();

            return response()->json(['data' => $players]);
        }
    }

    public function getItems(Request $request)
    {
        if($request->ajax()){
            $items = House::all();

            $baseArray = [];

            $count = 0;
            foreach($items as $item) {
                $count++;
                $baseArray[] = Helper::numToRoman($count).". Item: ".$item->item.", Amount: ".$item->amount;
            }

            return response()->json(['data' => $baseArray]);
        }
    }
}
