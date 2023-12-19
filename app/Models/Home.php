<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    //use HasFactory;

    protected $fillable = ['BrandName','HeadLine','Slogan','ServiceHeader','ServiceDescription','TestimonialText','CustomerName'];

    protected $casts = ['ServiceHeader' => 'array',
                        'ServiceDescription' => 'array',
                        'TestimonialText' => 'array',
                        'CustomerName' => 'array'];

    // Set the JSON data attribute
    public function setServiceHeaderAttribute($value)
    {
        $this->attributes['ServiceHeader'] = json_encode($value);
    }



    // Set the JSON data attribute
    public function setServiceDescriptionAttribute($value)
    {
        $this->attributes['ServiceDescription'] = json_encode($value);
    }


     // Set the JSON data attribute
     public function setTestimonialTextAttribute($value)
     {
         $this->attributes['TestimonialText'] = json_encode($value);
     }


        // Set the JSON data attribute
    public function setCustomerNameAttribute($value)
    {
        $this->attributes['CustomerName'] = json_encode($value);
    }






     

}
