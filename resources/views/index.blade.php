@extends('layouts.head')



@section('content')

  <div class="container mx-auto px-4">
 
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Latest News</h2> 
  	 <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
	   @foreach ($popularNews as $News)
  	 	<div class="game mt-8">
		 
  	 		<div class="relative inline-block">
  	 			<a href="{{ $News['news_url'] }}">
  	 				<img src="{{ $News['image_url'] }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
                     
  	 		</div>
  	 		 <a href="{{ $News['news_url'] }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">{{ $News['title'] }}</a>
  	 		 <div class="text-gray-400 mt-1"></div>
				<p>
		   {{ $News['date'] }}
		   <p>
  	 	</div>
           
		   @endforeach
  	 



  	 </div>
	
  	      <div class="flex flex-col lg:flex-row my-10">
			
     	  <div class="recently-reviewed w-full lg:w-3/4  mr-0 lg:mr-32">
     	  	 <h2 class="text-blue-500 uppercase tracking-wide font-semibold">General Crypto News</h2>
     	  	    <div class="recently-reviewed-container space-y-12 mt-8">
				   @foreach ($latestNews as $News)
     	  	    	<div class="bg-gray-background text-gray-900  rounded-lg shadow-md flex px-6 py-6">
                       	<div class="relative flex-none">
  	 			<a href="{{ $News['news_url'] }}">
  	 				<img src="{{ $News['image_url'] }}" alt="News cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
                   
  	 		        </div>

  	 		              <div class="ml-12">

  	 		              	 <a href="{{ $News['news_url'] }}" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">{{ $News['title'] }}</a>
                               <div class="text-gray-400 m-1">{{ $News['text'] }}</div>
                               <p class="mt-6 text-gray-400  hidden lg:block">
							   {{ $News['date'] }}
                               </p>
  	 		              </div>

     	  	</div>
			  
			   
     @endforeach


    	    </div>
     	  </div>
		  
     	  <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0 pl-20">
     	  	<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Video</h2>
     	  	 <div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex center">
     	  	 	            <a href="https://www.youtube.com/watch?v=b-Fq9TZqO8A">
  	 				<img src="https://crypto.snapi.dev/images/v1/v/m/anonymous-investor-is-dogecoins-first-billionaire-22682.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="relative center">
  	 					<a href="https://crypto.snapi.dev/images/v1/v/m/anonymous-investor-is-dogecoins-first-billionaire-22682.jpg" class="hover:text-gray-300">Anonymous investor is Dogecoin's</a>
  	 					<div class="text-gray-400 text-sm mt-1">First Billionaire</div>
  	 				</div>
</div>

 <div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=ZaPvrRQGGWE">
  	 				<img src="https://crypto.snapi.dev/images/v1/q/a/overblown-fud-or-genuine-threat-bitcoin-climate-debate-cointelegraph-crypto-duel-22668.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="relative center">
  	 					<a href="https://www.youtube.com/watch?v=ZaPvrRQGGWE" class="hover:text-gray-300">Bitcoin Climate Debate</a>
  	 					<div class="text-gray-400 text-sm mt-1">Cointelegraph Crypto Duel</div>
  	 				</div>
</div>
<div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=gco-xStrBkw">
  	 				<img src="https://crypto.snapi.dev/images/v1/z/c/fed-chair-powell-addresses-dogecoin-and-other-assets-plus-other-key-takeaways-on-monetary-policy-22534.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="relative center">
  	 					<a href="https://www.youtube.com/watch?v=gco-xStrBkw" class="hover:text-gray-300">FOMCmeeting</a>
  	 					<div class="text-gray-400 text-sm mt-1"></div>
  	 				</div>
</div>

<div class="most-anticipated space-y-10 mt-8 ">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=r_dK5lhkTN4">
  	 				<img src="https://crypto.snapi.dev/images/v1/m/g/dogecoin-soars-as-it-gets-another-big-supporter-22388.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="relative center">
  	 					<a href="https://www.youtube.com/watch?v=r_dK5lhkTN4" class="hover:text-gray-300">Dogecoin soars</a>
  	 					<div class="text-gray-400 text-sm mt-1">JCNBC Television</div>
  	 				</div>
</div>

        <div class="coming soon space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=-gme5OM3Q7Q">
  	 				<img src="https://crypto.snapi.dev/images/v1/m/g/dont-sweat-the-volatility-around-bitcoin-gayeski-22340.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="relative center">
  	 					<a href="https://www.youtube.com/watch?v=-gme5OM3Q7Q" class="hover:text-gray-300">Don't Sweat</a>
  	 					<div class="text-gray-400 text-sm mt-1">Bloomberg Technology</div>
  	 				</div>
</div>

         <div class="coming soon space-y-10 mt-8 ">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=Wt6qekmn-1Q">
  	 				<img src="https://crypto.snapi.dev/images/v1/f/b/ripples-larsen-xrp-being-singled-out-by-sec-perplexing-22208.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="relative center">
  	 					<a href="https://www.youtube.com/watch?v=Wt6qekmn-1Q" class="hover:text-gray-300">Ripple co-founder</a>
  	 					<div class="text-gray-400 text-sm mt-1">Bloomberg Technology</div>
  	 				</div>
</div>


<div class="coming soon space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=Or3f6wEmlas">
  	 				<img src="https://crypto.snapi.dev/images/v1/7/k/tom-mcclellan-on-whether-bitcoin-and-the-sp-500-are-connected-22206.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="relative center">
  	 					<a href="https://www.youtube.com/watch?v=Or3f6wEmlas" class="hover:text-gray-300">Tom McClellan..</a>
  	 					<div class="text-gray-400 text-sm mt-1">CNBC Television</div>
  	 				</div>
</div>


 <div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=AqDtycPJh80">
  	 				<img src="https://crypto.snapi.dev/images/v1/3/j/lyft-co-founder-on-toyota-deal-bitcoin-and-path-to-profitability-22173.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

     	  	 </div>
				<div class="relative center">
  	 					<a href="https://www.youtube.com/watch?v=AqDtycPJh80" class="hover:text-gray-300">Lyft co-founder </a>
  	 					<div class="text-gray-400 text-sm mt-1">CNBC Television</div>
  	 				</div>
</div>
     	  </div>


    

     </div>

  </div>  <!-- end conainer -->

@endsection
