<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function portal()
    {
        return view('portal.index');
    }

    public function portalFrameGame()
    {
        dd(\request()->all());
    }

    public function portalFrameArticle()
    {
        $rules = ['type' => 'required'];
        $this->validate(\request(), $rules);
        $type = \request('type');
        if ($type == 'xieyi') {
            $id = 2;
        } else if ($type == 'jiufen') {
            $id = 3;
        } else {
            return '非法操作！';
        }
        $article = Article::findOrFail($id);
        return $article->content;
    }

    public function portalFrameArticleDetail()
    {
        $rules = ['id' => 'required|integer'];
        $this->validate(\request(), $rules);
        $id = \request('id');
        $article = Article::findOrFail($id);
        return $article->content;
    }
}
