<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OwnerStats;


class OwnerStatsController extends Controller
{
    //
    public function index(OwnerStats $ownerstats)
    {


    	$seasonYear = OwnerStats::select('season_id')->distinct()->get();

    	return view('ownerStats.index' , compact('seasonYear'));

    }

    public function getSeasonStats(Request $request)
    {

    	$seasonYear = $request->get('season_id');

    	$seasonStats = OwnerStats::where('season_id', $seasonYear)
    					->get();

    	return response()->json(['response' => '$seasonStats']);


    }


}
