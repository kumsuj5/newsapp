<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleType;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class ArticleController extends Controller
{
        public function artical(){
            $artical = Article::with('articletype')->get();
            $articaltype = ArticleType::where('status',1)->get();
            // $artical = Article::all();
            return response()->json([$artical,$articaltype]);
        }
        public function articalfromk(Request $request){
         
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
                'contact_name' => 'nullable|string|max:255',
                'contact_email' => 'nullable|email|max:255',
            ]);
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public'); 
            } else {
                $imagePath = null;
            }
    
            $artical = new Article();
            $artical->title= $request->title;
            $artical->content= $request->content;
            $artical->image= $imagePath;
            $artical->contact_name= $request->contact_name;
            $artical->contact_email= $request->contact_email;
            $artical->artical_id= $request->artical_id;
            $artical->save();
    
            return response()->json([
                'status'=> 'success',
                'message'=>'Artical from created Successfully'
            ],200);
        }

        public function articaldelete(Request $request)
        {
            $request->validate([
                'id' => 'required|exists:articles,id',
            ]);
    
            $id = $request->input('id');
            $article = Article::find($id);
    
            if (!$article) {
                
                
                return response()->json([
                    'status' => 'error',
                    'message' => 'Article not found'
                ], 404);
            }
    
            $article->delete();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Article deleted successfully'
            ]);
        }

}
