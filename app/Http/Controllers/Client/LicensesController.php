<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Requests\DaftarSekolahRequests;
use Session;
use Carbon;
use App\Helpers\APIHelper;
use Facade\FlareClient\Api;

class LicensesController extends Controller
{
    //
    public function index()
    {
        return view('pages.registration');
    }

    public function create()
    {

        return view('pages.signupform')->with([
            // 'province'  => $province,
            // 'kabupaten' => $kabupaten,
            // 'kecamatan' => $kecamatan,
            // 'kelurahan' => $kelurahan
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nomor_lisensi'     => 'required',
        ]);

        $data = [
            'nomor_licenses' => $request->input('nomor_lisensi')
        ];

        $response   = new APIHelper('check_license', $data);

        if ($response->status != 200) {
            return redirect('registration')->with('status', $response->message);
        } else {
            session()->put('users', array_merge($response->results));

            return redirect('registration/daftarsekolah')->with('status', $response->message);
        }
    }

    public function province()
    {
        $province = new APIHelper('province');

        $response = $province->results;
        $return = $response;
        // dd($response);
        return json_encode($return);
    }

    public function getKabupaten($parent_id)
    {

        $kabupaten = new APIHelper('kabupaten', ['parent_id' => $parent_id]);
        $response = $kabupaten->results;
        // dd($kabupaten->results);

        $return = $response;

        return json_encode($return);
    }

    public function getKecamatan($parent_id)
    {
        // parent id
        // $parent_id = post('parent_id');
        // $parent_id = 'bd4c9ab730f5513206b999ec0d90d1fb';

        $kecamatan = new APIHelper('kecamatan', ['parent_id' => $parent_id]);
        $response = $kecamatan->results;
        // dd($kecamatan->all);

        $return = $response;

        return json_encode($return);
    }

    public function getKelurahan($parent_id)
    {

        $kelurahan = new APIHelper('kelurahan', ['parent_id' => $parent_id]);
        $response = $kelurahan->results;
        // dd($kelurahan->all);

        $return = $response;

        return json_encode($return);
    }

    public function daftarSekolah(DaftarSekolahRequests $request)
    {

        $domain         = explode('.', $_SERVER['HTTP_HOST'])[0];
        $code           = $request->input('code');
        // dd($code);
        $mytime         = Carbon\Carbon::now();
        $school_name    = $request->input('school_name');
        $school_domain  = str_replace(" ", "", $school_name);
        // dd($school_domain);
        // echo $mytime->format('Y-m-d');die;
        $array = [
            'code'                             => $code,
            'activated_at'                     => $mytime->format('Y-m-d'),
            'npsn'                             => $request->input('npsm'),
            'school_name'                      => $request->input('school_name'),
            'province_id'                      => $request->input('province_id'),
            'regency_id'                       => $request->input('regency_id'),
            'district_id'                      => $request->input('district_id'),
            'village_id'                       => $request->input('village_id'),
            'postal_code'                      => $request->input('postal_code'),
            'address'                          => $request->input('address'),
            'headmaster_nip'                   => $request->input('headmaster_nip'),
            'headmaster_name'                  => $request->input('headmaster_name'),
            'headmaster_email'                 => $request->input('headmaster_email'),
            'headmaster_password'              => $request->input('headmaster_password'),
            'headmaster_password_confirmation' => $request->input('headmaster_password_confirmation'),
            'school_domain'                    => $school_domain,
            'term_of_service'                  => 1
        ];
        // $url        = env('API_URL') . '/v1/';

        // dd($array);
        $response   = new APIHelper('daftar_sekolah', $array);
        // dd($response->message);

        if ($response->status != 200) {
            return redirect('registration/daftarsekolah')->with('status', 'error');
        } else {
            session()->put('users', $response->results);
            return redirect('http://' . $school_domain . '.' . env('SUB_URL') . '/headmaster');
        }
    }
}
