<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\APIHelper;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respone = new APIHelper('task_student');
        $data    = json_encode($respone->results);
        // dd(json_decode($data));
        
        return view('pages.student.task')->with([
            'task' => json_decode($data)
        ]); 
    }

    public function taskDetail(){
        // soal 

        $soal = $this->taskId();
        // dd($soal);
        
        $respone = new APIHelper('detail_task');
        // $data = json_encode($respone->results['data']);

        // dd($data);
        return view('pages.student.detail-task')->with([
            'soal'        => $soal,
            // 'detail_task' => json_decode($data)
        ]);
    }

    public function taskId(){
        // dd($id);
        $respone = new APIHelper('task_id', ['id' => 'c9f0f895fb98ab9159f51fd0297e236d']);
        $data = json_encode($respone->results);
        return json_decode($data);
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
}
