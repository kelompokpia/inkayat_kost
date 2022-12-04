<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kamar;
use Analytics;
use Spatie\Analytics\Period;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
