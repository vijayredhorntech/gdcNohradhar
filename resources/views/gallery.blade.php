@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/6.jpg')}}">

    <div class="w-full flex flex-col items-center p-4  relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>{{$title}}</span>
            </div>
            <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4 p-4" uk-lightbox>

                @foreach($images as $image)

                    <a class="uk-button uk-button-default w-full h-40 bg-lightTheme rounded-md p-1 group" href="{{$image}}" data-caption="GDC Nohradhar">
                        <img class="w-full h-full rounded-md group-hover:scale-105 transition ease-in duration-2000" src="{{$image}}" alt="">
                    </a>

                @endforeach


            </div>

        </div>
    </div>
@endsection
