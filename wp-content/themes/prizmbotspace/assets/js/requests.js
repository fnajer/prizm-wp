// const CRYPTOPANIC_API_KEY = '39ae3f77a2bb027533909e8d315d3931a36a9e23';
// const COINMARKET_API_KEY = '0d78a369-3001-426a-9f69-81b2e627c92c';

// async function makeRequest(url, defaultRes, cb, headers = null) {
//   let options;
//   if (headers)
//     options = {
//       method: 'GET',
//       headers
//     };
//   else options = {
//     method: 'GET'
//   };

//   const response = await fetch(url, options);

//   if (response.ok) {
//     let json = await response.json();
//     return cb(json);
//   } else {
//     console.log("Ошибка HTTP: " + response.status, response);
//     return cb(defaultRes);
//   }
// }

// function makeRequests($) {
//   makeRequest(
//     'https://api.coinhills.com/v1/cspa/pzm/usd',
//     { 'CSPA:PZM/USD': { cspa: null } },
//     dataCoinHills => {
//       const coinHillsRatings = dataCoinHills.data['CSPA:PZM/USD'].cspa;
//       $("#hills_price").text(`$${coinHillsRatings.toFixed(6)}`);
//     }
//   );
//   makeRequest(
//     'https://api.coingecko.com/api/v3/simple/price?ids=prizm&vs_currencies=usd',
//     { 'prizm': { usd: null } },
//     dataCoinGecko => {
//       const coinGeckoRatings = dataCoinGecko['prizm'].usd;
//       $("#gecko_price").text(`$${coinGeckoRatings.toFixed(6)}`);
//     }
//   );
//   makeRequest(
//     'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?id=1681',
//     { 'prizm': { usd: null } },
//     dataCoinMarket => {
//       const coinMarketRatings = dataCoinMarket.data['1681'].quote.USD.price;
//       $("#market_price").text(`$${coinMarketRatings.toFixed(6)}`);
//       $("#panic_price").text(`$${coinMarketRatings.toFixed(6)}`);
//     },
//     {
//       'X-CMC_PRO_API_KEY': '0d78a369-3001-426a-9f69-81b2e627c92c',
//     }
//   );
// }

// jQuery(document).ready( function($) {
  // makeRequests($);
  // setInterval(() => {
  //   makeRequests($);
  //   console.log(123);
  // }, 60 * 60 * 1000); // one time per hours
// });