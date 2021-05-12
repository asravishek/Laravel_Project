<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{

    public function Category(){
        return view ('post.addcategory');
    }

    public function StoreCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:25|min:4',
            'slug' => 'required|unique:categories|max:25|min:4',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category=DB::table('categories')->insert($data);
        //return response()->json($data);


        if ($category) {
            $notification=array(
                'messege'=>'Successfully Category Inserted',
                'alert-type'=>'success'
                );
                return Redirect()->route('allcategory')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Something Went Wrong',
                'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);

        }
    }

    public function AllCategory()
    {
        $category=DB::table('categories')->get();
        return view('post.allcategory',compact('category'));
    }

    public function ViewCategory($id){
        $category=DB::table('categories')->where('id',$id)->first();
        return view('post.viewcategory',compact('category'));
        //return view('post.viewcategory')->with('category',$category);
        //return response()->json($category);
    }

    public function DeleteCategory($id)
    {
        $delete=DB::table('categories')->where('id',$id)->delete();
            $notification=array(
                'messege'=>'Successfully Category Deleted',
                'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);

    }

    public function EditCategory($id)
    {
        $category=DB::table('categories')->where('id',$id)->first();
        return view('post.editcategory', compact('category'));
    }

    public function UpdateCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25|min:4',
            'slug' => 'required|max:25|min:4',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category=DB::table('categories')->where('id',$id)->update($data);
        //return response()->json($data);


        if ($category) {
            $notification=array(
                'messege'=>'Successfully Category Updated',
                'alert-type'=>'success'
                );
                return Redirect()->route('allcategory')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Category is not Updated',
                'alert-type'=>'error'
                );
                return Redirect()->route('allcategory')->with($notification);

        }
    }

    public function Post()
    {
        $category=DB::table('categories')->get();
        return view('post.post',compact('category'));
    }

    public function StorePost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:200|min:4',
            'details' => 'required|max:500|min:4',
            'image' => 'required | mimes:jpeg,jpg,png,webp,gif | max:3000',
        ]);

        $data=array();
        $data['title']=$request->title;
        $data['category_id']=$request->category_id;
        $data['details']=$request->details;
        $image=$request->file('image');
        if ($image) {
            $image_name= hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/frontend/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('posts')->insert($data);
            $notification=array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
                );
                return Redirect()->route('allpost')->with($notification);
        }else {
            DB::table('posts')->insert($data);
            $notification=array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
        }
    }

    public function AllPost()
    {
        //$post=DB::table('posts')->get();
        //return response()->json($post);

        $post=DB::table('posts')
            ->join('categories','posts.category_id','categories.id')
            ->select('posts.*','categories.name')
            ->get();

        return view('post.allpost',compact('post'));

    }

    public function EditPost($id)
    {
        $category=DB::table('categories')->get();
        $post=DB::table('posts')->where('id',$id)->first();
        return view('post.editpost',compact('category','post'));

    }

    public function UpdatePost(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:200|min:4',
            'details' => 'required|max:500|min:4',
            'image' => 'mimes:jpeg,jpg,png,webp,gif | max:3000',
        ]);

        $data=array();
        $data['title']=$request->title;
        $data['category_id']=$request->category_id;
        $data['details']=$request->details;
        $image=$request->file('image');
        if ($image) {
            $image_name= hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/frontend/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            unlink($request->old_photo);
            DB::table('posts')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Successfully Post Updated',
                'alert-type'=>'success'
                );
                return Redirect()->route('allpost')->with($notification);
        }else {
            $data['image']=$request->old_photo;
            DB::table('posts')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Successfully Post Updated',
                'alert-type'=>'success'
                );
                return Redirect()->route('allpost')->with($notification);
        }
    }

    public function ViewPost($id)
    {
        $post=DB::table('posts')
            ->join('categories','posts.category_id','categories.id')
            ->select('posts.*','categories.name')
            ->where('posts.id',$id)
            ->first();
        return view('post.viewpost',compact('post'));
    }

    public function DeletePost($id)
    {
        $post=DB::table('posts')->where('id',$id)->first();
        $image=$post->image;
        $delete=DB::table('posts')->where('id',$id)->delete();
        if ($delete) {
            unlink($image);
            $notification=array(
                'messege'=>'Successfully Post Deleted',
                'alert-type'=>'success'
                );
                return Redirect()->route('allpost')->with($notification);
        }else {
            $notification=array(
                'messege'=>'Something Went Wrong',
                'alert-type'=>'error'
                );
                return Redirect()->route('allpost')->with($notification);
        }
    }



}
