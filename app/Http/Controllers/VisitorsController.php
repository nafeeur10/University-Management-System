<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Stevebauman\Location\Facades\Location;

;

class VisitorsController extends Controller
{

    public function visitorInfo() {
        $totalVisitors = DB::table('visitors_information')->distinct()->count('ip');
        $visitors = DB::table('visitors_information')->get();

        //dd($visitors);

        $activeVisitorCounter = 0;
        $currentTime = strtotime(date('Y-m-d H:i:s'));

        foreach ($visitors as $v) {
            $exitTime = strtotime($v->updated_at);
            if(abs(($exitTime-$currentTime)/60) <=2) {
                $activeVisitorCounter++;
            }
        }

        return response()->json([
            'totalVisitors' => $totalVisitors,
            'activeVisitors' => $activeVisitorCounter
        ]);
    }

    public function index()
    {
        $totalVisitors = DB::table('visitors_information')->distinct()->count('ip');
        $visitors = DB::table('visitors_information')->get();

        //dd($visitors);

        $activeVisitorCounter = 0;
        $currentTime = strtotime(date('Y-m-d H:i:s'));

        foreach ($visitors as $v) {
            $exitTime = strtotime($v->updated_at);
            if(abs(($exitTime-$currentTime)/60) <=2) {
                $activeVisitorCounter++;
            }
        }

        return view('admin.visitors.index', compact('totalVisitors', 'visitors', 'activeVisitorCounter'));
    }

    public function storeLeaveTime()
    {
        $time = date('Y-m-d H:i:s');
        $ip = Request::ip();
        $location_details = Location::get($ip);

        $lastip = DB::table('visitors_information')
                    ->where('ip', $ip)
                    ->latest()
                    ->first();
        
        DB::table('visitors_information')->where('id', $lastip->id)->update([
            'country' => $location_details->countryName,
            'state' => $location_details->cityName,
            'postCode' => $location_details->zipCode,
            'updated_at' => $time
        ]);
    }
}
