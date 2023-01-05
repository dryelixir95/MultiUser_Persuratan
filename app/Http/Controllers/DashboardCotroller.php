<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCotroller extends Controller
{
    public function super()
    {
        return view('superadmin.index');
    } 
  
    public function adminHome()
    {
        return view('admin.index');
    }
    
    public function kajurHome()
    {
        return view('kajur.index');
    }

    public function kaprodiHome()
    {
        return view('kaprodi.index');
    }
    public function dosenHome()
    {
        return view('dosen.index');
    }
}
