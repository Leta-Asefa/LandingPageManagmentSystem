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

    public function createHome()
    {
        
        $home = new Home();
        $home->BrandName = 'Arif Burger'; 
        $home->HeadLine = 'The Most Popular Burger House in the World';
        $home->Slogan='Enjoy the Taste';
        $home->ServiceHeader=['Service 1','Service 2','Service 3'];
        $home->ServiceDescription=['Description 1','Description 2','Description 3'];
        $home->ProjectHeader=['Project 1','Project 2','Project 3'];
        $home->ProjectDescription=['Description 1','Description 2','Description 3'];
        $home->TestimonialText=['Testimonial 1','Testimonial 2','Testimonial 3'];
        $home->CustomerName=['Customer 1','Customer 2','Customer 3'] ;
        $home->Phone='0987654321';
        $home->Email='Maraki123@gmail.com';
        $home->Address='Addis Ababa, Bole';
        $home->SocialMediaLink='linkedin.com';
        $home->save();
        
        // return 'Created Successfully ! <br>
        // browsing link = <a href="getHome/' . $home->id . '">
        // localhost:8000/getHome/' . $home->id . '</a>';

        return response()->json(['link'=>"localhost:8000/getHome/$home->id"]);

    }


    public function getHome($id){
        $home=Home::find($id);
        return view("home")->with('home',$home);
    }

    public function getJsonHome($id){
        $home=Home::find($id);
        return $home->toJson();
    }
    
    public function updateHome()
    {
        
        $home = new Home();
        $home->id = 1;
        $home->BrandName = 'Arif Burger'; 
        $home->HeadLine = 'The Most Popular Burger House in the World';
        $home->Slogan='Enjoy The Taste';
        $home->ServiceHeader=['Service 1','Service 2','Service 3'];
        $home->ServiceDescription=['Description 1','Description 2','Description 3'];
        $home->ProjectHeader=['Project 1','Project 2','Project 3'];
        $home->ProjectDescription=['Description 1','Description 2','Description 3'];
        $home->TestimonialText=['Testimonial 1','Testimonial 2','Testimonial 3'];
        $home->CustomerName=['Customer 1','Customer 2','Customer 3'] ;
        $home->Phone='0987654321';
        $home->Email='Maraki123@gmail.com';
        $home->Address='Addis Ababa, Bole';
        $home->SocialMediaLink='linkedin.com';
        $home->update();
        
       
        return response()->json(['response'=>"Updated Successfully !"]);

    }
    

    public function deleteHome($id){
        $home=Home::find($id);
        $home->delete();
        return response()->json(['response'=>"Deleted Successfully !"]);

    }
    
}
