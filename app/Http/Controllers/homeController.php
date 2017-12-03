<?php
/**
 * Created by PhpStorm.
 * User: Awesome
 * Date: 12/4/2017
 * Time: 1:40 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view("home");
    }
}