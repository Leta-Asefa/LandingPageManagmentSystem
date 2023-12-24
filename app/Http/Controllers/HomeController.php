<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    
    public function index()
    {
       return view('auth/login');
    }

    public function createHome(Request $request)
    {
        
        $home = new Home();
    
        $jsonData = $request->json()->all();
        if (!$jsonData) {
            return response()->json(['error' => 'JSON body is falsy'], 400);
        }
       
        $home->BrandName = $jsonData[0]["BrandName"]; 
        $home->HeadLine = $jsonData[0]['HeadLine'];
        $home->Slogan=$jsonData[0]['Slogan'];
        $home->ServiceHeader=$jsonData[0]['ServiceHeader'];
        $home->ServiceDescription=$jsonData[0]['ServiceDescription'];
        $home->ProjectHeader=$jsonData[0]['ProjectHeader'];
        $home->ProjectDescription=$jsonData[0]['ProjectDescription'];
        $home->TestimonialText=$jsonData[0]['TestimonialText'];
        $home->CustomerName= $jsonData[0]['CustomerName'];
        $home->Phone=$jsonData[0]['Phone'];
        $home->Email=$jsonData[0]['Email'];
        $home->Address=$jsonData[0]['Address'];
        $home->SocialMediaLink=$jsonData[0]['SocialMediaLink'];

        $home->save();
        
        return "$home->id";
    }


    public function getHome($id){
       
     
            $home=Home::find($id);

             if($home!=null)
             return view("home")->with('home',$home);
            return  "Invalid Id";

        
    }

    public function getJsonHome($id){
        $home=Home::find($id);
        return $home->toJson();
    }
    
    public function updateHome($id,Request $request )
    {


        $jsonData = $request->json()->all();
    
        $home =Home::find($id);
       
        $home->BrandName = $jsonData[0]["BrandName"]; 
        $home->HeadLine = $jsonData[0]['HeadLine'];
        $home->Slogan=$jsonData[0]['Slogan'];
        $home->ServiceHeader=$jsonData[0]['ServiceHeader'];
        $home->ServiceDescription=$jsonData[0]['ServiceDescription'];
        $home->ProjectHeader=$jsonData[0]['ProjectHeader'];
        $home->ProjectDescription=$jsonData[0]['ProjectDescription'];
        $home->TestimonialText=$jsonData[0]['TestimonialText'];
        $home->CustomerName= $jsonData[0]['CustomerName'];
        $home->Phone=$jsonData[0]['Phone'];
        $home->Email=$jsonData[0]['Email'];
        $home->Address=$jsonData[0]['Address'];
        $home->SocialMediaLink=$jsonData[0]['SocialMediaLink'];

        $home->update();
        
        return "$home->id";

    }
    

    public function deleteHome($id){
        $home=Home::find($id);

        if($home!=null){
            $home->delete();
            return response()->json(['response'=>"Deleted Successfully !"]);
        }
        return response()->json(['response'=>"Invalid Id !"]);
    }
    

    public function getAllHomes(){

        $rows=Home::all(['id','BrandName']);
       
        return response()->json($rows);

    }
}
