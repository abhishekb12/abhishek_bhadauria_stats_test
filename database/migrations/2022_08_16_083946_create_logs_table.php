<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->json('params');
            $table->dateTime('visit_date', $precision = 0);
            $table->timestamps();
        });

        DB::table('logs')->insert([
            ['params' => '{
 "mobileSearch":true,
     "toSearch":{
         "url":"example.com",
         "name":"example.com"
     },
    "geolocation":{
        "display":"United Kingdom",
        "language":{
            "lang":"en-GB",
            "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"
        },
        "timezone":0,
        "mobile":{
            "android":50,
            "ios":50
        },
        "countryCode":"gb",
        "region":"all",
        "city":"all"
    }
}', 'visit_date' => '2022-06-02 14:29:37'],
['params' => '{
 "mobileSearch":true,
     "toSearch":{
         "url":"example.com",
         "name":"example.com"
     },
    "geolocation":{
        "display":"United Kingdom",
        "language":{
            "lang":"en-GB",
            "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"
        },
        "timezone":0,
        "mobile":{
            "android":50,
            "ios":50
        },
        "countryCode":"IN",
        "region":"all",
        "city":"all"
    }
}', 'visit_date' => '2022-06-15 14:29:37'],
['params' => '{
 "mobileSearch":true,
     "toSearch":{
         "url":"example.com",
         "name":"example.com"
     },
    "geolocation":{
        "display":"United Kingdom",
        "language":{
            "lang":"en-GB",
            "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"
        },
        "timezone":0,
        "mobile":{
            "android":50,
            "ios":50
        },
        "countryCode":"IN",
        "region":"all",
        "city":"all"
    }
}', 'visit_date' => '2022-06-09 14:29:37'],
['params' => '{
 "mobileSearch":true,
     "toSearch":{
         "url":"example.com",
         "name":"example.com"
     },
    "geolocation":{
        "display":"United Kingdom",
        "language":{
            "lang":"en-GB",
            "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"
        },
        "timezone":0,
        "mobile":{
            "android":50,
            "ios":50
        },
        "countryCode":"IN",
        "region":"all",
        "city":"all"
    }
}', 'visit_date' => '2022-06-11 14:29:37'],
['params' => '{
 "mobileSearch":true,
     "toSearch":{
         "url":"example.com",
         "name":"example.com"
     },
    "geolocation":{
        "display":"United Kingdom",
        "language":{
            "lang":"en-GB",
            "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"
        },
        "timezone":0,
        "mobile":{
            "android":50,
            "ios":50
        },
        "countryCode":"gb",
        "region":"all",
        "city":"all"
    }
}', 'visit_date' => '2022-06-21 14:29:37'],['params' => 
'{
    "mobileSearch":true,
     "toSearch":{
         "url":"example.com",
         "name":"example.com"
     },
    "geolocation":{
        "display":"United Kingdom",
        "language":{
            "lang":"en-GB",
            "accept-language":"en-GB,en-US;q=0.8,en;q=0.6"
        },
        "timezone":0,
        "mobile":{
            "android":50,
            "ios":50
        },
        "countryCode":"gb",
        "region":"all",
        "city":"all"
    }
}', 'visit_date' => '2022-06-20 14:29:37'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
