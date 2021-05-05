@extends('layouts.head')



@section('content')

  <div class="container mx-auto px-4">
 
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Latest News</h2> 
  	 <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
	  
  	 	<div class="game mt-8">
		 
  	 		<div class="relative inline-block">
  	 			<a href="">
  	 				<img src="" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
                     
  	 		</div>
  	 		 <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"></a>
  	 		 <div class="text-gray-400 mt-1"></div>
				<p>
		
		   <p>
  	 	</div>
  	 </div>
	   <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-5 lg:-mx-1">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
				<th scope="col" class="px-5 py-4  pr-10 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Price
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  24%
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  7d%
                </th>
				<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Market Cap
                </th>
				<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Volume(24h)
                </th>
				<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Circulating Supply
                </th>
				<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Last 7 Days
                </th>
              </tr>
            </thead>
			@foreach ($Crypto as $Crypto)
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="person in people" :key="person.email">
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" :src=" " alt="" />
                    </div>
				
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
					  {{ $Crypto['name'] }}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
			$	{{ $Crypto['quote']['USD']['price'] }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
				  {{ $Crypto['quote']['USD']['percent_change_24h'] }}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
				{{ $Crypto['quote']['USD']['percent_change_7d'] }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
               $ {{ $Crypto['quote']['USD']['market_cap'] }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
			$	{{ $Crypto['quote']['USD']['volume_24h'] }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
				{{ $Crypto['circulating_supply'] }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
				graph
                </td>
              </tr>
			
            </tbody>
			@endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection