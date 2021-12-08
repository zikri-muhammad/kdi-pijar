<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Http\FormRequest;

use App\Http\Requests\CheckActivationRequets;
use App\Http\Requests\CheckDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Auth;
use Session;
use Symfony\Component\Console\Input\Input;
use App\Helpers\APIHelper;
use phpDocumentor\Reflection\Types\This;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $domain  = explode('.', $_SERVER['HTTP_HOST'])[0];

        // if ($domain !== 'app') {
        //     return redirect('login');
        // } else {
        return view('pages.home');
        // }
    }

    /**
     * Login page of school's
     */
    public function login()
    {
        return view('pages.signin');
    }

    /**
     * Login page of school's
     */
    public function callbacklogin()
    {
        // $login = $this->authCallback($data);
        $login = Session::get('users');
        // dd($login);

        // get sekolah berdasarkan email
        $sekolah = new APIHelper('get_sekolah');

        // dd($sekolah->results);

        return view('pages.option_sekolah')->with([
            'login'     => $login,
            'sekolah'   => $sekolah->results
        ]);
    }

    public function authCallback(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email|max:50',
            'password'  => 'required|string'
        ]);

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        ];

        $response = new APIHelper('login', $data);

        if ($response->status != 200) {
            return redirect('login')->with('status', $response->message);
        } else {
            $redirect   = $response->results['data']['role_code'];
            $domains    = $response->results['data']['school_info']['domain'];
            if ($redirect == 'teacher') {
                // exit('ok');
                session()->put('users', $data);
                return redirect('callbacklogin')->with('status', $data);
            } else {
                // exit('ok');
                // dd($response->results);
                session()->put('users', $response->results);
                $red = 'http://' . $domains . '.' . env('SUB_URL') . '/' . $redirect;
                // dd($red);
                return redirect($red)->with('status', 'Login Succes!');

            }
        }
    }


    /**
     * Authentication login.
     */
    public function auth(Request $request)
    {

        $this->validate($request, [
            'email'     => 'required|email|max:50',
            'password'  => 'required|string'
        ]);

        $domains = $request->input('sekolah');
        // dd($domain);
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        ];

        // dd($data);

        $response = new APIHelper('login', $data);

        // dd($response->status);

        if ($response->status != 200) {
            return redirect('login')->with('status', $response->message);
        } else {
            session()->put('users', $response->results);

            $redirect = $response->results['data']['role_code'];
            $red = 'http://' . $domains . '.' . env('SUB_URL') . '/' . $redirect;

            // dd($redirect,$red);

            if (!$redirect) {
                return redirect('login');
            } else {
                // exit('ok');
                // session()->put('users', $response->results);
                // $red = 'http://' . $domains . '.' . env('SUB_URL') . '/' . $redirect;
                return redirect($red)->with('status', 'Login Succes!');
            }
        }
    }

    /**
     * Domain check authorization.
     */
    public function checkdomain(CheckDomain $request)
    {
        $domain  = $request->input('domain');
        // $request = new APIHelper('validation_domain');
        $url = env('API_URL') . "/" . env('API_VERSION') . "/master/loginheadmaster";
        // dd($url);
        $request = Http::withHeaders([
            'Accept'            => 'application/json',
            'Content-Type'      => 'application/json',
            'X-PIJAR-API-KEY'   => 'anRqcUJkWEVtR3ZKTHFsYWt3SzdLNVBWdWFzOVBsbzA=',
            // 'DOMAIN'            => 'smkn1cibinong'
        ])->post('http://api.pijar.local/api/v1/master/loginheadmaster', [
            'domains'     => $domain,
            'password'    => 'Indonesia1945',
            'domain'      => $domain
        ]);

        // dd($request['results']['data']['role_code']);
        if ($request->status() != 200) {
            return redirect('signin')->with('status', 'Gagal !!');
        } else {
            session()->put('users', $request['results']);

            $redirect = $request['results']['data']['role_code'];

            if (!$redirect) {
                return redirect('signin');
            } else {
                return redirect($redirect)->with('status', 'Login Succes!');
            }
            exit('ok');
            return redirect('http://' . $domain . '.' . env('SUB_URL') . '/login');
        }
    }

    public function checkActivationAccountView()
    {
        return view('pages.activation');
    }

    /**
     * Authorization check by NIS / NIP for student or teacher.
     */
    public function checkActivationAccount(CheckActivationRequets $request)
    {
        // exit('ok');
        $data = [
            'email' => $request->input('email')
        ];

        $response = new APIHelper('check_aktivation_account', $data);

        if ($response->status != 200) {
            return redirect('activation')->with('status', $response->message);
        } else {
            session()->put('users', $response->results['data']);
            return redirect('activation/form')->with('status', $response);
        }
    }

    public function activationAccountView()
    {
        return view('pages.activationform');
    }

    public function activationAccountForm(Request $request)
    {
        $data = [
            'nis'                   => Session::get('users')['nis'],
            'name'                  => Session::get('users')['name'] ,
            'email'                 => $request->input('email'),
            'class'                 => Session::get('users')['class_name'],
            'password'              => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation'),
            'term_of_service'       => 1,
            'client_id'             => Session::get('users')['client_id']
        ];

        $response = new APIHelper('activation_account_form', $data);

        if ($response->status != 200) {
            return redirect('activation/form')->with('status', 'error');
        } else {
            // session()->put('users', array_merge($response->results));
            return redirect('login')->with('status', $response->message);
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

    public function logout()
    {
        Session::flush();
        return redirect(env('APP_URL') . '/login');
    }
}
