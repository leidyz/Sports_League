@extends('layout.header')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css"  rel="stylesheet" />
    <link href="resources/css/landing/landing.css"  rel="stylesheet" />
    <title>Teams</title>
    <style>
        .position{
        z-index: 100;
        position: absolute;
        width: 100%;
        height: 100%;
        }
        .button{
            display: flex;
        align-content: center;
        flex-wrap: wrap;
        justify-content: center;
        height: 67px;
        height: 100%;
        }

    </style>
  </head>
  <body>
  @section('content')
  

<div id="controls-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/images/matches.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 flex-row" alt="...">
            <div class="absolute p-4 text-center transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <button class="relative inline-flex items-center justify-center p-2.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-500 to-red-900 group-hover:from-red-500 group-hover:to-red-900 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    <a href="{{route('games.create')}}">Create a New Game</a>
                    </span>
                </button>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('/images/kobe_cta.png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 flex-row" alt="...">
            <div>
                <h1 class="absolute inset-y-0 right-0 mb-4 text-3xl font-extrabold text-white-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-amber-300 from-amber-600">NBA Basketball League</span></h1>
            </div> 
            <div class="position grid grid-cols-12">
                
                <div class='button col-start-7 col-end-12'>  
                    <button class="relative inline-flex items-center justify-center p-2.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r to-amber-300 from-amber-600 group-hover:from-amber-600 group-hover:to-amber-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    <a href="{{route('teams.create')}}">Create a New Team</a>
                    </span>
                    </button> </div>
            </div>
        </div>

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
 <!-- games results -->
<div class="bg-gray-100 p-8">
    <div class="flex flex-wrap m-4 gap-4 justify-center">
    @foreach($games as $game)
    <!-- w-full max-w-md p-8 -->
    <div class=" bg-white rounded shadow-md p-5">
        <h2 class="text-xl font-semibold mb-4">{{$game->title}}</h2>
        <div class="flex justify-between">
            <div class="text-lg justify-center">{{$controller->getLocalTeam($game)}}</div>
            <div class="text-lg font-semibold ml-4">{{$game->local_score}}</div>
        </div>
        <div class="flex justify-between mt-2">
            <div class="text-lg justify-center">{{$controller->getGuestTeam($game)}}</div>
            <div class="text-lg font-semibold ml-4">{{$game->guest_score}}</div>
        </div>
    </div>
    @endforeach

    </div>
</div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    @stop
  </body>
</html>
