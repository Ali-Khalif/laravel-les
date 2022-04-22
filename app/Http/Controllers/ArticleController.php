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

        return view('index',['articles'=> $articles]);
    }
    public function index()
    {
        $articles = Article::all();
        return view('pages.blog',['articles'=>$articles]);
        //return view('pages.blog')->with('articles', $articles);

        //return view('pages.blog', compact(games) ['articles' => $articles]);
    }


    public function create()
    {
        return view('pages.create');

    }
    public function show($id)
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
        //return view with the article
        $article = Article::find($article->id);
        return view('pages.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        //validate the input
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        //update the article
        $article->update($request->all());

        //redirect to the article page
        return redirect()->route('articles.show', $article->id)->with('succes', 'Article is aangepast');
    }


    public function destroy($id)
    {
        $delete = DB::table('articles')->where('id', $id)->delete();

        if ($delete) {
            return back()->with('succes', 'Article is uit de database verwijdert');
        } else {
            return back()->with('fail', 'Er ging iets fout');
        }
    }


}

