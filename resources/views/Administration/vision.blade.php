@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/26.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>The Vision</span>
            </div>
            <div class="w-full p-4">
                <p class=" text-darkText italic text-md">The entire team of professionals at this college is driven by the vision to help the students seek
                    wisdom and follow the path of righteousness with the motive to preserve the values of democracy,
                    justice and liberty, equality and fraternity, sense of duty and patriotism to make the nation great and
                    strong. True education is training of both the head and the heart. Knowledge without wisdom is
                    meaningless. Therefore educating the mind without morals does not serve the actual purpose of
                    education. Education means: Cultivating inner strength, learning self-discipline and eagerness to learn.
                    Educated persons are those who choose wisely and consciously under all circumstances. They choose
                    wisdom over foolishness, good over bad and virtue over vice. The illusion of knowledge which leads to
                    ignorance is not education. We intend to provide the society with competent men and women, who as
                    cultivated individuals are fit to serve the society and the nation.</p>
                <p class="mt-8 text-darkText text-lg font-semibold">“To be an educational institution of repute, dedicated to academic excellence with a humane face
                    contributing to social transformation through improvement in the quality of life.”</p>
            </div>

        </div>
    </div>
@endsection
