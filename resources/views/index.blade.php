@extends('layouts.app')

@section('content')
    <div class="bg-main-page bg-cover grid-cols-1 m-auto">
        <div class="flex pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="text-white text-4xl uppercase font-bold text-shadow-md pb-80">
                    Where will you go next?
                </h1>
                <a href="/candidates/create" class="text-center py-2 px-4 text-xl bg-gray-600 uppercase text-s text-white font-extrabold rounded-3xl hover:bg-green-500">
                    Get Started
                </a>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-r from-gray-200 via-gray-400 to-gray-600">
        <div class="sm:grid grid-cols-2 gap-20 w-25 mx-auto py-15">
            <div class="px-12">
                <img src="https://cdn.pixabay.com/photo/2016/11/29/01/36/cloudy-1866581_1280.jpg"  width="600px" alt="">
            </div>
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-3xl font-extrabold text-white">
                    See how you compare
                </h2>
                <p class="py-8 text-black font-extrabold text-s">
                    Wondering how you stack up against fellow drivers? DriverFind has an open-door policy and believes in fostering a fair, tight-knight community of drivers. 
                </p>

                <p class="text-s pb-9 text-white">
                    All applicants submitting applications have consented to sharing their information.
                </p>

                <a href="/candidates" class="bg-gray-600 uppercase text-s text-white font-extrabold py-3 px-8 rounded-3xl hover:bg-green-500">See other applicants</a>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-r from-cool-gray-100 to-cool-gray-300 text-center p-15 text-white leading-7">
        <h2 class="text-4xl pb-5 text-l font-extrabold text-black">
            Curious about benefits?
        </h2>
        <span class="font-bold block text-2xl py-1 text-black">
            12 Paid Holidays
        </span>
        <span class="font-bold block text-2xl py-1 text-black">
            Tuition Reimbursement
        </span>
        <span class="font-bold block text-2xl py-1 text-black">
            Travel + Per Diem
        </span>
        <span class="font-bold block text-2xl py-1 text-black">
            $5,000 signing bonus
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-s">
            Jane Doe
        </span>
        <h2 class="text-4xl font-bold py-10">
            Success Story
        </h2>
        <p class="m-auto w-2/5 leading-8">
            "Using DriverFind I've been able to really understand what skills employers are looking for, as well as learn how to prepare a resume to better speak on my unique talents. I also love how easy it is for DriverFind recruiters to get in touch with me and review my profile!"
        </p>
    </div>
    <div class="bg-gradient-to-r from-gray-200 via-gray-400 to-gray-600">
        <div class="sm:grid grid-cols-2 w-4/5 m-auto">
            <div class="flex pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                    <h3 class="text-xl font-bold py-10">
                        Some stuff here
                    </h3>
                    <a href="" class="uppercase bg-transparent border-2 borde-gray-200 text-black text-xs font-extrabold py-3 px-5 rounded-3xl hover:bg-green-500">
                        See Job Listings
                    </a>
                </div>
            </div>
            <div>
                <img src="https://cdn.vox-cdn.com/thumbor/dXnH-ySPU85VXbzb9YOQE3Ac9sw=/0x0:4243x3079/1400x933/filters:focal(1783x1201:2461x1879):no_upscale()/cdn.vox-cdn.com/uploads/chorus_image/image/65022936/TuSimple_Self_Drving_Truck_4_copy.0.jpg" width="700px" alt="">
            </div>
        </div>
    </div>
@endsection