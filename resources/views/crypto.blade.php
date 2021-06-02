@extends('layouts.head')



@section('content')

 
 
    
<div class="container mx-auto px-4">
     <div class="md:flex pl-10 flex items-center space-x-6 pb-5">
           
                    <a href="Cryptocurrencies"class="hover:text-blue font-serif  text-1xl text-black dark:text-white font-bold"">Cryptocurrencies</a>
                    <a href="Listing" class="hover:text-blue font-serif text-1xl   text-black dark:text-white font-bold">Ranking</a>
                    
     </div>

	   <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-1">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-9">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200 table-auto">
            <thead class="bg-gray-50">
              <tr>
				       <th scope="col" class="px-5 py-3  pr-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Price
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                volume_24h
                </th>
                
				        <th scope="col" class="px-6 py-3 text-centertext-xs font-medium text-gray-500 uppercase tracking-wider">
                24h% 
                </th>
				        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                7d%
                </th>
				        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                market_cap
                </th>
				        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                circulating_supply
                </th>
              </tr>
            </thead>
            
            @foreach ($Crypto as $crypto)
            @foreach ($logo as $logos)
            <tbody class="bg-white divide-y divide-gray-200">
       
    
              <tr v-for="person in people" :key="person.email">
                <td class="px-6 py-2 whitespace-nowrap">
                  <div class="flex items-center">  
                    


                    <div class="flex-shrink-0 h-10 w-10">
                 
                   
                      <img src="{{ $logos['logo']}}" alt="logo" />
                    </div>
                  
                    
                    <div class="ml-1">
                      <div class="text-sm font-medium text-gray-900">
                      {{ $logos['name']}}
                      </div>
                    </div>
                  </div>
                </td>
                    
         
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                {{ $crypto['quote']['USD']['price'] }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                {{ $crypto['quote']['USD']['volume_24h'] }}
                </td>
               
				<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                {{ $crypto['quote']['USD']['percent_change_24h'] }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                {{ $crypto['quote']['USD']['percent_change_7d'] }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm  text-center text-gray-500">
                 {{ $crypto['quote']['USD']['market_cap'] }}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                {{ $crypto['circulating_supply']}}
                </td>
                
              </tr>
			
            </tbody>
            @endforeach
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection