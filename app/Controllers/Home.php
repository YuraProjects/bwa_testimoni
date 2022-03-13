<?php

namespace App\Controllers;

use App\Database\Migrations\Testimonial;
use App\Models\TestimonialModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new TestimonialModel();
        $testimonial = $model->getTestimonial();

        $data = [
            'title' => 'Dashboard',
            'testimonial' => $testimonial
        ];
        return view('welcome_message', $data);
    }
}
