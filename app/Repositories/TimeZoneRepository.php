<?php

namespace App\Repositories;

use App\Models\Restaurants\Location;
use App\Models\TimeZone;

class TimeZoneRepository
{

    public function getAll()
    {
        return TimeZone::all();
    }
}
