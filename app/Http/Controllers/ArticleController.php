<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{

    public function home()
    {
        $articles = Article::all();

        return view('index',['articles'=>$articles]);
    }
    public function index()
    {
        $articles = Article::all();

        return view('pages.blog', ['articles' => $articles]);
    }

    public function create()
    {
        return view('pages.create');

    }
    public function content($id)
    {
        $article = Article::find($id);
        return view('pages.article-page',['article'=>$article]);
    }

    public function store(Request $request)
    {
        //valideren van de input
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        //hier wordt de gegevens in de database opgeslagen
        $query = Article::create($request->all());

        if ($query){
            return back()->with('succes', 'Article is opgelsagen');
        }else{
            return back()->with('fail', 'Er ging iets fout');
        }


    }
    public function read()
    {
        $articles = DB::table('articles')->get();
        return view('pages.admin', ['articles' => $articles]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('pages.edit');
    }

    public function update()
    {
        return view();
    }

    public function delete($id)
    {
        $delete = DB::table('articles')->where('id', $id)->delete();

        if ($delete) {
            return back()->with('succes', 'Article is uit de database verwijdert');
        } else {
            return back()->with('fail', 'Er ging iets fout');
        }
    }


}

