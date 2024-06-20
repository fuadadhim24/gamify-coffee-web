<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::all();
        // dd($quizzes);
        return view('admin.quiz.daftar_quiz.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.quiz.daftar_quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
        ]);

        Quiz::create($request->all());

        return redirect()->route('admin.quiz.daftar_quiz.index')
                         ->with('success', 'Quiz created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        return view('admin.quiz.daftar_quiz.show', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        return view('admin.quiz.daftar_quiz.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'title' => 'required|string|max:100',
        ]);

        $quiz->update($request->all());

        return redirect()->route('admin.quiz.daftar_quiz.index')
                         ->with('success', 'Quiz updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return redirect()->route('admin.quiz.daftar_quiz.index')
                         ->with('success', 'Quiz deleted successfully');
    }
}
