<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Booking;
use Carbon\Carbon;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return view('web.home');
    }
    public function rooms()
    {
        return view('web.rooms');
    }
    public function about()
    {
        return view('web.about');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function bookings()
    {
        return view('bookings.index');
    }
}
