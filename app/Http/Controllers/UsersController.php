<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // // $users=User::all();
        

        $users=DB::table('users as u')
        ->join('roles as r','u.rol_id','=','r.rol_id')
        ->select('*')
        ->get();

        return view('users.index')
        ->with('users',$users)
        ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        //
        // $roles=Roles::all();
     return view('users.create',['roles=>$roles']);
     ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();
        User::create($input);
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $users=users::find($usu_id);
       return view('users.edit')
    ->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
