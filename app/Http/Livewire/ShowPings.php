<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;


class ShowPings extends Component
{
    public $pingTimes = array(), $clientIP, $ping;
    
   
    public function mount()
    {
      $this->clientIP = \Request::ip(); // Get client Ip address.
    }   
    

    public function pingInit()
    {   
      $exec_starttime = microtime(true); //Record the start time.
      exec("ping -c 1 $this->clientIP");   // : Ping the client IP once.
      $results = microtime(true) - $exec_starttime;  // Computes RTT.      
      array_push($this->pingTimes, round($results * 1000)); //Converts RTT an integer in ms.
    } 
     
     public function resetPingTimes()
    {   
      if($this->ping)
      {
        $this->pingTimes = array(); // Reset the RTTs.
      }
    }

    public function render()
    {
      return view('livewire.show-pings');
    }

}
