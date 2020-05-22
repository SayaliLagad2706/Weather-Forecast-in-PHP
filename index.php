<html>
    <head>
        <style>
            .container {
                width: 700px;
                height: 250px;
                margin: 3% auto;
                background: #00B01C;
                border-radius: 10px;
            }
            
            .verticalBar {
                width: 5px;
                height: 150px;
                background: white;
                margin-left: 390px;
                margin-top: -90px;
                border-radius: 10px;
            }
            
            .card {
                height: 280px; 
                width: 420px; 
                background: #26C6FA;
                margin: 3% auto;
                border-radius: 10px;
                color: white;
                padding-left: 20px;
                padding-top: 20px;
            }
            
            .detail-card {
                height: 410px; 
                width: 450px; 
                background: #9DD1DC;
                margin: 1% auto;
                border-radius: 10px;
                color: white;
                padding-left: 20px;
                padding-top: 20px;
            }
            
            .details {
                margin-left: -5px;
            }
            
            .summary-table {
                background-color: #90C6EE;
                text-align: center;
                border-collapse: collapse;
                color: white;
                display: inline-block;
            }
            
            .summary-button {
                background: none;
                border: none;
                color: white;
                cursor: pointer;
                font-weight: bold;
                font-family: serif;
                font-size: 15px;
            }
           
            .up-down-arrow {
                width: 40px;
                height: 40px;
                background: none;
                border: none;
                cursor: pointer;
                display: inline-block;
            }
            
            .show-error {
                display: inline-block;
                width: 400px;
                border: solid 2px #A7A7A7;
                background: #F1F1F1;
                font-weight: bold;
            }
            
            /* styling for row and columns */    
            .card-column {
                float: left;
                width: 15%;
                margin-left: 5px;
                text-align: center;
                margin-top: 10px;
                font-weight: bold;
                font-size: 20px;
            }
            
            .card-column img {
                width: 30px;
                height: 30px;
            }
            
            .first-col {
                padding-top: 40px;
                float: left;
                width: 50%;
            }
            
            .second-col {
                padding-top: -40px;
                float: left;
                width: 50%;
            }
            
            .first-detail-column {
                float: left;
                padding-left: 80px;
                text-align: right;
                width: 40%;
            }
            
            .second-detail-column {
                float: left;
                padding-left: 3px;
                text-align: left;
                width: 30%;
                font-size: 20px;
                margin-top: -1px;
            }
            
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            
            .detail-card img {
                width: 180px;
                height: 180px;
            }
            
            .detail-card div {
                font-weight: bold; 
            }
            
            .second-col img {
                margin-top: -30px;
            }
            
            /* syling on tags */
            option {
                text-align: center;
                font-family: serif;
                font-size: 15px;
            }
            
            th, td {
                border: solid 2px #23A3CC;
                border-collapse: collapse;
                padding-left: 7px;
                padding-right: 7px;
            }
            
            td {
                padding-top: 3px;
                padding-bottom: 3px;
                font-weight: bold;
                font-family: serif;
                font-size: 15px;
            }
            
            table img {
                width: 40px;
                height: 40px;
                padding: 0 !important; 
                
            }
        </style>
    </head>
    <body>
        <!-- checks if the form details are filled or not */ -->
        <?php if($_SERVER['REQUEST_METHOD'] != 'POST'): ?>
            <div class="container">
                <p style="text-align: center; font-size: 40px; font-family: serif; color: white;">
                    <i>Weather Search</i>
                </p>
                <form id="locationForm" name="form">
                    <div style="margin-left: 50px; margin-top: -35px;">
                        <label for="street" style="color: white; font-size: 18px;"><b>Street</b></label>
                        <input style="font-family: serif; margin-left: 7px; font-size: 15px;" size="18" type="text" id="street" name="Street">
                    </div>
                    <div style="margin-left: 50px; margin-top: 5px;">
                        <label for="city" style="color: white; font-size: 18px;"><b>City</b></label>
                        <input style="font-family: serif; margin-left: 19px; font-size: 15px;" size="18" type="text" id="city" name="City">
                    </div>
                    <div style="margin-left: 50px; margin-top: 5px;">
                        <label for="state" style="color: white; font-size: 18px;"><b>State</b></label>
                        <select style=" margin-left: 2px; width: 250px; font-family: serif; font-size: 15px;" id="state">
                            <option value="" selected>State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                </form>
                <div class="verticalBar"></div>
                <div style="margin-left: 480px; margin-top: -145px;">
                   <input style="margin-left: 7px;" size="13" type="checkbox" id="current_location" name="Current Location" onchange="disableInputs()">
                   <label for="current_location" style="color: white; font-size: 18px;">
                       <b>Current Location</b>
                   </label>
                </div>
                <div style="margin-top: 130px; margin-left: 250px;">
                   <button style="font-family: serif; border-radius: 5px; background: white; border: none; padding: 2px 8px; font-size: 15px;" type="button" onclick="validateInput()"> search </button>
                   <button style="font-family: serif; border-radius: 5px; background: white; border: none; padding: 2px 8px; font-size: 15px" type="button" onclick="resetForm()"> clear </button>
                </div>
            </div>
        <div style="text-align: center;">
            <p id="showError"></p>
        </div>
        <?php else: 
            $addr = array(); $address; $display_data;
            foreach ($_POST as $var) {
                $addr[] = $var;
                $address = $address . $var;
            }

            //check if the first page details are to be displayed
            if(sizeof($addr) == 3) {
                
                //check status and return appropriate image
                function checkStatus($status) {
                    switch($status) {
                        case 'clear-day': case 'clear-night':
                            $image = "<div>
                            <img src=\"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-12-512.png\"/>
                            </div>";
                            break;
                        case 'rain':
                            $image = "<div>
                            <img src=\"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-04-512.png\"/>
                            </div>";
                            break;
                        case 'snow':
                            $image = "<div>
                            <img src=\"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-19-512.png\"/></div>";
                            break;
                        case 'sleet':
                            $image = "<div>
                            <img src=\"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-07-512.png\"/></div>";
                            break;
                        case 'wind':
                            $image = "<div>
                            <img src=\"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-27-512.png\"/>
                            </div>";
                            break;
                        case 'fog':
                            $image = "<div>
                            <img src=\"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-28-512.png\"/>
                            </div>";
                            break;
                        case 'cloudy':
                            $image = "<div>
                            <img src=\"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-01-512.png\"/>
                            </div>";
                            break;
                        case 'partly-cloudy-day': case 'partly-cloudy-night':
                            $image = "<div>
                            <img src=\"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-02-512.png\"/>
                            </div>";
                            break;
                    }
                    return $image;
                }
                
                //check if the user has clicked the current location checkbox
                if(is_numeric($addr[0])) {
                    $latitude = $addr[0];
                    $longitude = $addr[1];
                    $city = $addr[2];
                }
                
                //the user has entered the address in the input fields
                else {
                    $city = $addr[1];
            
                    //call the google geocode api and use the xml data to fetch latitude and longitude
                    $address = urlencode($address);
                    $context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
                    $google_geocode_API = "https://maps.googleapis.com/maps/api/geocode/xml?address=" . $address . "&key=" . <GOOGLE_API_KEY>;
                    $xml_response = file_get_contents($google_geocode_API, false, $context);
                    $xml_response = simplexml_load_string($xml_response);
                    $latitude = $xml_response->result->geometry->location->lat;
                    $longitude = $xml_response->result->geometry->location->lng;
                }
                
                //check if the user has entered an invalid address
                if(empty($latitude) || empty($longitude)) {
                    echo "<div style=\"text-align: center\"><div class=\"show-error\">Please check the input address.</div></div>";
                }
                
                else {
                    //call the forecast.api and parse the returned json data
                    $forecast_API = "https://api.forecast.io/forecast/" . <DARKSKY_API_KEY> . "/" . $latitude . "," . $longitude . "?exclude=minutely,hourly,alerts,flags";
                    $json_response = file_get_contents($forecast_API);
                    $json_parsed = json_decode($json_response, true);
        
                    //an array to store data to be displayed on the card
                    $card_data = array($city, $json_parsed['timezone'], $json_parsed['currently']['temperature'], $json_parsed['currently']['summary'], $json_parsed['currently']['humidity'], $json_parsed['currently']['pressure'], $json_parsed['currently']['windSpeed'], $json_parsed['currently']['visibility'], $json_parsed['currently']['cloudCover'], $json_parsed['currently']['ozone']);
        
                    //an array to store the data to be displayed in the table
                    $table_data = array();
                    for($i = 0; $i < 8; $i++) {
                        $table_data[] = array($json_parsed['daily']['data'][$i]['time'], $json_parsed['daily']['data'][$i]['icon'], $json_parsed['daily']['data'][$i]['summary'], $json_parsed['daily']['data'][$i]['temperatureHigh'], $json_parsed['daily']['data'][$i]['temperatureLow'], $json_parsed['daily']['data'][$i]['windSpeed']);
                }
                    
                //form HTML string to display the card and weather summary table
                $display_data = "<div class=\"card\">
                <div style=\"font-size:30px;\"><b>$card_data[0]</b></div>
                <div>$card_data[1]</div>
                <div class=\"row\">
                    <div style=\"font-size: 80px; font-weight: bold; float: left;\">$card_data[2]
                    <img style=\"width:10px; height: 10px; margin-top: 15px; margin-left: -15px; position: absolute;\" src=\"https://cdn3.iconfinder.com/data/icons/virtual-notebook/16/button_shape_oval-512.png\"/><span style=\"font-size: 40px; font-weight: bold;\"> F</span></div>
                </div>
                <div style=\"font-size: 30px; font-weight: bold;\">$card_data[3]</div>
                <div class=\"row\">";
                    if($card_data[4] != 0) {
                        $display_data = $display_data . "<div class=\"card-column\">
                            <img src = \"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-16-512.png\" title=\"Humidity\"/>
                            <p class=\"details\">$card_data[4]</p>
                        </div>";
                    }
                    if($card_data[5] != 0) {
                        $display_data = $display_data . "<div class=\"card-column\">
                            <img src = \"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-25-512.png\" title=\"Pressure\"/>
                            <p class=\"details\">$card_data[5]</p>
                        </div>";
                    }
                    if($card_data[6] != 0) {
                        $display_data = $display_data . "<div class=\"card-column\">
                            <img src = \"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-27-512.png\" title=\"Wind Speed\"/>
                            <p class=\"details\">$card_data[6]</p>
                        </div>";
                    }
                    if($card_data[7] != 0) {
                        $display_data = $display_data . "<div class=\"card-column\">
                            <img src = \"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-30-512.png\" title=\"Visibility\"/>
                            <p class=\"details\">$card_data[7]</p>
                        </div>";
                    }
                    if($card_data[8] != 0) {
                        $display_data = $display_data . "<div class=\"card-column\">
                            <img src = \"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-28-512.png\" title=\"CLoudCover\"/>
                            <p class=\"details\">$card_data[8]</p>
                        </div>";
                    }
                    if($card_data[9] != 0) {
                        $display_data = $display_data . "<div class=\"card-column\">
                            <img src = \"https://cdn2.iconfinder.com/data/icons/weather-74/24/weather-24-512.png\" title=\"Ozone\"/>
                            <p class=\"details\">$card_data[9]</p>
                        </div>";
                    }   
                $display_data = $display_data . "</div>
                </div>
                <br>
                <div style=\"text-align: center;\"><table class=\"summary-table\">
                    <tr>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Summary</th>
                        <th>TemperatureHigh</th>
                        <th>TemperatureLow</th>
                        <th>Wind Speed</th>
                    </tr>
                    <tr>
                        <td>" . gmdate("Y-m-d", $table_data[0][0]). "</td>
                        <td>" . checkStatus($table_data[0][1]) . "</td>
                        <td><button class=\"summary-button\" onclick=\"detailedWeather($latitude, $longitude, " .$table_data[0][0] . ");\">" . $table_data[0][2]. "</button></td>
                        <td>" . $table_data[0][3]. "</td>
                        <td>" . $table_data[0][4]. "</td>
                        <td>" . $table_data[0][5]. "</td>
                    </tr>
                    <tr>
                        <td>" . gmdate("Y-m-d", $table_data[1][0]). "</td>
                        <td>" . checkStatus($table_data[1][1]) . "</td>
                        <td><button class=\"summary-button\" onclick=\"detailedWeather($latitude, $longitude, " .$table_data[1][0] . ");\">" . $table_data[1][2]. "</button></td>
                        <td>" . $table_data[1][3]. "</td>
                        <td>" . $table_data[1][4]. "</td>
                        <td>" . $table_data[1][5]. "</td>
                    </tr>
                    <tr>
                        <td>" . gmdate("Y-m-d", $table_data[2][0]). "</td>
                        <td>" . checkStatus($table_data[2][1]) . "</td>
                        <td><button class=\"summary-button\" onclick=\"detailedWeather($latitude, $longitude, " .$table_data[2][0] . ");\">" . $table_data[2][2]. "</button></td>
                        <td>" . $table_data[2][3]. "</td>
                        <td>" . $table_data[2][4]. "</td>
                        <td>" . $table_data[2][5]. "</td>
                    </tr>
                    <tr>
                        <td>" . gmdate("Y-m-d", $table_data[3][0]). "</td>
                        <td>" . checkStatus($table_data[3][1]) . "</td>
                        <td><button class=\"summary-button\" onclick=\"detailedWeather($latitude, $longitude, " .$table_data[3][0] . ");\">" . $table_data[3][2]. "</button></td>
                        <td>" . $table_data[3][3]. "</td>
                        <td>" . $table_data[3][4]. "</td>
                        <td>" . $table_data[3][5]. "</td>
                    </tr>
                    <tr>
                        <td>" . gmdate("Y-m-d", $table_data[4][0]). "</td>
                        <td>" . checkStatus($table_data[4][1]) . "</td>
                        <td><button class=\"summary-button\" onclick=\"detailedWeather($latitude, $longitude, " .$table_data[4][0] . ");\">" . $table_data[4][2]. "</button></td>
                        <td>" . $table_data[4][3]. "</td>
                        <td>" . $table_data[4][4]. "</td>
                        <td>" . $table_data[4][5]. "</td>
                    </tr>
                    <tr>
                        <td>" . gmdate("Y-m-d", $table_data[5][0]). "</td>
                        <td>" . checkStatus($table_data[5][1]) . "</td>
                        <td><button class=\"summary-button\" onclick=\"detailedWeather($latitude, $longitude, " .$table_data[5][0] . ");\">" . $table_data[5][2]. "</button></td>
                        <td>" . $table_data[5][3]. "</td>
                        <td>" . $table_data[5][4]. "</td>
                        <td>" . $table_data[5][5]. "</td>
                    </tr>
                    <tr>
                        <td>" . gmdate("Y-m-d", $table_data[6][0]). "</td>
                        <td>" . checkStatus($table_data[6][1]) . "</td>
                        <td><button class=\"summary-button\" onclick=\"detailedWeather($latitude, $longitude, " .$table_data[6][0] . ");\">" . $table_data[6][2]. "</button></td>
                        <td>" . $table_data[6][3]. "</td>
                        <td>" . $table_data[6][4]. "</td>
                        <td>" . $table_data[6][5]. "</td>
                    </tr>
                    <tr>
                        <td>" . gmdate("Y-m-d", $table_data[7][0]). "</td>
                        <td>" . checkStatus($table_data[7][1]) . "</td>
                        <td><button class=\"summary-button\" onclick=\"detailedWeather($latitude, $longitude, " .$table_data[7][0] . ");\">" . $table_data[7][2]. "</button></td>
                        <td>" . $table_data[7][3]. "</td>
                        <td>" . $table_data[7][4]. "</td>
                        <td>" . $table_data[7][5]. "</td>
                    </tr>
                </table>
                </div>"; 
                echo $display_data;
            }
        }
        
        //display the deatil weather card
        else {
            //call the darksky api and parse the json data
            $detailed_weather = "https://api.darksky.net/forecast/" . <DARKSKY_API_KEY> . "/" . $addr[0]. "," . $addr[1] . "," . $addr[2] . "?exclude=minutely";
            $json_response = file_get_contents($detailed_weather);
            $json_parsed = json_decode($json_response, true);
            $timezone = $json_parsed['timezone'];
            $gmtTimezone = new DateTimeZone($timezone);     
            
            //array to store information to be displayed in deatil weather card
            $card_data = array($json_parsed['currently']['summary'], $json_parsed['currently']['temperature'], $json_parsed['currently']['icon'], $json_parsed['currently']['precipIntensity'], $json_parsed['currently']['precipProbability'], $json_parsed['currently']['windSpeed'], $json_parsed['currently']['humidity'], $json_parsed['currently']['visibility'], $json_parsed['daily']['data'][0]['sunriseTime'], $json_parsed['daily']['data'][0]['sunsetTime']);
            
            //form the HTML strig to be displayed
            $display_data = "<div style=\"text-align: center; font-size: 30px;\"><b>Daily Weather Detail</b></div>
            <div class=\"detail-card\">
                <div class=\"row\">
                    <div class=\"first-col\">
                        <div style=\"font-size: 30px;\">$card_data[0]</div>
                        <div style=\"font-size: 90px;\">". intval($card_data[1]) . "<img style=\"width:10px; height: 10px; margin-top: 15px; margin-left: -2px; position: absolute;\" src=\"https://cdn3.iconfinder.com/data/icons/virtual-notebook/16/button_shape_oval-512.png\"><span style=\"font-size: 65px; margin-left: 7px;\">F</span>
                    </div>
                    </div><div class=\"second-col\">";
            
                        //display icon according to the icon value
                        switch($card_data[2]) {
                            case 'clear-day': case 'clear-night':
                                $display_data = $display_data . "<div>
                                <img src=\"https://cdn3.iconfinder.com/data/icons/weather-344/142/sun-512.png\"/>
                                </div></div></div>";
                                break;
                            case 'rain':
                                $display_data = $display_data . "<div>
                                <img src=\"https://cdn3.iconfinder.com/data/icons/weather-344/142/rain-512.png\"/>
                                </div></div></div>";
                                break;
                            case 'snow':
                                $display_data = $display_data . "<div>
                                <img src=\"https://cdn3.iconfinder.com/data/icons/weather-344/142/snow-512.png\"/>
                                </div></div></div>";
                                break;
                            case 'sleet':
                                $display_data = $display_data . "<div>
                                <img src=\"https://cdn3.iconfinder.com/data/icons/weather-344/142/lightning-512.png\"/></div></div></div>";
                                break;
                            case 'wind':
                                $display_data = $display_data . "<div>
                                <img src=\"https://cdn4.iconfinder.com/data/icons/the-weather-is-nice-today/64/weather_10-512.png\"/>
                                </div></div></div>";
                                break;
                            case 'fog':
                                $display_data = $display_data . "<div>
                                <img src=\"https://cdn3.iconfinder.com/data/icons/weather-344/142/cloudy-512.png\"/>
                                </div></div></div>";
                                break;
                            case 'cloudy':
                                $display_data = $display_data . "<div>
                                <img src=\"https://cdn3.iconfinder.com/data/icons/weather-344/142/cloud-512.png\"/>
                                </div></div></div>";
                                break;
                            case 'partly-cloudy-day': case 'partly-cloudy-night':
                                $display_data = $display_data . "<div>
                                <img src=\"https://cdn3.iconfinder.com/data/icons/weather-344/142/sunny-512.png\"/>
                                </div></div></div>";
                                break;
                        }
                    $display_data = $display_data . "<div class=\"row\">";
            
                    //check precipitation value
                    if($card_data[3] <= 0.001) {
                        $display_data = $display_data. "<div class=\"first-detail-column\">Precipitation:</div><div class=\"second-detail-column\"> None</div></div>";
                    }
                    else if($card_data[3] <= 0.015) {
                        $display_data = $display_data. "<div class=\"first-detail-column\">Precipitation:</div><div class=\"second-detail-column\"> Very Light</div></div>";
                    }
                    else if($card_data[3] <= 0.05) {
                        $display_data = $display_data. "<div class=\"first-detail-column\">Precipitation:</div><div class=\"second-detail-column\"> Light</div></div>";
                    }
                    else if($card_data[3] <= 0.1) {
                        $display_data = $display_data. "<div class=\"first-detail-column\">Precipitation:</div><div class=\"second-detail-column\"> Moderate</div></div>";
                    }
                    else {
                        $display_data = $display_data. "<div class=\"first-detail-column\">Precipitation:</div><div class=\"second-detail-column\"> Heavy</div></div>";
                    }
            
                    //get the offset between the server time zone and the time zone of the requested location
                    $localTimeZone = new DateTime(gmdate("Y-m-d H:i:s", $card_data[8]), $gmtTimezone);
                    $offset = explode(":", $localTimeZone->format('P'));
                    $offsetValue = 0;
                    $count = 0;
                    foreach($offset as $o) {
                        if($count == 0) {
                            $offsetValue = $offsetValue + abs($o * 60 * 60);
                        }
                        else if($count == 1) {
                            $offsetValue = $offsetValue + ($o * 60);
                        }
                        else {
                            $offsetValue = $offsetValue + $o;
                        }
                        $count++;
                    }
                    //set the sunrise and sunset time in proper time zone
                    $sunrise = $card_data[8] + (($offset[0] < 0) ? -$offsetValue : $offsetValue);
                    $sunset = $card_data[9] + (($offset[0] < 0) ? -$offsetValue : $offsetValue);
            
                    $display_data = $display_data . "<div class=\"row\"><div class=\"first-detail-column\">Chance of Rain: </div><div class=\"second-detail-column\">" . ($card_data[4]*100) . "<span style=\"font-size: 15px;\"> %</span></div></div>
                    <div class=\"row\">
                        <div class=\"first-detail-column\">Wind Speed: </div>
                        <div class=\"second-detail-column\"> $card_data[5]<span style=\"font-size: 15px;\"> mph</span></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"first-detail-column\">Humidity: </div>
                        <div class=\"second-detail-column\">" . ($card_data[6]*100) . "<span style=\"font-size: 15px;\"> %</span></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"first-detail-column\">Visibility: </div>
                        <div class=\"second-detail-column\">$card_data[7]<span style=\"font-size: 15px;\"> mi</span></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"first-detail-column\">Sunrise/ Sunset: </div>
                        <div class=\"second-detail-column\">" . ltrim(gmdate("h", $sunrise), '0') . "<span style=\"font-size: 15px;\"> " . gmdate("A", $sunrise) . "</span>/ " . ltrim(gmdate("h", $sunset), '0') . "<span style=\"font-size: 15px;\"> " . gmdate("A", $sunset) . "</span></div>
                    </div>
                    </div>
                    <div style=\"text-align: center; font-size: 30px;\"><b>Day's Hourly Weather</b></div>";
                    echo $display_data;

                    //logic for click of down arrow
                    if($addr[3] == "false") { 
                        //array to store the 24 hour temperature
                        $hourly_temp = array();
                        for($i = 0; $i < 24; $i++) {
                            $hourly_temp[] = $json_parsed['hourly']['data'][$i]['temperature'];
                        }
                        echo "<div style=\"text-align: center;\">
                        <button class=\"up-down-arrow\" onclick=\"openMe(" .json_encode($hourly_temp). ")\">
                            <img style=\"width: 40px; height: 40px;\" src=\"https://cdn4.iconfinder.com/data/icons/geosm-e-commerce/18/point-down-512.png\"/>
                        </button></div>";
                    }
            
                    //logic when up arrow is clicked
                    else {
                        echo "<div style=\"text-align: center;\">
                        <button class=\"up-down-arrow\" onclick=\"closeMe()\">
                            <img style=\"width: 40px; height: 40px;\" src=\"https://cdn0.iconfinder.com/data/icons/navigation-set-arrows-part-one/32/ExpandLess-512.png\"/>
                        </button></div>";
                    }        
        }?>
        <?php endif; ?>
        
        <div id="demo"></div>
        <div style="text-align: center;">
            <div id="chart" style="display: inline-block;"></div>
        </div>
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            var street = document.getElementById("street");
            var state = document.getElementById("state");
            var city = document.getElementById("city");
            var currentLocation = document.getElementById("current_location");
            var form = document.getElementById("locationForm");
            
            var latitude, longitude, timestamp, currLat, currLong, currCity;
            var temp = [];
            
            // disables inputs on click of current location checkbox
            function disableInputs() {
                form.reset();
                street.disabled = currentLocation.checked;
                state.disabled = currentLocation.checked;
                city.disabled = currentLocation.checked;
                getLatLong();
            }
            
            // fetches the current location of the user
            function getLatLong() {
                document.getElementById("showError").innerHTML = ""
                var jsonDoc = createXMLHTTPRequest("", "GET", "http://ip-api.com/json");
                var myObj = JSON.parse(jsonDoc);
                currLat = myObj['lat'];
                currLong = myObj['lon'];
                currCity = myObj['city'];
            }
            
            // resets form on click of Clear button
            function resetForm() {
               form.reset(); 
               currentLocation.checked = false; 
               disableInputs();
               document.getElementById("demo").innerHTML = "";
            }
            
            // validates input of the form
            function validateInput() {
                if(((street.value == "") || (city.value == "") || (state.value == "")) && (currentLocation.checked == false)) {
                    document.getElementById("demo").innerHTML = "";
                    document.getElementById("showError").innerHTML = "<div class=\"show-error\">Please check the input address.</div>"
                }
                else if(currentLocation.checked == true) {
                    getLatLong();
                    var params = "latitude="+currLat+"&longitude="+currLong+"&city="+currCity;
                    document.getElementById("showError").innerHTML = ""
                    createXMLHTTPRequest(params, "POST", "index.php");
                }
                else {
                    var params = "street="+street.value+"&city="+city.value+"&state="+state.value;
                    document.getElementById("showError").innerHTML = ""
                    createXMLHTTPRequest(params, "POST", "index.php");    
                }
            }
            
            // called from PHP when detailed weather is to be displayed
            function detailedWeather(lat, long, timestamp) {
                latitude = lat;
                longitude = long;
                time = timestamp;
                var params = "latitude="+lat+"&longitude="+long+"&time="+timestamp+"&showChart=false";
                createXMLHTTPRequest(params, "POST", "index.php");
            }
            
            // shows or hides chart of temperature vs time according to the arrow clicked
            function toggle(openOrClose) {
                var params = "latitude="+latitude+"&longitude="+longitude+"&time="+time+"&showChart="+openOrClose;
                createXMLHTTPRequest(params, "POST", "index.php");
                if(openOrClose == "true") {
                    google.charts.load('current', {packages: ['corechart', 'line']});
                    google.charts.setOnLoadCallback(drawBackgroundColor);

                    // plots the hourly temperature for the day
                    function drawBackgroundColor() {
                        var data = new google.visualization.DataTable();
                        data.addColumn('number', 'X');
                        data.addColumn('number', 'T');

                        data.addRows([
                            [0, temp[0]], [1, temp[1]], [2, temp[2]], [3, temp[3]], [4, temp[4]],
                            [5, temp[5]], [6, temp[6]], [7, temp[7]], [8, temp[8]], [9, temp[9]],
                            [10, temp[10]], [11, temp[11]], [12, temp[12]], [13, temp[13]], [14, temp[14]],
                            [15, temp[15]], [16, temp[16]], [17, temp[17]], [18, temp[18]], [19, temp[19]],
                            [20, temp[20]], [21, temp[21]], [22, temp[22]], [23, temp[23]]
                        ]);

                        var options = {
                            hAxis: {
                                title: 'Time',
                                titleTextStyle: {
                                    fontName: 'serif',
                                    italic: true,
                                    fontSize: 15
                                }
                            },
                            vAxis: {
                                title: 'Temperature',
                                textStyle: {
                                    color: 'white'
                                },
                                titleTextStyle: {
                                    fontName: 'serif',
                                    italic: true,
                                    fontSize: 15
                                }
                            },
                            backgroundColor: 'white',
                            colors: ['#97D5DB'],
                            fontName: 'serif',
                            bold: true,
                            width: 800
                        };

                        var chart = new google.visualization.LineChart(document.getElementById('chart'));
                        chart.draw(data, options);
                    }
                }
            }
            
            // called on click of down-arrow
            function openMe(hourlyTemp) {
                temp = hourlyTemp.slice();
                toggle("true");
            }
            
            // called on click of up-arrow above chart
            function closeMe() {
                toggle("false");
            }
            
            // creates an XMLHTTPRequest for POST or GET method
            function createXMLHTTPRequest(params, method, url) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open(method, url, false);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send(params);
                if(method == "POST") {
                    document.getElementById("demo").innerHTML = xmlhttp.responseText;
                }
                else {
                    return xmlhttp.responseText;
                }
            }
        </script>
    </body>
</html>
