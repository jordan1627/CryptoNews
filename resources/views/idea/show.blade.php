<x-app-layout>
    <div>
        <a href="/forum" class="flex items-center font-semibold hover:underline">
        <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
            <span class="ml-2">All Idea</span>
        </a>
    
    </div>
    <div class="ideas-container space-y-6 my-6">
  
             <div class="idea-container  bg-white rounded-xl flex  mt-4">
             <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
              <a href="#" class="flex-none mx-2 md:mx-4">
                <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl"> 
              </a>
              <div class=" w-full mx-2 md:mx-4">
                <h4 class="text-xl font-semibold">
                 <a href="" class="hover:underline">{{ $idea->title }}
                 </a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                {{ $idea->description}}
                </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                       <div class="hidden md:block font-bold text-gray-900">{{ $idea->user->name}}</div>
                       <div class="hidden md:block">{{ $idea->created_at->diffForHumans( )}}</div>
                       <div>&bull;</div>
                       <div>{{ $idea->Category->name}}</div>
                       <div>&bull;</div>
                       <div class="text-gray-900">3 Comments</div>
                   </div>
                   <div
                   x-data="{ isOpen: false}"
                   class="flex items-center space-x-2 mt-4 md:mt-0">
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

                     class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 z-10 md:ml-8 top-8 md:top-6 right-0 md:left-0"">
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
        </div>
        </div><!-- end idea-container-->
               
               <div class="buttons-container flex items-center justify-between mt-6">
               <div class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">
             <div
             x-data="{ isOpen: false}"
             class="relative">      
              
                   <div 
                            x-cloak
                             x-show.transition.origin.top.left.duration.500ms="isOpen"
                             @click.away="isOpen = false"
                             @keydown.escape.window="isOpen = false"    

                   class="absolute z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-lg rounded-xl mt-12"> 
                         <form action="#" class="space-y-4 px-4 py-6">   
                                 <div>
                                  <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                   class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Go ahead, Dont be shy. Share your thoughts...."></textarea>
                                   <div class="flex items-center justify-between md:space-x-3">
                                   <button type="submit" class="flex items-center justify-center w-full md:w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 ">
                                       <span class="ml-1">Post Comment</span>
                                       </button>

                                       <button type="button" class="flex items-center justify-center w-full md:w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-2 md:mt-0">
                                       <svg class="h-6 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                       </svg>
                                         <span class="ml-1"> Attached </span>
                                       </button>
</div>
                                </form>
                              </div> 
                               </div>
                               <div class="flex flex-col md:flex-row items-center space-x-4 ml-6">
                            
                               <button
                               @click="isOpen = !isOpen"
                               type="button" class="flex items-center justify-center w-full md:w-1/2 h-11 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 ">
                               <span class="mr-1">Reply</span>
                          
                              </button>
                               <div
                               x-data="{ isOpen: false}"
                               class="relative">
                              <button
                              @click="isOpen = !isOpen"
                               type="button" class="flex items-center justify-center h-11 w-40 md:w-36 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-3 md:mt-0">
                                       
                                         <span class="mr-1">Set Status</span>
                                         <svg class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                         </svg> 
                                       </button>
                                       
                                       <div
                                       x-cloak
                                       x-show.transition.origin.top.left.duration.500ms="isOpen"
                                       @click.away="isOpen = false"
                                       @keydown.escape.window="isOpen = false"
       
                                        class="absolute z-20 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-2xl rounded-xl mt-2"> 
                                         <form action="#" class="space-y-4 px-4 py-6"> 
                                            <div class="space-y-2 mt-2"> 
                                            <div>
                                               <label class="inline-flex items-center">
                                                   <input type="radio"  checked="" class="bg-gray-200 text-green border-none" name="radio-direct" value="2">
                                                   <span class="ml-2">Open</span>    
                                             </div>
                                             <div>
                                               <label class="inline-flex items-center">
                                                   <input type="radio" class="bg-gray-200 text-purple border-none" name="radio-direct" value="2">
                                                   <span class="ml-2">Consedering</span>    
                                             </div>
                                             <div>
                                               <label class="inline-flex items-center">
                                                   <input type="radio" class="bg-gray-200 text-yellow border-none" name="radio-direct" value="2">
                                                   <span class="ml-2">In Progress</span>    
                                              </div>
                                              <div>
                                               <label class="inline-flex items-center">
                                                   <input type="radio" class="bg-gray-200 text-green border-none" name="radio-direct" value="2">
                                                   <span class="ml-2">Implemented</span>    
                                              </div>
                                              <div>
                                               <label class="inline-flex items-center">
                                                   <input type="radio" class="bg-gray-200 text-red border-none" name="radio-direct" value="2">
                                                   <span class="ml-2">Closed</span>    
                                              </div>
                                            </div> 
                                         
                                          <div>
                                                       <textarea name="updated_comment" id="updated_comments" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="add an Update Comment (Optional)"></textarea>
                                          </div>
                                          <div class="flex items-center justify-between space-x-3">
                                       <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                                       <svg class="h-6 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                       </svg>
                                         <span class="ml-1"> Attached </span>
                                       </button>

                                       <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 ">
                                       <span class="ml-1">Update</span>
                                       </button>
                                    </div>
                                    <div>
                                               <label class="font-normal inline-flex items-center">
                                                   <input type="checkbox"  name="notify_voters" class="bg-gray-200" checked="">
                                                   <span class="ml-2">Notify All Voters</span>    
                                              </div>
                                    </form>
</div>  
                                    </div>
                         </div>
                      
                  </div>
             </div>
            
               
             
               <div class="hidden md:flex items-center space-x-3">
                     <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                     <div class="text-xl leading-snug">12</div>
                     <div class="text-gray-400 text-xs leading-none">Votes</div>

               </div>
               
               <button type="button" class="h-11 w-32 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                <span>VOTE</span>
                
                </button>
               </div>
               </div><!-- end buttons-container-->
                  <div class="comments-container  relative space-y-6 md:ml-22 my-8 mt-1 pt-4">
                  <div class="comment-container relative bg-white rounded-xl flex mt-4">
           
                  <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
              <a href="#" class="flex-none">
                <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl"> 
              </a>
              <div class=" w-full md:mx-4">
               <!--<h4 class="text-xl font-semibold">
                 <a href="" class="hover:underline">A ramdon title can go here
                 </a>
                </h4>
                -->
                <div class="text-gray-600 mt-3 ">
                Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
                </div>
                <div class="flex items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                       <div class="font-bold text-gray-900">Jordan Cardines</div>
                       <div>10 hours Ago</div>
                       <div>&bull;</div>
                       
                   </div>
                   <div class="flex items-center space-x-2">
                    
                
                    <button class=" relative bg-gray hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-1 px-3 ">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H5.01M12 12H12.01M19 12H19.01M6 12C6 12.5523 5.55228 13 5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11C5.55228 11 6 11.4477 6 12ZM13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11C19.5523 11 20 11.4477 20 12Z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                     <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                         Mark as Spam
                        </a></li>
                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                         Delete Post
                        </a></li>
                     </ul>
                    </button>
                </div>
              </div>
             </div>
        </div>
        
        </div><!-- end comment-container-->
            
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
             <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
              <a href="#" class="flex-none mx-2 md:mx-4">
                <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl"> 
                <div class="text-center uppercase text-blue text-xxs-font-bold mt-1">Admin</div> 
            
            </a>
              
              <div class=" w-full mx-2 md:mx-4">
               <!--<h4 class="text-xl font-semibold">
                 <a href="" class="hover:underline">A ramdon title can go here
                 </a>
                </h4>
                -->
                <div class="text-gray-600 mt-3 ">
                Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
                </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                       <div class="font-bold text-gray-900">Ronalyn Revilla</div>
                       <div>10 hours Ago</div>
                       <div>&bull;</div>
                       
                   </div>
                   <div class="flex items-center space-x-2">
                    
                
                    <button class=" relative bg-gray hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-1 px-3 ">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H5.01M12 12H12.01M19 12H19.01M6 12C6 12.5523 5.55228 13 5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11C5.55228 11 6 11.4477 6 12ZM13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11C19.5523 11 20 11.4477 20 12Z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                     <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                         Mark as Spam
                        </a></li>
                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                         Delete Post
                        </a></li>
                     </ul>
                    </button>
                </div>
              </div>
             </div>
        </div>
         
        </div><!-- end comment-container-->
        <div class="comment-container relative bg-white rounded-xl flex mt-4 ">
             <div class="flex flex-1 px-4 py-6">
              <a href="#" class="flex-none mx-2 md:mx-4">
                <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl"> 
              </a>
         
              <div class=" w-full mx-2 md:mx-4">
               <!--<h4 class="text-xl font-semibold">
                 <a href="" class="hover:underline">A ramdon title can go here
                 </a>
                </h4>
                -->
                <div class="text-gray-600 mt-3 ">
                Et molestiae hic earum repellat aliquid est doloribus delectus. Enim illum odio porro ut omnis dolor debitis natus. Voluptas possimus deserunt sit delectus est saepe nihil. Qui voluptate possimus et quia. Eligendi voluptas voluptas dolor cum. Rerum est quos quos id ut molestiae fugit.
                </div>
                <div class="flex items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                       <div class="font-bold text-gray-900">Ronalyn Revilla</div>
                       <div>10 hours Ago</div>
                       <div>&bull;</div>
                       
                   </div>
                   <div class="flex items-center space-x-2">
                    
                
                    <button class=" relative bg-gray hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-1 px-3 ">
                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M5 12H5.01M12 12H12.01M19 12H19.01M6 12C6 12.5523 5.55228 13 5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11C5.55228 11 6 11.4477 6 12ZM13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12ZM20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11C19.5523 11 20 11.4477 20 12Z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                     <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                         Mark as Spam
                        </a></li>
                        <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                         Delete Post
                        </a></li>
                     </ul>
                    </button>
                </div>
              </div>
             </div>
        </div>
                  </div><!-- end buttons-container-->
             
                  
</x-app-layout>
