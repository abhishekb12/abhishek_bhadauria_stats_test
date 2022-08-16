<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Cache;
// use Illuminate\Http\Request;

class StatisticsController extends Controller
{

    private UserRepository $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    
    public function calculateStatistics(){

        $this->userRepository->test();
    }

    public function retrieveCache(Request $request){
        $key = $request['search'].' '."IN";
        $value = Cache::get($key);

        $arraydata=array(
            'IN' =>Cache::get($request['search'].' '."IN") , 
            'NZ' =>Cache::get($request['search'].' '."NZ") , 
            'GB' =>Cache::get($request['search'].' '."GB") , 
            'USA' =>Cache::get($request['search'].' '."USA")  
        );
        return view('viewblade', compact('arraydata'));

    }



}
