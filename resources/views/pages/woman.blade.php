@extends('layouts.app')

@section('content')
<div class="bg-white p-6 flex flex-col items-center">
    <h1 class="text-3xl font-bold text-black mb-2">Woman</h1>
    <h2 class="text-gray-600 mb-4">Home > Woman</h2>
</div>

  

  <section class="flex justify-between">
  <!-- Sidebar -->
  <div id="application-sidebar" class=" [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    w-[260px]
    hidden
     inset-y-0 start-0 z-[60]
    bg-white border-e border-gray-200
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
   
   ">
  
    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
      <ul class="space-y-1.5">
  
        <li class="hs-accordion" id="account-accordion">
          <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100">
              Man
  
            <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
  
            <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          </button>
  
          <div id="account-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
            <ul class="pt-2 ps-2">
              <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                  Acessories
                </a>
              </li>
              <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                  Cardigans
                </a>
              </li>
              <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                  Jackets and coats
                </a>
              </li>
              <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                  Shirts
                </a>
              </li>
              <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                  Shorts
                </a>
              </li>
              <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                  Suits
                </a>
              </li>
              <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                  Trousers
                </a>
              </li>
            </ul>
          </div>
        </li>
  
        <li class="hs-accordion" id="projects-accordion">
          <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100">
            Woman
  
            <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
  
            <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          </button>
  
          <div id="projects-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
            <ul class="pt-2 ps-2">
                <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                      Acessories
                    </a>
                  </li>
                  <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                      Cardigans
                    </a>
                  </li>
                  <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                      Jackets and coats
                    </a>
                  </li>
                  <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                      Shirts
                    </a>
                  </li>
                  <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                      Shorts
                    </a>
                  </li>
                  <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                      Suits
                    </a>
                  </li>
                  <li>
                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100" href="#">
                      Trousers
                    </a>
                  </li>
            </ul>
          </div>
        </li>
  
        <!--ranger filter by price-->
        <li>
            <h1 for="basic-range-slider-usage" >Filter by price</h1>
            <input type="range" class="w-full bg-transparent cursor-pointer appearance-none disabled:opacity-50 disabled:pointer-events-none focus:outline-none
            [&::-webkit-slider-thumb]:w-2.5
            [&::-webkit-slider-thumb]:h-2.5
            [&::-webkit-slider-thumb]:-mt-0.5
            [&::-webkit-slider-thumb]:appearance-none
            [&::-webkit-slider-thumb]:bg-white
            [&::-webkit-slider-thumb]:shadow-[0_0_0_4px_rgba(37,99,235,1)]
            [&::-webkit-slider-thumb]:rounded-full
            [&::-webkit-slider-thumb]:transition-all
            [&::-webkit-slider-thumb]:duration-150
            [&::-webkit-slider-thumb]:ease-in-out
            [&::-webkit-slider-thumb]:dark:bg-neutral-700

            [&::-moz-range-thumb]:w-2.5
            [&::-moz-range-thumb]:h-2.5
            [&::-moz-range-thumb]:appearance-none
            [&::-moz-range-thumb]:bg-white
            [&::-moz-range-thumb]:border-4
            [&::-moz-range-thumb]:border-blue-600
            [&::-moz-range-thumb]:rounded-full
            [&::-moz-range-thumb]:transition-all
            [&::-moz-range-thumb]:duration-150
            [&::-moz-range-thumb]:ease-in-out

            [&::-webkit-slider-runnable-track]:w-full
            [&::-webkit-slider-runnable-track]:h-2
            [&::-webkit-slider-runnable-track]:bg-gray-100
            [&::-webkit-slider-runnable-track]:rounded-full
            [&::-webkit-slider-runnable-track]:dark:bg-neutral-700

            [&::-moz-range-track]:w-full
            [&::-moz-range-track]:h-2
            [&::-moz-range-track]:bg-gray-100
            [&::-moz-range-track]:rounded-full" id="basic-range-slider-usage">
        </li>
        <!--button filter by price-->
        <li style="margin-bottom: 20%">
            <button class="inline-flex items-center justify-center px-2 py-1 text-sm font-bold bg-gray-800 text-white hover:bg-gray-900  text-gray-800 border-2 border-gray-800 rounded-lg">
                Filter
              </button> 
              <span style="margin-left: 4%" class="text-gray-400">price:</span>
              <span>$0 - $40</span>
        </li>
        <!--buttons sizes-->
        <h1>sizes</h1>
        <li>
            <button class="inline-flex items-center justify-center px-2 py-1 hover:bg-gray-200 text-sm font-bold text-gray-800 border-2 border-gray-800 rounded-lg">
                S
              </button>
            <button class="hover:bg-gray-200 inline-flex items-center justify-center px-2 py-1 text-sm font-bold text-gray-800 border-2 border-gray-800 rounded-lg">
                M
              </button>
            <button class="hover:bg-gray-200 inline-flex items-center justify-center px-2 py-1 text-sm font-bold text-gray-800 border-2 border-gray-800 rounded-lg">
                L
              </button>
            <button class="hover:bg-gray-200 inline-flex items-center justify-center px-2 py-1 text-sm font-bold text-gray-800 border-2 border-gray-800 rounded-lg">
                XL
              </button>
            <button class="hover:bg-gray-200 inline-flex items-center justify-center px-2 py-1 text-sm font-bold text-gray-800 border-2 border-gray-800 rounded-lg">
                 XXL
          </button>
        </li>
        <!--buttons colors-->
        <li class="flex justify-around">
            <div class="bg-red-500 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-orange-500 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-yellow-500 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-green-500 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-cyan-500 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-blue-800 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
        </li>
        <li class="flex justify-around">
            <div class="bg-violet-500 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-pink-500 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-white border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-gray-500 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-brown-500 border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
            <div class="bg-black border-2 border-black rounded-full" style="width: 23px; height: 23px;"></div>
        </li>
        <!--Fabric-->
        <h1>Fabric</h1>
        <li class="flex justify-around"> 
            <div class="w-12 h-12 border border-gray-700 rounded-lg overflow-hidden hover:shadow-md">
                <img src="{{ asset('storage/Fabric-1.jpg') }}" alt="Image" class="w-full h-full object-cover" />
            </div>
            <div class="w-12 h-12 border border-gray-700 rounded-lg overflow-hidden hover:shadow-md">
                <img src="{{ asset('storage/Fabric-2.jpg') }}" alt="Image" class="w-full h-full object-cover" />
            </div>
            <div class="w-12 h-12 border border-gray-700 rounded-lg overflow-hidden hover:shadow-md">
                <img src="{{ asset('storage/Fabric-3.jpg') }}" alt="Image" class="w-full h-full object-cover" />
            </div>
            
            
        </li>
        <!--buttons brands-->
        <h1>Brands</h1>
        <li class="flex flex-col">
            <li class="flex justify-around">
                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Panther
                </button>
                
                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Power
                </button>
                
                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Avicii
                </button>
            </li>
            <li class="flex justify-around">
                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Dimmi
                </button>
                
                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Dove
                </button>
                
                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Triangle
                </button>
            </li>
            <li class="flex justify-around">
                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Drip
                </button>
                
                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Tulip
                </button>
                
                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    oxxo
                </button>
            </li>
        </li>
      </ul>
    </nav>
  </div>
  <!-- End Sidebar -->

  <!-- End Content -->
  <!-- ========== END MAIN CONTENT ========== -->
  <div class="bg-white">
    <div class="flex flex-col items-center mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-page/kimono.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Asian kimono
                </a>
              </h3>
              <span class="line-through text-gray-500">$80</span>
              <span class="mt-1">$55</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-page/camel-trousers.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Camel trousers
                </a>
              </h3>
              <span class="line-through text-gray-500">$18</span>
              <span class="mt-1">$9</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-page/cardigan-coat.jpg') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Cardigan Coat
                </a>
              </h3>
              <span class="line-through text-gray-500"></span>
              <span class="mt-1">$12</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <!-- More products... -->
      </div>
      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-page/elegant-outfit.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Elegant outfit
                </a>
              </h3>
              <span class="line-through text-gray-500">$15</span>
              <span class="mt-1">$6</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-page/floral-jacket.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Floral Jacket
                </a>
              </h3>
              <span class="line-through text-gray-500">$20</span>
              <span class="mt-1">$15</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-suit.jpg') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Leather jacket
                </a>
              </h3>
              <span class="line-through text-gray-500">$35</span>
              <span class="mt-1">$32</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>

        <!-- More products... -->
      </div>
      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-page/long-skirt.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Long skirt
                </a>
              </h3>
              <span class="line-through text-gray-500"></span>
              <span class="mt-1">$11</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-page/party-dress.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Party dress
                </a>
              </h3>
              <span class="line-through text-gray-500">$25</span>
              <span class="mt-1">$12</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/party-dress.jpg') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Party dress
                </a>
              </h3>
              <span class="line-through text-gray-500"></span>
              <span class="mt-1">$12</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <!-- More products... -->
      </div>
      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-trousers.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  formal trousers
                </a>
              </h3>
              <span class="line-through text-gray-500">$25</span>
              <span class="mt-1">$18</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/straight-trousers.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Straight trousers
                </a>
              </h3>
              <span class="line-through text-gray-500">$10</span>
              <span class="mt-1">$8</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="{{ asset('storage/woman-page/leather-jacket.jpg') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  leather jacket
                </a>
              </h3>
              <span class="line-through text-gray-500">$28</span>
              <span class="mt-1">$21</span>
            </div>
            <p class="text-sm font-medium text-gray-900"></p>
          </div>
        </div>
        <!-- More products... -->
      </div>
    </div>
  </div>
  </section>
@endsection