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

    public function home()
    {
        
        $home = new Home();
        $home->BrandName = 'Arif Burger'; 
        $home->HeadLine = 'The Most Popular Burger in the world';
        $home->Slogan='Enjoy the Taste';
        $home->ServiceHeader=['Service 1','Service 2','Service 3'];
        $home->ServiceDescription=['Description 1','Description 2','Description 3'];
        $home->TestimonialText=['Testimonial 1','Testimonial 2','Testimonial 3'];
        $home->CustomerName=['Customer 1','Customer 2','Customer 3'] ;
        $home->save();
        
        return view("home")->with('id',$home->id);
    }


    public function getHome($id){
        $home=Home::find($id);
        return view("home")->with('home',$home);
    }
    
    public function services()
    {
        $name="Leta";
        $array=['abebe','kebede','tola'];
        return view("services",[ 'array'=>$array])->with('name',$name);
    }
    
    public function recentWork()
    {
        return view("recentWork");
    }

    public function testimonials()
    {
        return view("testimonials");
    }
    
    public function about()
    {
        return view("about");
    }
    
    public function contact()
    {
        return view("contact");
    }
    
    
    
}
