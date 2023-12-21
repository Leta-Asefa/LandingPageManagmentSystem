<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    
    public function index()
    {
        
    }

    public function createHome(Request $request)
    {
        
        $home = new Home();
    
        $jsonData = $request->json()->all();
       
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
        
        return "/getHome/$home->id";
    }


    public function getHome($id){
        $home=Home::find($id);
        return view("home")->with('home',$home);
    }

    public function getJsonHome($id){
        $home=Home::find($id);
        return $home->toJson();
    }
    
    public function updateHome(Request $request )
    {
        $jsonData = $request->json()->all();
        
        $home =Home::find($jsonData[0]['id']);
       
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
        
        return "/getHome/$home->id";

    }
    

    public function deleteHome($id){
        $home=Home::find($id);
        $home->delete();
        return response()->json(['response'=>"Deleted Successfully !"]);

    }
    
}
