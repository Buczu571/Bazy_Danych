<?php

namespace App\Http\Controllers;

use App\Models\Plus;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PlusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pluses = Plus::paginate(10); // Paginacja danych plusów, 10 plusów na stronę

        return view("plus.index", ['pluses' => $pluses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Walidacja danych z formularza
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'number' => 'required',
            'producent' => 'required',
        ]);

        // Utworzenie nowego obiektu Plus i zapisanie danych do bazy danych
        Plus::create([
            'name' => $request->name,
            'type' => $request->type,
            'number' => $request->number,
            'producent' => $request->producent,
        ]);

        // Przekierowanie po zapisaniu danych
        return redirect()->route('pluses.index')->with('success', 'Plus został pomyślnie dodany.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plus $plus)
    {
        return view('plus.show', ['plus' => $plus]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plus $plus)
    {
        return view('plus.edit', compact('plus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plus $plus)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'number' => 'required',
            'producent' => 'required',
        ]);
    
        // Aktualizacja danych plusa na podstawie danych z formularza
        $plus->update([
            'name' => $request->name,
            'type' => $request->type,
            'number' => $request->number,
            'producent' => $request->producent,
        ]);
    
        // Przekierowanie po zaktualizowaniu danych
        return redirect()->route('pluses.index')->with('success', 'Plus został pomyślnie zaktualizowany.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plus $plus)
    {
        $plus->delete();

        // Przekierowanie po usunięciu plusa
        return redirect()->route('pluses.index')->with('success', 'Rekord został pomyślnie usunięty.');
    }
}