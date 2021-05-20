@extends('layouts.head')



@section('content')

  <div class="container mx-auto px-4">
 
    
     <div class="flex pl-10 items-center space-x-7">
     <a href="Cryptocurrencies" class="hover:text-blue font-serif text-2xl text-black dark:text-white font-bold">Cryptocurrencies</a>
                    <a href="Listing"class="hover:text-blue font-serif text-2xl text-black dark:text-white font-bold"">Latest Listing</a>
                    
     </div>
	   <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-1">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-9">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
				       <th scope="col" class="px-5 py-3  pr-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-5 py-3  pr-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Symbol
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                cmc_rank
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                circulating_supply
                </th>
                
				        <th scope="col" class="px-6 py-3 text-centertext-xs font-medium text-gray-500 uppercase tracking-wider">
                max_supply
                </th>
				        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                price
                </th>
				        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                percent_change_24h
                </th>
				        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                market_cap
                </th>
              </tr>
            </thead>
            @foreach ($Crypto as $crypto)
            <tbody class="bg-white divide-y divide-gray-200">
            
    
              <tr v-for="person in people" :key="person.email">
                <td class="px-6 py-2 whitespace-nowrap">
                  <div class="flex items-center"> 
                    <div class="ml-1">
                      <div class="text-sm font-medium text-gray-900">
                      {{ $crypto['name'] }}
                      </div>
                    </div>
                  </div>
                </td>
            
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $crypto['symbol'] }}
                    </td>
          
                  
         
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                {{ $crypto['cmc_rank'] }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                {{ $crypto['circulating_supply'] }}
                </td>
               
				<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                {{ $crypto['max_supply'] }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                {{ $crypto['quote']['USD']['price']   }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm  text-center text-gray-500">
                {{ $crypto['quote']['USD']['percent_change_24h']   }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                {{ $crypto['quote']['USD']['market_cap']   }}
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