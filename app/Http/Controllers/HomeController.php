<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = $this->userInfo()->get()->toArray();
        $params  =  array_get($_GET, 'rel', '');
        return view('home', [
                'student' => $student[0],
                'params' => $params
        ]);
    }

    public function userInfo()
    {
        if( ! Auth::check() ) {
            return false;
        }

        $student_id = Auth::user()->id;
        $student_full = (new Student)->fullInfo($student_id);
        return $student_full;
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function userProfile(Request $request)
    {
        // $this->validate($request, [
        //     'dob'           => 'required|string',
        //     'phone_number'  => 'required|string',
        //     'country'       =>  'required|string',
        //     'state'         =>  'required|string',
        //     'lga'           =>  'required|string',
        //     'city'          =>  'required|string',
        //     'address'       =>  'required|string'
        // ]);

        return $this->userData($request);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function userData(Object $request)
    {

        if( ! Auth::check() ) {
            return false;
        }

        $auth    = Auth::user();
        $student = (new Student)->updateStudent($auth, $request);
        return redirect()->route('home', ['rel' => 'success']);
    }

}
