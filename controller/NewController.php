<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Question;
use App\Models\Steps;
use Illuminate\Http\Request;

class NewController extends Controller
{
    // 获取新员工入职流程相关信息
    public function getNewEmployeeData(){
        $e_data = Employee::with(['steps','question'])->get();

//        // 直接渲染前端
//        return view('xxxx', compact('e_data'));
        return $e_data;
    }


    // 获取某一员工流程信息
    public function getNowEmployeeData($id){
        $data = Employee::with(['steps','question'])->where('id','=',$id);

//        // 直接渲染前端
//        return view('xxxx', compact('data'));
        return $data;
    }

    // 当前流程更新
    public function nowSteps($id,$steps){
        if($steps <= 0){
            return 'error message';

        }

        $nowEmployee = Employee::where('id','=', $id)
            ->first();
        return $nowEmployee->updateSteps();

    }


     // 当前问卷更新
    public function nowAnswer($id,$steps,$answer)
    {
        if (!$answer) {
            return 'error message';

        }

        $nowQuestion = Question::where('e_id', '=', $id)
            ->where('s_id', '=', $steps)
            ->first();

            $nowQuestion->updateQA($id, $steps, $answer);

        // 判断是否流程结束，未结束时更新流程（或在其他地方更新）
        // $count = Steps::count();
        // if($steps == $count+1){
        //     return 'finish';
        // }

        // $this->nowSteps($id, $steps);

    }
}
