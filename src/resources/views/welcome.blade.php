@extends('layouts.main')

@section('title') {{'Accueil'}} @endsection

@section('content')
<div class="text-center text-2xl py-20">
    <div class="text-2xl font-bold m-5 pb-10">Foire Aux Questions</div>
    <a href="#" class="my-24 justify-center justify-center p-2 lg:px-4 md:mx-2 text-green-900 text-center border border-solid border-green-900 rounded hover:bg-green-900 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1 w-32">
        Poser votre question!
    </a>
</div>

<div class="grid grid-cols-2 place-content-start">
    @for ($i = 0; $i < 10; $i++)
    <div class="m-5 bg-white p-2 text-justify shadow-xl ring-1 ring-gray-900/5 sm:rounded-lg sm:px-10">
        <div class="divide-y divide-gray-300/50">
            <div class="pb-3 text-gray-900">
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                <div>Par Lorem ipsum</div>
            </div>
            <div>
                <div class="pt-3 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultricies, turpis ac tincidunt posuere, ipsum tortor tristique ipsum, et fermentum magna elit pharetra purus. Donec porttitor purus est, tincidunt tempor arcu euismod in. Nam faucibus egestas commodo. Donec suscipit mauris.</div>
                <div class="flex items-center pt-3 text-gray-600">
                    <div class="mr-2 h-10 w-10 flex-shrink-0 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov" /></div>
                    <div class="font-medium text-gray-800">Lorem ipsum</div>
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>

<div class="flex justify-center m-5">
    <a href="#" class="flex items-center justify-center p-2 lg:px-4 md:mx-2 text-green-900 text-center border border-solid border-green-900 rounded hover:bg-green-900 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1 w-32">
        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
        </svg>
        Previous
    </a>

    <a href="#" class="flex items-center justify-center p-2 lg:px-4 md:mx-2 text-green-900 text-center border border-solid border-green-900 rounded hover:bg-green-900 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1 w-32">
        Next
        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
    </a>
</div>
@endsection
