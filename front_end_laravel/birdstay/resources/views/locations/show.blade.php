@extends('layouts.layout')

@section('style')
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        body {
            min-height: 100%;
            margin: 0;
            padding: 0;
        }
        html {
            height: 100%;
        }

    </style>
@endsection
@section('main')

    <div id="map" style="width: 100%; height: 100%;">
        {!! Mapper::render() !!}
    </div>

@endsection
