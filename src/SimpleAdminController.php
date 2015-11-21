<?php

namespace Sinkronia\SimpleAdmin;

use App\Http\Controllers\Controller;
use User;

class SimpleAdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
    * Visualizza una lista di risorse
    *
    * @return Response
    */
    public function index()
    {
        //$users = User::all();
        $users = ['Mares','Calcaterra','Tempofosco'];
        return view('simpleAdmin::admin')->with('users',$users);
    }
}