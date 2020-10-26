<?php

namespace App\Test;  // bus[test] and vehicle[test] same namespace a..

use App\city\vehicle;    //bus[test] and vehicle[city] diffierent namespace a.[run kore dekho comment uthiye]

class Bus extends vehicle{           //kon folder er moddht ta namespace a dia ashte hobe
    public function test(){
        echo "this is test";
    }
}