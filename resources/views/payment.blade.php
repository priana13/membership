@extends('mbs::layouts.mbs_layout')

@section('content')



<form class="bg-white shadow mx-auto w-1/2 py-5" method="post" action="{{route('mbs.checkout.store')}}"

  x-data="{
   qty:{{ $transaction->qty }},
   tanggal : '',
   price: {{ $transaction->total_price }},
  
  }"

  x-init="hitungBulan()"

>

   <div class="text-center">
      <h2 class="text-2xl uppercase">Payment</h2>
   </div>

   <div class="p-6">
       

     


         <div class="p-3 card border-2 rounded">

            <div class="flex justify-between">
               <h2 class="text-xl">Akses {{$transaction->package->name}} untuk 3 Bulan</h2> 
               <svg class="w-[18px] h-[18px] fill-[#f0bb28]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">

                  <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"></path>
               
               </svg>
            </div>
         
            <div class="flex justify-between">


               <p class="flex items-center">                 
                  <span class="ms-1">Nominal</span>                  
               </p>

               <h2 class="text-xl" x-text="price.toLocaleString('id-ID')"></h2> 


            </div>

           

         </div>

         

         <div class="formulir my-6">

         

            <h2 class="text-xl my-2">Lakukan pembayaran ke rekening berikut:</h2>

            <p>Rekening: Bank Syariah Indonesia </p>
            <p>No Rek: 08554444</p>
            <p>atas nama Bisi Online</p>
            
            
         </div>

       
         <div class="mt-12">
            <button type="submit" class="block w-full rounded bg-blue-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-blue-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0 flex justify-center items-center">
               Konfirmasi Pembayaran              
            </button>

            <a href="/" class="block w-full rounded bg-gray-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-gray-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-gray-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-gray-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0 flex justify-center items-center mt-3">
              Kembali ke Halaman Depan          
            </a>
      
         </div>


   </div>





</form>



@endsection