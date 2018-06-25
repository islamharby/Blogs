<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;
use App\Comment;
class manageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function AddArticle(Request $request)
    {
        if($request->isMethod('post'))
        {
            $this->validate($request,[
                'title' => 'required',
                'body' => 'required',
            ]);

            $ar = new Article;
            $ar->title=$request->input('title');
            $ar->body=$request->input('body');
            $ar->user_id=Auth::user()->id;
            $ar->save();
            return redirect('view');
        }
      return view('manage.AddArticle');
    }
    
    public function view()
    {
        $articles = Article::all();
        $ar = array('articles'=>$articles);
        return view('manage.view',$ar);
    }

    public function read(Request $request,$id)
    {
        if ($request->isMethod('post')){
            $this->validate($request,[
                'body' => 'required',
            ]);
            $ar= new Comment();
            $ar->comment=$request->input('body');
            $ar->article_id= $id;
            $ar->save();
            return back();
        }
            $article = Article::find($id);
            $ar = array('article'=>$article);
            return view('manage.read',$ar);
    }
}
