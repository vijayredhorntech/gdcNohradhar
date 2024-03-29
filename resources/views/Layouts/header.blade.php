<div class="w-full bg-lightTheme h-max lg:flex  md:flex hidden justify-center mt-2 p-2">
    <div class="lg:w-70 md:w-90 w-full flex justify-end ">
        <div class="text-black text-sm font-normal w-max flex justify-center col-span-2">
            <ul class="flex gap-2 text-darkText">

                <a href="{{asset('assets/pdf/covid.pdf')}}" target="_blank">
                    <li class=" text-danger border-black pr-2 font-semibold">
                        Covid-19 Guidelines
                    </li>
                </a>

            </ul>
        </div>
    </div>
</div>

<div class="w-full lg:h-36 md:h-32 sm:h-28 h-20 flex  justify-evenly px-2 pb-2 sticky top-0 z-50" style="background-color: whitesmoke">
{{--    <img class="h-full w-auto" src="{{asset('assets/images/logo.png')}}" alt="">--}}

    <div class="w-max h-full flex flex-col justify-center items-center">
        <span class="text-darkText font-bold lg:text-5xl md:text-5xl sm:text-4xl text-3xl">G.D.C. Nohradhar</span>
        <span class="text-darkText font-semibold  lg:text-3xl md:text-4xl sm:text-3xl text-xl italic">Sirmour (H.P.)</span>
    </div>

    <div class="lg:flex hidden items-center gap-4 w-max">
        <div class="flex flex-col ">
            <span class="text-danger text-md font-normal"><i class="fa fa-phone"></i> Phone:-</span>
            <a href="tel:01799-220821" class="font-semibold text-lg text-darkTheme underline">01799-220821</a>
        </div>
        <div class="flex flex-col ">
            <span class="text-danger text-md font-normal"><i class="fa fa-envelope"></i> Email:-</span>
            <a href="mailto:gcsnagar25@rediffmail.com" class="font-semibold text-lg text-darkTheme underline">gdcnohradhar@gmail.com</a>
        </div>


    </div>
</div>

<div class="w-full sticky lg:top-36 md:top-32 sm:top-28 top-20 z-50 lg:h-max md:h-max sm:max-h-64 max-h-72 lg:overflow-y-visible md:overflow-y-visible sm:overflow-y-auto overflow-y-auto">
    <div class="bg-darkTheme w-full flex flex-col justify-center lg:items-center  items-start gap-2 relative px-2 ">
        <div class="w-max h-max lg:hidden flex">
            <i id="toggleButton"
               class="fa-solid fa-bars  ml-1 text-lg text-lightTheme p-2 rounded-sm hover:bg-lightTheme hover:text-darkTheme transition ease-in duration-2000"
               onclick="
            let menuList = document.getElementById('menuList');
            if(menuList.classList.contains('hidden')){
                menuList.classList.remove('hidden');
            }else{
                menuList.classList.add('hidden');
            }
            " aria-hidden="true"></i>
        </div>
        <ul class="  lg:flex hidden lg:flex-row flex-col text-lightTheme uppercase w-full items-end justify-center" id="menuList">
            <a href="{{route('home')}}">
                <li class="py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000">
                    Home
                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        About Us
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="{{route('administration/about-college')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                THE COLLEGE
                            </li>
                        </a>
                        <a href="{{route('administration/principal-message')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                PRINCIPAL MESSAGE
                            </li>
                        </a>
                        <a href="{{route('administration/mission')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                MISSION
                            </li>
                        </a>
                        <a href="{{route('administration/vision')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                VISION
                            </li>
                        </a>
                        <a href="{{route('administration/aim')}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                AIM
                            </li>
                        </a>




                    </ul>

                </li>
            </a>

            <a href="{{route('faculty',['type'=>'teaching'])}}">
                <li class="py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000">
                    TEACHING FACULTY
                </li>
            </a>
            <a href="{{route('faculty',['type'=>'non_teaching'])}}">
                <li class="py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000">
                    NON-TEACHING FACULTY
                </li>
            </a>





            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Committees
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="{{route('committee',['type'=>'admission_commitee'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ADMISSION COMMITTEE
                            </li>
                        </a>
                        <a href="{{route('committee',['type'=>'administrative_committee'])}}">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                ADMINISTRATIVE COMMITTEE
                            </li>
                        </a>

                    </ul>

                </li>
            </a>


            <a href="{{route('gallery')}}">
                <li class="py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000">
                    Gallery
                </li>
            </a>
            <a href="{{route('contact')}}">
                <li class="py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000">
                    Contact
                </li>
            </a>








        </ul>
    </div>
</div>
