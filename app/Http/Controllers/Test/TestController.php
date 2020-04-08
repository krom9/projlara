<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Test\StoreRequest;
use App\Models\Test\Answer;
use App\Models\Test\Ask;
use App\Models\Test\Result;
use App\Models\Test\Test;
use App\Models\User\AskUser;
use App\Models\User\TestUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        $breadcrumbs = [
            'home' => route('home.index'),
            'tests' => ''
        ];
        $user = auth()->user();
        if($user->role_id === 1)
        {
            $tests = Test::all();
        } else {
            $tests = Test::where('author_id', $user->id)->get();
        }

        return view('tests/tests/index')->with(compact(['tests', 'breadcrumbs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():View
    {
        $breadcrumbs = [
            'home' => route('home.index'),
            'tests' => route('tests.index'),
            'create test' => ''
        ];

        return view('tests/tests/maker/create')->with(compact('breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $user = Auth::user();
//        if($user->role_id === 2)
//        {
            $data = $request->all();
            $data['author_id'] = $user->id;
            Test::create($data);

            return redirect()->route('tests.index');
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param Test $test
     * @return View
     */
    public function show(Test $test):View
    {
        $breadcrumbs = [
            'home' => route('home.index'),
            'tests' => route('tests.index'),
            'test' => ''
        ];
        $user = auth()->user();
        if($user->role_id === 1)
        {
            $answer = $test->answers()->orderBy('id')->first();
            return view('tests/tests/tester/show')->with(compact(['test', 'answer', 'breadcrumbs']));
        } else {
            return view('tests/tests/maker/show')->with(compact(['test', 'breadcrumbs']));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Test $test
     * @return View
     */
    public function edit(Test $test):View
    {
        $breadcrumbs = [
            'home' => route('home.index'),
            'tests' => route('tests.index'),
            'test' => route('tests.show', $test),
            'edit test' => ''
        ];

        return view('tests/tests/maker/edit')->with(compact(['test', 'breadcrumbs']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Test $test
     * @return RedirectResponse
     */
    public function update(StoreRequest $request, Test $test):RedirectResponse
    {
        $test->name = $request->get('name');
        $test->description = $request->get('description');
        $test->save();

        return redirect()->route('tests.show', $test);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Test $test
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Test $test):RedirectResponse
    {
        $test->delete();

        return redirect()->route('tests.index');
    }

    /**
     * Calculate and show results of tests
     *
     * @param Test $test
     * @return View
     */
    public function result(Test $test):View
    {
        $breadcrumbs = [
            'home' => route('home.index'),
            'tests' => route('tests.index'),
            'test' => route('tests.show', $test),
            'result' => ''
        ];

        extract($this->makeResult($test));

        return view('tests/tests/tester/result')->with(compact(['test', 'result', 'resultDescription', 'breadcrumbs']));
    }

    /**
     * @param Test $test
     * @return array
     */
    private function makeResult(Test $test):array
    {
        $answersId = Answer::select(['id'])
            ->where('test_id', $test->id)
            ->with('test')
            ->get()
            ->pluck(['id']);

        $asks = [];
        $asksUsers = [];

        foreach($answersId as $answerId)
        {
            $asksAnswer = Ask::where('answer_id', $answerId)
                ->with('answer')
                ->get();

            $asks = array_merge($asks, $asksAnswer->toArray());

            foreach($asksAnswer as $askAnswer)
            {
                $asksUserAsk = AskUser::where('ask_id', $askAnswer->id)
                    ->with('ask')
                    ->get();
                $asksUsers = array_merge($asksUsers, $asksUserAsk->toArray());
            }

        }

        $resultMark = 0;
        foreach($asksUsers as $ask)
        {
            $resultMark += $ask['checked'] * $ask['ask']['mark'];
        }

        $resultDescription = Result::select(['text'])
            ->where('min', '<=', $resultMark)
            ->where('max', '>=', $resultMark)
            ->orderBy('id')
            ->get()
            ->pluck('text')
            ->first();

        $result = "Ваш результат теста {$resultMark}";

        return compact(['result', 'resultDescription']);
    }
}
