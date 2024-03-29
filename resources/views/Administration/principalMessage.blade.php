@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/7.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>PRINCIPAL MESSAGE</span>
            </div>
            <div class="w-full p-2 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-4 grid-cols-1 gap-4 bg-blue-100  ">
                <div class="w-full flex flex-col items-center">
                    <div class=" w-[200px] lg:h-auto md:h-auto sm:h-auto h-[200px] bg-white p-2 rounded-md">
                        <img class="w-full h-full rounded-md" src="{{asset('assets/images/principal.png')}}" alt="">
                    </div>
                    <span class="text-darkText font-bold">Ved Prakash Sharma</span>
                    <span class="text-darkText font-normla italic">Principal</span>
                    <span class="text-darkText font-semibold text-xs">GOVT. DEGREE COLLEGE NOHRADHAR, SIRMAUR, H.P.</span>
                </div>

                <div class="w-full flex flex-col gap-4 lg:col-span-3 md:col-span-3 sm:col-span-3 col-span-1 px-4 text-justify">

                    <span class="text-darkText font-semibold text-2xl">Principal Message</span>
                    <span class="text-darkText font-semibold text-lg italic">Dear Students!</span>
                    <span class="text-darkText italic text-md">It gives me immense pleasure to welcome you to this college,
situated in surreal beauty of nature and serene environment, providing the most perfect
ambience for learning since its inception in 2022, this college has brought a new dawn of hope in
the lives of common people of the surrounding areas of Nohradhar valley of sirmour District in
Himachal Pradesh. We earnestly desire to make every attempt to prove worthy of the dreams,
hopes and aspiration of the people. As Vivekananda said, <strong>“Education is the Manifestation of the
perfection which is already in Man”</strong>. We, a team of dedicated professionals and devoted
individuals, Endeavour to make every attempt to help the students become better human beings,
responsible members of the society and the best citizens of the country by focusing on a holistic
development of each students through attainment of values, skills and desired competency levels
of behavior and knowledge. We firmly that education is not merely a process of acquisition of
facts and information. It is rather a process of completer development of a student’s personality.</span>
                    <span class="text-darkText italic text-md mt-8">
                        It is the inculcation of sight moral values, personal and social integrity and the ability to
lead life with dignity and honour. Our mission is to graduate students with a fine blend of
academic, workforce &amp; life skills of competencies. So as to help them discover &amp; perfect their
innate potential to achieve optimum success in life. A complete bouquet curricular and co-
curricular activities has been designed so as to bring about the complete development of a
student’s personality.
                    </span>
                    <span class="text-darkText italic text-md mt-8">
                   I, therefore urge you to take maximum advantage of the educational facilities available in
the college to fulfill your dreams and aspirations for a happy and prosperous life as spirited and
fulfilled individuals. I, once again welcome you all to this great institution of higher learning and
assure you of a nurturing and caring environment.
                    </span>
                    <span class="text-darkText font-semibold text-lg italic mt-8">With Best Wishes</span>



                </div>
            </div>

        </div>
    </div>
@endsection
