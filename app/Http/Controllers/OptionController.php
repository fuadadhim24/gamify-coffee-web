<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = Option::with('question')->get();
        $quizzes = Quiz::all();
        $questions = Question::all();
        // dd($questions);
        return view('admin.quiz.option.index', compact('quizzes','options','questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.quiz.option.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'content' => 'required|string|max:255',
            'is_correct' => 'required',
            'question_id' => 'required', 
        ]);

        Option::create($request->all());

        return redirect()->route('admin.quiz.option.index')
                         ->with('success', 'Option created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Option $option)
    {
        return view('admin.quiz.option.show', compact('option'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)
    {
        return view('admin.quiz.option.edit', compact('option'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Option $option)
    {
        $request->validate([
            'content' => 'required|string|max:255',
            'is_correct' => 'required',
            'question_id' => 'required', 
        ]);

        $option->update($request->all());

        return redirect()->route('admin.quiz.option.index')
                         ->with('success', 'Option updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        $option->delete();

        return redirect()->route('admin.quiz.option.index')
                         ->with('success', 'Option deleted successfully');
    }
}
