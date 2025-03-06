<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['answer'];

    // 更新新员工问卷信息
    public function updateQA($id,$steps,$answer){
        $this->answer = $answer;
        $this->save();
    }
}
