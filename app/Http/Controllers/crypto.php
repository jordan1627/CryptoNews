<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class crypto extends Controller
{
    public function index()
    {
    



    $Crypto = Http::withHeaders(['X-CMC_PRO_API_KEY' => 'dbaa840d-dc01-4dba-8a64-c6b0ce9b18de'
       
     ])->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?slug=bitcoin,ethereum,binance-coin,tether,cardano,dogecoin,xrp,polkadot-new,internet-computer,bitcoin-cash,uniswap,litecoin,usd-coin,chainlink,polygon,solana,stellar,ethereum-classic,vechain,binance-usd,theta,wrapped-bitcoin,aave,eos,tron,filecoin,shiba-inu,multi-collateral-dai,neo,terra-luna,klaytn,monero,huobi-token,ethereum,maker,ftx-token,kusama,iota,bitcoin-sv,pancakeswap,binance-coin,avalanche,tezos,cosmos,algorand,crypto-com-coin,unus-sed-leo,bittorrent,tron,compound,dash,waves,bitcoin-bep2,sushiswap,hedera-hashgraph,terrausd,synthetix-network-token,zcash,nem,yearn-finance,elrond-egld,chiliz,revain,decred,telcoin,near-protocol,celsius,decentraland,zilliqa,holo,ethereum,theta-fuel,nexo,binance-coin,basic-attention-token,qtum,harmony,fantom,okb,digibyte,bitcoin-gold,paxos-standard,enjin-coin,helium,stacks,uma,trueusd,ontology,the-graph,bancor,0x,nano,celo,siacoin,horizen,bakerytoken,swissborg,omg,curve-dao-token,icon,husd,ravencoin,ankr,voyager-token')
       ->json()['data'];

      // dump($Crypto);




      
    $logo = Http::withHeaders(['X-CMC_PRO_API_KEY' => 'dbaa840d-dc01-4dba-8a64-c6b0ce9b18de'
    ]) ->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/info?slug=bitcoin,ethereum,binance-coin,tether,cardano,dogecoin,xrp,polkadot-new,internet-computer,bitcoin-cash,uniswap,litecoin,usd-coin,chainlink,polygon,solana,stellar,ethereum-classic,vechain,binance-usd,theta,wrapped-bitcoin,aave,eos,tron,filecoin,shiba-inu,multi-collateral-dai,neo,terra-luna,klaytn,monero,huobi-token,ethereum,maker,ftx-token,kusama,iota,bitcoin-sv,pancakeswap,binance-coin,avalanche,tezos,cosmos,algorand,crypto-com-coin,unus-sed-leo,bittorrent,tron,compound,dash,waves,bitcoin-bep2,sushiswap,hedera-hashgraph,terrausd,synthetix-network-token,zcash,nem,yearn-finance,elrond-egld,chiliz,revain,decred,telcoin,near-protocol,celsius,decentraland,zilliqa,holo,ethereum,theta-fuel,nexo,binance-coin,basic-attention-token,qtum,harmony,fantom,okb,digibyte,bitcoin-gold,paxos-standard,enjin-coin,helium,stacks,uma,trueusd,ontology,the-graph,bancor,0x,nano,celo,siacoin,horizen,bakerytoken,swissborg,omg,curve-dao-token,icon,husd,ravencoin,ankr,voyager-token')
      ->json()['data'];
      


       // dump($logo);
       return view('crypto', [
        'Crypto' => $Crypto,
        'logo' =>  $logo,
          
       ]);

       }

 


  
}
