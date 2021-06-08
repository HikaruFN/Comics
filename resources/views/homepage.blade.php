@extends('layouts.app')

@section('main_placeholder')

    <div class="main-container">

        <div class="wrapper">

            {{-- Current Series --}}
            <div class="current-series">

                <span>CURRENT SERIES</span>

            </div>
            {{-- End Current Series --}}

            {{--Comics--}}
            <div class="comics-container">

                @foreach ($comics as $item)

                    <div class="comic-card">

                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">

                        <span>{{$item['title']}}</span>

                    </div>

                @endforeach

            </div>
            {{--Comics--}}

            {{-- Load More --}}
            <div class="load-more-container">

                <div class="load-more">

                    <a href="#">LOAD MORE</a>

                </div>

            </div>
            {{-- End Load More --}}

        </div>

    </div>

    {{-- Sub Main--}}

    <div class="sub-main-container">

        <div class="wrapper">

            {{-- Sub Main Nav --}}

            <div class="sub-main-nav-container">

                <div class="sub-main-nav-option">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="buy-comics-digital-comics">
                    <span>DIGITAL COMICS</span>
                </div>

                <div class="sub-main-nav-option">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="buy-comics-merchandise">
                    <span>DC MERCHNDISE</span>
                </div>

                
                <div class="sub-main-nav-option">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="buy-comics-subscriptions">
                    <span>SUBSCRIPTION</span>
                </div>

                <div class="sub-main-nav-option">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="buy-comics-shop-locator">
                    <span>COMIC SHOP LOCATOR</span>
                </div>

                <div class="sub-main-nav-option">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="buy-dc-power-visa">
                    <span>DC POWER VISA</span>
                </div>

            </div>

            {{-- Sub Main Nav --}}



        </div>

    </div>

    {{-- End Sub Main--}}

@endsection

