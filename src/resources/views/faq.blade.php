@extends('layouts.main')

@section('title') {{'FAQ'}} @endsection

@section('content')
<div class="text-center text-2xl py-20">
    <div class="text-2xl font-bold m-5 pb-10">Foire Aux Questions</div>
    <x-button-border>
        Poser votre question!
    </x-button-border>
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
@endsection
