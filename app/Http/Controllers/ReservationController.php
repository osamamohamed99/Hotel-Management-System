<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\reservation;
use App\rooms;
use DB;
class ReservationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show booking form
    public function index()
    {
        return view('user.booking');
    }
    public function myReservation()
    {
        $results = DB::select("select * from reservations where user_id=".auth()->user()->id);
        return view('user.viewreserv',compact('results'));
    }
    public function adminReservation()
    {
        $results=reservation::all();
        return view('admin.viewreserv',compact('results'));
    }

    public function reserve(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'room'=>'required',
            'meal'=>'required',
            'checkin'=>'required',
            'checkout'=>'required'
        ]);
        $res = new reservation();
        $res->user_id=$user->id;
        $res->rooms_id=1;
        $res->user_name=$user->name;
        $res->user_phonenumber=$user->phonenumber;
        $res->roomtype=$request->room;
        $res->mealplan=$request->meal;
        $res->checkin=$request->checkin;
        $res->checkout=$request->checkout;
        $res->save();

        return redirect()->route('bookingview');
    }


    public function userdeletereservation($id)
    {
        $reservation =reservation::find($id);
        $reservation->delete();

        return redirect()->route('viewreserv');
    }

    //admin delete reservation
    public function admindeletereservation($id)
    {
        $reservation =reservation::find($id);
        $reservation->delete();

        return redirect('/admin/viewreserv.blade.php');
    }
}
