<?php

use App\Models\Service;

function getService(){
    $services = Service::orderBy('name','ASC')->where('status',1)->get();
    return $services;
}