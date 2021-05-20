<!-- Styles -->
<link rel="stylesheet"  href="/css/app.css">
<!-- Scripts -->
<x-app-layout>

<script src="/js/app.js" defer></script>
    <div class="filter flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
      <div class="w-full md:w-1/3">
         <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
           <option value="Category One">Category One</option>
           <option value="Category Two">Category Two</option>
           <option value="Category Third">Category Third</option>
           <option value="Category Four">Category Four</option>
         
         
         </select>
      </div>
      <div class="w-full md:w-1/3">
         <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
           <option value="Filter One">Filter One</option>
           <option value="Filter Two">Filter Two</option>
           <option value="Filter Third">Filter Third</option>
           <option value="Filter Four">Filter Four</option>
         
         
         </select>
      </div>
            <div class="w-full md:w-2/3 relative">
                  <input type="search" placeholder="Find an Idea" class="w-full rounded-xl bg-white border-none placeholder-gray-900 px-4 py-2 pl-8">
                  <div class="absolute top-0 flex items-center h-full ml-2">
                    <svg  class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                     </svg>
                   </div>
            </div>
    </div>  <!-- End Filter -->



    <div class="ideas-container space-y-6 my-6">
      @foreach ($ideas as $idea)
             <div class="idea-container hover:shadow-md transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
                <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                 <div class="text-center">
                     <div class="font-semibold text-2xl">12</div>
                     <div class="text-gray-500">Votes</div>

                 </div>
                    <div class="mt-8">
                      <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote
                      
                      </button>
                    </div>
                
            
                </div>

             
             <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
              <a href="#" class="flex-none mx-2  md:mx-0">
                <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl"> 
              </a>
              <div class=" w-full flex flex-col justify-between mx-2 md:mx-4">
                <h4 class="text-xl font-semibold mt-2 md:mt-0">
                 <a href="{{ route('idea.show', $idea)}}" class="hover:underline">{{ $idea->title }}
                 </a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                           {{ $idea->description}}
                </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                       <div>{{ $idea->created_at->diffForHumans( )}}</div>
                       <div>&bull;</div>
                       <div>{{ $idea->category->name }}</div>
                       <div>&bull;</div>
                       <div class="text-gray-900">3 Comments</div>
                   </div>
                   <div
                     x-data="{ isOpen: false}"
                    class="flex items-center space-x-2 mt-4 md:mt-0"
                    >
                     <div class="{{ $idea->getStatusClasses() }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">{{ $idea->status->name}}</div>
                
                    <button 
                    @click="isOpen = !isOpen"
                    class=" relative bg-gray hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-1 px-3 ">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H5.01M12 12H12.01M19 12H19.01M6 12C6 12.5523 5.55228 13 5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11C5.55228 11 6 11.4477 6 12ZM13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11C19.5523 11 20 11.4477 20 12Z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                     <ul
                             x-cloak
                             x-show.transition.origin.top.left.duration.500ms="isOpen"
                             @click.away="isOpen = false"
                             @keydown.escape.window="isOpen = false"




                      class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                         Mark as Spam
                        </a></li>
                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                         Delete Post
                        </a></li>
                     </ul>
                    </button>
                </div>
                         <div class=" flex items-center md:hidden mt-4 md:mt-0">
                              <div class="bg-gray-100 text-center rounde-xl h-10 px-4 py-2 pr-8">
                                   <div class="tex-sm font-bold leading-none">12</div>
                                   <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                        </div>
                        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3 -mx-5">Vote
                      
                      </button>
                       
              </div>
             </div>
             </div>
             </div> <!-- End idea container -->
    
            
    </div>  <!-- End ideas container -->
    @endforeach     

 <div class="my-8">
   {{ $ideas->links() }}
 </div>
    
    
</x-app-layout>
