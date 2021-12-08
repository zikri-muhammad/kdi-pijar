<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Helpers\APIHelper;
use Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $domain = explode('.', $_SERVER['HTTP_HOST'])[0];
        // $data = [
        //     'domain' => $domain,
        //     'limit' => 35,
        //     'order_by' => 'id',
        //     'order_type' => 'desc',
        //     'page' => 1
        // ];
        // $url = env('API_URL').'/v1/students';

        // $response = ($data, $url);
        
        // $items = json_encode($response['results']['data'][0]);
        // $sesion = Session::get('users');

        return view('pages.student.dashboard')->with([
        //    'name' => $sesion['name']
        ]);
    }

    public function profile()
    {
        exit('ini profile');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // get student task 
    public function task(){
        return view('pages.student.task');
    }

    // get student inbox
    public function inbox(){
        return view('pages.student.inbox');
    }

    
    // get student setting
    public function setting(){
        return view('pages.student.setting');
    }

     // get student file
     public function file(){
        return view('pages.student.file');
    }

}
