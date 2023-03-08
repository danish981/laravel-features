<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaData extends Model {

    protected $fillable = ['id'];

    public function zipCode() {
        return $this->belongsTo(ZipCode::class, 'zip_code_id');
    }

}
