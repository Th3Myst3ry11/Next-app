@extends('layouts.app')

@section('content')
<div class="bg-white p-6 flex flex-col items-center">
    <h1 class="text-3xl font-bold text-black mb-2">Sign up</h1>
    <h2 class="text-gray-600 mb-4">Home > myaccount</h2>
</div>
<section class="flex flex-col">
    <h1 style="margin-left:10%" class="text-3xl font-bold text-black mb-2 ">Create your account</h1>
    <div style="margin-left: 10%" class="flex items-center">
        <button type="button" class="py-3 px-16 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300">
            Sign up with google
        </button>
    </div>
    <h2  style="margin-left:10%" class="text-gray-600 mb-4">or</h2>
    <div style="margin-left:10%" class="max-w-lg mb-6">
        <label for="input-label-with-helper-text-1" class="block text-sm font-medium mb-2">Username</label>
        <input type="email" id="input-label-with-helper-text-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"  aria-describedby="hs-input-helper-text-1">
    </div>
    <div style="margin-left:10%" class="max-w-lg mb-6">
        <label for="input-label-with-helper-text-1" class="block text-sm font-medium mb-2">Email</label>
        <input type="email" id="input-label-with-helper-text-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"  aria-describedby="hs-input-helper-text-1">
    </div>
    <div style="margin-left:10%" class="max-w-lg mb-6">
        <label for="input-label-with-helper-text-2" class="block text-sm font-medium mb-2">Password</label>
        <input type="email" id="input-label-with-helper-text-2" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"  aria-describedby="hs-input-helper-text-2">
    </div>
    <div style="margin-left: 10%" class="flex items-center">
        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300">
            Sign up
          </button>
          <div style="margin-left: 1%" class="flex">
            <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
            <label for="hs-default-checkbox" class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Remember me</label>
          </div>
    </div>
    <a style="margin-left: 10%;margin-top:2%" href="{{ route('forgot') }}" class="text-sm font-semibold text-blue-600 underline hover:text-blue-800">
        Forgot password
    </a>
    <div style="margin-left: 10%;margin-top:2%" class="flex">
        <p class="text-sm text-gray-600">
            Already have an account?
        </p>
        <a style="margin-left: 2%;" href="{{ route('signing') }}" class="text-sm font-semibold text-blue-600 underline hover:text-blue-800">
            Sign in
        </a>
    </div>
   
</section>

@endsection