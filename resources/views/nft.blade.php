@extends('layouts.head')



@section('content')

  <div class="container mx-auto px-4">
 
 
  	 
    
    
     <div class="md:flex pl-10 flex items-center space-x-6 pb-1">
           
                    <a href="NFT"class="hover:text-blue font-serif text-1xl text-black dark:text-white font-bold"">NFT</a>
                    <a href="Dapps" class="hover:text-blue font-serif text-1xl text-black dark:text-white font-bold">Dapps</a>
                    
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
                  dappName
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Price
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                priceInDollar
                </th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                TokenId
                </th>
				        
              </tr>
            </thead>
            
            @foreach ($Crypto as $crypto)

            <tbody class="bg-white divide-y divide-gray-200">
       
    
              <tr v-for="person in people" :key="person.email">
                <td class="px-6 py-2 whitespace-nowrap">
                  <div class="flex items-center">  
                    


                    <div class="flex-shrink-0 h-10 w-10 pb-3">
                      <img src="{{ $crypto['image']}}" alt="logo" class="w-10 h-10  justify-items-center"/>
                    </div>
                  
                    
                    <div class="ml-1">
                      <div class="text-sm font-medium text-gray-900">
                      {{ $crypto['name']}}
                      </div>
                    </div>
                  </div>
                </td>
                    
         
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                {{ $crypto['dappName']}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                {{ $crypto['price']}}
                </td>
               
				<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                {{ $crypto['priceInDollar']}}
                </td>
				<td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">
                {{ $crypto['tokenId']}}
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