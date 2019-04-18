<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KamiSamaPosts;
use App\Http\Requests\KamiSamaPost;
class KamiSamaPostsController extends Controller
{
    public function submit(KamiSamaPost $request){
        $validated = $request->validated();

         
            $KamiSamaPosts = new KamiSamaPosts;

            $KamiSamaPosts->title=$request->input('title');
            $KamiSamaPosts->picURL=$request->input('picURL');
            $KamiSamaPosts->postBody=$request->input('postBody');
            $KamiSamaPosts->save();
        $SecretKey = env('UPDATE_BLOG_KEY','');

        return redirect('/secret'.'/'.$SecretKey)->with('success', 'Post submitted!');
    }

    public function dataToHome(){
        $KamiSamaPosts =KamiSamaPosts::all();
        return view("home")->with("KamiSamaPosts",$KamiSamaPosts);
    }

    public function delete(Request $request, $id){
        $KamiSamaPosts = new KamiSamaPosts;

        $KamiSamaPosts::find($id)->delete();
        return redirect('/')->with("test","message");
        //echo "helo";
    }
    public function edit(Request $request, $id){
        $KamiSamaPosts = new KamiSamaPosts;

        
    }

    public static function getPost($id){

    }
}
