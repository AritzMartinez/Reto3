<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
    public function save(array $options = [])
    {
        return parent::save($options);
    }

}
