@extends('layout')

@section('content')
@include('partials/_hero')
@include('partials/_search')
    


    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @if(count($listings) == 0)
        <h2>No Listings</h2>
    @endIf


    @foreach($listings as $listing)
    {{-- if you are passing a var you should add : before the prop name
        otherwise its okey to do it without it
         --}}
        <x-listing-card :listing="$listing" />
    @endforeach

    </div>
@endsection