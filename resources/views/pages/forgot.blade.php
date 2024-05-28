@extends('layouts.app')

@section('content')

<div class="bg-white p-6 flex flex-col items-center">
    <h1 class="text-3xl font-bold text-black mb-2">Forgot</h1>
    <h2 class="text-gray-600 mb-4">Home > myaccount</h2>
</div>
<section class="flex flex-col">
    <div style="margin-left:10%" class="max-w-lg mb-6">
        <label style="margin-bottom:4%" for="input-label-with-helper-text-1" class="block text-sm font-medium mb-2">Forgot your password? Please enter your username or email address. You will receive a link to create a new password via email.</label>
        <label for="input-label-with-helper-text-1" class="block text-sm font-medium mb-2"> Username or email address.</label>
        <input type="email" id="input-label-with-helper-text-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"  aria-describedby="hs-input-helper-text-1">
    </div>
    <div style="margin-left: 10%" class="flex items-center">
        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300">
            Reset password
          </button>
    </div> 
</section>

@endsection