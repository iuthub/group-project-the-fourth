<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    function articles(){
        $data = Article::all();
        return view('article',['articles'=>$data]);
    }
    function detail($id){
        $data = Article::find($id);
        return view('detail',['article'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
        $cart = new Cart();
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->article_id=$req->article_id;
        $cart->save();
        return redirect('/blog');
        }else{
            return redirect('/login');
        }
    }

    function cartList(){
        $userId=Session::get('user')['id'];
        $articles = DB::table('cart')
            ->join('articles','cart.article_id','=','articles.id')
            ->where('cart.user_id',$userId)
            ->select('articles.*','cart.id as cart_id')
            ->get();

        return view('cartlist',['articles'=>$articles]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }


    function save_comment(Request $request,$id){
        $request->validate([
            'comment'=>'required'
        ]);
        $data=new Comment;
        $data->user_id=$request->session()->get('user')['id'];
        $data->article_id=$id;
        $data->comment=$request->comment;
        $data->save();

        return redirect('detail/'.$id)->with('success','Comment has been submitted.');
    }

/*
    function save_comment(Request $request,$id){
        $request->validate([
            'comment'=>'required'
        ]);
        $data=new Comment;
        $data->user_id=$request->session()->get('user')['id'];
        $data->article_id=$id;
        $data->comment=$request->comment;
        $data->save();
        return redirect('article/'.$id)->with('success','Comment has been submitted.');
    }
*/
}
