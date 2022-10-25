<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('question.list', ['questions' => Question::all()]);
    }

    public function create() {
        return view('question.create');
    }

    public function save(Request $request) {
        $question = Question::firstOrCreate(
            [
                'question_text' => $request->request->get('question_text')
            ]
        );
        
        $request->session()->flash('alert-success', 'Pergunta criada com sucesso!');
        return redirect('/questions');
    }
}