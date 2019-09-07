<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KamiSamaPosts;
use App\Http\Requests\KamiSamaPost;

//rand comment 
class KamiSamaPostsController extends Controller
{
    var $SecretKey = '';

    public function submit(KamiSamaPost $request){
        $validated = $request->validated();
            $KamiSamaPosts = new KamiSamaPosts;
            $KamiSamaPosts->title=$request->input('title');
            $KamiSamaPosts->picURL=$request->input('picURL');
            $KamiSamaPosts->postBody=$request->input('postBody');
            $KamiSamaPosts->save();
      //  $SecretKey = env('UPDATE_BLOG_KEY','');

        return redirect('/secret/add'.'/'.$this->SecretKey)->with('success', 'Post submitted!');
    }

    public function updateView(Request $request, $id){
      $title=$request->input('title');
      $postBody=$request->input('postBody');
      $picURL=$request->input('picURL');

      return redirect("/edit"."/".$id)->with(['id'=>$id,'title'=>$title,'postBody'=>$postBody,'picURL'=>$picURL]);
    }
    public function dataToProjects(){
        $KamiSamaPosts =KamiSamaPosts::all();
        return view("projects")->with("KamiSamaPosts",$KamiSamaPosts);
    }
    public function dataToSecretProjects(){
        $KamiSamaPosts =KamiSamaPosts::all();
        return view("secretProjects")->with("KamiSamaPosts",$KamiSamaPosts);
    }

    public function delete( $id){
        $KamiSamaPosts = new KamiSamaPosts;

        $KamiSamaPosts::find($id)->delete();
        return redirect('/projects')->with("test","message");
        //echo "helo";
    }
    public function update(Request $request, $id){
    //  echo "hello";
        $KamiSamaPosts = KamiSamaPosts::find($id);
        $KamiSamaPosts->title=$request->input('title');
        $KamiSamaPosts->picURL=$request->input('picURL');
        $KamiSamaPosts->postBody=$request->input('postBody');
        $KamiSamaPosts->save();

      //  $SecretKey = env('UPDATE_BLOG_KEY','');
        return redirect('/secret/projects'.'/'.$this->SecretKey)->with('success', 'Post Updated!');
    }

    public static function getPost($id){

    }
}
