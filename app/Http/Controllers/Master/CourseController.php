<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;
use App\Helpers\APIHelper;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id, $slug = '')
    {
        $show = $this->show($id);
        $idx = $show['idx'];

        if ($slug) {
            $data_course  = new APIHelper('course_detail', ['slug' => $slug]);
            $items = $data_course->results;
            
            $data_subject   = new APIHelper('course_where', ['id' => $idx]);
            $itemsUrlCourse = $data_subject->results;

            return view('pages.student.course-a')->with([
                'items' => $items,
                'show'  => $itemsUrlCourse,
                'shows' => $show
            ]);
        } else {
            $mst_subject_id = $idx;

            $getSLug = $this->getSlugWhereMstSubject($mst_subject_id);

            $slug = isset($getSLug[0]['slug']) ? $getSLug[0]['slug'] : null;

            if ( ! $slug) {
                // return not found page
            } else {
                return redirect('/student/course/' . $id . '/' . $slug);
            }
        }
    }

    public function getSlugWhereMstSubject($mst_subject_id)
    {
        $data = new APIHelper('course_where', ['id' => $mst_subject_id]);

        return $data->results;
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
        $data = new APIHelper('subjects_detail', ['slug' => $id]);

        return $data->results;
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
