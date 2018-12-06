# importing the requests library 
import requests 

# api-endpoint 
URL = "https://tronmarketcap.org/api/v1/public/getAllMarketData"


# sending get request and saving the response as response object 
r = requests.get(url = URL) 

# extracting data in json format 
data = r.json() 


print(data)
