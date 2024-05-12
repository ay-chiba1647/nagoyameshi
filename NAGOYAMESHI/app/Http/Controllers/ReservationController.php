<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function reservation()
    {
       $reservations = Reservation::where('user_id', auth()->id())->get();
       return view('/reservation', compact('reservations'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'people' => 'required'
        ]);

        $reservation = new Reservation();
        $reservation->date = $request->input('date');
        $reservation->time = $request->input('time');
        $reservation->people = $request->input('people');
        $reservation->shop_id = $request->input('shop_id');
        $reservation->shop_name = $request->input('shop_name');
        $reservation->user_id = Auth::user()->id;
        $reservation->save();

        return back();
     }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations');
     }
}