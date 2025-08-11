@extends('layout.master')

@section('title')
    Homepage
@endsection

@section('jumbotron')
    <div class="jumbotron mt-3" style="height: 550px; background-image: url('{{Vite::asset('resources/img/jumbotron.jpg')}}'); background-size: cover; background-position: center top; background-repeat: no-repeat;">
    </div>
@endsection

@section('content')

    @php
        $comics = config("comics");
    @endphp

    <div class="bg-dark text-white py-5">
        <div class="container position-relative">
            <div class="position-absolute" style="top: -80px; left: 0;">
                <div style="background-color: #0282f9; padding: 10px 20px; display: inline-block;">
                    <h4 class="text-white fw-bold m-0" style="font-family: Arial, sans-serif; letter-spacing: 1px;">CURRENT SERIES</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @foreach ($comics as $comic)
                            <div class="col-2">
                                <x-card>
                                    <x-slot:title>{{$comic['title']}}</x-slot:title>
                                    <x-slot:thumb>{{$comic['thumb']}}</x-slot:thumb>
                                </x-card>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-primary">Load More</button>
            </div>
        </div>
    </div>
@endsection

@section('blue-list')
<div style="background: #0282f9; padding: 50px 0;">
    <div class="container">
        <ul class="list-unstyled d-flex justify-content-center gap-5 mb-0">
            <li class="d-flex align-items-center text-white">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="Digital Comics" style="height: 50px; margin-right: 10px;">
                <span>DIGITAL COMICS</span>
            </li>
            <li class="d-flex align-items-center text-white">
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="DC Merchandise" style="height: 50px; margin-right: 10px;">
                <span>DC MERCHANDISE</span>
            </li>
            <li class="d-flex align-items-center text-white">
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="Subscription" style="height: 50px; margin-right: 10px;">
                <span>SUBSCRIPTION</span>
            </li>
            <li class="d-flex align-items-center text-white">
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="Comic Shop Locator" style="height: 50px; margin-right: 10px;">
                <span>COMIC SHOP LOCATOR</span>
            </li>
            <li class="d-flex align-items-center text-white">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="DC Power Visa" style="height: 50px; margin-right: 10px;">
                <span>DC POWER VISA</span>
            </li>
        </ul>
    </div>
</div>
@endsection
