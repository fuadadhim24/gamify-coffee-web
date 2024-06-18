<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with('quiz')->get();
        $quizzes = Quiz::all(); // Ambil semua quiz yang tersedia
        // dd($questions);
        return view('admin.quiz.question.index', compact('questions', 'quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.quiz.question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
            'id_quiz' => 'required|exists:quizzes,id_quiz', 
        ]);

        Question::create($request->all());

        return redirect()->route('admin.quiz.question.index')
                         ->with('success', 'Question created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        return view('admin.quiz.question.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        return view('admin.quiz.question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'content' => 'required|string|max:100',
            'id_quiz' => 'required|exists:quizzes,id_quiz', 
        ]);

        $question->update($request->all());

        return redirect()->route('admin.quiz.question.index')
                         ->with('success', 'Question updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('admin.quiz.question.index')
                         ->with('success', 'Question deleted successfully');
    }
}
