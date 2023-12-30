<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function insert(Request $request){
    $posts=new Post();
    $posts->title=$request->title;
    $posts->description=$request->description;
    $posts->cat_id=$request->cat_id;
    $posts->save();
return response(['status'=>'200','message'=>'post is inserted successfully']);
   } 

   public function catInsert(Request $request){
    $categories=new Category();
    $categories->cat_name=$request->cat_name;
    $categories->cat_id=$request->cat_id;
    $categories->save();
    return response(['status'=>'200','message'=>'category is inserted successfully']);
   } 

   public function update(Request $request,$id){
    $posts=Post::find($id);
    $posts->title=$request->title;
    $posts->description=$request->description;
    $posts->cat_id=$request->cat_id;
    $posts->save();
    return response(['status'=>'200','message'=>'post is updated successfully']);
   } 


   public function delete($id){
    $posts=Post::find($id);
    $posts->delete();
    return response(['status'=>'200','message'=>'post is deleted successfully']);
   } 


   public function show(){
    $posts= Post::join('categories','categories.id','=','posts.cat_id')->get(['categories.cat_name','categories.cat_id','posts.title','posts.description','posts.cat_id'])->all();
    return response()->json(['Data'=>$posts]);
   } 















}
