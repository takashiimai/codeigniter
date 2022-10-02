<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Post extends Entity
{
    public function getUpdatedAtLabel()
    {
        return date("Y/m/d H:i", strtotime($this->attributes['updated_at']));
    }

}
