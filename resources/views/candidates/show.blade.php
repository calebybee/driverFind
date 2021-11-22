@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15">
            <h1 class="text-5xl">
                {{ $candidate->name }}
            </h1>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 mx-auto py-15 text-left h-96 leading-7">
        <div class="px-1/5">
            <span class="font-bold">
                Phone: </span><span class="italic text-black">{{ $candidate->phone }}
            </span><br>
            <span class="font-bold">
                Email: </span><span class="italic text-black">{{ $candidate->email }}
            </span><br class="">
            <span class="font-bold">
                Location: </span><span class="italic text-black">{{ $candidate->city }}, {{ $candidate->state }}
            </span><br>
            <span class="font-bold">
                Salary Expectations: </span><span class="italic text-black">${{ $candidate->salary }}
            </span><br>
            <span class="font-bold">
                Start Date: </span><span class="italic text-black">{{ $candidate->startdate }}
            </span><br>
        </div>
        <div class="px-1/5">
            <span class="font-bold">
                About Me: 
            </span>
            <p class="italic text-black">
                {{ $candidate->aboutme }}
            </p>
        </div>
    </div>
@endsection
