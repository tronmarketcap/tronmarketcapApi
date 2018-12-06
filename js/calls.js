 $.ajax({
      type:'GET',
      url:'https://tronmarketcap.org/api/v1/public/getAllMarketData',
      success:function(data){
           console.log(data);
          
      }
});

var id = 'dice';

 $.ajax({
      type:'GET',
      url:'https://tronmarketcap.org/api/v1/public/getMarketDataById/'+id,
      success:function(data){
          console.log(data);
      }
});