<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table      = 'posts';
    protected $primaryKey = 'id';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $returnType    = \App\Entities\Post::class;
    protected $useTimestamps = true;
    protected $allowedFields = [
        'title',
        'description',
        'status',
        'image',
        'updated_at',
    ];
}
