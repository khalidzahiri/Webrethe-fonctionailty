@extends('layouts.app')
@section('content')
<h1> Créer un nouveau module</h1>
<div>
    <form action="{{ route('module.store') }}" method="post">

            @csrf
            <label for="name">Nom de module :</label>
            <input type="text" id="name" name="name">
            <input type="number"  name="vitesse">
            <input type="number" name="temperature">
            <input type="number" name="number_of_data">


    </form>
</div>
@endsection