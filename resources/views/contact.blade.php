@extends('layouts.app')
@section('content')

@if (session('success'))
<div id="alert-border-3" class="flex p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <div class="ml-3 text-sm font-medium">
     {{session('success')}} <a href="{{route('dashboard')}}" class="font-semibold underline hover:no-underline">Go back</a>. Dashboard.
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
      <span class="sr-only">Dismiss</span>
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div> 
@endif





    <section class="bg-gray-900 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center">
<<<<<<< HEAD
                <h2 class="text-3xl font-bold mb-4 uppercase text-yellow-500">Contact US</h2>
=======
                <h2 class="text-3xl font-bold mb-4 uppercase text-yellow-500">Contact Me</h2>
>>>>>>> 92d823f9512e06acf3b2229a0426abad57e72ae4
                <p class="text-lg mb-6">Feel free to get in touch with me for any inquiries or collaborations.</p>
            </div>

            <div class="flex flex-col md:flex-row justify-between">
                <div class="md:w-1/2">
                    {{-- <h3 class="text-xl font-bold mb-2">Contact Information</h3>
                    <ul class="mb-6">
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M20 3H4C2.89 3 2 3.89 2 5V19C2 20.11 2.89 21 4 21H20C21.11 21 22 20.11 22 19V5C22 3.89 21.11 3 20 3ZM20 19H4V5H20V19ZM9 8H11V16H9V8ZM13 8H15V16H13V8Z" />
                            </svg>
                            <span>+254706378245</span>
                        </li>
                        <li class="flex items-center mb-2">
                            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M21 5H3C1.89 5 1.01 5.89 1.01 7L1 17C1 18.11 1.89 19 3 19H21C22.11 19 23 18.11 23 17V7C23 5.89 22.11 5 21 5ZM21 17H3V7H21V17ZM12 9C9.24 9 7 11.24 7 14C7 14.55 7.45 15 8 15H16C16.55 15 17 14.55 17 14C17 11.24 14.76 9 12 9ZM16 13H8C7.45 13 7 12.55 7 12C7 10.34 9.34 8.99 12 8.99C14.66 8.99 17 10.34 17 12C17 12.55 16.55 13 16 13Z" />
                            </svg>
                            <span>reaganmukabana@gmail.com</span>
                        </li>
                    </ul> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8243823282664!2d36.821450756335565!3d-1.278938723600918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f178140704a21%3A0x869aec943f2ec4ed!2sBEYOND%20SURVIVAL%20CAMPAIGN!5e0!3m2!1sen!2ske!4v1686558693714!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>

                <div class="md:w-1/2 border p-4 rounded-lg mx-auto">
                    <h3 class="text-xl font-bold mb-2">Send a Message</h3>
                    <form action="{{ route('contact-post') }}" method="POST" class="max-w-lg">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-white mb-1">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full bg-gray-800 rounded border border-gray-700 px-3 py-2 text-white placeholder-gray-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-white mb-1">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full bg-gray-800 rounded border border-gray-700 px-3 py-2 text-white placeholder-gray-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-white mb-1">Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full bg-gray-800 rounded border border-gray-700 px-3 py-2 text-white placeholder-gray-500" required></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded flex p-bg-">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15">
                                    </path>
                                </svg>
                                Submit
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
    </section>

    </section>
@endsection
