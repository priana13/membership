@extends('mbs::layouts.mbs_layout')

@section('content')

<form class="bg-white shadow mx-auto w-1/2" method="post" action="{{route('mbs.checkout.store')}}">

   @csrf 

   <div class="p-6">

         <div class="my-3">
            <h2 class="text-xl">Checkout</h2>
         </div>

         <div class="p-3 card border-2 rounded">

            <div class="flex justify-between">
               <h2 class="text-xl">Akses {{$package->name}}</h2> 
               <svg class="w-[18px] h-[18px] fill-[#f0bb28]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">

                  <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"></path>
               
               </svg>
            </div>
         

            <p class="flex items-center">
               <span>
                  <svg class="w-[15px] h-[15px] fill-[#07d50a]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                     <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                     <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                  
                  </svg>
               </span>
               <span class="ms-1">Active | 26 Januari 2025</span>
               
            </p>

         </div>

         

         <div class="formulir my-6">

              <!-- Text input -->
              <div class="mb-4 w-full">
               <label for="7b717cea-8975-473a-96b4-daed1cc60022"></label>
               <input placeholder="Nama" name="name" type="text" id="7b717cea-8975-473a-96b4-daed1cc60022" class="w-full block rounded-lg border dark:border-none dark:bg-neutral-600 py-[9px] px-3 pr-4 text-sm focus:border-blue-400 focus:ring-1 focus:ring-blue-400 focus:outline-none" />
            </div>

              <!-- Text input -->
            <div class="mb-4 w-full">
               <label for="1de88174-4b10-4159-918b-9aa637e009c9"></label>
               <input placeholder="No Hp" name="phone_number" type="text" id="1de88174-4b10-4159-918b-9aa637e009c9" class="w-full block rounded-lg border dark:border-none dark:bg-neutral-600 py-[9px] px-3 pr-4 text-sm focus:border-blue-400 focus:ring-1 focus:ring-blue-400 focus:outline-none" />
            </div>

            <!-- Email input -->
            <div class="mb-4 w-full">
               <label for="d013e3ab-dde1-49e3-98d7-8293ebe68163"></label>
               <input placeholder="Alamat Email" name="email" type="email" id="d013e3ab-dde1-49e3-98d7-8293ebe68163" class="w-full block rounded-lg border dark:border-none dark:bg-neutral-600 py-[9px] px-3 pr-4 text-sm focus:border-blue-400 focus:ring-1 focus:ring-blue-400 focus:outline-none" />
            </div>
            
            
         </div>


         <p class="my-3">
            Klik tombol berikut untuk melanjutkan
         </p>


   </div>

   <div>
      <button type="submit" class="block w-full rounded bg-blue-500 text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-blue-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0 flex justify-center items-center">
         Lanjutkan Pembayaran
         <svg class="w-[15px] h-[15px] fill-[#f6f2ea] ms-2" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"></path>
          
          </svg>
      </button>

   </div>



</form>



@endsection