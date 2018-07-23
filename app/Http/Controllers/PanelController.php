<?php

namespace App\Http\Controllers;

use App\Panel;
use App\Student;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel');
    }

    public function students()
    {
        $students = (new Student)->fullInfo();
        $students = $students->get()->toArray();
        $request  = (new Request);

        return view('students', ['students' => $students]);
    }

    public function transaction()
    {
        return view('transaction');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        $email      = $request->email;
        $password   = $request->password;
        $panel      = (new Panel)->auth($email, $password);

        if( empty( $panel ) ) {
            return redirect()->route('panel', ['rel' => 'failed']);
        }

        $session = $request->session()->put('panel_user', $panel);

        return redirect()->route('students');
    }

    public function logout()
    {
        return redirect()->route('panel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function show(Panel $panel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function edit(Panel $panel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panel $panel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panel $panel)
    {
        //
    }
}
