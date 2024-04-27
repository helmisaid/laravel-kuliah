<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Myfirstcontroller extends Controller
{
    public function index() {
        return view('admin.home');
    }

    public function helloworld() {
        echo "Hello World from controller";
    }

    public function withparam($id) {
        echo 'nilai param adalah '.$id;
    }

    public function showmyview() {
        return view('myview');
    }

    public function viewwithdata() {
        $mydata = 10;
        $myarray = array('Onepiece', 'Darling in the franxx', 'Kill la kill', 'Solo leveling');
        
        return view('folderview.viewdata', ['mydata' => $mydata, 'myarray' => $myarray]);
    }
}
