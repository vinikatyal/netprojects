
                      $geocodeURL = 
            file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=Hyderabad,India&sensor=false");
            
                   $geocode = json_decode($geocodeURL);
            
            
               for($x=0; $x< 10; $x++)
               {
               $lat = $geocode->results[$x]->geometry->location->lat;
               $lng = $geocode->results[$x]->geometry->location->lng; 
            
              $address_components = $geocode->results[$x]->address_components[0]->long_name;
               $formatted_address = $geocode->results[$x]->formatted_address;
               }
