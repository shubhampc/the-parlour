<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Auth;
use Laravel\Fortify\Fortify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use DB;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {     
        return view('admin.dashboard');
    }
    public function mapdataVisitor(Request $request)
    {     
        $data = DB::table('visitor_details')->select('country', DB::raw('count(*) as total'))
        ->groupBy('country')->get();
        return json_encode($data);
    }

}