<?php

namespace App\Repositories;

use App\Models\Logs;

use Illuminate\Support\Facades\Cache;


class UserRepository extends BaseRepository
{

    public function __construct(Logs $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function test(){

        $log= Logs::groupBy('countryCode')->get();

        foreach ($log as $key => $log1) {
            
            $count= Logs::whereJsonContains('params->countryCode',$log1['params->countryCode'])->count();
            $key= $log1['visit_date'].' '.$log1['countryCode'];
            $value= Cache::put($key, $count);
        }        
    }

}
