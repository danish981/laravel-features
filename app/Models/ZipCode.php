<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model {

    protected $fillable = ['id'];

    public function areaData() {
        return $this->hasMany(AreaData::class, 'zip_code_id');
    }

}
