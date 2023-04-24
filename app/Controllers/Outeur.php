<?php

namespace App\Controllers;

class Outeur extends BaseController
{
    public function index()
    {
        return view('Outeur/groet');
    }


    public function vertoon(){
    	return view('Outeur/vertoon');
    }

}

