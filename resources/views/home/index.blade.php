@extends('layouts.app')
@section('title') Home @endsection
@section('content')
    @include('home.index.categories')
    @include('home.index.recipes')
@endsection
