<?php

namespace App\Http\Controllers;

use App\Article;
use Session;
use Illuminate\Http\Request;

class Articles extends Controller
{
    public function index(){
        $articles = Article::limit(12)->orderBy("created_at","desc")->get();
        return view("component.article.article", compact("articles"));
    }
    public function create(){
        return view("component.article.create-article");
    }

    public function store(){
        $data = request()->validate([
            "title"=>["required", "min:3"],
            "contents"=> ["required","min:3"]
        ]);

        $data["slug"] = \Str::slug(request("title"))."-".\Str::random(10);

        Article::create($data);
        Session::flash("sukses", "Succes, Articles Added");
        return back();
    }

    public function show(Article $article){
        return view("component.article.show", compact("article"));
    }

    public function edit(Article $article){
        return view("component.article.edit", compact("article"));
    }
    public function update(Article $article){
        $data = request()->validate([
            "title"=>["required", "min:3"],
            "contents"=> ["required","min:3"]
        ]);

        $data["slug"] = \Str::slug(request("title"))."-".\Str::random(10);

        $article->update($data);
        return redirect()->route("article.show", $article);
    }
}
