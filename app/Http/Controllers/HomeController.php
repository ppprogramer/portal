<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Games;

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
        $games = Games::select(['id', 'name', 'desc', 'picture_path', 'url'])->where('status', 1)->orderBy('id', 'asc')->limit(6)->get();
        $newsList = Article::select(['id', 'title'])->where('cate_id', 1)->orderBy('id', 'desc')->limit(10)->get();
        return view('portal.index', ['news' => $newsList, 'games' => $games]);
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
