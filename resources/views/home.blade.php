{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('home_main')

    <div class="container home-content">
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
        <div class="card">
            <div class="img-container">
                <img :src="details.thumb" alt="">
            </div>
            <p>detail series</p>
        </div>
    </div>

    <div class="container home-info">
        <ul>
            <li>
                <div>
                    <img src="" alt="">
                </div>
                <p>element text</p>
            </li>
            <li>
                <div>
                    <div>immagine</div>
                </div>
                <p>element text</p>
            </li>
            <li>
                <div>
                    <div>immagine</div>
                </div>
                <p>element text</p>
            </li>
            <li>
                <div>
                    <div>immagine</div>
                </div>
                <p>element text</p>
            </li>
            <li>
                <div>
                    <div>immagine</div>
                </div>
                <p>element text</p>
            </li>
        </ul>
    </div>
@endsection
