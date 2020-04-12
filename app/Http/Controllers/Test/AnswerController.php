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
     * @param Test $test
     * @return View
     */
    public function index(Test $test):View
    {
        $user = auth()->user();
        if($user->role_id !== 1)
        {
            $breadcrumbs = [
                __('tests.breadcrumbs.home') => route('home.index'),
                __('tests.breadcrumbs.tests') => route('tests.index'),
                __('tests.breadcrumbs.test') => route('tests.show', $test),
                __('tests.breadcrumbs.answers') => ''
            ];

            $answers = Answer::where('test_id', $test->id)
                ->with('test')
                ->orderBy('id')
                ->get();

            return view('tests/answers/maker/index')->with(compact(['test', 'answers', 'breadcrumbs']));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Test $test
     * @return View
     */
    public function create(Test $test):View
    {
        $user = auth()->user();
        if($user->role_id !== 1)
        {
            $breadcrumbs = [
                __('tests.breadcrumbs.home') => route('home.index'),
                __('tests.breadcrumbs.tests') => route('tests.index'),
                __('tests.breadcrumbs.test') => route('tests.show', $test),
                __('tests.breadcrumbs.answer') => route('answers.index', $test),
                __('tests.breadcrumbs.create') => ''
            ];

            return view('tests/answers/maker/create')->with(compact(['test', 'breadcrumbs']));
        } else {
            abort(404);
        }
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
            __('tests.breadcrumbs.home') => route('home.index'),
            __('tests.breadcrumbs.tests') => route('tests.index'),
            __('tests.breadcrumbs.test') => route('tests.show', $test),
            __('tests.breadcrumbs.answers') => route('answers.index', $test),
            __('tests.breadcrumbs.answer') => ''
        ];
        $user = auth()->user();
        if($user->role_id === 1)
        {
            $answers = Answer::select(['id'])
                ->where('test_id', $test->id)
                ->with('test')
                ->get();
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
        } else {
            return view('tests/answers/maker/show')->with(compact(['test', 'answer', 'breadcrumbs']));
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
        $user = auth()->user();
        if($user->role_id !== 1)
        {
            $breadcrumbs = [
                __('tests.breadcrumbs.home') => route('home.index'),
                __('tests.breadcrumbs.tests') => route('tests.index'),
                __('tests.breadcrumbs.test') => route('tests.show', $test),
                __('tests.breadcrumbs.answers') => route('answers.index', $test),
                __('tests.breadcrumbs.answer') => route('answers.show', [$test, $answer]),
                __('tests.breadcrumbs.edit') => ''
            ];

            return view('tests/answers/maker/edit')->with(compact(['test', 'answer', 'breadcrumbs']));
        } else {
            abort(404);
        }
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

        return redirect()->route('answers.index', $test);
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

    public function confirmDelete(Test $test, Answer $answer)
    {
        $user = auth()->user();
        if($user->role_id !== 1)
        {
            $breadcrumbs = [
                __('tests.breadcrumbs.home') => route('home.index'),
                __('tests.breadcrumbs.tests') => route('tests.index'),
                __('tests.breadcrumbs.test') => route('tests.show', $test),
                __('tests.breadcrumbs.answer') => route('answers.index', $test),
                __('tests.breadcrumbs.delete') => ''
            ];

            return view('tests/answers/maker/confirmDelete')->with(compact(['test', 'answer', 'breadcrumbs']));
        } else {
            abort(404);
        }
    }
}
