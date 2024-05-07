<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnswerRequest;
use App\Http\Requests\UpdateAnswerRequest;
use Illuminate\Http\Request;
use App\Models\Answer;
use \App\Models\Question;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $question = Question::find($request->id);
        return view('createAnswer')
            ->with('question', $question);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $answer = new Answer();
        $user = Auth::user();
        $answer->content = $request->answerContent;
        $answer->userId = $user->id;
        $answer->save();

        $question = Question::find($request->id);
        $question->answerId = $answer->id;
        $question->save();

        return redirect()->route('admin.noanswer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnswerRequest $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
