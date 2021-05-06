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
        @if ($setting[0]['Main'] == 0)
            <div class="flex w-4/6">
                @foreach ($posts as $post)
                    <div>
                        <h2 class="text-2xl">{{$post['Title']}}</h2>
                        <img class="w-2/3" src="{{asset('images/'.$post['Banner'])}}">
                        <a href="news/{{$post['ID']}}" class="uppercase text-sm text-blue-600 font-bold">read more</a>
                    </div>
                    <br><br>
                @endforeach
            </div>
            <div class="flex w-2/6">
                azeaze
            </div>
        @endif
        @if ($setting[0]['Main'] == 1)
            <div class="flex w-full">
                @foreach ($posts as $post)
                    <div>
                        <h2 class="text-2xl">{{$post['Title']}}</h2>
                        <img class="w-full" src="{{asset('images/'.$post['Banner'])}}">
                        <a href="news/{{$post['ID']}}" class="uppercase text-sm text-blue-600 font-bold">read more</a>
                    </div>
                    <br><br>
                @endforeach
            </div>
        @endif
    </div>
@stop

