<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OwnerStats;
use Yajra\Datatables\Datatables;


class OwnerStatsController extends Controller
{
    //
    public function index(OwnerStats $ownerstats)
    {


    	$seasonYear = OwnerStats::select('season_id')->distinct()->get();

    	return view('ownerstats.index' , compact('seasonYear'));

    }

    public function show(Request $request)
    {

    		$seasonYear = $request->get('season_year');

    		$seasonStats = OwnerStats::where('season_id', $seasonYear)

    							->get();

    		return view('ownerstats.ajax', compact('seasonStats'));



    }


}
