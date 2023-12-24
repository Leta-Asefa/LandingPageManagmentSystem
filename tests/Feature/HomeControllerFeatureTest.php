<?php

namespace Tests\Feature;
use Tests\TestCase;
use App\Http\Controllers\HomeController;
class HomeControllerFeatureTest extends TestCase
{
    /**
     * A basic test example.
     */

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

  
    


    public function test_log_in(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_home(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
    public function test_index(): void
    {
        $response = $this->get('/index');

        $response->assertStatus(302);
    }

    public function test_get_Pages(): void
    {
        $response = $this->get('/getPages');

        $response->assertStatus(200);
    }

    public function test_create_Pages(): void
    {
        $response = $this->get('/createPages');

        $response->assertStatus(302);
    }

    public function test_update_Pages(): void
    {
        $response = $this->get('/updatePages');

        $response->assertStatus(302);
    } 

    public function test_delete_Pages(): void
    {
        $response = $this->get('/deletePages');

        $response->assertStatus(302);
    }














}
