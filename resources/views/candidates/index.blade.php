@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15">
            <h1 class="text-6xl">
                Candidates
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 px-5">
                {{ session()-> get('message') }}
            </p>
        </div>
        
    @endif
    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/candidates/create" class="bg-blue-500 text-white text-xs font-extrabold py-3 px-5 rounded-3xl uppercase bg-transparent hover:bg-blue-200 hover:text-black">Apply Now!</a>
        </div>
    @endif
    @foreach ($candidates as $candidate)
        <div class="sm:grid sm:m-auto grid-cols-2 gap-20 w-4/5 mx-auto py-15">
            <div>
                <embed src="{{ asset('resumes/' . $candidate->resume_path) }}"  type="application/pdf" width="100%" height="600px" toolbar="0" statusbar="0" navpanes="0">
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

                <a href="/candidates/{{ $candidate->id }}" class="sm:m-auto sm:py-1 sm:px-2 sm:rounded-2xl sm:font-bold md:font-extrabold uppercase text-white font-extrabold py-4 px-8 rounded-3xl bg-blue-500 hover:bg-blue-200 hover:text-black">
                    Explore application
                </a>

                @if (isset(Auth::user()->id) && Auth::user()->id == $candidate->user_id)
                    <span class="float-right">
                        <a class="bg-gray-200 hover:bg-gray-400 text-black rounded-3xl py-2 px-4" href="/candidates/{{ $candidate->id }}/edit">
                            Edit
                        </a>
                    </span>
                    <span class="float-right">
                        <form 
                            action="/candidates/{{ $candidate->id }}"
                            method="POST">
                            @csrf
                            @method('delete')
                            <button class="text-red-500 pr-3 hover:font-extrabold" type="submit">
                                Delete
                            </button>
                        </form>
                    </span>
                @endif
            </div>
        </div>
    @endforeach
@endsection
