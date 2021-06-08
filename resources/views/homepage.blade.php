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

                @foreach ($data as $item)

                    <div class="comic-card">

                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}">

                        <span>{{$item['title']}}</span>

                    </div>

                @endforeach

            </div>
            {{--Comics--}}

        </div>

    </div>

@endsection

