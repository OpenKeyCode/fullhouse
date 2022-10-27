<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Cache;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('back.dashboard');
    }
}
