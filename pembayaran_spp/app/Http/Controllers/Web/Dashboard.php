<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $data = [
            "titleside" => "-", 
            "pageside" => "Menu"
        ];
        return view("dashboard.index", $data);
    }

    public function landing()
    {
        // $data = [
        //     "titleside" => "-", 
        //     "pageside" => "Menu"
        // ];
        //misalnya ini fungsi kau buat dah jalan kenceng macam the flash ajg
        return view("dashboard.landing");
    }
}
