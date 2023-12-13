@extends('layout.header')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css"  rel="stylesheet" />
    <title>Teams</title>
  </head>

  <body>
  @section('content')
    <div>
        @if(session()->has('success'))
        <div class="text-white bg-green-700 hover:bg-green-800 font-medium text-sm dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">  
          {{session('success')}}
        </div>
        @endif
      </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">Team Name</th>
            <th scope="col" class="px-6 py-3">Coach</th>
            <th scope="col" class="px-6 py-3">Overall points</th>
            <th scope="col" class="px-6 py-3"></th>
            <th scope="col" class="px-6 py-3"></th>
          </tr>
        </thead>
        @foreach($teams as $team)
        <tbody>
          <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$team->name}}</td>
            <td class="px-6 py-4">{{$team->coach}}</td>
            <td class="px-6 py-4">{{$team->points}}</td>
            <td class="px-6 py-4">
              <a href="{{route('teams.edit',['team' => $team])}}" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
            </td>
            <td class="px-6 py-4">
              <form method="post" action="{{route('teams.delete',['team' => $team])}}">
                        @csrf
                        @method("delete")
                        <button type="submit" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" onclick="return confirm('Are you sure you want to delete this team?')">Delete</button>
                </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>

  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    @stop
  </body>
</html>
