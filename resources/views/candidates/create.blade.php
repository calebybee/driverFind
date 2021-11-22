@extends('layouts.app')

@section('content')
    @if (Auth::check()) {
      <div class="w-4/5 m-auto text-center">
        <div class="py-15">
            <h1 class="text-5xl">
                Apply
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
          <form class="w-4/5" action="/candidates" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Full Name
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="name"id="inline-full-name" type="text" placeholder="Jane Doe">
                </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-phone">
                    Phone Number
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-phone" name="phone" type="number" placeholder="8013261234">
                </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                  <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
                      Email
                    </label>
                  </div>
                  <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-email" name="email" type="email" placeholder="jane.doe@gmail.com">
                  </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                  <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-city">
                      City
                    </label>
                  </div>
                  <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-city" name="city" type="text" placeholder="Atlanta">
                  </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                  <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-state">
                      State
                    </label>
                  </div>
                  <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-state" name="state" type="text" placeholder="Georgia">
                  </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                  <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-salary">
                      Desired Salary
                    </label>
                  </div>
                  <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-salary" name="salary" type="number" placeholder="50,000">
                  </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                  <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-startdate">
                      Start Date
                    </label>
                  </div>
                  <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-startdate" name="startdate" type="text" placeholder="11-30-2021">
                  </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                  <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-aboutme">
                      About Me
                    </label>
                  </div>
                  <div class="md:w-2/3">
                      <textarea name="aboutme" id="inline-aboutme" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Brief summary of yourself"></textarea>
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
                <span class="italic text-gray-400 text-xs">Privacy Notice: By submitting your application, you consent to the sharing of any data provided.</span>
                </div>
              </div>
              <div class="md:flex md:items-center pb-10">
                <div class="md:w-1/3"></div>
                  <button class="shadow bg-blue-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded-3xl uppercase text-lg" type="submit">
                    Submit Application
                  </button>
                </div>
              </div>
            </form>
      </div>
    } 
    @else
    <div class="w-2/3 m-auto text-center">
      <div class="py-15">
          <h1 class="text-5xl">
              401
          </h1>
      </div>
    </div>
      <div class="sm:grid grid-cols-1 pt-14 px-15 h-96 pb-24 mb-24">
        <h2 class=" w-2/3 m-auto text-3xl md:flex md:items-center pb-10">
          Unauthorized access. Please login or register first before applying.
        </h2>
        <img class="m-auto pb-10" src="https://media.istockphoto.com/vectors/unauthorized-access-rgb-color-icon-vector-id1271310128?b=1&k=20&m=1271310128&s=170667a&w=0&h=N3LsYdIQaAJvTINdQZDvIGgGwAIm8VQnOim7idwoCks=" width="200" height="200" alt="">
          <a class="w-1/5 text-center m-auto bg-blue-500 hover:bg-green-500 text-white rounded-3xl py-2 px-3" href="/login">Login</a>
      </div>
    @endif
@endsection
