@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/7.JPG')}}">


    <div class="w-full flex flex-col items-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>The Aim</span>
            </div>
            <div class="w-full p-4">
                <p class=" text-darkText italic text-md">Our aim is to help the students develop their potential by providing right kind of leadership. To develop and
                    integrate the intellectual, physical, aesthetic, ethical and spiritual powers of the students to make them highly
                    humane, cultured and integrated. A fine blend of resources like excellent teaching techniques , enriching cultural,
                    sports and co-curricular activities are designed for personal growth and development of leadership qualities and
                    team spirit to achieve this purpose. The focus is on development of 5 C’s to be successful in life: Character,
                    commitment,</p>
            </div>

        </div>
    </div>
@endsection
