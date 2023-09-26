@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <nav class="flex justify-between z-50" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 sm:mb-0">
            <li>
                <div class="flex items-center">
                    <button id="dropdownProject" data-dropdown-toggle="dropdown-project"
                        class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900  rounded-lg  focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700"><svg
                            class="mr-1.5 w-3 h-3" aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M80 104c13.3 0 24-10.7 24-24s-10.7-24-24-24S56 66.7 56 80s10.7 24 24 24zm80-24c0 32.8-19.7 61-48 73.3v87.8c18.8-10.9 40.7-17.1 64-17.1h96c35.3 0 64-28.7 64-64v-6.7C307.7 141 288 112.8 288 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V160c0 70.7-57.3 128-128 128H176c-35.3 0-64 28.7-64 64v6.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3V352 153.3C19.7 141 0 112.8 0 80C0 35.8 35.8 0 80 0s80 35.8 80 80zm232 0c0-13.3-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24s24-10.7 24-24zM80 456c13.3 0 24-10.7 24-24s-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24z" />
                        </svg>jrmhdd.com<svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <div id="dropdown-project"
                        class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="https://github.com/JRMHD" target="_blank"
                                    class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">project.jrmhdd.com</a>
                            </li>
                            <li>
                                <a href="https://github.com/JRMHD" target="_blank"
                                    class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">My
                                    Archievement</a>
                            </li>
                            {{-- <li>
                                <a href="#"
                                    class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Social Profiles</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </li>
            <span class="mx-2 text-gray-400">/</span>
            <li aria-current="page">
                <div class="flex items-center">
                    <button id="dropdownDatabase" data-dropdown-toggle="dropdown-database"
                        class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-600  rounded-lg   focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-gray-300 dark:focus:ring-gray-700"><svg
                            class="mr-1.5 w-3 h-3" aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M80 104c13.3 0 24-10.7 24-24s-10.7-24-24-24S56 66.7 56 80s10.7 24 24 24zm80-24c0 32.8-19.7 61-48 73.3v87.8c18.8-10.9 40.7-17.1 64-17.1h96c35.3 0 64-28.7 64-64v-6.7C307.7 141 288 112.8 288 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V160c0 70.7-57.3 128-128 128H176c-35.3 0-64 28.7-64 64v6.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3V352 153.3C19.7 141 0 112.8 0 80C0 35.8 35.8 0 80 0s80 35.8 80 80zm232 0c0-13.3-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24s24-10.7 24-24zM80 456c13.3 0 24-10.7 24-24s-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24z" />
                        </svg>
                        About Me
                        <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <div id="dropdown-database"
                        class="z-10 hidden  divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="https://github.com/JRMHD" target="blank"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Portfolio</a>
                            </li>
                            {{-- <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Personal
                                    Background</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Intrest
                                    & Hobbies</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Archievement
                                    & Goals</a>
                            </li>

                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Experience</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </li>
        </ol>
    </nav>
    {{-- body --}}

    <div id="gallery" class="relative w-full z-0" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images\slider\slide 1.jpg"
                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="images\slider\slide 2.jpg"
                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images\slider\slide 3.jpg"
                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images\slider\slide 4.jpg"
                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images\slider\slide 5.jpg"
                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    {{-- about me --}}
    <div class=" text-blue-300 text-center py-6">
        <h1 class=" text-2xl uppercase border-l shadow-md">
            <span class=" bg-blue-600 text-gray-100 p-2 mt-3 rounded-lg">My Projects</span>
        </h1>
    </div>
    <div class=" mx-10 my-4">
        <ol class="relative border-l border-gray-200 dark:border-gray-700">
            @foreach ($projects as $project)
                <li class="mb-10 ml-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                        <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                        {{ $project->title }}
                        <span
                            class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ml-3">{{ $project->label }}</span>
                    </h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                        {{ $project->time }}
                    </time>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                        {{ $project->description }}
                    </p>
                    <a href="{{ $project->url }}" target="_blank"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                            class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                clip-rule="evenodd"></path>
                        </svg> Download Project</a>
                </li>
            @endforeach
            {{-- <li class="mb-10 ml-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                    Coffe project in laravel

                </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Done By May
                    2023</time>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Introducing our groundbreaking
                    coffee selling project, where passion and innovation unite. Discover an online platform that
                    revolutionizes the way you enjoy your daily cup of joe.</p>
                <a href="https://github.com/JRMHD/COFEE-WEB.git" target="_blank"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                        class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                            clip-rule="evenodd"></path>
                    </svg> Download Project</a>
            </li>
            <li class="mb-10 ml-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">School Management System in Laravel
                </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Done By April
                    2023
                </time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Empower your educational institution with
                    our cutting-edge school management system built on the robust Laravel framework.</p> <a href="https://github.com/JRMHD/james_website.git" target="_blank"
                class=" mb-6 ml-6 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                    class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                        clip-rule="evenodd"></path>
                </svg> Download Project</a>
           
            </li>
            <li class="ml-6 mb-6">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Copy All Images into one Folder Using
                    Python</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Done By March
                    2023</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Effortlessly organize and consolidate
                    your scattered image files with our Python-powered project, 'Copy All Images into One Folder.'</p>  <a href="https://github.com/JRMHD/Python-Moving-images-from-Downloads-to-Image-Folder.git" target="_blank"
                class=" mb-6 ml-6 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                    class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                        clip-rule="evenodd"></path>
                </svg> Download Project</a>

         
            </li>
             <li class="ml-6 mt-10">
                <span
                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Nav Bar in Html and Css </h3>
                <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Done By Feb
                    2023</time>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Elevate your website's navigation with
                    our meticulously crafted HTML and CSS project, 'Nav Bar.' Enhance user experience and aesthetics by
                    implementing a sleek and responsive navigation bar that seamlessly adapts to different screen sizes.</p>   <a href="https://github.com/JRMHD/Reagan.git" target="_blank"
                class=" mb-6 ml-6 mt-4 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                    class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                        clip-rule="evenodd"></path>
                </svg> Download Project</a>
      
            </li> --}}
        </ol>
    </div>
    {{-- Form  start --}}
    @auth
        <div class="container mx-auto py-10">
            <div class="bg-gray-900 p-8 rounded shadow">
                <h2 class="text-2xl font-bold mb-4 text-white">Add Data</h2>
                @if (session('success'))
                    <div class="bg-green-200 text-green-800 py-2 px-4 rounded mb-4">{{ session('success') }}</div>
                @endif
                @auth
                    <form action="/data" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="label" class="block font-bold mb-2 text-white">Label:</label>
                            <input type="text" name="label" id="label" class="w-full border border-white p-2 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="title" class="block font-bold mb-2 text-white">Title:</label>
                            <input type="text" name="title" id="title" class="w-full border border-white p-2 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="time" class="block font-bold mb-2 text-white">Time:</label>
                            <input type="datetime-local" name="time" id="time"
                                class="w-full border border-white p-2 rounded">
                            {{-- <input type="datetime" name="" id=""> --}}
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block font-bold mb-2 text-white">Description:</label>
                            <textarea name="description" id="description" class="w-full border border-gray-300 p-2 rounded"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="url" class="block font-bold mb-2 text-white">URL:</label>
                            <input type="text" name="url" id="url" class="w-full border border-white p-2 rounded">
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
                    </form>
                @endauth
            </div>

            {{-- <div class="mt-4">
            <h2 class="text-2xl font-bold mb-4 text-white">Projects</h2>
            <table class="border border-white w-full">
                <thead>
                    <tr class=" text-white">
                        <th class="border border-white p-2 font-bold">Label</th>
                        <th class="border border-white p-2 font-bold">Time</th>
                        <th class="border border-white p-2 font-bold">Description</th>
                        <th class="border border-white p-2 font-bold">URL</th>
                    </tr>
                </thead>
                <tbody class=" text-white">
                    @foreach ($projects as $project)
                        <tr>
                            <td class="border border-white p-2">{{ $project->label }}</td>
                            <td class="border border-white p-2">{{ $project->time }}</td>
                            <td class="border border-white p-2">{{ $project->description }}</td>
                            <td class="border border-white p-2">{{ $project->url }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}
        </div>
    @endauth
    {{-- form end  --}}
    <div>
        <div>
            <h1 class=" text-center text-2xl text-yellow-300 pb-3 underline">
                <span>
                    What does clients say About Us..
                </span>
            </h1>
        </div>
        <div id="gallery" class="relative w-full z-0" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#"
                        class="flex flex-col items-center  border border-gray-200 rounded-lg shadow md:flex-row w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                            src="images\Emily Baker.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Emily Baker,
                                Owner of Cup of Joy Café.</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> "JRMHD's Coffee Project in
                                Laravel has transformed our online coffee business. The seamless ordering system, integrated
                                payment gateways, and personalized user profiles have made it incredibly convenient for our
                                customers to explore and purchase our premium blends. Our sales have skyrocketed since the
                                launch of the platform." </p>
                        </div>
                    </a>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <a href="#"
                        class="flex flex-col items-center  border border-gray-200 rounded-lg shadow md:flex-row w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                            src="images\sarah johson.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Sarah
                                Johnson, Principal of Maplewood School District.</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"has revolutionized our
                                administrative processes. From attendance tracking and grading to seamless communication
                                with parents, the platform has streamlined our operations, saving valuable time and effort.
                                We have witnessed improved efficiency and communication across all departments."</p>
                        </div>
                    </a>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#"
                        class="flex flex-col items-center  border border-gray-200 rounded-lg shadow md:flex-row w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                            src="images\Laura hanandez.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Laura
                                Hernandez, Lead Photographer at Picture Perfect Studios.</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> "JRMHD's Python-based 'Copy All
                                Images into One Folder' project has been a game-changer for our photography studio. With
                                thousands of images scattered across different folders, the automation provided by this
                                solution saved us countless hours. Our image management workflow has become seamless and
                                efficient, allowing us to focus more on creativity and less on organization."</p>
                        </div>
                    </a>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#"
                        class="flex flex-col items-center  border border-gray-200 rounded-lg shadow md:flex-row w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                            src="images\ceo jrmhd.webp" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Reagan
                                Mukabana, CEO JRMHD Technologies</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> "Working with JRMHD has been an
                                absolute pleasure. Their expertise and commitment to delivering high-quality projects have
                                surpassed our expectations. From the Coffee Project in Laravel to the School Management
                                System and Copy All Images into One Folder Using Python, they have consistently demonstrated
                                their proficiency in various technologies.

                                JRMHD's team of professionals truly understands our requirements and goes above and beyond
                                to ensure our satisfaction. Their attention to detail, excellent communication, and ability
                                to deliver projects on time have made them our go-to partner for all our development needs."
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#"
                        class="flex flex-col items-center  border border-gray-200 rounded-lg shadow md:flex-row w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                            src="images\john smith.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">John Smith,
                                CEO of ABC Corp.</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"JRMHD's Nav Bar project
                                revolutionized our website's navigation. The sleek and responsive design captivated our
                                users, enhancing their browsing experience and driving higher engagement. Their expertise
                                and attention to detail are unparalleled."</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    {{-- footer --}}
@endsection
