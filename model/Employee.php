<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'current_step_id'];

    public function currentStep()
    {
        return $this->belongsTo(Steps::class, 'current_step_id','id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'e_id','id');
    }

    // 更新新员工目前流程
    public function updateSteps($steps){
        $this->current_step_id = $steps;
        $this->save();
    }
}
