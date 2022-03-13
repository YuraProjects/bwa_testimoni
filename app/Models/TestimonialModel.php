<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model
{
    protected $table      = 'testimonial';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['image', 'username', 'description'];

    public function tambahTestimonial($data)
    {
        return $this->db->table('testimonial')->insert($data);
    }

    public function getTestimonial()
    {
        return $this->table('testimonial')->get()->getResultArray();
    }
}
