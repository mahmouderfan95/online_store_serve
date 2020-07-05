<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class main_categories extends Model
{
    protected $fillable = ['translation_lang','translation_of','name','slug','photo','active'];
    public function getActive(){
        return $this->active == 1 ? 'مفعل' : 'غير مفعل';
    }

    public function scopeSelection($query){
        return $query->select('id','translation_lang','name','slug','photo','active');
    }
}
