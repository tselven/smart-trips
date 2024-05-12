<?php

namespace Modal;

use Includes\Model;

class Place extends Model
{
    public $name = 'places';
    public $uni = "Name";

    function getClosest($long,$lat,$distance)
    {
        $this->query = "SELECT 
        place_name, 
        latitude, 
        longitude,
        (6371 * acos(cos(radians($lat)) * cos(radians(latitude)) * cos(radians(longitude) - radians($long)) + sin(radians($lat)) * sin(radians(latitude)))) AS distance
    FROM 
        places
    HAVING 
        distance <= $distance
    ORDER BY 
        distance;";

        return $this->get();
    }
}
