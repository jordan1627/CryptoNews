<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
    <title>Crypto News</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">







        <!-- Styles -->
       <link rel="stylesheet"  href="/css/app.css">

        <livewire:styles />

        <!-- Scripts -->
        <script src="js/app.js" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
           <a href="#"><img src="#" alt="logo"></a>

             <div class="flex items">
             <a href="/"><h1 class="mt-4 text-sm text-gray-700 underline">Home</h1></a>
             @if (Route::has('login'))
                <div class=" px-6 py-4 mt-2 md:mt-0">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
               
                  </div>
        </header>
             <main class="container mx-auto max-w-custom flex flex-col md:flex-row">
               <div class="w-70 mx-auto md:mx-0 md:mr-5">
                   <div class="bg-white mx-auto border-2 md:sticky md:top-8 border-blue rounded-xl mt-16"
                   style="
                    border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                    border-image-slice: 1;
                    background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                    background-origin: border-box;
                    background-clip: content-box, border-box;
      "
>
                   
                   
                       <div class="text-center px-6 pt-6">
                         <h3 class="font-semibold text-base">Add an Idea</h3>
                        <p class="text-xs mt-4">
                           @auth
                           Let us know what you would like and we'll take  a look Over!  


                           @else
                           Please Login To Create Idea
                           @endif
                        
                        
                        
                        </p>
                       
                       </div>
                           @auth
                           <livewire:create-idea />
                          @else
                               <div class="my-6 text-center">
                               
                               <a
                                href="{{ route('login') }}"
                                class=" justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 ">
                                       <span class="ml-1">login</span>
                                       </a>
                                       <a
                                href="{{ route('register') }}"
                                class=" justify-center w-1/2 h-11 text-xs bg-gray-500 text-white font-semibold rounded-xl border border-blue hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                                       <span class="ml-1">Sign Up</span>
                                       </a>
                               </div>
                           @endauth
                   </div>
               </div>

               <div class="w-full px-2 md:px-0 md:w-175">
                         <nav class="hidden md:flex items-center justify-between text-xs">
                                <ul class="flex upperclass font-semibold border-b-4 pb-3 space-x-10">
                                   <li><a href="#" class="border-b-4 pb-3 border-blue">ALL IDEAS (89)</a></li>
                                   
                                   <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">CONSIDERING (6)</a></li>
                                   <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">IN PROGRESS (1)</a></li>
                                   </ul>
                                   <ul class="flex upperclass font-semibold border-b-4 pb-3 space-x-10">
                                   <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">IMPLEMENTED (10)</a></li>
                                   <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">CLOSED (55)</a></li>
                                
                                </ul>
                         
                         </nav>
                  <div class=mt-8>
                      {{ $slot}}
                  </div>
               
               </div>
               
               </main>
               <livewire:scripts />
               <div>

    </body>
</html>
