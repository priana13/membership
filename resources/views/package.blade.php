@extends('mbs::layouts.mbs_layout')

@section('content')

<div class="container bg-white shadow mx-auto p-3 h-64 text-center">
   <h2 class="text-xl font-bold">Package:  {{$package->name}}</h2> 

   <p class="my-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque omnis quo quibusdam quos, repellendus consequuntur rem odit enim explicabo natus. Enim quo odit esse aliquam, autem et placeat ad tempore?</p>

   <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 my-3">Berlangganan Sekarang</button>

</div>

@endsection