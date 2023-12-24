<?php

namespace Tests\Unit;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Home;
use Tests\TestCase;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class HomeControllerUnitTest extends TestCase
{
    
 
    
     public function testCreateHome()
     {
        
         $requestData = [
             [
                 "BrandName" => "Brand Here",
                 "HeadLine" => "HeadLine Here",
                 "Slogan"=> "Slogan Here",
                 "ServiceHeader" =>['service 1','service 2','service 3'],
                 "ServiceDescription" => ['description 1','description 2','description 3'],
                 "ProjectHeader" => ['project 1','project 2','project 3'],
                 "ProjectDescription" => ['description 1','description 2','description 3'],
                 "TestimonialText"=>['testimonial 1','testimonial 2','testimonial 3'],
                 "CustomerName"=> ['customer 1','customer 2','customer 3'],
                 "Phone"=> "Phone Here",
                 "Email"=> "Email Here",
                 "Address"=> "Address Here",
                 "SocialMediaLink"=> "Link Here",
                 
             ]
         ];
 
         $request = Request::create('/create-home', 'POST', [], [], [], [], json_encode($requestData));
         
         
         $controller = new HomeController();
 
         //Test createHome
         $response = $controller->createHome($request);
         $created_page_id=$response;
         $this->assertIsString($created_page_id);
 
         // Test whether stored in the db
         $home = Home::find($response);
         $this->assertInstanceOf(Home::class, $home);
 
         // Test getHome 
         $response=$controller->getHome($created_page_id);
         $this->assertInstanceOf(View::class, $response);
         
           // Test getJsonHome
           $response=$controller->getJsonHome($created_page_id);
          $this->assertJson($response);
      

           // Test delteHome Valid Id
         $response=$controller->deleteHome($created_page_id);
         $responseData = json_decode($response->getContent(), true);
        $this->assertEquals('Deleted Successfully !', $responseData['response']);
        

            // Test delteHome with Invalid Id
        $response=$controller->deleteHome($created_page_id + 44664);  //random id
         $responseData = json_decode($response->getContent(), true);
        $this->assertEquals('Invalid Id !', $responseData['response']);
        
       
     }


    
}