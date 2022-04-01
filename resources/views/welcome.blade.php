@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
   <div class="w-1/2 sm:px-6 lg:px-8">
       <div class="mt-8 bg-white dark:bg-gray-800 items-top shadow sm:rounded-lg w-full overflow-y-auto max-h-96">
         <livewire:show-pings />           
      </div>
   </div>
</div>
    @endsection
