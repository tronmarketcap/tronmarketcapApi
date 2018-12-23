
# API Documentation

Endpoint :https://tronmarketcap.org/api/v1/public/


Please check error Documentation for all error messages



### `GET  /getAllMarketData` 
https://tronmarketcap.org/api/v1/public/getAllMarketData

Request Parameters:


Param | Required
------------ | -------------
NONE | NONE


Response :
```
[{"exchange_id":"6","symbol":"","first_token_id":"CryptoChain","price":"1.003520","volume":"1147","up_down_percent":"0.0000","supply":"454896","marketcap":"3152651008.9625597","website":"http:\/\/cryptochain.network","explorer":"https:\/\/tronscan.org\/#\/token\/CryptoChain\/TUkWD1V2bws2Wt4Lu9EqF9AxnL8vWtNvHy","social":"","whitepaper":"","created":"0000-00-00"},{"exchange_id":"10","symbol":"","first_token_id":"CryptoGuyInZA","price":"1.005033","volume":"15999","up_down_percent":"-0.3297","supply":"1146611","marketcap":"5025165000","website":" https:\/\/www.cryptoguyinza.co.za\/","explorer":"https:\/\/tronscan.org\/#\/token\/CryptoGuyInZA\/TCLJe8giq47DEwX9PtiSJk64LRhQMtNARf","social":"","whitepaper":"","created":"0000-00-00"},{"exchange_id":"69","symbol":"","first_token_id":"ReynaToken","price":"0.001578","volume":"3423886339","up_down_percent":"-14.3322","supply":"50000000000","marketcap":"0","website":"www.reyna.network","explorer":"https:\/\/tronscan.org\/#\/token\/ReynaToken\/TQH3r7WyteKVy1cskhc7BiqbNYSyiyvwPS","social":"https:\/\/t.me\/reynaprojectEN","whitepaper":"","created":"2018-09-13"}]
```


### `GET  /getMarketDataById `

Example:
https://tronmarketcap.org/api/v1/public/getMarketDataById/dice

Param | Required
------------ | -------------
tokenName | YES

Response:

```
[{"exchange_id":"43","symbol":"dice","first_token_id":"dice","price":"0.079982","volume":"60561401","up_down_percent":"3.0059","supply":"1599903419","marketcap":"93713.663641","website":"https:\/\/dicecoin.io\/","explorer":"https:\/\/tronscan.org\/#\/token\/dice\/TUgE94frLY3CPycEmjgHvT9YVPvgCSLcZ4","social":"https:\/\/t.me\/TRONdiceofficial","whitepaper":"","created":"2016-10-09"}]
```


### `GET /blacklistTokens`

URL:
https://tronmarketcap.org/api/v1/public/blacklistTokens

Response:
```
[{"blacklist":"IGg"},{"blacklist":"Sesameseed"},{"blacklist":"twx"}]
```
