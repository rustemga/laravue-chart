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
    public function chartData(){
        $articles = DB::table('articles')->get();
        $articlesId = $articles->pluck('id');
        $articlesUserId = $articles->pluck('user_id');
        $colorsArr = ['#FFA07A', '#FA8072', '#E9967A','#F08080', '#CD5C5C','#DC143C', '#B22222','#FF0000', '#8B0000','#FF7F50', '#FF6347','#FF4500', '#FFD700'];
        return [
            'labels' => $articlesId,
            'datasets' => array([
                'label' => 'Articles',
                'backgroundColor' => $colorsArr,
                'data' => $articlesUserId,
            ])
        ];
    }
}
