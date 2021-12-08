<?php

namespace App\Http\Controllers\Headmaster;

use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\APIHelper;
use ErrorException;

class MasterDatasController extends Controller
{
    /**
     * Display a landing page .
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MasterDatasController $request, $role = '')
    {
        $data['user']       = Session::get('users');
        
        if ($role == 'siswa') {
            $api = new APIHelper('list_class_name');

            $data['list_class'] = $api->results;
        } else {
            $api = new APIHelper('master_subject');

            $data['list_subect'] = ( ! empty($api->results['data'])) ? $api->results['data'] : [];
        }

        $page = ( ! $role OR $role === 'siswa') ? 'pages.headmaster.master_data.master_data_siswa' : 'pages.headmaster.master_data.master_data_guru';

        return view($page)->with($data);  
    }

    /**
     * Show the form for creating a new data.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $role = '', $id = '')
    {
        if ($role == 'siswa') {
            $mst_class = new APIHelper('master_class');

            $data['list_mst_class'] =  ! empty($mst_class->results['data']) ? $mst_class->results['data'] : [];
        } else if ($role == 'guru') {
            $mst_subject = new APIHelper('master_subject');

            $data['list_mst_subject'] =  ! empty($mst_subject->results['data']) ? $mst_subject->results['data'] : [];
        }

        if ($id) {
            // Check if id exists.
            if ($role == 'siswa') {
                $api = new APIHelper('student_detail', ['id' => $id]);

                $data = array_merge($data, $api->results);

                foreach ($data['list_mst_class'] as $key => $value) {
                    $data['list_mst_class'][$key]['selected'] = $value['idx'] == $data['mst_class_id'] ? 'selected' : '';
                }
            } else if ($role == 'guru') {
                $api = new APIHelper('teacher_detail', ['id' => $id]);

                $data = array_merge($data, $api->results);

                foreach ($data['list_mst_subject'] as $key => $value) {
                    $data['list_mst_subject'][$key]['selected'] = $value['idx'] == $data['mst_subject_id'] ? 'selected' : '';
                }
            }


            if ($api->status != 200) {
                return redirect('headmaster/master-data/'.$role);
            }

            $data = array_merge($data, $api->results);
        } 


        $page = ( ! $role OR $role === 'siswa') ? 'pages.headmaster.master_data.add_form_siswa' : 'pages.headmaster.master_data.add_form_guru';

        return view($page)->with($data);
    }

    /**
     * Store a newly created data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $role = '', $id = '')
    {
        $post    = $request->all();

        $ret['error']    = 1;
        $ret['message']  = "Something's not right.";
        $ret['url_back'] = route('headmaster.masterdata', ['role' => $role]);

        try {
            if ($role == 'siswa') {
                if ( ! $id) {
                    $request = new APIHelper('student_add', $post);
                    $message = "Sukses menambah data.";
                } else {
                    $request = new APIHelper('student_update', array_merge($post, ['id' => $id]));
                    $message = "Sukses mengubah data.";
                }
            } else if ($role == 'guru') {
                if ( ! $id) {
                    $request = new APIHelper('teacher_add', $post);

                    $message = "Sukses menambah data.";
                } else {
                    $request = new APIHelper('teacher_update', array_merge($post, ['id' => $id]));
                    $message = "Sukses mengubah data.";
                }
            }

            if ($request->status != 200) {
                // Jika ada error validasi: 422
                if ($request->status === 422) {
                    $ret['message'] = $request->displayErrorValidationMessage();
                } else {
                    $ret['message'] = "Internal Server Error [1]";
                }
            } else {
                $ret['error']   = 0;
                $ret['message'] = $message;
            }
        } catch (\Throwable $th) {
            $ret['message'] = "Internal Server Error [0]";
        }

        echo json_encode($ret);
    }

    /**
     * Delete data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $role = '', $id = '')
    {
        $ret['error']    = 1;
        $ret['message']  = "Something's not right.";

        try {
            if ( ! $id) {
                $ret['message'] = "Siswa tidak ditemukan!";
            } else {
                $request = new APIHelper('student_delete', ['id' => $id]);
                
                if ($request->status != 200) {
                    // Jika ada error validasi: 422
                    if ($request->status === 422) {
                        $ret['message'] = $request->displayErrorValidationMessage();
                    } else {
                        $ret['message'] = "Internal Server Error [1]";
                    }
                } else {
                    $ret['error']   = 0;
                    $ret['message'] = "Berhasil menghapus data!";
                }
            }

        } catch (\Throwable $th) {
            $ret['message'] = "Internal Server Error [0]";
        }

        echo json_encode($ret);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function records(Request $request, $role)
    {
        $params = $request->all();

        $ret['is_error'] = 1;
        $ret['data']     = [];

        $payload = [
            'page' => ! empty($params['page']) ? $params['page'] : 1
        ];

        // Check filter 
        $filter = new APIHelper('filter', $params);
        $payload = array_merge($payload, $filter->filters);

        if ($role == 'siswa') {
            $api = new APIHelper('list_students', $payload);
        } else if ($role == 'guru') {
            $api = new APIHelper('list_teachers', $payload);
        }
        
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
}
