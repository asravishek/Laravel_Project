<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use DB;

class RoyController extends Controller
{
    public function About(){
        return view('pages.about',['about'=>'This is About Page Bro']);
    }

    public function Contact(){
        return view('pages.contact',['contact'=>'This is Contact Page Bro']);
    }

    public function Shoishob(){
        return view('pages.blog',['blog'=>'This is a BLog Page Bro']);
    }

    public function Home()
    {
        $post=DB::table('posts')
            ->join('categories','posts.category_id','categories.id')
            ->select('posts.*','categories.name','categories.slug')->paginate(3);
            return view('pages.index',compact('post'));
    }

}
