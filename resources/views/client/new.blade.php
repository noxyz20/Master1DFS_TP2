@extends('client.layouts.main')

@section('title', $setting[0]['Title'])

@section('content')
    <style>
        h1 {
            font-size: 3rem;
            line-height: 1;
        }
    </style>
    <div class="flex">
        <div class="flex w-full">
            <div>
                <h1>{{$post[0]['Title']}}</h1>
                <img class="w-full" src="{{asset('images/'.$post[0]['Banner'])}}">
                <div>
                    {!! html_entity_decode($post[0]['Content'], ENT_QUOTES, 'UTF-8') !!} 
                </div>
            </div>
            <br><br>
        </div>
    </div>
@stop

