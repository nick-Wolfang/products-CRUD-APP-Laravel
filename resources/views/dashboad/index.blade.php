@extends('layouts.app')

@section('content')

    <div class="">
        <h1 class="mb-6  mt-2 text-3xl font-bold bg-gray-200 h-24 rounded content-center" >
            <a class="text-indigo-400 hover:text-indigo-600 mb-6 pt- hover:underline" href="{{route('products.index')}}">Dashboard</a>
            <span class="text-indigo-400 font-medium pt-4">/</span>
            <hr>
          </h1>
        Here is the dashboard

    </div>
@endsection