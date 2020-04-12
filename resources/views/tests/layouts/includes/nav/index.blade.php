@inject('testController', 'App\Services\TestController')

<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="{{ route('home.index') }}">{{ __('tests.title') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        @auth
                            @if(auth()->user()->role_id === 2)
                                <li class="nav-item {{ request()->path() === 'tests/create' ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('tests.create') }}">{{ __('tests.createTest') }}</a>
                                </li>
                            @endif
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('tests.tests') }}</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                                        @forelse($testController->getTests() as $test)
                                            <a class="dropdown-item" href="{{ route('tests.show', $test) }}">{{ $test->name }}</a>
                                        @empty
                                            <p>Нет тестов</p>
                                        @endforelse
                                    </div>
                                </li>
                        @endauth

                    </ul>
                    @include('tests.layouts.includes.nav.loginRegister')
                </div>
            </nav>
        </div>
    </div>
</div>
