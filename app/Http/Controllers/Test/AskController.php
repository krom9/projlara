<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ask\StoreRequest;
use App\Models\Test\Answer;
use App\Models\Test\Ask;
use App\Models\Test\Test;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Test\Answer $answer
     * @return \Illuminate\Http\Response
     */
    public function index(Answer $answer)
    {
//        $asks = $answer->asks;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Test $test
     * @param Answer $answer
     * @return View
     */
    public function create(Test $test, Answer $answer):View
    {
        $breadcrumbs = [
            'home' => route('home.index'),
            'tests' => route('tests.index'),
            'test' => route('tests.show', $test),
            'answer' => route('answers.show', [$test, $answer]),
            'create ask' => ''
        ];

        return view('tests/asks/maker/create')->with(compact(['test', 'answer', 'breadcrumbs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Test $test
     * @param Answer $answer
     * @return RedirectResponse
     */
    public function store(StoreRequest $request, Test $test, Answer $answer):RedirectResponse
    {
        $data = $request->all();
        $data['answer_id'] = $answer->id;
        Ask::create($data);

        return redirect()->route('answers.show', [$test, $answer]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test\Ask  $ask
     * @param  \App\Models\Test\Answer $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test, Answer $answer, Ask $ask)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Test $test
     * @param Answer $answer
     * @param Ask $ask
     * @return View
     */
    public function edit(Test $test, Answer $answer, Ask $ask):View
    {
        $breadcrumbs = [
            'home' => route('home.index'),
            'tests' => route('tests.index'),
            'test' => route('tests.show', $test),
            'answer' => route('answers.show', [$test, $answer]),
            'edit ask' => ''
        ];

        return view('tests/asks/maker/edit')->with(compact(['test', 'answer', 'ask', 'breadcrumbs']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Test $test
     * @param Answer $answer
     * @param Ask $ask
     * @return RedirectResponse
     */
    public function update(StoreRequest $request, Test $test, Answer $answer, Ask $ask):RedirectResponse
    {
        $ask->text = $request->get('text');
        $ask->mark = $request->get('mark');
        $ask->answer_id = $answer->id;
        $ask->save();

        return redirect()->route('answers.show', [$test, $answer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Test $test
     * @param Answer $answer
     * @param Ask $ask
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Test $test, Answer $answer, Ask $ask):RedirectResponse
    {
        $ask->delete();

        return redirect()->route('answers.show', [$test, $answer]);
    }
}
