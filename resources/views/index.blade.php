@extends('layouts.head')



@section('content')

  <div class="container mx-auto px-16 ">
  <button id="btnScrollToTop">
          <i class="material-icons">arrow_upward</i>       
      </button>
	  <div>
      <div class=" hidden md:flex absolute  right-16"><livewire:search-dropdown> </div>
      </div>
    <h2 class="hover:text-blue font-serif  text-3xl  text-black dark:text-blue font-bold">Latest News</h2>  
	   <div class="popular-news text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
	   @foreach ($popularNews as $News)
  	 	<div class="game mt-8">
		 
  	 		<div class="inline-block">
  	 			<a href="{{ $News['news_url'] }}">
  	 				<img src="{{ $News['image_url'] }}" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
                     
  	 		</div>
  	 		 <a href="{{ $News['news_url'] }}" class="block text-base font-semibold leading-tight hover:text-blue dark:text-gray-100 dark:hover:text-blue mt-8">{{ $News['title'] }}</a>
  	 	
				<p class="text-black dark:text-gray-100 mt-1">
		   {{ $News['date'] }}
		   <p>
  	 	</div>
           
		   @endforeach
  	 </div>
	 <div class="flex flex-col lg:flex-row my-10">
	<div  class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-48">
	 <h2  id="featured" class="hover:text-blue font-serif text-2xl text-black dark:text-blue font-bold">General Crypto News</h2>
	<div  class="recently-reviewed-container space-y-12 mt-8">
	@foreach ($latestNews as $News)
	 <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
  <div class="md:flex">
    <div class="md:flex-shrink-0">
	<a href="{{ $News['news_url'] }}">
      <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ $News['image_url'] }}" alt="News cover">
    </a>
	</div>
    <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">  {{ $News['date'] }}</div>
      <a href="{{ $News['news_url'] }}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{ $News['title'] }}</a>
      <p class="mt-2 text-gray-500">{{ $News['text'] }}</p>
    </div>
  </div>
</div>
@endforeach
	
	


    	    </div>
     	  </div>
		   
	
     	  <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0 pl-10">
     	  	<h2 class="hover:text-blue font-serif text-3xl text-black dark:text-blue font-bold">Video</h2>
     	  	 <div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex center">
     	  	 	            <a href="https://www.youtube.com/watch?v=b-Fq9TZqO8A">
  	 				<img src="https://crypto.snapi.dev/images/v1/v/m/anonymous-investor-is-dogecoins-first-billionaire-22682.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="center">
  	 					<a href="https://crypto.snapi.dev/images/v1/v/m/anonymous-investor-is-dogecoins-first-billionaire-22682.jpg" class="hover:text-gray-400 text-gray-400">Anonymous investor is Dogecoin's</a>
  	 					<div class="text-gray-400 text-sm mt-1">First Billionaire</div>
  	 				</div>
</div>

 <div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=ZaPvrRQGGWE">
  	 				<img src="https://crypto.snapi.dev/images/v1/q/a/overblown-fud-or-genuine-threat-bitcoin-climate-debate-cointelegraph-crypto-duel-22668.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="center">
  	 					<a href="https://www.youtube.com/watch?v=ZaPvrRQGGWE" class="hover:text-gray-400 text-gray-400">Bitcoin Climate Debate</a>
  	 					<div class="text-gray-400 text-sm mt-1">Cointelegraph Crypto Duel</div>
  	 				</div>
</div>
<div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=gco-xStrBkw">
  	 				<img src="https://crypto.snapi.dev/images/v1/z/c/fed-chair-powell-addresses-dogecoin-and-other-assets-plus-other-key-takeaways-on-monetary-policy-22534.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="center">
  	 					<a href="https://www.youtube.com/watch?v=gco-xStrBkw" class="hover:text-gray-400 text-gray-400">FOMCmeeting</a>
  	 					<div class="text-gray-400 text-sm mt-1"></div>
  	 				</div>
</div>

<div class="most-anticipated space-y-10 mt-8 ">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=r_dK5lhkTN4">
  	 				<img src="https://crypto.snapi.dev/images/v1/m/g/dogecoin-soars-as-it-gets-another-big-supporter-22388.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="center">
  	 					<a href="https://www.youtube.com/watch?v=r_dK5lhkTN4" class="hover:text-gray-400 text-gray-400">Dogecoin soars</a>
  	 					<div class="text-gray-400 text-sm mt-1">JCNBC Television</div>
  	 				</div>
</div>

        <div class="coming soon space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=-gme5OM3Q7Q">
  	 				<img src="https://crypto.snapi.dev/images/v1/m/g/dont-sweat-the-volatility-around-bitcoin-gayeski-22340.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="center">
  	 					<a href="https://www.youtube.com/watch?v=-gme5OM3Q7Q" class="hover:text-gray-400 text-gray-400">Don't Sweat</a>
  	 					<div class="text-gray-400 text-sm mt-1">Bloomberg Technology</div>
  	 				</div>
</div>

         <div class="coming soon space-y-10 mt-8 ">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=Wt6qekmn-1Q">
  	 				<img src="https://crypto.snapi.dev/images/v1/f/b/ripples-larsen-xrp-being-singled-out-by-sec-perplexing-22208.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="center">
  	 					<a href="https://www.youtube.com/watch?v=Wt6qekmn-1Q" class="hover:text-gray-400 text-gray-400">Ripple co-founder</a>
  	 					<div class="text-gray-400 text-sm mt-1">Bloomberg Technology</div>
  	 				</div>
</div>


<div class="coming soon space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=Or3f6wEmlas">
  	 				<img src="https://crypto.snapi.dev/images/v1/7/k/tom-mcclellan-on-whether-bitcoin-and-the-sp-500-are-connected-22206.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
     	  	 </div>
				<div class="center">
  	 					<a href="https://www.youtube.com/watch?v=Or3f6wEmlas" class="hover:text-gray-400 text-gray-400">Tom McClellan..</a>
  	 					<div class="text-gray-400 text-sm mt-1">CNBC Television</div>
  	 				</div>
</div>


 <div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="https://www.youtube.com/watch?v=AqDtycPJh80">
  	 				<img src="https://crypto.snapi.dev/images/v1/3/j/lyft-co-founder-on-toyota-deal-bitcoin-and-path-to-profitability-22173.jpg" alt="game cover" class="w-80 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

     	  	 </div>
				<div class="center">
  	 					<a href="https://www.youtube.com/watch?v=AqDtycPJh80" class="hover:text-gray-400 text-gray-400 ">Lyft co-founder </a>
  	 					<div class="text-gray-400 text-sm mt-1">CNBC Television</div>
  	 				</div>
</div>
     	  </div>


	

     </div>

  </div>  <!-- end conainer -->


  <style>
  #btnScrollToTop {
    position:fixed;
    right: 10px;
    bottom: 10px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #e62739;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
    color: #ffffff;
    outline: none;
    border: none;
    cursor: pointer;
  }
  #btnScrollToTop:active {
    background: #cc2333;
  }

</style>
<script>
       const btnScrollToTop = document.querySelector("#btnScrollToTop");

       btnScrollToTop.addEventListener("click", function() {
          //   window.scrollTo(0, 0);
       
		      window.scrollTo({
                top: 50,
				left: 0,
				behavior: "smooth"

			  });
		
		
		});

     </script>
  <script>
  (function(nav) {
     let observer = new IntersectionObserver(entries =>{
     if(entries[0]. intersectionRatio > .25){
        nav.classList.remove('is-floating');
    }else {
		nav.classList.add('is-floating');
    }
 }, {
   threshold: .25
 });

 observer.observe(document.querySelector('#featured'));
})(document.querySelector('nav'));
</script>

@endsection
