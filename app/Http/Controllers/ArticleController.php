<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; 
use App\Models\ArticleType; 

class ArticleController extends Controller
{
    //
    public function articl(){
        $artical = Article::with('articletype')->get();
        $articaltype = ArticleType::where('status',1)->get();
        // return $artical;    
        return view('artical', compact('artical','articaltype'));
        // return view('artical');
    }
  
    public function articalfrom(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
            'contact_name' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); // Store the image in storage/app/public/images
        } else {
            $imagePath = null;
        }

        $artical = new Article;
        $artical->title= $request->title;
        $artical->content= $request->content;
        $artical->image= $imagePath;
        $artical->contact_name= $request->contact_name;
        $artical->contact_email= $request->contact_email;
        $artical->artical_id= $request->artical_id;
        $artical->save();

        return redirect('/artical')->with('success', 'Artical data saved successfully!');
    }
    public function articalfeed()
    {
        $articles = Article::with('articletype')->get();
        $articleTypes = ArticleType::where('status', 1)->get();
        // return $articles;
        return view('articalfeed', compact('articles', 'articleTypes'));
    }
}
