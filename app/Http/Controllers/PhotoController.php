<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use DB;

class PhotoController extends Controller
{
    protected $table='photos';

    public function create($gallery_id) {
        //render create view
        return view('photo/create', compact('gallery_id'));
    }

    public function store(request $request){
        
            $title =$request->input('title');
            $description =$request->input('description');
            $image =$request->file('image');
            $owner_id=1;
            $location =$request->input('location');
            $gallery_id=$request->input('gallery_id');
    
    
            if($image){
    
                $image_filename = $image->getClientOriginalName();
                $image ->move(public_path('images'), $image_filename);
             }
    
                else {
                    $image_filename = 'noimage.jpg'; 
                }
                
            DB::table($this->table)-> insert([
            'title'=> $title,
            'description'=> $description,
            'location'=> $location,
            'gallery_id'=> $gallery_id,
            'image'=> $image_filename,
            'owner_id'=> $owner_id
             ]); 
            
               
          return Redirect::route('gallery.show', array('id'=>$gallery_id))->with('message', 'Photo has been added'); 
        
            }     
    
    
    public function details($id) {
        die($id);
    
}
}
