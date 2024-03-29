@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/6.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>CONTACT US</span>
            </div>
            <div class="w-full p-4">
                <div class=" w-full flex flex-col  gap-6 py-2">
                    <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-4 text-white">

                        <div class="w-full p-2 flex flex-col gap-2">

                            <span class="text-3xl text-darkTheme font-bold">
                            Get In Touch
                       </span>
                            <form action="" class="mt-4 flex flex-col gap-6  ">
                                <input type="text" class="w-full rounded-sm border-[1px] px-4 py-2 border-darkTheme focus:border-[1px] focus:ring-0 focus:ouline-none " placeholder="Your Name">
                                <input type="email" class="w-full rounded-sm border-[1px] px-4 py-2 border-darkTheme focus:border-[1px] focus:ring-0 focus:ouline-none " placeholder="Your Email">
                                <input type="text" class="w-full rounded-sm border-[1px] px-4 py-2 border-darkTheme focus:border-[1px] focus:ring-0 focus:ouline-none " placeholder="Your Subject">
                                <textarea rows="3" class="w-full  rounded-sm border-[1px] px-4 py-2 border-darkTheme focus:border-[1px] focus:ring-0 focus:ouline-none " placeholder="Your Message"></textarea>
                                <button class="bg-darkTheme w-max text-white font-semibold py-2 px-12 border-[1px] border-darkTheme rounded-sm hover:text-darkTheme hover:bg-white transition ease-in duration-2000">
                                    Send Message </button>
                            </form>
                        </div>

                        <div class="w-full p-2 flex flex-col gap-2">
                            <iframe class="lg:h-[400px] md:h-[350px] sm:h-[300px] h-[200px] w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d583.6031945236584!2d77.41491778437947!3d30.81377232526194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f6f000f5f0a59%3A0xf18113ac4bb1b934!2sGPS%20Nohradhar!5e1!3m2!1sen!2sin!4v1711711411827!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="flex gap-2 mt-4">
                                <div class="w-max flex gap-2 text-black">
                                    <div class="flex items-center">
                                        <i class="fa fa-envelope text-darkText font-bold text-2xl" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <span class="font-semibold text-md  text-danger">Email</span>
                                        <span class="font-normal text-xs text-darkText">gdcnohradhar@gmail.com</span>
                                    </div>
                                </div>
                                <div class="w-max flex gap-2 text-black">
                                    <div class="flex items-center">
                                        <i class="fa fa-phone text-darkText font-bold text-2xl" aria-hidden="true"></i>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <span class="font-semibold text-md  text-danger">Phone</span>
                                        <span class="font-normal text-xs text-darkText">01799-220821</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
