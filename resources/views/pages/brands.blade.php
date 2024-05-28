@extends('layouts.app')

@section('content')
<!-- Clients -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="sm:w-1/2 xl:w-1/3 mx-auto text-center mb-6 md:mb-12">
      <h2 class="text-xl font-semibold md:text-2xl md:leading-tight text-gray-800">Brands</h2>
    </div>
    <!-- End Title -->
  
    <!-- Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-3 lg:gap-6" >
      <div class="p-4 md:p-7 bg-white rounded-lg">
        <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800" src="{{ asset('storage/brands/panther.svg') }}" alt="Example SVG">
    </div>
  
      <div class="p-4 md:p-7 bg-white rounded-lg">
        <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto" src="{{ asset('storage/brands/power.svg') }}" alt="Example SVG">
    </div>
  
      <div class="p-4 md:p-7 bg-white rounded-lg">
        <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto" src="{{ asset('storage/brands/avicii.svg') }}" alt="Example SVG">
    </div>
  
      <div class="p-4 md:p-7 bg-white rounded-lg">
        <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto" src="{{ asset('storage/brands/dimmi.svg') }}" alt="Example SVG">
    </div>
  
      <div class="p-4 md:p-7 bg-white rounded-lg">
        <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto" src="{{ asset('storage/brands/dove.svg') }}" alt="Example SVG">
    </div>
  
      <div class="p-4 md:p-7 bg-white rounded-lg">
        <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto" src="{{ asset('storage/brands/triangle.svg') }}" alt="Example SVG">
     </div>
  
      <div class="p-4 md:p-7 bg-white rounded-lg">
        <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto" src="{{ asset('storage/brands/drip.svg') }}" alt="Example SVG">
    </div>
  
      <div class="p-4 md:p-7 bg-white rounded-lg">
        <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto" src="{{ asset('storage/brands/tulip.svg') }}" alt="Example SVG">
    </div>
  
      <div class="p-4 md:p-7 bg-white rounded-lg">
        <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto" src="{{ asset('storage/brands/oxxo.svg') }}" alt="Example SVG">
    </div>
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Clients -->
@endsection