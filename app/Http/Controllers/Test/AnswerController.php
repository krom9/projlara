<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Answer\StoreRequest;
use App\Models\Test\Answer;
use App\Models\Test\Test;
use App\Models\User\AskUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Test $test)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Test $test
     * @return View
     */
    public function create(Test $test):View
    {
        $breadcrumbs = [
            'home' => route('home.index'),
            'tests' => route('tests.index'),
            'test' => route('tests.show', $test),
            'create answer' => ''
        ];

        return view('tests/answers/maker/create')->with(compact(['test', 'breadcrumbs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Test $test
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request, Test $test):RedirectResponse
    {
        $data = $request->all();
        $data['test_id'] = $test->id;
        Answer::create($data);

        return redirect()->route('tests.show', $test);
    }

    /**
     * Display the specified resource.
     *
     * @param Test $test
     * @param Answer $answer
     * @return View
     */
    public function show(Test $test, Answer $answer):View
    {
        $breadcrumbs = [
            'home' => route('home.index'),
            'tests' => route('tests.index'),
            'test' => route('tests.show', $test),
            'answer' => ''
        ];
        $user = auth()->user();
        if($user->role_id === 2)
        {
            return view('tests/answers/maker/show')->with(compact(['test', 'answer', 'breadcrumbs']));
        } else {
            $answers = Answer::select(['id'])
                ->where('test_id', $test->id)
                ->with('test')
                ->get();
//            dd($answers);
            $next = 0;
            for($i=0; $i<count($answers); $i++)
            {
                if($answers[$i]->id === $answer->id)
                {
                    $next = ++$i;
                    break;
                }
            }
            $next = ($next < count($answers))
                ? route('answers.show', [$test, $answers[$next]->id])
                : route('tests.result', [$test]);
            return view('tests/answers/tester/show')->with(compact(['test', 'answer', 'next']));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Test $test
     * @param Answer $answer
     * @return View
     */
    public function edit(Test $test, Answer $answer):View
    {
        return view('tests/answers/maker/edit')->with(compact(['test', 'answer']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Test $test
     * @param Answer $answer
     * @return RedirectResponse
     */
    public function update(StoreRequest $request, Test $test, Answer $answer):RedirectResponse
    {
        $request->validate([
            'text' => 'required|string',
        ]);

        $answer->text = $request->get('text');
        $answer->save();

        return redirect()->route('answers.show', [$test, $answer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Test $test
     * @param Answer $answer
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Test $test, Answer $answer):RedirectResponse
    {
        $answer->delete();

        return redirect()->route('tests.show', $test);
    }

    /**
     * Write asks by answer
     *
     * @param Request $request
     * @param Test $test
     * @param Answer $answer
     * @return RedirectResponse
     */
    public function write(Request $request, Test $test, Answer $answer):RedirectResponse
    {
        $user = auth()->user();
        $next = $request->get('next');

        $asks_id = $answer->asks()->pluck('id');
        foreach($asks_id as $id)
        {
            $data = [];
            $data['checked'] = $request->get('ask_id') === "{$id}" ? 1 : 0;
            $data['user_id'] = $user->id;
            $data['ask_id'] = $id;
            AskUser::updateOrCreate($data);
        }

        return redirect($next);
    }
}
