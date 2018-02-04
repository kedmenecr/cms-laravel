<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Article;
use DB;
use Session;
use Hash;
use Input;

class ManageController extends Controller
{
    public function index(){
        return redirect()->route('manage.dashboard');
    }
    public function dashboard(){
        $articles = Article::all();
        return view('articles.index2')->withArticles($articles);
    }

}
