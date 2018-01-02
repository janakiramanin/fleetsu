<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getDevices(){
    	$users = DB::table('device')->selectRaw("device_id as 'id',label, last_reported as `reported`, IF(HOUR(TIMEDIFF(NOW(), last_reported))>23,'OFFLINE','OK') AS `status`")->get();
    	return response()->json($users);	
    }
}
