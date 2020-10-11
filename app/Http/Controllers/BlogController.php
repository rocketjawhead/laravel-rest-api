<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{

	//get all
    public function index(){
    	return Blog::all();
    }

    //add
    public function add(request $request){
    	$Blog = new Blog;
    	$Blog->title_blog = $request->title_blog;
    	$Blog->desc_blog = $request->desc_blog;
    	$Blog->save();

    	return array(
    		'Status' => 'Success',
    		'Message' => 'Berhasil Insert',
    		'ResponseCode' => '00' 
    	);
    }

    //update
    public function update(request $request,$id){
    	$title_blog = $request->title_blog;
    	$desc_blog = $request->desc_blog;

    	$Blog = Blog::find($id);
    	$Blog->title_blog = $title_blog;
    	$Blog->desc_blog = $desc_blog;
    	$Blog->save();

    	return array(
    		'Status' => 'Success',
    		'Message' => 'Berhasil Update',
    		'ResponseCode' => '00' 
    	);
    }

    //delete
    public function delete($id){
    	$Blog = Blog::find($id);
    	$Blog->delete();
    	return array(
    		'Status' => 'Success',
    		'Message' => 'Berhasil Hapus',
    		'ResponseCode' => '00' 
    	);
    }
}
