<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use app\http\requests;
use App\Http\Controllers\Controller;


class GalleryController extends Controller
{
    // list galleries

    private $table = 'galleries';

    public function index() {
        $galleries =DB::table($this->table)->get();

        return view ('gallery/index', compact('galleries'));
    }

    public function create() {
        return view ('gallery/create');
    }

    public function show($id){
        //get gallery
        $gallery = DB::table($this->table)->where('id',  $id)->first();

        //get photos
        $photos = DB::table('photos')->where('gallery_id', $id)->get();

        return view ('gallery/show', compact('gallery', 'photos'));

    }

    public function store(request $request){
       
        $name =$request->input('name');
        $description =$request->input('description');
        $cover_image =$request->file('cover_image');
        $owner_id=1;
       
        


        if($cover_image){

            $cover_image_filename = $cover_image->getClientOriginalName();
            $cover_image ->move(public_path('images'), $cover_image_filename);
         }

            else {
                $cover_image_filename = 'noimage.jpg'; 
            }
            
        DB::table($this->table)-> insert([
        'name'=> $name,
        'description'=> $description,
        'cover_image'=> $cover_image_filename,
        'owner_id'=> $owner_id
         ]); 
        
           
      return Redirect::route('gallery.index')->with('message', 'gallery has been created'); 
        }

    
    }