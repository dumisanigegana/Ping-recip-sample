<div >
   <p class="text-2xl text-blue-500 py-4 font-bold text-center w-full">Click to ping the server </p>
   <div class="flex justify-center w-full mb-2">      
      <div class="form-check">
         <input class="form-check-input appearance-none h-8 w-24 border-2 border-green-300 rounded-lg bg-gray-100 checked:bg-red-400 checked:border-red-500 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"  value="1" wire:model="ping" wire:click="resetPingTimes()">         
       </div>
    @if($ping)
    <div wire:poll.1s="pingInit()"> </div>
    @endif
   </div>
      @if (count($pingTimes)>0)
      @foreach($pingTimes as $time)
   <div class="flex justify-center text-center p">
      <div class="inline-flex justify-center text-center">
         <span class=" mr-12">{{ $loop->iteration }} : </span>
         <span class="font-bold mr-2">{{ $time }}</span>
         <span> miliseconds</span>
      </div>
   </div>
      @endforeach
      @endif
</div>
