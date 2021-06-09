@extends('layouts.app')

@section('main_placeholder')


    <div class="product-top-main">

        <div class="wrapper">

            {{--Product Card--}}
            <div class="product-card-container" style="background-image: url({{$product['thumb']}})">
                <span class="half-span">COMIC BOOK</span>
                <span>VIEW GALLERY</span>
            {{--End Product Card--}}

            </div>

        </div>
    </div>
    
    <div class="wrapper">

        <div class="product-core-main">

            {{--Comic Info--}}

            <div class="comic-info-container">

                {{--Comic Name--}}
                <div>
                    <h1>{{ $product['title']}}</h1>
                </div>
                {{--Comic Name--}}

                {{--Comic Sale Info--}}
                <div class="comic-sale-info-container">

                    {{-- Price--}}
                    <div class="comic-sale-info-price">
                        <span>U.S Price {{$product['price']}}</span>
                        <span>AVAILABLE</span>
                    </div>
                    {{-- End Price--}}

                    {{--Check Avbailability--}}
                    <div>
                        <a href="#">Check Avbailability  <i class="fas fa-sort-down"></i></a>
                    </div>
                    {{--End Check Avbailability--}}
                     
                </div>
                {{--End Comic Sale Info--}}

                {{-- Comic Description --}}

                <div class="comic-description-container">

                    <p>{{$product['description']}}</p>

                </div>

                {{-- End Comic Description --}}

            </div>

            <div class="advertisement-container">
                <h3>ADVERTISEMENT</h3>
                <img src="{{asset('img/adv.jpg')}}" alt="adv.jpg">
            </div>

            {{--End Comic Info--}}


        </div>

        
    </div>

    {{-- Talet and Specs --}}

    <div class="tes-container">

        <div class="wrapper">

            <div class="tes-content-container">
                 
                {{-- Talent --}}

                <div class="talent-container">

                    {{-- Title --}}

                    <div class="tea-element-container">

                        <h2>Talent</h2>

                    </div>

                    {{-- End Title --}}

                    {{--Art By--}}
                    <div class="tea-element-container">
                        
                        <div class="inner-tea-element-container">
                            <span>Art By: </span>
                        </div>

                        <div class="artists-links-container">
                            @foreach ($product['artists'] as $item)
                            <a href="">{{$item}}</a><span>, </span>
                            @endforeach
                        </div>

                    </div>
                    {{-- End Art By--}}

                     {{--Written By--}}
                     <div class="tea-element-container">
                        
                        <div class="inner-tea-element-container">
                            <span>Written By: </span>
                        </div>
                        
                        <div class="artists-links-container">
                            @foreach ($product['writers'] as $item)
                            <a href="">{{$item}}</a><span>, </span>
                            @endforeach
                        </div>

                    </div>
                    {{-- End Written By--}}

                </div>

                {{-- End Talent --}}

                {{-- Specs --}}

                <div class="specs-container">

                    {{-- Title --}}

                    <div class="tea-element-container">

                        <h2>Specs</h2>

                    </div>

                    {{--Art By--}}
                    <div class="tea-element-container">
                        
                        <div class="inner-tea-element-container">
                            <span>Series: </span>
                        </div>

                        <div class="artists-links-container">

                            <span>{{$product['series']}}</span>

                        </div>

                    </div>
                    {{-- End Art By--}}


                </div>

                {{-- End Specs --}}

                
                


            </div>

        </div>


    </div>



@endsection