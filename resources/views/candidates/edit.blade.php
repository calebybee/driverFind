@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15">
            <h1 class="text-5xl">
                Edit Application
            </h1>
        </div>
    </div>
    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->al() as $error)
                    <li class="w1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="w-4/5 m-auto pt-5 pb-10 text-center">
        <form class="w-4/5" action="/candidates/{{ $candidate->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                  Full Name
                </label>
              </div>
              <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="name"id="inline-full-name" type="text" value="{{ $candidate->name }}">
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-phone">
                  Phone Number
                </label>
              </div>
              <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-phone" name="phone" type="number" value="{{ $candidate->phone }}">
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
                    Email
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-email" name="email" type="email" value="{{ $candidate->email }}">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-city">
                    City
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-city" name="city" type="text" value="{{ $candidate->city }}">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-state">
                    State
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-state" name="state" type="text" value="{{ $candidate->state }}">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-salary">
                    Desired Salary
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-salary" name="salary" type="number" value="{{ $candidate->salary }}">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-startdate">
                    Start Date
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-startdate" name="startdate" type="text" value="{{ $candidate->startdate }}">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-aboutme">
                    About Me
                  </label>
                </div>
                <div class="md:w-2/3">
                    <textarea name="aboutme" id="inline-aboutme" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">{{ $candidate->aboutme }}</textarea>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-resume">
                        Upload Resume 
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="appearance-none rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-resume" name="resume" type="file">
                  </div>
            </div>
            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
                <button class="shadow bg-blue-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded-3xl uppercase text-lg" type="submit">
                  Submit Application
                </button>
              </div>
            </div>
          </form>
    </div>

@endsection
