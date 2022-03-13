<?php

namespace App\Controllers;

use App\Models\TestimonialModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->model = new TestimonialModel();
    }

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
            'title' => 'Daftar',
            'content' => 'admin/testimonial/index',
            // 'testimonial' => $this->model->findAll()
            'testimonial' => $this->model->getTestimonial()
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah',
            'content' => 'admin/testimonial/add'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $image = $this->request->getFile('image');
        $nameImg = $image->getRandomName();

        $data = [
            'image' => $nameImg,
            'username' => $this->request->getPost('username'),
            'description' => $this->request->getPost('descriptions'),
        ];

        $save = $this->model->tambahTestimonial($data);

        if ($save) {
            $image->move(ROOTPATH . 'public/uploads', $nameImg);
        } else {
            dd($save);
        }

        return redirect()->to('admin/testimonial');
    }

    public function delete($id)
    {
        $run = $this->model->delete($id);

        if ($run) {
            return redirect()->to('admin/testimonial');
        } else {
            return $run;
        }
    }
}
