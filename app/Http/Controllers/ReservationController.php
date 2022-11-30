<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservation.reservationIndex', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservation.reservationCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|max:255',
            'correo' => 'required',
            'telefono' => 'required|numeric|digits:10',
            'personas' => 'required|min:1',
            'fecha' => 'required',
            'hora' => 'required',
        ]);

        //dd($request->all());

        $reservation = Reservation::create($request->all());

        return view('reservation.reservationShow', compact('reservation'))
        ->with([
            'message' => 'Se creo la reservacion exitosamente!'
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //$reservation = Reservation::find($reservation); //encuentra el id, para intancia de ese objeto
        return view('reservation.reservationShow', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('reservation.reservationEdit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reservation)
    {
        //dd($request->all());
        $request->validate([
            'nombre' => 'required|max:255',
            'correo' => 'required',
            'telefono' => 'required|max:20',
            'personas' => 'required|min:1',
            'fecha' => 'required',
            'hora' => 'required',
        ]);

        $reservation = Reservation::firstWhere('id', $reservation);
        $reservation->update($request->except('_token','_method'));
        $reservation->save();

        return redirect('/reservation');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect('/reservation');

    }

    public function getReservationJson()
    {
        return response()->json(Reservation::all());
    }
}
