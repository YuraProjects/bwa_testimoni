<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Testimonial',
            'content' => 'admin/testimonial/index'
        ];
        return view('layout/v_wrapper', $data);
    }
}
