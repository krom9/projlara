<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is.admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        $breadcrumbs = [
            __('users.breadcrumbs.home') => route('home.index'),
            __('users.breadcrumbs.users') => ''
        ];

        $users = User::where('role_id', '!=', 3)
            ->with('role')
            ->orderBy('role_id')
            ->orderBy('name')
            ->get();

//        dd($users);
        return view('dashboard/users/index')->with(compact(['users', 'breadcrumbs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():View
    {
        $breadcrumbs = [
            __('users.breadcrumbs.home') => route('home.index'),
            __('users.breadcrumbs.users') => route('users.index'),
            __('users.breadcrumbs.create') => ''
        ];

        return view('dashboard/users/create')->with(compact(['breadcrumbs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->only(['name', 'email', 'password', 'role_id']);
        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return View
     */
    public function edit(User $user):View
    {
        $breadcrumbs = [
            __('users.breadcrumbs.home') => route('home.index'),
            __('users.breadcrumbs.users') => route('users.index'),
            __('users.breadcrumbs.edit') => ''
        ];

        return view('dashboard/users/edit')->with(compact(['user', 'breadcrumbs']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, User $user):RedirectResponse
    {
        $data = $request->only(['name', 'email', 'password', 'role_id']);

        if(isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } elseif($request->has('password')) {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user):RedirectResponse
    {
        $user->delete();

        return redirect()->route('users.index');
    }

    public function confirmDelete(User $user)
    {
        $breadcrumbs = [
            __('users.breadcrumbs.home') => route('home.index'),
            __('users.breadcrumbs.users') => route('users.index'),
            __('users.breadcrumbs.delete') => ''
        ];

        return view('dashboard/users/confirmDelete')->with(compact(['user', 'breadcrumbs']));
    }
}
