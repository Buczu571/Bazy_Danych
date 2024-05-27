<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Tickets;
class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets= Tickets::all();
        return view('tickets.index')->with('tickets', $tickets);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Tickets::create($input);
        return redirect('tickets')->with('flash_message', 'Dodano bilet');  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tickets = Tickets::find($id);
        return view('tickets.show')->with('tickets', $tickets);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tickets = Tickets::find($id);
        return view('tickets.edit')->with('tickets', $tickets);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tickets = Tickets::find($id);
        $input = $request->all();
        $tickets->update($input);
        return redirect('admin/tickets')->with('flash_message', 'Zaktualizowano bilet');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tickets::destroy($id);
        return redirect('admin/tickets')->with('flash_message', 'Usunięto bilet');  
    }
}