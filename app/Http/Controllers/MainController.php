<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller{
    
    private $app_data;

    public function __construct(){
        // load app_data.php file from app folder
        $this->app_data = require(app_path('app_data.php')); 
    }

    public function showData(){
        return response()->json($this->app_data);
    }

    
    public function startGame(): View{
        return view('home');
    }

    public function prepareGame(Request $request){
        //validate request
        $request->validate(
            [
                'total_questions' => 'required|integer|min:3|max:30'
            ],
            [
                'total_questions.required' => 'O número de questões deve ser definido',
                'total_questions.integer' => 'O número deve ser inteiro',
                'total_questions.min' => 'O questionário de ter pelo menos :min questões',
                'total_questions.min' => 'O questionário de ter no máximo :max questões',
            ]
        );
        
        // get total questions
        $total_questions = intval($request->input('total_questions'));

        // prepare all the quiz structure
        $quiz = $this->prepareQuiz($total_questions);

    }

    private function prepareQuiz($total_questions){

    }
}
