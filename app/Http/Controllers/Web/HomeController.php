<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function about(){
        return view('about.index');
    }

    public function portfolio(){
        $undg_desc = "It is a long established fact that a reader will be distracted by the readable content of a
							page when looking at its layout. The point of using Lorem Ipsum is that it has a
							more-or-less
							normal.";
        $sindhupalcheck_desc = "It is a long established fact that a reader will be distracted by the readable content of a
							page when looking at its layout. The point of using Lorem Ipsum is that it has a
							more-or-less
							normal.";
        $moldova_desc = "It is a long established fact that a reader will be distracted by the readable content of a
							page when looking at its layout. The point of using Lorem Ipsum is that it has a
							more-or-less
							normal.";
        $rp_desc = "It is a long established fact that a reader will be distracted by the readable content of a
							page when looking at its layout. The point of using Lorem Ipsum is that it has a
							more-or-less
							normal.";
        $rc_desc = "It is a long established fact that a reader will be distracted by the readable content of a
							page when looking at its layout. The point of using Lorem Ipsum is that it has a
							more-or-less
							normal.";
        $rs_desc = "It is a long established fact that a reader will be distracted by the readable content of a
							page when looking at its layout. The point of using Lorem Ipsum is that it has a
							more-or-less
							normal.";

        return view('portfolio.index', compact('undg_desc', 'sindhupalcheck_desc', 'moldova_desc', 'rp_desc', 'rs_desc', 'rc_desc'));
    }

    public function contact(){
        return view('contact.index');
    }
}
