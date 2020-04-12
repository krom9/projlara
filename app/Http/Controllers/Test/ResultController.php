<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Result\StoreRequest;
use App\Models\Test\Result;
use App\Models\Test\Test;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ResultController extends Controller
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
        if($user->role_id !== 1) {
            $breadcrumbs = [
                __('tests.breadcrumbs.home') => route('home.index'),
                __('tests.breadcrumbs.tests') => route('tests.index'),
                __('tests.breadcrumbs.test') => route('tests.show', $test),
                __('tests.breadcrumbs.results') => ''
            ];

            $results = Result::where('test_id', $test->id)
                ->with('test')
                ->orderBy('id')
                ->get();

            return view('tests/results/maker/index')->with(compact(['test', 'results', 'breadcrumbs']));
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
        if($user->role_id !== 1) {
            $breadcrumbs = [
                __('tests.breadcrumbs.home') => route('home.index'),
                __('tests.breadcrumbs.tests') => route('tests.index'),
                __('tests.breadcrumbs.test') => route('tests.show', $test),
                __('tests.breadcrumbs.results') => route('results.index', $test),
                __('tests.breadcrumbs.create') => ''
            ];

            return view('tests/results/maker/create')->with(compact(['test', 'breadcrumbs']));
        } else {
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Test $test):RedirectResponse
    {
        $data = $request->all();
        $data['test_id'] = $test->id;
        Result::create($data);

        return redirect()->route('results.index', $test);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Test $test
     * @param Result $result
     * @return View
     */
    public function edit(Test $test, Result $result):View
    {
        $user = auth()->user();
        if($user->role_id !== 1) {
            $breadcrumbs = [
                __('tests.breadcrumbs.home') => route('home.index'),
                __('tests.breadcrumbs.tests') => route('tests.index'),
                __('tests.breadcrumbs.test') => route('tests.show', $test),
                __('tests.breadcrumbs.results') => route('results.index', $test),
                __('tests.breadcrumbs.edit') => ''
            ];

            return view('tests/results/maker/edit')->with(compact(['test', 'result', 'breadcrumbs']));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Test $test
     * @param Result $result
     * @return RedirectResponse
     */
    public function update(Request $request, Test $test, Result $result):RedirectResponse
    {
        $result->text = $request->get('text');
        $result->min = $request->get('min');
        $result->max = $request->get('max');
        $result->save();

        return redirect()->route('results.index', $test);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Test $test
     * @param Result $result
     * @return RedirectResponse
     */
    public function destroy(Test $test, Result $result):RedirectResponse
    {
        $result->delete();

        return redirect()->route('results.index', $test);
    }

    public function confirmDelete(Test $test, Result $result)
    {
        $user = auth()->user();
        if($user->role_id !== 1) {
            $breadcrumbs = [
                __('tests.breadcrumbs.home') => route('home.index'),
                __('tests.breadcrumbs.tests') => route('tests.index'),
                __('tests.breadcrumbs.test') => route('tests.show', $test),
                __('tests.breadcrumbs.results') => route('results.index', $test),
                __('tests.breadcrumbs.delete') => ''
            ];

            return view('tests/results/maker/confirmDelete')->with(compact(['test', 'result', 'breadcrumbs']));
        } else {
            abort(404);
        }
    }
}
