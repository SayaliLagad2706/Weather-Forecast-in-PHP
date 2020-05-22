# Weather-Forecast-in-PHP
- The aim of this project is to display weather details of a location using PHP scripting on server-side
- The initial page enables the user to either input the street, city and state of the interested location or select a check-box to fetch his/her current location
- The server performs error handling on the input and makes GET/POST requests to several APIs like Google Geocode, forecast.io, IP-API and DarkSky API to fetch the weather forecast for the input location
- The required weather parameters are extracted by parsing the JSON data returned by these APIs
- The details are displayed on the screen in a visually appealing manner using various weather icons from 'https://www.iconfinder.com/' and using Google Charts to display the hourly temperature in graph format
- The application is hosted on AWS cloud
- The result is a well formatted web page with required details of the weather

Implementation Details:
  -
  - The project needs API keys for using Google Geocode API and DarkSky API
  - Getting DarkSky API key:
    - Go to https://darksky.net/dev
    - Click on “Try For Free”. 
    - Fill out the form to get the key
    - Copy this key and use it in the code of this project in place of <DARKSKY_API_KEY>
  - Getting Google API key:
    - Go to the Google Developers Console (https://console.developers.google.com/flows/enableapi?apiid=geocoding_backend&keyType=SERVER_SIDE&reusekey=true) 
    - Create or select a project 
    - Click Continue to Enable the API 
    - Go to Credentials to get a Server key (and set the API Credentials
  - The initial web page has two important buttons: Search and Clear
  - When the user clicks on the Search button, the PHP script 
  

Technologies used:
  -
  - Language: PHP
  - Web Technologies: HTML, CSS, JSON, XML
  - GCP App Engine, AWS
  - Editor: Brackets
