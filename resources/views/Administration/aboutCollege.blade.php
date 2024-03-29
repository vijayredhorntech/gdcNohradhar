@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/7.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>ABOUT COLLEGE</span>
            </div>
            <div class="w-full p-4">

                <div class="w-full p-4">
                    <img src="{{asset('assets/images/c1.png  ')}}" class="rounded-md" alt="">
                </div>

                <p class=" mt-8 text-darkText italic text-md"><strong>Govt. Degree College NOHRADHAR</strong> came into existence in the year 2022 and since then
                    has made a steady progress towards ensuring quality education to its students. Situated at the
                    top of a hill, it provides a bird’s eye view of the surrounding area.</p>
                <p class=" mt-8 text-darkText italic text-md">It is located in the serene and
                        picturesque beauty of Churdhar range in the ambience of chaste mountains covered with
                        evergreen cedar trees on one side and the thick woods of beautiful red rhododendron on the
                        other.</p>
                <p class=" mt-8 text-darkText italic text-md">Since its inception, the college had been running in <strong>‘Hostel Building of G.S.S.S. Nohradhar‘</strong>
                    and started operations w.e.f. June 2022. One batch of undergraduate class have already been
                    passed out from this institute till date. The college presently has two classrooms.</p>
                <p class=" mt-8 text-darkText text-md">The college offers UG programmes in following subjects of Arts stream: English, History, Political Science,
                    Hindi, Economics. The dedicated and highly motivated faculty of the college earnestly endeavors to make the
                    process of learning, an adventure as well as a life enriching experience.</p>


            </div>

        </div>
    </div>
@endsection
