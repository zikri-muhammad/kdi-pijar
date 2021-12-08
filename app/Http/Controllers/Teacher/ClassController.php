<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\APIHelper;
use Session;
// use Carbon;
use Illuminate\Support\Carbon;


class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($this->mstClassId());
        return view('pages.teacher.class')->with([
            'mst_class_id'      => $this->mstClassId(),
            'mst_subject_id'    => $this->mstSubjectId()
        ]);
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

        $data       = $request->all();
        // dd($data);
        $tanggal_meeting       = $request->input('datetimes');
        $tanggal               = Carbon::parse(strtotime($tanggal_meeting))->format('Y-m-d H:i:s');
        $teacher_id = Session::get('users')['data']['role_id'];

        $data = [
            'mst_class_id'      => $request->input('mst_class_id'),
            'mst_subject_id'    => $request->input('mst_subject_id'),
            'tanggal_meeting'   => $tanggal,
            'link_meeting'      => $request->input('link'),
            'teacher_id'        => $teacher_id,
            'descriptions'      => $request->input('descriptions')
        ];


        $response = new APIHelper('add_live_session', $data);

        // dd($response->status);

        if ($response->status != 200) {
            return redirect('teacher/new-class')->with('status', $response->message);
        } else {
            return redirect('teacher/dashboard')->with('status', $response->message);
        }
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

    public function mstClassId()
    {
        $response = new APIHelper('mst_class_id');
        return $response->results['data'];
    }

    public function mstSubjectId()
    {
        $response = new APIHelper('subjects');
        return $response->results['data'];
    }
}
