@extends('layouts.app')
@section('content')
    <div class="w-full max-w-full  border border-gray-200 rounded-lg shadow  bg-gray-800  ">
        <div class="flex justify-end px-4 pt-4">
            <button id="dropdownButton" data-dropdown-toggle="dropdown"
                class="inline-block text-gray-400 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-200  rounded-lg text-sm p-1.5"
                type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden text-base list-none  divide-y divide-gray-100 rounded-lg shadow w-44  bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton">
                    <li>
                        <a href="#"
                            class=" px-4 py-2 text-sm  hover:bg-gray-600  text-gray-200 my-auto hover:text-white flex">
                        
                        <svg fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-10 w-10 px-2"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path> <span class="pt-2">Github</span></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm  hover:bg-gray-600  text-gray-200  hover:text-white">
                        Linkedin
                            </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm   hover:bg-gray-600  text-gray-200  hover:text-white">
                        Twitter
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bonnie image" />
            <h5 class="mb-1 text-xl font-medium  text-white">Bonnie Green</h5>
            <span class="text-sm  text-gray-400">Visual Designer</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="#"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300  bg-blue-600  hover:bg-blue-700  ">
                    Follow Me
                </a>
                <a href="#"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center border border-gray-300 rounded-lg hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-200  bg-gray-800  text-white  hover:border-gray-700  ">
                    Email
                </a>
            </div>
        </div>



        <section class="bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
                <div class="flex flex-col justify-center">
                    <h1
                        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        We invest in the world’s potential</h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we
                        focus on markets where technology, innovation, and capital can unlock long-term value and drive
                        economic growth.</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                        <a href="#"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Get started
                            <svg aria-hidden="true" class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex justify-center items-center py-3 mt-4 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            Learn more
                        </a>
                    </div>
                </div>
                <div>
                    <iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl"
                        src="https://www.youtube.com/embed/KaLxCiilHns" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <div class="flex flex-col justify-center bg-gray-900">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                We invest in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we
                focus on markets where technology, innovation, and capital can unlock long-term value and drive
                economic growth.</p>
        </div>

    </div>
    <div class=" mb-4"></div>
@endsection
