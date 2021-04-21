<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MovieCreateValidation;
use App\Models\Movies;
use Storage;
use Toastr;
use Carbon\Carbon;
class MovieController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function add()
    {
        return view('admin.movies.add');
    }

    public function store(MovieCreateValidation $request)
    {
        $movie = Movies::create([
            'movie_name' => $request->movie_name,
            'movie_description' => $request->movie_description
        ]);
        //dd($request->hasFile('movie_image'));
        if($request->hasFile('movie_image')){
            
            $file = $request->file('movie_image');
            $name =  'movie_image.'.str_replace(' ','_',Carbon::now()).$file->getClientOriginalExtension();  
            
            try{
                Storage::disk('public')->putFileAs('Documents/', $file,$name);
            }catch(\Exception $e)
            {
                dd($e->getMessage());
            }
            
            $movie->movie_image = $name;
            $movie->save();
        }
        Toastr::success('Movie added successfully');
        return redirect(route('admin.dashboard'));
    }

    public function edit(Request $request)
    {
        return view('admin.movies.edit');
    }

    public function update(Request $request)
    {
        return redirect('admin.dashboard');
    }

    public function delete(Request $request)
    {
        $movie = Movies::find($request->id);
        if($movie){
            $movie->delete();
            Toastr::success('Movie deleted successfully');
        }else{
            Toastr::error('Unable to delete movie');
        }
        
        return redirect(route('admin.dashboard'));
    }
}
