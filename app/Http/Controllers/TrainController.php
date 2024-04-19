<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function AddTrain(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required|integer',
            'start_city' => 'required|string',
            'end_city' => 'required|string',
            'departure_date' => 'required|date',
            'departure_time' => 'required',
        ]);

        $train = new Train;
        $train->id = $validatedData['id'];
        $train->start_city = $validatedData['start_city'];
        $train->end_city = $validatedData['end_city'];
        $train->departure_date = $validatedData['departure_date'];
        $train->departure_time = $validatedData['departure_time'];
        $train->save();
        return redirect('add');
    }
}
