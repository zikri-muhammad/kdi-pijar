<?php

namespace App\Helpers;

use Session;
use Http;
use GuzzleHttp\Client;
use Request;

/**
 * API Helpers
 *
 * @package     Pijar Web App
 * @subpackage  Helpers
 * @category    KDigital's
 * @author      Mohamad Febrian Mosii <febrianaries@gmail.com>
 * 
 * !! Every function must be written in english     !!
 * !! Please read coding standards references below !!
 * @link https://www.laravelbestpractices.com/
 * @link https://codeigniter.com/userguide3/general/styleguide.html
 * !! End !!
 */


class APIHelper
{
    public $url;
    public $domain;
    public $data;
    public $token;
    public $response;
    public $filters;

    public function __construct($request, $data = array())
    {
        $this->url      = env('API_URL');
        $this->domain   = explode('.', $_SERVER['HTTP_HOST'])[0];
        $this->data     = $data;
        $this->token    = '';

        if ($request !== 'filter') {
            try {
                $request = $this->handleRequest($request);
            } catch (\Throwable $th) {
                $request             = [];
                $request['response'] = [];
                $request['status']   = 500;
            }

            $response = $request['response'];

            $this->all     = $response;
            $this->status  = $request['status'];
            $this->message = !empty($response['message']) ? $response['message'] : "";
            $this->results = !empty($response['results']) ? $response['results'] : [];
        } else {
            $this->filters = $this->getFilters();
        }
    }

    public function handleRequest($request)
    {
        /**
         * Default variable Config 
         */
        $endpoint = "";
        $method   = "GET";


        /* Pagination Setup */
        // Default = FALSE

        $isPagination = FALSE;

        $pagination['limit']     = !empty($this->data['limit']) ? $this->data['limit']          : 5;
        $pagination['orderBy']   = !empty($this->data['order_by']) ? $this->data['order_by']    : 'id';
        $pagination['orderType'] = !empty($this->data['order_type']) ? $this->data['order_type'] : 'desc';
        $pagination['page']      = !empty($this->data['page']) ? $this->data['page']            : 1;

        // Unset Pagination
        if (!empty($this->data['limit'])) :
            unset($this->data['limit']);
        endif;

        if (!empty($this->data['order_by'])) :
            unset($this->data['order_by']);
        endif;

        if (!empty($this->data['order_type'])) :
            unset($this->data['order_type']);
        endif;

        if (!empty($this->data['page'])) :
            unset($this->data['page']);
        endif;
        /* End Pagination Setup */


        // Untuk flag apakah mengirimkan parameter domain ke request?
        // Default = FALSE
        $isCheckDomain = FALSE;

        // Untuk flag session sekolah 
        // Default = FALSE
        $isWithToken   = FALSE;

        switch ($request) {
            case "validation_domain":
                $endpoint      = 'checkdomain';
                $method        = "POST";
                $isCheckDomain = TRUE;
                // dd($endpoint);
                break;

            case "check_aktivation_account":
                $endpoint      = "checkAktivationAccount";
                $method        = "POST";
                $isCheckDomain = TRUE;
                break;

            case "activation_account_form":
                $endpoint      = "aktivationAccount";
                $method        = "POST";
                $isCheckDomain = TRUE;
                break;

            case "check_license":
                $endpoint      = "licenses/{$this->data['nomor_licenses']}";
                $isCheckDomain = TRUE;
                break;

            case "daftar_sekolah":
                $endpoint   = "licenses/activate";
                $method     = "POST";
                break;

            case "province":
                $endpoint = "master/provinces";
                break;

            case "kabupaten":
                $endpoint = 'master/regencies';

                $parent_id = $this->data['parent_id'];

                unset($this->data['parent_id']);

                $this->data['limit']      = '20';
                $this->data['order_by']   = 'id';
                $this->data['order_type'] = 'desc';
                $this->data['page']       = '1';

                $this->data['search'][0]['column']         = 'parent_id';
                $this->data['search'][0]['condition_type'] = 'equal_enc';
                $this->data['search'][0]['value']          = $parent_id;
                break;

            case "kecamatan":
                $endpoint = 'master/districts';

                $parent_id = $this->data['parent_id'];

                unset($this->data['parent_id']);

                $this->data['limit']      = '20';
                $this->data['order_by']   = 'id';
                $this->data['order_type'] = 'desc';
                $this->data['page']       = '1';

                $this->data['search'][0]['column']         = 'parent_id';
                $this->data['search'][0]['condition_type'] = 'equal_enc';
                $this->data['search'][0]['value']          = $parent_id;
                break;

            case "kelurahan":
                $endpoint = 'master/villages';

                $parent_id = $this->data['parent_id'];

                unset($this->data['parent_id']);

                $this->data['limit']      = '20';
                $this->data['order_by']   = 'id';
                $this->data['order_type'] = 'desc';
                $this->data['page']       = '1';

                $this->data['search'][0]['column']         = 'parent_id';
                $this->data['search'][0]['condition_type'] = 'equal_enc';
                $this->data['search'][0]['value']          = $parent_id;
                break;


            case "login":
                $endpoint      = "login";
                $method        = "POST";
                // $isCheckDomain = TRUE;
                break;

            case "roles":
                $endpoint      = "master/user/roles";
                break;

            case "where_user_login":
                $endpoint = "master/whereUserAuth";
                break;

            case "subjects":
                $endpoint = "master/subjects";
                break;

            case "subjects_detail":
                $subjectSlug = $this->data['slug'];

                $endpoint = "master/subjects/" . $subjectSlug;
                break;

            case "courses":
                $endpoint = "master/courses";
                break;

            case "course_detail":
                $courseSlug = $this->data['slug'];
                $endpoint = "master/courses/" . $courseSlug;
                break;

            case "course_where":
                $subjectId = $this->data['id'];

                $endpoint = "master/courseWhere/" . $subjectId;
                break;

            case "master_class":
                $isPagination  = TRUE;
                $endpoint      = "master/classes";
                break;

            case "master_subject":
                $isPagination  = TRUE;
                $endpoint      = "master/subjects";
                break;

            case "list_teachers":
                $isPagination  = TRUE;
                $isCheckDomain = TRUE;
                $isWithToken   = TRUE;
                $endpoint      = "teachers";
                break;

            case "teacher_detail":
                $isCheckDomain = TRUE;
                $isWithToken   = TRUE;
                $endpoint      = "teachers/" . $this->data['id'];
                break;

            case "teacher_delete":
                $method        = "DELETE";
                $isCheckDomain = TRUE;
                $isWithToken   = TRUE;
                $endpoint      = "teachers/" . $this->data['id'];
                break;

            case "teacher_add":
                $method        = 'POST';
                $isWithToken   = TRUE;
                $isCheckDomain = TRUE;
                $endpoint      = "teachers";
                break;

            case "teacher_update":
                $method        = 'PUT';
                $isWithToken   = TRUE;
                $isCheckDomain = TRUE;
                $endpoint      = "teachers/" . $this->data['id'];

                break;

            case "list_students":
                $isPagination  = TRUE;
                $isCheckDomain = TRUE;
                $isWithToken   = TRUE;
                $endpoint      = "students";
                break;

                // case "list_class_name":
            case "student_detail":
                $isCheckDomain = TRUE;
                $isWithToken   = TRUE;
                $endpoint      = "students/" . $this->data['id'];
                break;

            case "student_delete":
                $method        = "DELETE";
                $isCheckDomain = TRUE;
                $isWithToken   = TRUE;
                $endpoint      = "students/" . $this->data['id'];
                break;
            case "student_add":
                $method        = 'POST';
                $isWithToken   = TRUE;
                $isCheckDomain = TRUE;
                $endpoint      = "students";
                break;
            case "student_update":
                $method        = 'PUT';
                $isWithToken   = TRUE;
                $isCheckDomain = TRUE;
                $endpoint      = "students/" . $this->data['id'];
                $this->data['dob'] = date('Y-m-d', strtotime($this->data['dob']));
                break;
            case "list_class_name":
                $isCheckDomain = TRUE;
                $endpoint      = "master/classes/group";
                break;

            case "add_siswa":
                $method        = 'POST';
                $isWithToken   = TRUE;
                $isCheckDomain = TRUE;
                $endpoint      = "students";

                $this->data['dob'] = date('Y-m-d', strtotime($this->data['dob']));
                break;

            case "mst_class_id":
                $endpoint   = "master/classes";

                break;

            case "mst_course_id":
                $endpoint   = "master/courses";

                break;

            case "mst_soal_id":
                $endpoint   = "master/soal";

                break;

            case "add_task":
                $endpoint      = "master/task";
                $method        = "POST";

                break;

            case "task":
                $endpoint      = "master/task";

                break;

            case "task_student":
                $whereClassId  = Session::get('users')['data']['mst_class_id'];
                $endpoint      = "master/whereclassid/" . $whereClassId;
                // dd($whereClassId);
                break;

            case "detail_task":
                $endpoint      = "master/detailsoal";

                break;

            case "task_id":
                $id         = $this->data['id'];
                $endpoint   = "master/soal/" . $id;

                break;

            case "list_task":
                $isPagination  = TRUE;
                $isCheckDomain = TRUE;
                $endpoint      = "master/task";
                break;


            case "list_class_name":
                $isCheckDomain = TRUE;
                $isWithToken   = TRUE;
                $endpoint      = "master/classes/group";
                break;

            case "pengerjaan":
                $endpoint      = "master/pengerjaan";
                break;

            case "live_session":
                $endpoint      = "master/livesession";
                break;

            case "add_live_session":
                $method        = 'POST';
                $endpoint      = "master/livesession";
                break;

            // case "subjects":
            //     $endpoint   = "master/subjects";

            //     break;

            case "get_sekolah":
                $whereEmail  = Session::get('users')['email'];
                $endpoint      = "master/user/" . $whereEmail;
                // dd($whereClassId);
                break;


            default:
                break;
        }

        if ($isCheckDomain === TRUE) {
            $domain = !empty($_POST['domain']) ? $_POST['domain'] : $this->domain;

            $this->data = array_merge([
                'domain' => $domain
            ], $this->data);
        }

        if ($isWithToken === TRUE) {
            $this->token = !empty(Session::get('users')['token']) ? Session::get('users')['token'] : null;
        }

        if ($isPagination === TRUE) {
            $this->data = array_merge($pagination, $this->data);
        }

        // if ($request == 'add_siswa') {
        //     dd($this->data);
        // }

        return $this->call($endpoint, $method);
    }

    public function call($endpoint, $method)
    {
        $secretKey = env('SECRET_KEY');
        $url = $this->url . "/" . env('API_VERSION') . "/" . $endpoint;

        $query = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'X-PIJAR-API-KEY' => $secretKey
        ]);

        if (!empty($this->token)) {
            $query = $query->withToken($this->token);
        }

        if ($method == 'GET') {
            $response = $query->get($url, $this->data);
        } else if ($method == 'POST') {
            $response = $query->post($url, $this->data);
        } else if ($method == 'PUT') {
            $response = $query->put($url, $this->data);
        } else if ($method == 'DELETE') {
            $response = $query->delete($url, $this->data);
        }

        return [
            'response' => $response->collect()->all(),
            'status'   => $response->status()
        ];
    }

    public function displayErrorValidationMessage()
    {
        $messages = array_values($this->all);

        // dd($messages);

        return $messages[0][0];
    }

    public function getFilters()
    {
        $filter =  [];

        if (!empty($this->data)) {
            $k = 0;

            foreach ($this->data['search'] as $key => $value) {
                $condition = 'contain';

                if (substr($key, -3) == '_id') {
                    $condition = 'equal_enc';
                }

                $filter['search'][$k]['column']         = $key;
                $filter['search'][$k]['condition_type'] = $condition;
                $filter['search'][$k]['value']          = $value;

                $k++;
            }
        }

        return $filter;
    }
}
