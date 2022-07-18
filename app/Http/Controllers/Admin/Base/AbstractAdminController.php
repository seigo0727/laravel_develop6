<?php

namespace App\Http\Controllers\Admin\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class AbstractAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->initRoute();
    }

    public function initRoute()
    {

    }
}
