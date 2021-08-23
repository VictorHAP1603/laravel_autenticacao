<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ConfigController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function getUserAccess() {
        $access = Gate::allows('level_access');
        return $access;
    }

    public function index(Request $request) {
        $user =$request->user()->name;

        $access = $this->getUserAccess();

        $data = [
            'user' => $user,
            "access" => $access
        ];

        return view('config', $data);
    }
}
