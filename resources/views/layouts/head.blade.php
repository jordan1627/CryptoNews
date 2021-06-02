<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Crypto News</title>
   <link rel="stylesheet"  href="/css/app.css">
   <script src="/js/app.js" defer></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
   <script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.documentElement.classList.add('dark')
} else {
  document.documentElement.classList.remove('dark')
}
   
   </script>
 

</head>
<body class=" bg-gray-100 text-gray-900 dark:bg-gray-800 text-sm">
    <header class="border-b  dark:bg-gray-800 border-gray-100 ">
         
        <nav class="bg-white dark:bg-gray-800 pb-5 border-b-2 ">

           <ul class="hidden md:flex container mx-auto flex flex-col lg:flex-row items-center justify-between pl-12 ">
               
               <li><a href="#" class="pl-1 text-xs text-black dark:text-white font-bold">{{__('messages.cryptos')}}</a></li>
               <li><a href="#" class="pl-1 pr-5 underline text-xs text-blue font-bold"> 10,178</a></li>
               <li><a href="#" class="pl-1 text-xs text-black dark:text-white font-bold">{{__('messages.exchange')}}</a></li>
               <li><a href="#" class="pl-1 pr-5 underline text-xs text-blue font-bold"> 387</a></li>
                  
               <li><a href="#" class="pl-1 text-xs text-black dark:text-white font-bold">{{__('messages.marketcaps')}}</a></li>
               <li><a href="#" class="pl-1 pr-5 underline text-xs text-blue font-bold">$1,629,155,055,576</a></li>
               
               <li><a href="#" class="pl-1 text-xs text-black dark:text-white font-bold">{{__('messages.24vol')}}</a></li>
               <li><a href="#" class="pl-1 pr-5 underline text-xs text-blue font-bold">$119,364,900,193</a></li>
               
               <li><a href="#" class="pl-1 text-xs text-black dark:text-white font-bold">{{__('messages.dominance')}}</a></li>
               <li><a href="#" class="pl-1 pr-5 underline text-xs text-blue font-bold">BTC:ETH</a></li>
               
               <li><a href="#" class="pl-1 text-xs text-black dark:text-white font-bold">{{__('messages.etc')}}</a></li>
               <li><a href="#" class="pl-1 pr-5 underline text-xs text-blue font-bold">18.7%</a></li>
                 
               <li><a href="#" class="pl-1 text-xs text-black dark:text-white font-bold">{{__('messages.btc')}}</a></li>
               <li><a href="#" class="pl-1 pr-5 underline text-xs text-blue font-bold">42.3%</a></li>
                
               
               
               <ul 
               x-data="{ isOpen: false}"
               class="container mx-auto flex flex-col lg:flex-row items-center mr-30 justify-center">
               
               <button 
                    @click="isOpen = !isOpen"
                    class=" relative bg-gray  text-xs text-black dark:text-white font-bold hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-1 px-3 focus:outline-none ">
                    {{ Config::get('languages')[App::getLocale()] }}
                     <ul
                             x-cloak
                             x-show.transition.origin.top.left.duration.500ms="isOpen"
                             @click.away="isOpen = false"
                             @keydown.escape.window="isOpen = false"

                      class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">  
                      @foreach (Config::get('languages') as $lang => $language)
                      @if ($lang != App::getLocale())
                        <li><a href="{{ route('lang.switch', $lang) }}" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                        {{$language}}
                        </a></li>
                        @endif
                       @endforeach
                     </ul>
                    </button>
               <button id="switchTheme" class="h-10 w-10 flex justify-center items-center focus:outline-none text-blue">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
               </svg>
               <script>
                  document.getElementById('switchTheme').addEventListener('click', function(){
                     let htmlClasses = document.querySelector('html').classList;
                     if (localStorage.theme == 'dark') {
                        htmlClasses.remove('dark');
                        localStorage.removeItem('theme')
                     } else {
                        htmlClasses.add('dark');
                        localStorage.theme = 'dark';
                     }
                  });
               
               
               </script>
               
               
               </button>

                     
               </ul>
         </ul>

    
            <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between pl-10 ">
            <div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="flex items-center py-2 px-3"><img src="/img/logo.png" alt="Logo" class="h-14 w-52  flex-none pb-2"></a></div>

            <div class="hidden md:flex flex items-center space-x-7">
                    <a href="/" class="hover:text-blue font-serif text-sm text-black dark:text-white font-bold">{{__('messages.news')}}</a>
                    <a href="Cryptocurrencies"class="hover:text-blue font-serif text-sm text-black dark:text-white font-bold">{{__('messages.cryptocurrencies')}}</a>
                    <a href="Exchange" class="hover:text-blue font-serif text-sm text-black dark:text-white font-bold">{{__('messages.exchange')}}</a>
                    <a href="NFT" class="hover:text-blue font-serif text-sm text-black dark:text-white font-bold">{{__('messages.nft')}}</a>
                    <a href="#" class="hover:text-blue font-serif text-sm text-black dark:text-white font-bold">{{__('messages.marketcap')}}</a>
                    <a href="/forum" class="hover:text-blue font-serif text-sm dark:text-white font-bold">{{__('messages.forum')}}</a>
                 
                 
                            </div>
                       
                     </div>
                  
                       <div class="md:hidden flex items-center">
                       <button class="mobile-menu-button border-none">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    
                       </svg>
                       </button>
                       </div>
<div>        
</div> 
</div>
</div>
                     <div class="mobile-menu hidden">
                          
                    <a href="/" class="block hover:text-blue font-serif text-lg font-bold py-5">News</a>
                    <a href="Cryptocurrencies"class="hover:text-blue font-serif text-lg font-bold py-5">Cryptocurrencies</a>
                    <a href="#" class=" block hover:text-blue font-serif text-lg font-bold py-5">Exchange</a>

                    <a href="#" class=" block hover:text-blue font-serif text-lg font-bold py-5">Exchanges</a>
                    <a href="#" class=" block hover:text-blue font-serif text-lg font-bold py-5">Market Cap</a>
               
                    <a href="/forum" class=" block hover:text-blue font-serif text-lg font-bold py-5">Forum</a>
                       </div>
        
    </nav>
    <style>
      @keyframes slide-nav-down{
        100% {
          transform: translateY(0);
        }
      }

      nav.is-floating {
      position: sticky;
      top: 0;
      transform: translateY(-100%);
      animation: slide-nav-down .2s ease;
      animation-fill-mode: forwards;
    }
    
    </style>
    <script>
    const btn = document.querySelector('button.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');
    btn.addEventListener("click", ()=> {
            menu.classList.toggle("hidden");
    });
    </script>

<iframe _ngcontent-c12="" scrolling="no" style="height:100px; width:2000px; max-width: 100%;"  src="https://widget.coincodex.com/?type=4&amp;ticker=top20&amp;period=1D&amp;textColor=000000&amp;borderColor=dddddd&amp;backgroundColor=ffffff&amp;hoverColor=transparent&amp;currency=USD&amp;range=1D"></iframe>
<script src="https://widget.coincodex.com/?type=4&ticker=top20&period=1D&textColor=000000&borderColor=dddddd&backgroundColor=ffffff&hoverColor=transparent&currency=USD&range=1D"></script>
<main  class="py-8">
<div class="hidden md:block icon-bar mx-auto items-center p-1  md:text-1xl ">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
<style>


.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;

  padding: 16px;
  transition: all 0.3s ease;
  color: white;
 
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}


</style>
	@yield('content')
</main>
<footer class="border-t bg-gray-100 dark:bg-gray-800">

<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Crypto News</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Crypto News</h1>
    <ul>
      <li>Cryptocurrencies</li>
      <li>Exchange</li>
      <li>Guides</li>
      <li>Nft</li>
      <li>Market Cap</li>
      <li>Price Tracker</li>
      <li>Forum</li>
    </ul>
  </div>
  <div class="col">
    <h1>Crypto</h1>
    <ul>
      <li>Crypto</li>
      <li>Exchanges</li>
      <li>MarketCap</li>
      <li>24hVol</li>
      <li>Dominance</li>
      <li>BTC</li>
      <li>ETC</li>
    </ul>
  </div>
  <div class="col">
    <h1>Resources</h1>
    <ul>
      <li>Webmail</li>
      <li>Redeem code</li>
      <li>WHOIS lookup</li>
      <li>Site map</li>
      <li>Web templates</li>
      <li>Email templates</li>
    </ul>
  </div>
  <div class="col">
    <h1>Support</h1>
    <ul>
      <li>Contact us</li>
      <li>Web chat</li>
      <li>Open ticket</li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><a href="/"><img src="/img/facebook-svgrepo-com.svg" width="32" style="width: 32px;"></a></li>
      <li><a href="/"><img src="/img/instagram-svgrepo-com.svg" width="32" style="width: 32px;"></a></li>
      <li><a href="/"><img src="/img/twitter-svgrepo-com.svg" width="32" style="width: 32px;"></a></li>

    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>

<style>

/* STYLES SPECIFIC TO FOOTER  */
.footer {
  width: 100%;
  position: relative;
  height: auto;
 
}
.footer .col {
  width: 190px;
  height: auto;
  float: left;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding: 0px 20px 20px 20px;
}
.footer .col h1 {
  margin: 0;
  padding: 0;
  font-family: inherit;
  font-size: 12px;
  line-height: 17px;
  padding: 20px 0px 5px 0px;
  color: rgba(255,255,255,0.2);
  font-weight: normal;
  text-transform: uppercase;
  letter-spacing: 0.250em;
}
.footer .col ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.footer .col ul li {
  color: #999999;
  font-size: 14px;
  font-family: inherit;
  font-weight: bold;
  padding: 5px 0px 5px 0px;
  cursor: pointer;
  transition: .2s;
  -webkit-transition: .2s;
  -moz-transition: .2s;
}
.social ul li {
  display: inline-block;
  padding-right: 5px !important;
}

.footer .col ul li:hover {
  color: #ffffff;
  transition: .1s;
  -webkit-transition: .1s;
  -moz-transition: .1s;
}
.clearfix {
  clear: both;
}
@media only screen and (min-width: 1280px) {
  .contain {
    width: 1200px;
    margin: 0 auto;
  }
}
@media only screen and (max-width: 1139px) {
  .contain .social {
    width: 1000px;
    display: block;
  }
  .social h1 {
    margin: 0px;
  }
}
@media only screen and (max-width: 950px) {
  .footer .col {
    width: 33%;
  }
  .footer .col h1 {
    font-size: 14px;
  }
  .footer .col ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 500px) {
    .footer .col {
      width: 50%;
    }
    .footer .col h1 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
}
@media only screen and (max-width: 340px) {
  .footer .col {
    width: 100%;
  }
}
</style>

</footer>
</body>
</html>
