<?php

namespace App\Http\Controllers\Security;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class postController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
      
}
