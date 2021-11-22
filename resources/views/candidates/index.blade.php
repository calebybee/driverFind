@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15">
            <h1 class="text-6xl">
                Candidates
            </h1>
        </div>
    </div>

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/candidates/create" class="bg-blue-500 text-white text-xs font-extrabold py-3 px-5 rounded-3xl uppercase bg-transparent hover:bg-blue-200 hover:text-black">Apply Now!</a>
        </div>
    @endif
    @foreach ($candidates as $candidate)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15">
            <div>
                <img src="https://cdn.pixabay.com/photo/2016/11/29/01/36/cloudy-1866581_1280.jpg"  width="700px" alt="">
            </div>
            <div>
                <h2 class="font-bold text-4xl pb-4">
                    {{$candidate->name}}
                </h2>
                <div class="pb-2">
                    <span class="font-bold">
                        Salary Expectations: </span><span class="italic text-black">${{ $candidate->salary }}</span>
                </div>
                <div class="pb-2">
                    <span class="font-bold">Start Date: </span><span class="italic text-black">{{ $candidate->startdate }}</span>
                </div>
                <div class="pb-2">
                    <span class="font-bold">Location: </span><span class="italic text-black">{{ $candidate->city}}, {{ $candidate->state }}</span>
                </div>
                {{-- <div class="pb-2">
                    <span class="font-bold">Username: </span><span class="italic text-black">{{ $candidate->user->name }}</span>
                </div> --}}
                <p class="text-xl text-black pt-8 pb-10 leading-8 font-light">
                    {{ $candidate->aboutme }}
                </p>

                <a href="/candidates/{{ $candidate->slug }}" class="uppercase text-white font-extrabold py-4 px-8 rounded-3xl bg-blue-500 hover:bg-blue-200 hover:text-black">
                    See More Applicants
                </a>
            </div>
        </div>
    @endforeach
@endsection
