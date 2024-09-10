{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('home_main')

    <div class="container home-content">
        @foreach ($data as $item)
            <div class="card">
                <div class="img-container">
                    <img src="{{$item['thumb']}}" alt="">
                </div>
                <p>{{$item['series']}}</p>
            </div>
        @endforeach
    </div>

    <div class="container home-info">
        <ul>
            <li>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                </div>
                <p>element text</p>
            </li>
            <li>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                </div>
                <p>element text</p>
            </li>
            <li>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                </div>
                <p>element text</p>
            </li>
            <li>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                </div>
                <p>element text</p>
            </li>
            <li>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                </div>
                <p>element text</p>
            </li>
        </ul>
    </div>
@endsection
