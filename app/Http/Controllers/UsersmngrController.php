<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usersmngr;

class UsersmngrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Usersmngr::all();
        return view ('usersmngr.index')->with('users', $users);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usersmngr.create');
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
        Usersmngr::create($input);
        return redirect('admin/usersmngr')->with('flash_message', 'Dodano użytkownika');  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Usersmngr::find($id);
        return view('usersmngr.show')->with('users', $users);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Usersmngr::find($id);
        return view('usersmngr.edit')->with('users', $users);
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
        $users = Usersmngr::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('usersmngr')->with('flash_message', 'Zaktuallizowano użytkownika');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Usersmngr::find($id);
    
        // Sprawdź, czy użytkownik nie jest administratorem
        if ($user->usertype !== 'admin') {
            Usersmngr::destroy($id);
            return redirect('admin/usersmngr')->with('flash_message', 'Usunięto użytkownika');
        } else {
            return redirect('admin/usersmngr')->with('error_message', 'Nie można usunąć konta administratora');
        }
    }
}