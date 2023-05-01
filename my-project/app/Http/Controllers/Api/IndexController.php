<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\TrackHitJob;


class IndexController extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {
        TrackHitJob::dispatch("hello rabbit");
        return "asd";
    }

}