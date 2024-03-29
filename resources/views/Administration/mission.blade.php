@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/7.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>The Mission</span>
            </div>
            <div class="w-full p-4">
                <p class=" text-darkText italic text-md">The Higher education being at the apex of the entire educational structure influences all levels of
                    education and thus affects the future of the nation. Our mission, as an institute of higher education, would be to
                    inculcate among students: universal values, curiosity to acquire knowledge, habits of observation and enquiry,
                    strong belief in their own strengths, patience and ability to work hard</p>
            </div>

        </div>
    </div>
@endsection
