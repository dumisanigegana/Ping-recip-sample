<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingController extends Controller
{
    function urlExists($url=NULL)  
    {  
        if($url == NULL) return false;  
        $ch = curl_init($url);  
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);  
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
        $data = curl_exec($ch);  
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);  
        curl_close($ch);  
        if($httpcode>=200 && $httpcode<300){  
            return true;  
        } else {  
            return false;  
        }  
    }  
    public function index() {
        // $url = \Request::ip(); 
        // $ch = curl_init($url);  
        // curl_setopt($ch, CURLOPT_TIMEOUT, 1);  
        // $data = curl_exec($ch);  
        // $time = curl_getinfo($ch, CURLINFO_TOTAL_TIME_T ); 
        // dd($time); 
        // curl_close($ch); 

        $ip =  \Request::ip();;
            
            $exec_starttime = microtime(true);
            exec("ping -n 1 $ip", $output, $status);
            //exec("ping -c 1 $ip", $output, $status);
            dd(round(1000 * (microtime(true) - $exec_starttime)));


        

    }
}
