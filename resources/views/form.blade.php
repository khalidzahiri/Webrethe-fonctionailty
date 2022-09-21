@extends('layouts.app')
@section('content')
<h1 class="w-60 m-auto my-5"> Créer un nouveau module</h1>

{{--contenaire du formulaire.--}}
<div>

    <form class="w-full m-auto max-w-sm" action="{{ route('module.store') }}" method="post">
        @csrf
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                    Nom de module
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="transform hover:scale-110 motion-reduce:transform-none bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="name" name="name" type="text" >
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="number_of_data">
                    Number of data
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="transform hover:scale-110 motion-reduce:transform-none bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="number_of_data" name="number_of_data" type="number">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="vitesse">
                    vitesse
                </label>
            </div>
            <div class="md:w-2/3">
                <input class=" transform hover:scale-110 motion-reduce:transform-none bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 " id="vitesse" type="number" name="vitesse"  placeholder="m.s-1" >
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="temperature">
                    Température
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="transform hover:scale-110 motion-reduce:transform-none bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="temperature" type="number"name="temperature" placeholder="°C">
            </div>
        </div>

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3"></div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button class=" transform hover:scale-110 motion-reduce:transform-none shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Créer
                </button>
            </div>
        </div>
    </form>
</div>
@endsection