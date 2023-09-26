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
                        <a href="https://github.com/JRMHD" target="_blank"
                            class=" px-4 py-2 text-sm  hover:bg-gray-600  text-gray-200 my-auto hover:text-white flex">
                        
                        <svg fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-10 w-10 px-2"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path> <span class="pt-2">Github</span></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/reagan-mukabana-56972822b/" target="_blank" class="px-4 py-2 text-sm hover:bg-blue-600 text-blue-200 my-auto hover:text-white flex">
                            <svg fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-10 w-10 px-2">
                                <path d="M14 0H2C0.89 0 0 0.89 0 2V14C0 15.11 0.89 16 2 16H14C15.11 16 16 15.11 16 14V2C16 0.89 15.11 0 14 0ZM4.89 13.44H2.97V6.16H4.89V13.44ZM3.93 5.76C3.33 5.76 2.88 5.31 2.88 4.71C2.88 4.11 3.33 3.66 3.93 3.66C4.53 3.66 4.98 4.11 4.98 4.71C4.98 5.31 4.53 5.76 3.93 5.76ZM13.43 13.44H11.51V9.95C11.51 9.95 11.5 8.94 11.29 8.17C11.13 7.63 10.78 6.85 9.3 6.85C7.81 6.85 7.5 8.07 7.5 9.9V13.44H5.59V8.1C5.59 7.42 5.61 6.5 5.64 5.76H7.51L7.57 6.99H7.63C7.72 6.5 8.03 5.91 9.09 5.91C10.16 5.91 10.17 7.06 10.17 8.12V13.44H13.43Z" />
                            </svg>
                            <span class="pt-2">LinkedIn</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="https://twitter.com/nairobigoat" target="_blank" class="px-4 py-2 text-sm hover:bg-blue-400 text-blue-200 my-auto hover:text-white flex">
                            <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-6 w-6">
                                <path
                                    d="M23.998 4.56c-.884.392-1.838.656-2.838.777 1.02-.613 1.8-1.582 2.168-2.74-.956.57-2.02.986-3.152 1.208-.902-.964-2.185-1.56-3.608-1.56-2.726 0-4.938 2.212-4.938 4.94 0 .39.044.772.128 1.14C6.872 8.265 3.657 6.31 1.494 3.496.965 4.3.675 5.298.675 6.38c0 1.716.872 3.223 2.188 4.11-.807-.026-1.566-.248-2.227-.616v.06c0 2.396 1.705 4.392 3.972 4.843-.416.112-.856.172-1.308.172-.32 0-.634-.03-.938-.085.634 1.964 2.476 3.39 4.655 3.43-1.7 1.33-3.844 2.123-6.17 2.123-.4 0-.796-.022-1.188-.07 2.192 1.4 4.782 2.216 7.57 2.216 9.08 0 14.04-7.513 14.04-14.026 0-.214 0-.428-.015-.64.96-.698 1.8-1.566 2.46-2.556l-.046-.02z" />
                            </svg>
                            <span class="pt-2">Twitter</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                src="images\ceo jrmhd.webp" alt="reagan image" />
            <h5 class="mb-1 text-xl font-medium  text-white">Reagan Mukabana</h5>
            <span class="text-sm  text-gray-400">CEO JRMHD</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="https://www.instagram.com/techjrmhd/" target="_blank"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300  bg-blue-600  hover:bg-blue-700  ">
                    Follow Me
                </a>
                <a href="mailto:reaganmukabana@gmail.com" target="_blank"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center border border-gray-300 rounded-lg hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-200  bg-gray-800  text-white  hover:border-gray-700  ">
                    Email
                </a>
            </div>
        </div>



        <section class="bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
                <div class="flex flex-col justify-center">
                    <h1
                        class="mb-4 text-l font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-xl dark:text-white  ">
                        My name is Reagan Mukabana, and I am a multi-talented professional in the digital space. I go by the brand name JRMHD.</h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 ">representing my passion and expertise in computer programming, graphic design, and digital marketing.

                        As a computer programmer, I enjoy bringing ideas to life through coding. I have a deep understanding of various programming languages and frameworks, allowing me to develop robust and efficient software solutions.
                        
                        In the realm of graphic design, I have an eye for aesthetics and a knack for creating visually appealing designs. From logos and branding materials to website layouts and digital illustrations, I strive to craft compelling visuals that leave a lasting impression.
                        
                        Additionally, my skills extend to digital marketing, where I leverage my technical knowledge and creativity to drive results. From SEO optimization to social media campaigns, I know how to navigate the digital landscape and connect with target audiences effectively.
                        
                        </p>
                    {{-- <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                        <a href="tel:+254706378245" target="_blank"
                            class=" p-2 flex-row justify-center items-center  text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 whitespace-nowrap flex  space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                            Call Me
                            <svg class=" w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0l-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z"></path>
                              </svg>
                        </a>
                        <a href="https://wa.me/254706378245" target="_blank"
                            class="inline-flex justify-center items-center p-2 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            WhatsApp
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                              </svg>
                        </a>
                    </div> --}}
                    <div class=" flex space-y-0 text-lg left-0 -">
                        <a href="tel:+254706378245" target="_blank" class=" self-start flex text-gray-100 border border-white rounded-md p-1 my-auto  hover:text-white hover:bg-blue-400 bg-blue-700">Call
                            <svg class=" w-4 h-4 my-auto ml-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0l-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z"></path>
                              </svg>
                        </a>
                        <a href="https://wa.me/254706378245" target="_blank" class=" self-start flex text-gray-100 border border-white rounded-md p-1 my-auto ml-3 hover:text-white hover:bg-gray-400">WhatsApp
                            <svg fill="none" class=" w-6 h-6  my-auto ml-1" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                              </svg></a>
                    </div>
                </div>
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vgvwuiBpkjY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        {{-- <div class="flex flex-col justify-center bg-gray-900">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                We invest in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at JRMHD we
                focus on markets where technology, innovation, and capital can unlock long-term value and drive
                economic growth.</p>
        </div> --}}

    </div>
    <div class=" mb-4"></div>
@endsection
