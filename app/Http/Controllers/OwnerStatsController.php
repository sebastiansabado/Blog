<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OwnerStats;


class OwnerStatsController extends Controller
{
    //
    public function index(OwnerStats $ownerstats)
    {


    	$records = OwnerStats::all();

    	return view('ownerStats.index' , compact('records'));

    }


}
