<?php

namespace App\Http\Controllers\Diseases;


use App\Http\Controllers\Controller;
use App\Http\Requests\Diseases\DiseasesRequest;
use App\Http\Requests\Diseases\UpdateDiseaseRequest;
use App\Models\Category;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('VerifyCategoriesCount')->only(['create', 'store']);
    }

    public function index(){
        return view('Disease.index')->with('Disease', Disease::all());
    }

    public function create()
    {
        return view('Disease.create')->with('categories', Category::all());
    }

    public function store(DiseasesRequest $request)
    {
        $data = $request->validated();
        //create post
        $post =  Disease::create([
            'name' => $data['name'],
            'Symptoms' => $data['Symptoms'],
            'category_id' => $data['category'],
        ]);

        return redirect(route('Disease.index'))->with('success', 'Your Disease is successfully created !');

    }


    public function edit(Disease $Disease)
    {
        return view('Disease.create')->with('post', $Disease)->with('categories', Category::all());
    }

    public function update(UpdateDiseaseRequest $request,$id)
    {
        $data = $request->validated();
        $disease = Disease::findOrFail($id);
        $disease->update($data);

        return redirect(route('Disease.index'))->with('success', 'Your Disease is successfully updated ! ');

    }

    public function destroy($id)
    {
        $Disease = Disease::where('id', $id)->firstOrFail();

        $Disease->delete();


        return redirect(route('Disease.index'))->with('success', 'Your Disease is deleted successfully ! ');
    }
}
