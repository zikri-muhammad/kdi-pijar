<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\APIHelper;


class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $response             = new APIHelper('where_user_login');
        $subject              = new APIHelper('subjects');
        $responseUrlCoures    = new APIHelper('courses');

        $items                = $response->results;
        $class                = $subject->results['data'];
        $itemsUrlCourses      = $responseUrlCoures->results['data'];
        // dd($class);

        return view('pages.student.course')->with([
           'items' => $items, 
           'classes' => $class, 
           'itemsUrlCourses' => $itemsUrlCourses 
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $url = env('API_URL').'/v1/master/courses/'.$slug;

        $response = getApi('', $url);
        // $items = json_encode($response['results']);
        $items = json_encode($response['results']);
        // $sesion = Session::get('users');
        return $items;
    }

    
}
