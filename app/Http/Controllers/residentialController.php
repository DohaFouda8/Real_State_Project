<?php

namespace App\Http\Controllers;

use App\Models\Unites;
use Illuminate\Http\Request;

class residentialController extends Controller
{
    $type1 = DB::table('type1')
    ->where(residential)
    ->get();
}

