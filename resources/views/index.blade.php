@extends('Layouts.layout')
@section('content')

    <div class="swiffy-slider slider-indicators-round">
        <ul class="slider-container">

            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="{{asset('assets/images/gallery/18.jpg')}}">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="{{asset('assets/images/gallery/17.jpg')}}">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="{{asset('assets/images/c1.jpeg')}}">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="{{asset('assets/images/gallery/12.jpg')}}">
            </li>
        </ul>

        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>

        <div class="slider-indicators">
            <button class="active"></button>
            <button></button>
            <button></button>
            <button></button>
        </div>
    </div>


    <div class="w-full h-max flex justify-center p-4 ">
        <div class="lg:w-[80%] md:w-[80%] w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 grid-cols-1 gap-2">
            <div class="w-full lg:col-span-2 md:col-span-2 col-span-1 h-max shadow-lg shadow-black">
                <div class="w-full flex flex-col items-center p-4 relative">
                    <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

                    </div>
                    <div class=" w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
                        <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                            <span>PRINCIPAL</span>
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
of behavior and knowledge. </span>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="w-full ">
                <div class="w-full bg-darkTheme text-lightText p-2">
                    <span>Upcoming Events</span>
                </div>
                <div class="w-full p-2 border-[1px] border-black border-t-0">
                    <marquee behavior="" direction="up" height="300px">
                        <ul class="flex flex-col gap-4">
                            <li>
                                <p class="  text-darkText italic text-md">
                                    # " Annual Prize Distribution Function 2023-24 will be held on 11th Nov. 2023
                                </p>
                            </li>

                        </ul>
                    </marquee>
                </div>


            </div>
        </div>
    </div>


    <div class="w-full h-max flex justify-center px-4 py-12 bg-gradient-to-b from-[#f8d887] to-[#da8d1f]">
        <div class="lg:w-[60%] md:w-[80%] w-full">
            <div class="w-full h-max">
                <div class="w-full  text-3xl text-center font-semibold text-darkText p-2">
                    <span>FACULTY</span>
                </div>
                <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 mt-6">
                    <a href="{{route('faculty',['type'=>'teaching'])}}">

                        <div
                            class="w-full bg-transparent border-[1px] border-black h-32 flex flex-col gap-2 items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                            <i class="fa fa-chalkboard-user text-4xl"></i>
                            <p class="italic text-md">
                                TEACHING FACULTY
                            </p>
                        </div>
                    </a>
                    <a href="{{route('faculty',['type'=>'non_teaching'])}}">

                        <div
                            class="w-full bg-transparent border-[1px] border-black h-32 flex flex-col gap-2 items-center justify-center text-darkText  hover:bg-darkTheme hover:text-lightText transition ease-in duration-2000 px-2">
                            <i class="fa fa-broom text-4xl"></i>
                            <p class="italic text-md">
                                NON-TEACHING FACULTY
                            </p>
                        </div>
                    </a>


                </div>
            </div>


        </div>
    </div>




    <div class="w-full h-max " style="background-image: url({{asset('assets/images/gallery/30.jpg')}})">
        <div class="w-full h-ful flex justify-center">
            <div class="lg:w-[80%] md:w-[80%] w-full">
                <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-12 px-4 py-16">
                    <div class="w-full h-full  bg-white rounded-b-xl">
                        <div class="w-full bg-darkTheme text-lg text-center font-semibold text-lightText p-2">
                            <span>ACADEMICS</span>
                        </div>
                        <div class="w-full p-2 grid grid-cols-1 gap-4  rounded-b-xl">
                            <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2 gap-4">
                                <a href="{{route('administration/about-college')}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-graduation-cap text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            College
                                        </p>

                                    </div>
                                </a>
                                <a href="{{route('administration/mission')}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-bullseye text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Mission
                                        </p>

                                    </div>
                                </a>
                                <a href="{{route('administration/vision')}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-eye text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Vision
                                        </p>

                                    </div>
                                </a>
                                <a href="{{route('faculty',['type'=>'teaching'])}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-chalkboard-user text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Staff
                                        </p>

                                    </div>
                                </a>
                                <a href="{{route('committee',['type'=>'admission_commitee'])}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-users text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Committee
                                        </p>

                                    </div>
                                </a>
                                <a href="{{route('gallery')}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-danger group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-video text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Gallery
                                        </p>

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>




                    <div class="w-full h-full  bg-white rounded-b-xl">
                        <div class="w-full bg-darkTheme text-lg text-center font-semibold text-lightText p-2">
                            <span>COMMITTEES</span>
                        </div>
                        <div class="w-full p-2 grid grid-cols-1 gap-4  rounded-b-xl">
                            <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-2 gap-4">
                                <a  href="{{route('committee',['type'=>'admission_commitee'])}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-book text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Admission Committee
                                        </p>

                                    </div>
                                </a>
                                <a  href="{{route('committee',['type'=>'admission_commitee'])}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-file text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Prospectus Committee
                                        </p>

                                    </div>
                                </a>
                                <a  href="{{route('committee',['type'=>'administrative_committee'])}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-chart-simple text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Career Counseling
                                        </p>

                                    </div>
                                </a>
                                <a  href="{{route('committee',['type'=>'administrative_committee'])}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-graduation-cap text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Scholarship Committee
                                        </p>

                                    </div>
                                </a>
                                <a  href="{{route('committee',['type'=>'administrative_committee'])}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-book text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            Library Committee
                                        </p>

                                    </div>
                                </a>
                                <a  href="{{route('committee',['type'=>'administrative_committee'])}}">
                                    <div
                                        class="w-full h-full bg-white  flex flex-col gap-2 shadow-lg items-center justify-center group text-darkText   px-2">
                                        <div class="h-12 w-12 flex justify-center items-center rounded-full bg-lightTheme text-success group-hover:bg-darkTheme group-hover:text-lightTheme transition ease-in duration-2000">
                                            <i class="fa fa-suitcase-medical text-xl"></i>
                                        </div>
                                        <p class="italic text-sm">
                                            First Aid Committee
                                        </p>

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="swiffy-slider slider-indicators-round slider-nav-autoplay slider-item-show6 mb-[15px]">
        <ul class="slider-container">
            <li>
                <div class="w-full h-48 bg-lightTheme mt-4 p-3 rounded-md relative">
                    <a href="{{route('gallery')}}">
                        <img src="{{asset('assets/images/gallery/1.jpg')}}" class="w-full h-full object-cover rounded-md"
                             alt="">
                    </a>
                </div>
            </li>
            <li>
                <div class="w-full h-48 bg-lightTheme mt-4 p-3 rounded-md relative">
                    <a href="{{route('gallery')}}">
                        <img src="{{asset('assets/images/gallery/7.jpg')}}" class="w-full h-full object-cover rounded-md"
                             alt="">
                    </a>
                </div>
            </li>
            <li>
                <div class="w-full h-48 bg-lightTheme mt-4 p-3 rounded-md relative">
                    <a href="{{route('gallery')}}">
                        <img src="{{asset('assets/images/gallery/14.jpg')}}" class="w-full h-full object-cover rounded-md"
                             alt="">
                    </a>
                </div>
            </li>
            <li>
                <div class="w-full h-48 bg-lightTheme mt-4 p-3 rounded-md relative">
                    <a href="{{route('gallery')}}">
                        <img src="{{asset('assets/images/gallery/16.jpg')}}" class="w-full h-full object-cover rounded-md"
                             alt="">
                    </a>
                </div>
            </li>
            <li>
                <div class="w-full h-48 bg-lightTheme mt-4 p-3 rounded-md relative">
                    <a href="{{route('gallery')}}">
                        <img src="{{asset('assets/images/gallery/17.jpg')}}" class="w-full h-full object-cover rounded-md"
                             alt="">
                    </a>
                </div>
            </li>
            <li>
                <div class="w-full h-48 bg-lightTheme mt-4 p-3 rounded-md relative">
                    <a href="{{route('gallery')}}">
                        <img src="{{asset('assets/images/gallery/4.jpg')}}" class="w-full h-full object-cover rounded-md"
                             alt="">
                    </a>
                </div>
            </li>
            <li>
                <div class="w-full h-48 bg-lightTheme mt-4 p-3 rounded-md relative">
                    <a href="{{route('gallery')}}">
                        <img src="{{asset('assets/images/gallery/18.jpg')}}" class="w-full h-full object-cover rounded-md"
                             alt="">
                    </a>
                </div>
            </li>


        </ul>

    </div>


@endsection
