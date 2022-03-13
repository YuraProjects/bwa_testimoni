<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home',
            'content' => 'admin/home/index'
        ];
        return view('layout/v_wrapper', $data);
    }
    public function testimonial()
    {
        $data = [
            'title' => 'Testimoni',
            'content' => 'admin/testimonial/index'
        ];
        return view('layout/v_wrapper', $data);
    }
}
