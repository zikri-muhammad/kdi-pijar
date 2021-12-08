<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\APIHelper;
use Session;
use Illuminate\Support\Carbon;

use function GuzzleHttp\json_encode;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $response = new APIHelper('task');
        // $return   = json_encode($response->results['data']);
        // dd(json_decode($return));
        $pengerjaan = new APIHelper('pengerjaan');
        $result     = json_encode($pengerjaan->results['data']);
        // dd($result);

        return view('pages.teacher.task')->with([
            // 'task' => json_decode($return),
            'pengerjaan' => json_decode($result)
        ]);
    }

    public function newTask()
    {
        $mst_class_id   = $this->mstClassId();
        $mst_course_id  = $this->mstCourseId();
        $mst_soal_id    = $this->mstSoalId();
        return view('pages.teacher.newtask')->with([
            'mst_class_id'  => $mst_class_id,
            'mst_course_id' => $mst_course_id,
            'mst_soal_id'   => $mst_soal_id
        ]);
    }

    public function addTask(Request $request)
    {
        // $data       = $request->all();
        $time       = $request->input('rangetime');
        $explode    = explode("-", $time);
        $start_at   = Carbon::parse(strtotime($explode[0]))->format('Y-m-d H:i:s');
        $end_at     = Carbon::parse(strtotime($explode[1]))->format('Y-m-d H:i:s');
        $teacher_id = Session::get('users')['data']['role_id'];


        $data = [
            'mst_clas_id'       => $request->input('mst_class_id'),
            'mst_course_id'     => $request->input('mst_course_id'),
            'star_at'           => $start_at,
            'end_at'            => $end_at,
            'teacher_id'        => $teacher_id,
            'mst_jenis_task'    => $request->input('jenis_tugas'),
            'mst_soal_id'       => $request->input('mst_soal_id'),
            'descriptions'      => $request->input('description'),
            'waktu_pengerjaan'  => $request->input('waktu_pengerjaan')
        ];

        $response = new APIHelper('add_task', $data);

        if ($response->status != 200) {
            return redirect('teacher/new-task')->with('status', $response->message);
        } else {

            return redirect('/teacher/task')->with('status', 'Save Succes!');
        }
    }

    public function records(Request $request)
    {
        $params = $request->all();

        // dd($params);

        $ret['is_error'] = 1;
        $ret['data']     = [];

        $payload = [
            'page' => !empty($params['page']) ? $params['page'] : 1
        ];

        // Check filter 
        $filter = new APIHelper('filter', $params);
        $payload = array_merge($payload, $filter->filters);

        $api = new APIHelper('list_task');

        $data       = $api->results;
        $pagination = $data;

        if ($api->status === 200) {
            unset($pagination['data']);

            $ret['is_error']   = 0;
            $ret['data']       = $data['data'];
            $ret['pagination'] = $pagination;
        }

        echo json_encode($ret);
    }

    public function newProject()
    {
        return view('pages.teacher.newproject');
    }

    public function mstClassId()
    {
        $response = new APIHelper('mst_class_id');
        return $response->results['data'];
    }

    public function mstCourseId()
    {
        $response = new APIHelper('mst_course_id');
        return $response->results['data'];
    }

    public function mstSoalId()
    {
        $response = new APIHelper('mst_soal_id');
        return $response->results['data'];
    }
}
