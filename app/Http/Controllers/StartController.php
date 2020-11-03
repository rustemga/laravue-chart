<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class StartController extends Controller
{
    public function index(){
        $users = User::all();
        $articles = DB::table('articles')->get();
        return view('welcome', ['users' => $users, 'articles' => $articles]);
    }
    public function getJson(){
        $articles = DB::table('articles')->get();
        return $articles;
    }
}
