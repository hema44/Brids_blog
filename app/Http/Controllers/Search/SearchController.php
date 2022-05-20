<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Disease;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('search.search',[
            'categories' => Category::all(),
        ]);
    }
    public function show(){
        return view('search.serachkb');
    }

    public function search_disses(Request $request){
        $cat=$request->cat;
        $search=request()->input('search');
        $disease = Disease::where('name', "=", "$search")->get();
        if($disease->isEmpty()){
            return view('search.seracherror',[
                'disease'=> "This disease doesn't exists in our system",
                'categories' => Category::all(),
            ]);
        }else{
            $posts = Post::where('category_id',$cat)->Des($disease[0]->Symptoms)->paginate(4);
            return view('search.serachview',[
                'disease'=> $disease,
                'posts'=> $posts,
                'categories' => Category::all(),
            ]);
        }
    }

    public function search_Symptoms(Request $request){
        $cat=$request->cat;
        $search=request()->input('search');
        $disease = Disease::Des($search);
        $posts = Post::where('category_id',$cat)->Des($search)->paginate(4);
        if($disease->isEmpty()){
            return view('search.seracherror',[
                'disease'=> "This Symptoms doesn't match with  Symptoms of disease entered to our system",
                'categories' => Category::all(),
            ]);
        }else{
            return view('search.serachsymptoms',[
                'disease'=> $disease,
                'posts'=> $posts,
                'categories' => Category::all(),
            ]);
        }

    }

}
