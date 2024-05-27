@extends('layouts.app')

@section('content')
<!-- Slider -->
<div class="">
    <div data-hs-carousel='{
        "loadingClasses": "opacity-0"
      }' class="relative">
      <div class="hs-carousel relative overflow-hidden w-full h-[30rem] md:h-[calc(100vh-106px)]  bg-gray-100 rounded-2xl">
        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
          <!-- Item -->
          <div class="hs-carousel-slide">
            <div class="h-[30rem] md:h-[calc(100vh-106px)] flex flex-col items-center bg-[url('https://images.unsplash.com/photo-1528291954423-c0c71c12baeb?q=80&w=3426&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center bg-no-repeat">
              <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                 <div class="mt-5 flex justify-between">
                  <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-transparent text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    For Man
                  </a>
                  <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-transparent text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    For Woman
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider -->
 <!-- <div class="flex">
      <img class="h-auto max-w-[50%] rounded-lg" src="{{ asset('storage/second-woman.jpg') }}" alt="image description">
    <img class="h-auto max-w-[50%] rounded-lg" src="{{ asset('storage/second-man.jpg') }}" alt="image description">
</div> -->
<!-- Card -->
<div class="flex">
  <a class="group block w-1/2" href="#">
    <div class="relative aspect-w-16 aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl dark:bg-neutral-800">
        <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl w-full h-full" src="{{ asset('storage/first-man-small.jpg') }}" alt="Image Description">
        <span class="absolute bottom-4 left-4 py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
            For man
        </span>
    </div>
  </a>

  <a class="group block w-1/2" href="#">
    <div class="relative aspect-w-16 aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl dark:bg-neutral-800">
        <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl w-full h-full" src="{{ asset('storage/first-woman-small.jpg') }}" alt="Image Description">
        <span class="absolute bottom-4 left-4 py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
            For Woman
        </span>
    </div>
  </a>
</div>
<!-- End Card -->
<!--circle sections-->
<section class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="text-center space-y-8">
    <div class="mb-8">
        <h2 class="text-2xl font-semibold">Browse 5000+ products</h2>
        <h3 class="text-lg text-gray-500">shirts, dresses, trousers, shoes and more...</h3>
    </div>
    <div class="flex justify-center space-x-8">
        <div class="flex flex-col items-center">
            <div class="flex items-center justify-center w-32 h-32 bg-white rounded-full">
              <svg class="w-16 h-16 text-black" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 7L6 4H9C9 4.39397 9.0776 4.78407 9.22836 5.14805C9.37913 5.51203 9.6001 5.84274 9.87868 6.12132C10.1573 6.3999 10.488 6.62087 10.8519 6.77164C11.2159 6.9224 11.606 7 12 7C12.394 7 12.7841 6.9224 13.1481 6.77164C13.512 6.62087 13.8427 6.3999 14.1213 6.12132C14.3999 5.84274 14.6209 5.51203 14.7716 5.14805C14.9224 4.78407 15 4.39397 15 4H18L21 7L20.5785 11.2152C20.542 11.5801 20.1382 11.7829 19.8237 11.5942L18 10.5V18C18 19.1046 17.1046 20 16 20H8C6.89543 20 6 19.1046 6 18V10.5L4.17629 11.5942C3.86184 11.7829 3.45801 11.5801 3.42152 11.2152L3 7Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </div>
            <span class="mt-2 text-center">Tops</span>
        </div>
        <div class="flex flex-col items-center">
            <div class="flex items-center justify-center w-32 h-32 bg-white rounded-full">
             <svg class="w-16 h-16 text-black" height="200px" width="200px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="12.8"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M404.915,363.893c-6.192-17.431-13.981-31.512-22.008-43.929c-6.026-9.312-12.173-17.709-17.921-25.948 c-8.644-12.385-16.372-24.372-21.995-38.83c-5.61-14.458-9.212-31.491-9.226-54.254c0-3.729,0.557-7.417,1.563-11.14 c1.762-6.51,4.98-13.106,8.961-19.709c5.967-9.928,13.61-19.769,20.02-29.763c3.199-5.013,6.1-10.08,8.272-15.372 c2.159-5.278,3.603-10.835,3.603-16.663c0.006-7.656-2.067-14.967-5.676-21.445c-5.431-9.722-14.226-17.63-24.948-23.134 c-3.928-2.013-8.126-3.702-12.537-5.046V0h-14.776v55.625c-3.198-0.364-6.464-0.556-9.781-0.556c-12.286,0-23.843,2.55-33.856,7.08 c-7.073,3.205-13.372,7.417-18.61,12.458c-5.238-5.04-11.537-9.252-18.61-12.458c-10.014-4.53-21.571-7.08-33.856-7.08 c-3.318,0-6.59,0.192-9.788,0.556V0h-14.769v58.665c-8.424,2.563-16.08,6.411-22.564,11.325 c-6.18,4.689-11.305,10.364-14.921,16.848c-3.616,6.478-5.682,13.789-5.676,21.445c0,4.431,0.841,8.729,2.192,12.848 c2.378,7.206,6.272,13.948,10.61,20.617c6.516,9.974,14.132,19.822,19.934,29.743c2.9,4.954,5.352,9.901,7.04,14.802 c1.696,4.908,2.642,9.749,2.642,14.637c0,13.484-1.278,24.968-3.477,35.088c-3.854,17.696-10.484,31.286-18.577,44.254 c-6.06,9.71-12.981,19.028-20.034,29.2c-10.57,15.24-21.406,32.446-29.452,55.513c-8.054,23.067-13.305,51.883-13.298,90.454v2.796 l1.841,2.106c0.715,0.834,5.649,6.033,17.564,10.915c11.928,4.894,30.783,9.49,59.48,9.484c7.862,0.02,14.001,1.662,19.809,4.238 c4.344,1.94,8.491,4.457,12.769,7.259c6.424,4.192,13.14,9.073,21.352,13.007c4.106,1.961,8.59,3.669,13.537,4.861 C244.688,511.311,250.086,512,256,512c10.51,0.013,19.398-2.212,26.995-5.484c5.702-2.45,10.69-5.444,15.305-8.424 c6.915-4.49,13.021-8.928,19.452-12.094c3.219-1.59,6.517-2.888,10.093-3.801c3.583-0.914,7.451-1.45,11.875-1.457 c28.696,0.007,47.552-4.589,59.48-9.484c11.921-4.882,16.848-10.081,17.564-10.915l1.841-2.106v-2.796 C418.611,416.26,413.193,387.14,404.915,363.893z M390.179,458.778c-10.16,3.616-26.213,7.08-50.459,7.08 c-10.034-0.02-18.564,2.245-25.876,5.53c-5.497,2.457-10.325,5.431-14.855,8.398c-6.795,4.464-12.941,8.854-19.61,12.027 c-3.345,1.596-6.815,2.901-10.63,3.828c-3.821,0.927-7.987,1.47-12.749,1.47c-8.464-0.014-15.06-1.69-21.127-4.279 c-4.543-1.947-8.782-4.45-13.08-7.232c-6.458-4.159-13.014-9.007-20.942-12.941c-3.961-1.96-8.265-3.682-13.014-4.888 c-4.742-1.219-9.915-1.914-15.558-1.914c-27.12,0-43.982-4.338-53.824-8.378c-4.928-2.014-8.106-3.961-9.967-5.298 c-0.066-0.047-0.12-0.086-0.179-0.133c0.311-36.068,5.398-62.354,12.795-83.17c5.736-16.114,12.862-29.021,20.491-40.836 c5.722-8.855,11.736-17.081,17.623-25.511c8.815-12.637,17.366-25.764,23.664-41.95c6.298-16.186,10.245-35.32,10.232-59.652 c0-5.206-0.775-10.232-2.08-15.041c-2.298-8.43-6.186-16.192-10.576-23.491c-6.597-10.928-14.365-20.908-20.233-30.101 c-2.934-4.583-5.385-8.954-7.034-12.987c-1.656-4.046-2.497-7.703-2.497-11.027c0.007-4.993,1.312-9.722,3.801-14.2 c3.716-6.696,10.213-12.769,18.73-17.133c4.748-2.438,10.119-4.312,15.894-5.51h4.623v-0.795c3.172-0.437,6.437-0.696,9.788-0.696 c10.219,0,19.716,2.14,27.724,5.762c8.007,3.616,14.478,8.715,18.776,14.491L256,98.19l5.96-7.987 c4.305-5.776,10.776-10.875,18.783-14.491c8-3.623,17.504-5.762,27.724-5.762c3.344,0,6.609,0.238,9.781,0.676v0.814h4.716 c9.192,1.928,17.325,5.609,23.624,10.405c4.728,3.589,8.43,7.775,10.914,12.238c2.49,4.477,3.795,9.206,3.802,14.2 c0,2.536-0.484,5.252-1.457,8.199c-1.675,5.166-4.894,10.968-8.928,17.133c-6.04,9.279-13.835,19.325-20.312,30.352 c-3.232,5.524-6.14,11.319-8.265,17.471c-2.119,6.14-3.458,12.656-3.458,19.491c0,14.425,1.371,27.008,3.815,38.247 c4.258,19.676,11.842,35.154,20.498,48.982c6.49,10.385,13.564,19.882,20.425,29.79c10.305,14.875,20.18,30.624,27.63,51.936 c7.206,20.664,12.134,46.678,12.438,82.163C401.477,453.666,397.253,456.249,390.179,458.778z"></path> </g> </g></svg>
            </div>
            <span class="mt-2 text-center">Dresses</span>
        </div>
        <div class="flex flex-col items-center">
            <div class="flex items-center justify-center w-32 h-32 bg-white rounded-full">
              <svg class="w-16 h-16 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>
              
            </div>
            <span class="mt-2 text-center">Hand bag</span>
        </div>
        <div class="flex flex-col items-center">
            <div class="flex items-center justify-center w-32 h-32 bg-white rounded-full">
                <svg class="w-16 h-16 text-black" viewBox="0 0 960 960" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M474.582 608.402C459.722 702.784 476.948 903.213 347.711 914.184C299.617 914.789 250.784 923.406 202.961 917.397C194.008 915.031 184.763 910.075 177 904.743C159.804 897.833 156.455 883.635 157.136 867.267C173.329 631.407 164.533 395.69 158.842 159.698C158.577 106.216 178.661 49.6746 241.315 51.8776C290.502 50.1376 339.729 49.4816 388.931 48.0486C456.225 46.0886 523.502 43.5276 590.802 41.8536C649.046 37.9846 737.297 37.3536 739.684 115.329C755.128 264.352 767.409 413.78 786.345 562.413C796.738 658.733 810.765 757.629 797.149 853.974C785.095 908.584 723.865 904.437 679.596 907.253C640.041 908.951 600.459 910.113 560.878 911.108C488.525 912.038 492.176 859.357 489.788 803.441C484.849 738.606 479.226 673.821 475.402 608.904C475.13 608.737 474.856 608.569 474.582 608.402ZM403.116 775.311C421.544 637.723 430.154 498.2 454.366 361.135C427.667 355.154 402.643 345.468 376.809 336.815C370.228 334.419 364.139 329.248 359.227 324.029C344.559 308.517 360.321 281.048 381.238 285.431C407.376 294.306 431.237 304.836 460.082 309.181C461.726 263.719 463.327 219.467 464.943 174.778C424.439 174.817 383.645 178.923 343.241 182.699C337.09 183.208 333.667 185.179 332.906 192.042C319.798 258.698 286.963 315.721 215.881 332.235C214.02 332.693 211.729 336.522 211.759 338.751C213.159 410.016 218.063 481.205 219.225 552.464C219.428 633.035 212.983 713.159 211.594 793.79C274.944 778.36 338.284 775.697 403.116 775.311ZM751.339 759.669C748.166 612.258 721.11 465.95 708.835 319.311C632.656 317.182 572.668 248.982 577.568 174.343C555.644 174.343 534.525 174.343 515.708 174.343C514.652 218.526 513.602 262.414 512.537 306.954C536.925 304.123 570.074 272.748 588.898 300.256C612.327 341.268 533.966 356.871 505.58 362.167C518.306 497.047 523.369 634.315 536.164 769.286C607.976 766.076 679.062 762.899 751.339 759.669ZM689.119 126.929C691.903 108.039 687.267 99.0986 670.797 96.0296C593.3 85.4286 514.364 97.9776 436.376 97.5216C365.992 102.11 290.491 90.8746 222.563 109.386C213.553 119.387 212.102 132.308 211.118 147.873C370.664 120.231 529.725 115.951 689.119 126.929ZM752.722 809.443C680.554 817.423 609.746 812.132 539.083 821.222C541.748 834.511 536.059 853.077 549.319 859.432C580.287 863.154 611.422 860.17 642.418 858.392C672.34 856.739 702.269 855.187 732.181 853.365C755.321 852.527 749.395 827.555 752.722 809.443ZM209.93 865.72C255.936 867.915 302.032 862.705 348.073 861.153C366.746 860.049 381.473 845.767 386.271 826.238C327.152 827.641 268.525 832.297 209.929 842.622C209.93 849.84 209.93 857.101 209.93 865.72ZM703.978 267.277C701.035 237.605 698.122 208.227 695.075 177.502C670.336 177.502 646.484 177.502 622.621 177.502C625.082 219.018 656.436 257.153 703.978 267.277ZM281.839 190.868C257.902 193.525 234.198 196.156 210.888 198.743C210.888 226.723 210.888 254.275 210.888 282.048C244.415 275.515 275.049 235.895 281.839 190.868Z" fill="#000000"></path> <path d="M403.116 775.309C338.285 775.695 274.944 778.359 211.594 793.788C212.982 713.166 219.428 633.028 219.226 552.462C218.063 481.203 213.159 410.014 211.759 338.749C211.729 336.52 214.02 332.692 215.882 332.234C286.956 315.737 319.807 258.672 332.906 192.04C333.667 185.177 337.09 183.206 343.241 182.698C383.643 178.921 424.443 174.813 464.943 174.777C463.327 219.466 461.726 263.718 460.082 309.18C431.234 304.835 407.378 294.305 381.238 285.428C360.329 281.052 344.55 308.514 359.228 324.029C364.14 329.248 370.229 334.419 376.81 336.813C402.65 345.469 427.661 355.149 454.367 361.134C430.155 498.192 421.542 637.727 403.116 775.309Z" fill="white"></path> <path d="M751.337 759.669C679.06 762.899 607.973 766.076 536.162 769.286C523.367 634.305 518.305 497.057 505.578 362.167C533.896 356.892 612.339 341.267 588.896 300.257C570.038 272.749 536.959 304.128 512.534 306.955C513.599 262.414 514.648 218.527 515.705 174.344C534.522 174.344 555.642 174.344 577.565 174.344C572.662 248.978 632.656 317.186 708.832 319.312C721.109 465.958 748.163 612.25 751.337 759.669Z" fill="white"></path> <path d="M689.118 126.928C529.724 115.951 370.663 120.23 211.117 147.873C212.101 132.308 213.552 119.386 222.563 109.392C290.502 90.8738 365.983 102.111 436.374 97.5208C514.365 97.9778 593.297 85.4288 670.796 96.0258C687.266 99.0968 691.902 108.038 689.118 126.928Z" fill="white"></path> <path d="M752.724 809.441C749.47 827.53 755.27 852.542 732.184 853.364C702.271 855.186 672.342 856.737 642.42 858.391C611.425 860.169 580.288 863.153 549.324 859.429C536.031 853.061 541.802 834.527 539.086 821.22C609.748 812.131 680.555 817.421 752.724 809.441Z" fill="white"></path> <path d="M209.93 865.72C209.93 857.101 209.93 849.84 209.93 842.622C268.526 832.297 327.153 827.641 386.272 826.238C381.474 845.767 366.747 860.048 348.074 861.151C302.03 862.706 255.939 867.915 209.93 865.72Z" fill="white"></path> <path d="M703.974 267.275C656.432 257.151 625.078 219.016 622.617 177.5C646.48 177.5 670.332 177.5 695.071 177.5C698.118 208.225 701.032 237.603 703.974 267.275Z" fill="white"></path> <path d="M281.842 190.867C275.053 235.893 244.418 275.513 210.891 282.047C210.891 254.274 210.891 226.723 210.891 198.742C234.201 196.155 257.905 193.524 281.842 190.867Z" fill="white"></path> </g></svg>
            </div>
            <span class="mt-2 text-center">Pants</span>
        </div>
        <div class="flex flex-col items-center">
          <div class="flex items-center justify-center w-32 h-32 bg-white rounded-full">
            <svg class="w-16 h-16 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg> 
          </div>
          <span class="mt-2 text-center">More</span>
      </div>
    </div>
</div>
</section>

<!--End of circle sections-->
<!--off fashion banner-->
<div class="bg-white">
  <div class=" flex flex-col items-center mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Hot sale</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="{{ asset('storage/dress-woman.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Red dress
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
          <img src="{{ asset('storage/leather-jacket-woman.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Leather jacket
              </a>
            </h3>
            <span class="line-through text-gray-500">$45</span>
            <span class="mt-1">$35</span>
          </div>
          <p class="text-sm font-medium text-gray-900"></p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="{{ asset('storage/jumpers-and-trousers.jpg') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Jumpers and trousers
              </a>
            </h3>
            <span class="line-through text-gray-500">$55</span>
            <span class="mt-1">$32</span>
          </div>
          <p class="text-sm font-medium text-gray-900"></p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="{{ asset('storage/kimono.jpg') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Asian style dress
              </a>
            </h3>
            <span class="line-through text-gray-500">$50</span>
            <span class="mt-1">$32</span>
          </div>
          <p class="text-sm font-medium text-gray-900"></p>
        </div>
      </div>
      <!-- More products... -->
    </div>
  </div>
</div>
<!--End off fashion banner-->
<!-- Slider -->
<div class="">
  <div data-hs-carousel='{
      "loadingClasses": "opacity-0"
    }' class="relative">
    <div class="hs-carousel relative overflow-hidden w-full h-[30rem] md:h-[calc(100vh-106px)]  bg-gray-100 rounded-2xl">
      <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
        <!-- Item -->
        <div class="hs-carousel-slide">
          <div class="h-[30rem] md:h-[calc(100vh-106px)] flex flex-col items-center bg-[url('https://images.unsplash.com/photo-1615615228002-890bb61cac6e?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center bg-no-repeat">
            <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
               <div class=" mt-5 flex justify-between">
                <div  style="margin-left: -80%" class=" flex flex-col w-[12rem] h-[12rem] py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-transparent text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="#">
                 <h3 style="margin-bottom: 20px">Off fashion collection <br> </h3>
                 <h3>the best clothes for woman on the market</h3>
                 <button style=" margin-top:20%" type="button" class="text-white bg-gray-400 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 inline-flex me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
                  <span class="sr-only">Icon description</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>
    </div>
  </div>
</div>
<!-- End Slider and off fashion banner-->
<div class="bg-white">
  <div class="flex flex-col items-center mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">New arrivals</h2>
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="{{ asset('storage/dress-woman.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Red dress
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
          <img src="{{ asset('storage/stylish-set.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Stylish-set
              </a>
            </h3>
            <span class="line-through text-gray-500">$45</span>
            <span class="mt-1">$35</span>
          </div>
          <p class="text-sm font-medium text-gray-900"></p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="{{ asset('storage/asian-style-dress-2.jpg') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Asian style dress
              </a>
            </h3>
            <span class="line-through text-gray-500">$55</span>
            <span class="mt-1">$32</span>
          </div>
          <p class="text-sm font-medium text-gray-900"></p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="{{ asset('storage/jacket-with-trousers.jpg') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Jacket with trousers set
              </a>
            </h3>
            <span class="line-through text-gray-500">$50</span>
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
          <img src="{{ asset('storage/party-dress.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Party dress
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
          <img src="{{ asset('storage/basic-shirt.jpg') }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic-shirt
              </a>
            </h3>
            <span class="line-through text-gray-500">$45</span>
            <span class="mt-1">$35</span>
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
                Woman suit
              </a>
            </h3>
            <span class="line-through text-gray-500">$55</span>
            <span class="mt-1">$32</span>
          </div>
          <p class="text-sm font-medium text-gray-900"></p>
        </div>
      </div>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="{{ asset('storage/man-suit.jpg') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Man suit
              </a>
            </h3>
            <span class="line-through text-gray-500">$50</span>
            <span class="mt-1">$32</span>
          </div>
          <p class="text-sm font-medium text-gray-900"></p>
        </div>
      </div>
      <!-- More products... -->
    </div>
  </div>
</div>
<!--circle sections-->
<section class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="text-center space-y-8">
    <div class="mb-8">
        <h1 class="text-2xl font-semibold">View More inspiration</h1>
    </div>
    <div class="flex justify-center space-x-8">
      <div class="flex flex-col items-center">
        <svg class="w-16 h-16 text-black" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="matrix(-1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <path d="M0 0h48v48H0z" fill="none"></path> <g id="Shopicon"> <path d="M42,6H18c-2.2,0-4,1.8-4,4v4C7.4,14,2,19.4,2,26v12h4c0,3.314,2.686,6,6,6s6-2.686,6-6h8c0,3.314,2.686,6,6,6s6-2.686,6-6 h4c2.2,0,4-1.8,4-4V10C46,7.8,44.2,6,42,6z M12,40c-1.103,0-2-0.897-2-2s0.897-2,2-2s2,0.897,2,2S13.103,40,12,40z M14,32.349 C13.374,32.127,12.702,32,12,32c-1.775,0-3.365,0.775-4.463,2H6v-6h8V32.349z M14,24H6.263c0.892-3.445,4.017-6,7.737-6V24z M32,40 c-1.103,0-2-0.897-2-2s0.897-2,2-2s2,0.897,2,2S33.103,40,32,40z M42,34h-5.537c-1.099-1.225-2.688-2-4.463-2s-3.365,0.775-4.463,2 H18V10h24V34z"></path> </g> </g></svg>
          <span class="mt-2 text-center">30 days free</span>
      </div>
      <div class="flex flex-col items-center">
            <svg class="w-16 h-16 text-black" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0909 2.54877C17.5385 2.23946 16.9504 2.20831 16.3288 2.286C15.7383 2.3598 15.02 2.54651 14.1567 2.7709L12.1384 3.2954C11.2755 3.51963 10.557 3.70634 10.0072 3.92891C9.4292 4.16293 8.92943 4.47736 8.60526 5.02195C8.27903 5.56998 8.24664 6.15584 8.32794 6.76777C8.40459 7.34473 8.59805 8.04488 8.82853 8.87901L9.37108 10.8429C9.60161 11.6775 9.79499 12.3775 10.0259 12.9139C10.271 13.4835 10.5985 13.9684 11.1541 14.2795C11.7064 14.5888 12.2945 14.62 12.9162 14.5423C13.5066 14.4685 14.225 14.2818 15.0882 14.0574L17.1066 13.5329C17.9695 13.3086 18.688 13.1219 19.2377 12.8994C19.8157 12.6653 20.3155 12.3509 20.6397 11.8063C20.9659 11.2583 20.9983 10.6724 20.917 10.0605C20.8403 9.48355 20.6469 8.7834 20.4164 7.94926L19.8738 5.98536C19.6433 5.1508 19.4499 4.45076 19.2191 3.91434C18.9739 3.34477 18.6465 2.85989 18.0909 2.54877ZM14.485 4.2354C15.4099 3.99503 16.0331 3.83463 16.5148 3.77442C16.9764 3.71673 17.1974 3.7676 17.358 3.85754C17.5154 3.94567 17.6656 4.09931 17.8413 4.50734C18.0265 4.93768 18.1937 5.53684 18.442 6.43548L18.9564 8.29754C19.2048 9.19641 19.3687 9.79611 19.4301 10.2581C19.4883 10.6968 19.4362 10.8956 19.3508 11.0391C19.2633 11.186 19.1047 11.3349 18.6748 11.509C18.2271 11.6903 17.605 11.8535 16.6798 12.0939L14.76 12.5929C13.835 12.8333 13.2118 12.9937 12.7301 13.0539C12.2685 13.1116 12.0476 13.0607 11.8869 12.9707C11.7296 12.8826 11.5793 12.729 11.4037 12.3209C11.2185 11.8906 11.0512 11.2914 10.8029 10.3928L10.2885 8.53074C10.0402 7.63187 9.87625 7.03217 9.81487 6.57022C9.75658 6.13148 9.80876 5.93269 9.89418 5.78921C9.98164 5.64227 10.1402 5.49334 10.5701 5.31928C11.0179 5.138 11.64 4.97476 12.5651 4.73434L14.485 4.2354Z" fill="#1C274C"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.2007 4.72469C2.80157 4.61396 2.38823 4.84775 2.27749 5.24688C2.16675 5.64602 2.40054 6.05936 2.79968 6.17009L4.50338 6.64278C4.92898 6.76086 5.24592 7.08236 5.35419 7.47427L7.3055 14.5374C7.23053 14.5521 7.1556 14.5692 7.0808 14.5887C5.10375 15.1025 3.89563 17.0913 4.43836 19.0558C4.97848 21.0108 7.03215 22.1384 9.00137 21.6266C10.7247 21.1788 11.8638 19.6102 11.7683 17.9139L20.1888 15.7256C20.5897 15.6214 20.8303 15.2119 20.7261 14.811C20.6219 14.4101 20.2124 14.1696 19.8115 14.2738L11.3734 16.4667C10.8651 15.4794 9.93146 14.7927 8.86688 14.5562L6.80003 7.07483C6.5469 6.1586 5.82129 5.45177 4.9044 5.19738L3.2007 4.72469ZM7.45809 16.0404C8.66981 15.7255 9.88575 16.4288 10.198 17.5589C10.5076 18.6796 9.82797 19.862 8.62408 20.1748C7.41235 20.4897 6.19641 19.7864 5.8842 18.6563C5.5746 17.5357 6.25419 16.3533 7.45809 16.0404Z" fill="#1C274C"></path> </g>
            </svg>
          <h1 style="text" class="mt-2 text-center text-bold">24h delivery</h1>
      </div>
      <div class="flex flex-col items-center">
        <svg class="w-16 h-16 text-black" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#000000;}  </style> <g> <path class="st0" d="M387.813,349.816c7.25,5.344,16.75,15.141,16.75,15.141c0.891,0.813,2.125,1.141,3.297,0.859 c1.172-0.266,2.141-1.109,2.578-2.234c0,0,51.844-131.953,78.719-200.406c-97.188-106.766-279.078,2.109-387.203-76.813 C94.5,80.91,84.625,70.754,84.625,70.754c-0.906-0.813-2.141-1.125-3.313-0.844c-1.188,0.266-2.156,1.109-2.594,2.234 c0,0-51.828,131.969-78.719,200.406C97.375,379.52,279.75,270.066,387.813,349.816z M317.984,137.207 c39.094-1.234,76.953,0.625,110.234,14.219c-5.234,18.516,2.828,37.734,17.188,52.125c-11.422,29.109-22.859,58.219-34.297,87.328 c-16.672-8.531-35.891,0.688-44.578,17.578c-33.266-13.578-71.125-15.453-110.219-14.219c32.563-16.297,61.25-44.313,74.531-78.125 C344.109,182.363,338.469,151.691,317.984,137.207z M246.375,179.113c1.906-0.531,3.891-0.922,5.859-1.297 c1.313-3.375,2.641-6.734,3.953-10.109c5.531-0.313,11.047-0.656,16.563-0.984c-1.281,3.313-2.594,6.625-3.891,9.938 c3.734,0.078,7.203,0.406,10.313,1c5.281,1.016,9.766,4.781,9.766,4.781c0.625,0.313,0.906,0.906,0.75,1.625 s-0.719,1.453-1.531,2.016c-3.438,2.328-6.906,4.688-10.375,7.047c-1.094,0.766-2.438,0.969-3.313,0.594 c0,0-3.516-2.563-7.156-3.188c-3.609-0.656-7.656-0.797-12.047-0.563c-5.734,0.344-10.359,1.5-13.844,3.531 c-3.469,2.016-5.813,4.531-6.984,7.531c-1.063,2.719-0.906,4.719,0.5,6.047c1.391,1.313,4.313,2.078,8.797,2.203 c4.203,0.063,8.422,0.125,12.656,0.188c9.391,0.141,15.797,1.969,19.297,5.344c3.531,3.375,3.906,8.578,1.172,15.531 c-1.625,4.141-4.016,7.781-7.172,10.969c-3.172,3.219-6.891,5.938-11.109,8.203c-4.266,2.313-8.953,4.078-14.125,5.391 c-2.25,0.578-4.547,1-6.859,1.375c-1.547,3.922-3.094,7.828-4.625,11.734c-5.516,0.328-11.031,0.672-16.563,0.984 c1.5-3.828,3-7.656,4.516-11.484c-4.594-0.063-8.828-0.453-12.672-1.203c-5.875-1.156-11.938-6.875-11.938-6.875 c-0.578-0.328-0.813-0.953-0.641-1.656c0.188-0.672,0.766-1.422,1.531-1.938c3.672-2.438,7.344-4.906,11.016-7.391 c1.156-0.75,2.594-0.969,3.453-0.469c0,0,4.422,4.25,8.672,5.063c4.281,0.797,8.75,1.063,13.406,0.813 c5.875-0.359,11.094-1.516,15.609-3.5c4.547-1.969,7.547-4.828,9.016-8.547c1.031-2.688,0.938-4.766-0.344-6.219 c-1.281-1.469-4.125-2.234-8.469-2.422c-4.813-0.047-9.625-0.125-14.438-0.188c-8.531-0.172-14.5-1.906-17.891-5.078 c-3.422-3.188-3.734-8.281-1.016-15.219c1.5-3.828,3.766-7.297,6.75-10.375c3-3.047,6.5-5.734,10.469-7.938 C237.438,182.145,241.75,180.379,246.375,179.113z M43.75,232.16c11.438-29.109,22.875-58.203,34.313-87.313 c16.656,8.531,35.875-0.719,44.531-17.578c33.281,13.594,71.172,15.469,110.281,14.219c-32.578,16.313-61.266,44.313-74.547,78.125 c-13.266,33.781-7.641,64.469,12.828,78.906c-39.094,1.25-76.969-0.609-110.25-14.219C66.156,265.785,58.125,246.535,43.75,232.16z "></path> <path class="st0" d="M126.938,226.988c6.219,1.031,13.188-3.047,15.438-8.797c2.25-5.719-1.063-10.938-7.281-11.969 c-6.203-1.031-12.953,2.516-15.203,8.234C117.641,220.191,120.734,225.973,126.938,226.988z"></path> <path class="st0" d="M354.063,229.52c6.219,1.031,12.969-2.516,15.219-8.234c2.25-5.734-0.844-11.516-7.063-12.531 s-13.188,3.063-15.438,8.781C344.531,223.27,347.844,228.52,354.063,229.52z"></path> <path class="st0" d="M500.047,193.348L415.938,408.88c-2.969-4.063-6.375-8.516-10.156-13.047l-0.172-0.203l-0.203-0.203 c-9.594-10.234-24.344-22.125-45.844-31.36c-21.469-9.25-49.656-15.844-85.938-15.844c-1.156,0-2.375,0.016-3.625,0.031l0,0 c-20.016,0-40.906,1.25-60.969,2.453c-20.594,1.234-41.719,2.484-62.094,2.469c-24.109,0.016-51-1.609-77.078-9.141 c-17.547-5.078-34.641-12.828-50.547-24.5l-8.406,18C28,349.473,46.25,357.504,64.469,362.754 c28.766,8.281,57.5,9.891,82.469,9.891c21.156,0,42.656-1.281,63.25-2.516c20.063-1.188,40.594-2.422,59.813-2.406h-0.125 l0.297-0.016c1.109,0,2.266-0.016,3.453-0.016c33.953,0.016,59.344,6.125,78.25,14.25c18.781,8.094,31.188,18.188,39.172,26.626 c5.328,6.422,10.109,12.969,13.516,17.906c1.75,2.5,3.125,4.578,4.063,6.016c0.484,0.719,0.844,1.297,1.094,1.672l0.25,0.422 l0.078,0.109l2.516,4.031c1.469,2.359,4.156,3.688,6.922,3.438c2.766-0.266,5.156-2.063,6.172-4.656L512,216.254L500.047,193.348z"></path> </g> </g>
        </svg>
        <span class="mt-2 text-center">Easy payment</span>
      </div>
    </div>
</div>
</section>
<!--End of circle sections-->
<section class="flex justify-around">
<!--Card review-->
<div>  
  <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    
    <div class="flex">
      
      <div class="flex items-center justify-center w-12 h-12 bg-white text-black font-bold border-2 border-black rounded-full">
        <span class="border-black px-1">DR</span>
      </div>
      <p>Dash Riprock <br></p>
      <svg style="margin-left: 5%" width="20px" height="20px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>location</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-104.000000, -411.000000)" fill="#000000"> <path d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z" id="location" sketch:type="MSShapeGroup"> </path> </g> </g> </g>
      </svg>
      <p>PT</p>
    </div>
    <span>1 review</span>
   
     <!-- Star -->
     <div class="flex-shrink-0 flex space-x-1 mt-3">
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <span style="margin-left: 30%">February 15,2022</span>
    </div>
    <!-- End Star -->
    <h3 class="mb-2  font-bold tracking-tight text-gray-900 dark:text-white">My expirience was a</h3>
    <p class="font-normal text-gray-700 dark:text-gray-400">My expirience with your company was a pleasurable one. Other stores without naming names were a joke!</p>
  </a>
</div>
<!--End of card review-->
<!--Card review-->
<div>  
  <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    
    <div class="flex">
      
      <div class="flex items-center justify-center w-12 h-12 bg-white text-black font-bold border-2 border-black rounded-full">
        <span class="border-black px-1">DR</span>
      </div>
      <p>Dash Riprock <br></p>
      <svg style="margin-left: 5%" width="20px" height="20px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>location</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-104.000000, -411.000000)" fill="#000000"> <path d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z" id="location" sketch:type="MSShapeGroup"> </path> </g> </g> </g>
      </svg>
      <p>PT</p>
    </div>
    <span>1 review</span>
   
     <!-- Star -->
     <div class="flex-shrink-0 flex space-x-1 mt-3">
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <span style="margin-left: 30%">February 15,2022</span>
    </div>
    <!-- End Star -->
    <h3 class="mb-2  font-bold tracking-tight text-gray-900 dark:text-white">My expirience was a</h3>
    <p class="font-normal text-gray-700 dark:text-gray-400">My expirience with your company was a pleasurable one. Other stores without naming names were a joke!</p>
  </a>
</div>
<!--End of card review-->
<!--Card review-->
<div>  
  <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    
    <div class="flex">
      
      <div class="flex items-center justify-center w-12 h-12 bg-white text-black font-bold border-2 border-black rounded-full">
        <span class="border-black px-1">DR</span>
      </div>
      <p>Dash Riprock <br></p>
      <svg style="margin-left: 5%" width="20px" height="20px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>location</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-104.000000, -411.000000)" fill="#000000"> <path d="M116,426 C114.343,426 113,424.657 113,423 C113,421.343 114.343,420 116,420 C117.657,420 119,421.343 119,423 C119,424.657 117.657,426 116,426 L116,426 Z M116,418 C113.239,418 111,420.238 111,423 C111,425.762 113.239,428 116,428 C118.761,428 121,425.762 121,423 C121,420.238 118.761,418 116,418 L116,418 Z M116,440 C114.337,440.009 106,427.181 106,423 C106,417.478 110.477,413 116,413 C121.523,413 126,417.478 126,423 C126,427.125 117.637,440.009 116,440 L116,440 Z M116,411 C109.373,411 104,416.373 104,423 C104,428.018 114.005,443.011 116,443 C117.964,443.011 128,427.95 128,423 C128,416.373 122.627,411 116,411 L116,411 Z" id="location" sketch:type="MSShapeGroup"> </path> </g> </g> </g>
      </svg>
      <p>PT</p>
    </div>
    <span>1 review</span>
   
     <!-- Star -->
     <div class="flex-shrink-0 flex space-x-1 mt-3">
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <svg class="size-4 text-blue-500" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor"/>
      </svg>
      <span style="margin-left: 30%">February 15,2022</span>
    </div>
    <!-- End Star -->
    <h3 class="mb-2  font-bold tracking-tight text-gray-900 dark:text-white">My expirience was a</h3>
    <p class="font-normal text-gray-700 dark:text-gray-400">My expirience with your company was a pleasurable one. Other stores without naming names were a joke!</p>
  </a>
</div>
<!--End of card review-->
</section>
@endsection
