<!DOCTYPE html>
<html>    
    <head>
    <title>Forecast Search</title>
    <style>
    body{
    text-align: center;
    }

    h3{
    font-size: 16pt;   
    }

    fieldset{
    margin: 0 auto;
    text-align: left;
    width: 400px;
    border: 2px solid; 
    }

    form{
    margin: 5px;   
    }

    label{
    display: inline-block;
    float: left;
    clear: left;
    width: 110px;  
    }

    input,select{
    margin: 2px;
    }

    input[type="text"]
    {
    width: 175px;   
    }

    select{
    width: 150px;   
    }

    select, .button{
    border-radius: 0;   
    }

    .button{
    margin-left: 110px;   
    }

    input[name="clear"]{
    margin-left: 0px;    
    }

    #note{
    font-style: italic;   
    }

    a{
    margin-left: 150px;   
    }  
       
    th{
    text-align:center;   
    }
        
    table{
    margin:0 auto;   
    }

    .desc{
    width:200px;
    text-align:0;  
    }
        
    #upper{
     margin-bottom:5px;   
    }
    </style>
        
    <script>
    function check() {
    var address_filled=false;
    var city_filled=false;   
    var state_filled=false;
        
    var blank="";
	if(document.forecastForm.address.value.trim()!=blank) address_filled=true;
	if(document.forecastForm.city.value.trim()!=blank) city_filled=true;
    if(document.forecastForm.state.value.trim()!=blank) state_filled=true;
	
    if((address_filled) && (city_filled) && (state_filled))     
    return true;
        
    else{
    if (!address_filled) alert("Please enter value for Address");
    if (!city_filled) alert("Please enter value for City");
    if (!state_filled) alert("Please enter value for State");
    
    return false;
    }  
    }
      
    function redirect(){
      window.location.replace("http://cs-server.usc.edu:31458/hmw6/forecast.php");
    }    
    </script>
    </head>
    
    <body>    
      <h3>Forecast Search</h3>
      <fieldset id="upper">
      <form name="forecastForm" method="GET" >
        <label>Street Address:* </label><input id="address" type="text" name="address" value="<?php echo isset($_GET["address"]) ? $_GET["address"] : "" ?>"><br/>
        <label>City:* </label><input id="city" type="text" name="city" value="<?php echo isset($_GET["city"]) ? $_GET["city"] : "" ?>"><br/>
        <label>State:* </label><select id="state" name="state" >
		 <option selected="selected" value="">Select your state...</option>
 		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="AL") ? "selected='selected'" : "" ?> value="AL">Alabama</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="AK") ? "selected='selected'" : "" ?> value="AK">Alaska</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="AZ") ? "selected='selected'" : "" ?> value="AZ">Arizona</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="AR") ? "selected='selected'" : "" ?> value="AR">Arkansas</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="CA") ? "selected='selected'" : "" ?> value="CA">California</option>  
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="CO") ? "selected='selected'" : "" ?> value="CO">Colorado</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="CT") ? "selected='selected'" : "" ?> value="CT">Connecticut</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="DE") ? "selected='selected'" : "" ?> value="DE">Delaware</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="FL") ? "selected='selected'" : "" ?> value="FL">Florida</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="GA") ? "selected='selected'" : "" ?> value="GA">Georgia</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="HI") ? "selected='selected'" : "" ?> value="HI">Hawaii</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="ID") ? "selected='selected'" : "" ?> value="ID">Idaho</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="IL") ? "selected='selected'" : "" ?> value="IL">Illinois</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="IN") ? "selected='selected'" : "" ?> value="IN">Indiana</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="IA") ? "selected='selected'" : "" ?> value="IA">Iowa</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="KS") ? "selected='selected'" : "" ?> value="KS">Kansas</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="KY") ? "selected='selected'" : "" ?> value="KY">Kentucky</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="LA") ? "selected='selected'" : "" ?> value="LA">Louisiana</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="ME") ? "selected='selected'" : "" ?> value="ME">Maine</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="MD") ? "selected='selected'" : "" ?> value="MD">Maryland</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="MA") ? "selected='selected'" : "" ?> value="MA">Massachusets</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="MI") ? "selected='selected'" : "" ?> value="MI">Michigan</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="MN") ? "selected='selected'" : "" ?> value="MN">Minnesota</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="MS") ? "selected='selected'" : "" ?> value="MS">Mississippi</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="MO") ? "selected='selected'" : "" ?> value="MO">Missouri</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="MT") ? "selected='selected'" : "" ?> value="MT">Montana</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="NE") ? "selected='selected'" : "" ?> value="NE">Nebraska</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="NV") ? "selected='selected'" : "" ?> value="NV">Nevada</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="NH") ? "selected='selected'" : "" ?> value="NH">New Hampshire</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="NJ") ? "selected='selected'" : "" ?> value="NJ">New Jersey</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="NM") ? "selected='selected'" : "" ?> value="NM">New Mexico</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="NY") ? "selected='selected'" : "" ?> value="NY">New York</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="NC") ? "selected='selected'" : "" ?> value="NC">North Carolina</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="ND") ? "selected='selected'" : "" ?> value="ND">North Dakota</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="OH") ? "selected='selected'" : "" ?> value="OH">Ohio</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="OK") ? "selected='selected'" : "" ?> value="OK">Oklahoma</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="OR") ? "selected='selected'" : "" ?> value="OR">Oregon</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="PA") ? "selected='selected'" : "" ?> value="PA">Pennsylvania</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="RI") ? "selected='selected'" : "" ?> value="RI">Rhode Island</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="SC") ? "selected='selected'" : "" ?> value="SC">South Carolina</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="SD") ? "selected='selected'" : "" ?> value="SD">South Dakota</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="TN") ? "selected='selected'" : "" ?> value="TN">Tennessee</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="TX") ? "selected='selected'" : "" ?> value="TX">Texas</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="UT") ? "selected='selected'" : "" ?> value="UT">Utah</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="VT") ? "selected='selected'" : "" ?> value="VT">Vermont</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="VA") ? "selected='selected'" : "" ?> value="VA">Virginia</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="WA") ? "selected='selected'" : "" ?> value="WA">Washington</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="WV") ? "selected='selected'" : "" ?> value="WV">West Virginia</option>
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="WI") ? "selected='selected'" : "" ?> value="WI">Wisconsin</option> 
		 <option <?php echo (isset($_GET["state"]) && $_GET["state"]=="WY") ? "selected='selected'" : "" ?> value="WY">Wyoming</option>
		</select>
         <br/>
          <label>Degree:* </label><input type="radio" name="degree" value="fahrenheit" checked>Fahrenheit
        <input <?php echo (isset($_GET["degree"]) && $_GET["degree"]=="celsius") ? "checked" : "" ?> type="radio" name="degree" value="celsius">Celsius<br/>
        <input class="button" type="submit" value="Search" name="submit" onclick="return check()">
        <input class="button" type="button" value="Clear" name="clear" onclick="redirect()"><br/>
        
        <span id="note">* - Mandatory fields.</span><br/>
        <a href="http://forecast.io/">Powered by Forecast.io</a>
        </form>
      </fieldset>
        
      <?php
        if(isset($_GET["submit"]) && $_GET["submit"]=="Search"):
      ?>  
      <fieldset>
         <?php 
         $address=$_GET["address"];
         $city=$_GET["city"];
         $state=$_GET["state"];
         $degree=$_GET["degree"];
         $info=$address.",".$city.",".$state;

         $url="https://maps.google.com/maps/api/geocode/xml?address=".urlencode($info)."&key=AIzaSyANPUq6NcreNxIFTc4_ljgkodoPBUD5wc4";
         $xml=simplexml_load_file($url);
         
         if($xml->status!="ZERO_RESULTS"){
         $latitude=$xml->result->geometry->location->lat;
         $longitude=$xml->result->geometry->location->lng;
           
         if($_GET["degree"]=="fahrenheit"){
           $units_value="us"; 
           $letter="F";
           $windSpeedUnit=" mph";
           $visibilityUnit=" mi";
         }
         
         else if($_GET["degree"]=="celsius"){
           $units_value="si"; 
           $letter="C";
           $windSpeedUnit=" m/s";
           $visibilityUnit=" km";
         }

$URL="https://api.forecast.io/forecast/75896c13f6d9276afb45d5a63b772be7/".rawurlencode($latitude.",".$longitude)."?units=".urlencode($units_value)."&exclude=flags";

        $json = file_get_contents($URL);
        $obj = json_decode($json);
        
        $condition=$obj->currently->summary;
        $temperature=round($obj->currently->temperature);

        $icon=$obj->currently->icon;
        switch ($icon) {
    case "clear-day":
        $icon="clear.png";
        $alternateText="'Clear Day'";
        $title="'Clear Day'";
        break;
    case "clear-night":
        $icon="clear_night.png";
        $alternateText="'Clear Night'";
        $title="'Clear Night'";
        break;
    case "rain":
        $icon="rain.png";
        $alternateText="'Rain'";
        $title="'Rain'";
        break;
    case "snow":
        $icon="snow.png";
        $alternateText="'Snow'";
        $title="'Snow'";
        break;
    case "sleet":
        $icon="sleet.png";
        $alternateText="'Sleet'";
        $title="'Sleet'";
        break;
    case "wind":
        $icon="wind.png";
        $alternateText="'Wind'";
        $title="'Wind'";
        break;
    case "fog":
        $icon="fog.png";
        $alternateText="'Fog'";
        $title="'Fog'";
        break;
    case "cloudy":
        $icon="cloudy.png";
        $alternateText="'Cloudy'";
        $title="'Cloudy'";
        break;
    case "partly-cloudy-day":
        $icon="cloud_day.png";
        $alternateText="'Partly Cloudy Day'";
        $title="'Partly Cloudy Day'";
        break;
    case "partly-cloudy-night":
        $icon="cloud_night.png";
        $alternateText="'Partly Cloudy Night'";
        $title="'Partly Cloudy Night'";
        break;
        } 
        
        $header=$condition."<br/>".$temperature."&#176; ".$letter."<br/>";
        $header.="<img src=".$icon." alt=".$alternateText." title=".$title.">";
        
        $precipitation=$obj->currently->precipIntensity;
        if($_GET["degree"]=="fahrenheit"){
        switch ($precipitation) {
    case 0:
        $precipitation="None";
        break;
    case 0.002:
        $precipitation="Very Light";
        break;
    case 0.017:
        $precipitation="Light";
        break;
    case 0.1:
        $precipitation="Moderate";
        break;
    case 0.4:
        $precipitation="Heavy";
        break;
        } 
        }
             
        else if($_GET["degree"]=="celsius"){
        if($precipitation==0)
            $precipitation="None";
        else if($precipitation>0 && $precipitation<=0.0508)
            $precipitation="Very Light";
        else if($precipitation>0.0508 && $precipitation<=0.4318)
            $precipitation="Light";
        else if($precipitation>0.4318 && $precipitation<=2.54)
            $precipitation="Moderate";
        else if($precipitation>2.54)
            $precipitation="Heavy";
        }
             
        $rain=$obj->currently->precipProbability*100 ."%";
        $wind=round($obj->currently->windSpeed).$windSpeedUnit;
        $dew=round($obj->currently->dewPoint)."&#176; ".$letter;
        $humidity=$obj->currently->humidity*100 ."%";
        $visibility=round($obj->currently->visibility).$visibilityUnit;
        date_default_timezone_set($obj->timezone); 
        $sunrise=date("h:i A",$obj->daily->data[0]->sunriseTime);
        $sunset=date("h:i A",$obj->daily->data[0]->sunsetTime);
        }
        ?>
   
         <table>
         <tr><th colspan="2"><?php echo isset($header) ? $header : "" ?></th></tr>
         <tr><td>Precipitation:</td><td><?php echo isset($precipitation) ? $precipitation : "" ?></td></tr>
         <tr><td class="desc">Chance of Rain:</td><td><?php echo isset($rain) ? $rain : "" ?></td></tr>
         <tr><td class="desc">Wind Speed:</td><td><?php echo isset($wind) ? $wind : "" ?></td></tr>
         <tr><td class="desc">Dew Point:</td><td><?php echo isset($dew) ? $dew : "" ?></td></tr>
         <tr><td class="desc">Humidity:</td><td><?php echo isset($humidity) ? $humidity : "" ?></td></tr>
         <tr><td class="desc">Visibility:</td><td><?php echo isset($visibility) ? $visibility : "" ?></td></tr>
         <tr><td class="desc">Sunrise:</td><td><?php echo isset($sunrise) ? $sunrise : "" ?></td></tr>
         <tr><td class="desc">Sunset:</td><td><?php echo isset($sunset) ? $sunset : "" ?></td></tr>
         </table> 
          
      </fieldset> 
      <?php endif; ?>
    <noscript>
    </body>
</html>