<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use App\EventSession;
use Illuminate\Support\Facades\Cache;

class DevicesController extends Controller
{
    //
	public function index(){
  
        $test  = "sdadavxvxd";
		$users = DB::table('ca_eb_cache_events')->get();
  
        return response()->json($users);
  
    }