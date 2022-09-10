@extends('layouts.app')
@section('content')
    <p> je suis la page des modules</p>
    @if($modules->count() > 0)
        @foreach($modules as $module)
            <h2><a href="{{ route('module.show', ['id'=> $module ->id]) }}">{{ $module->name }}</a></h2>
        @endforeach
    @else
        <snap>aucun module dans la base de données</snap>
    @endif
@endsection