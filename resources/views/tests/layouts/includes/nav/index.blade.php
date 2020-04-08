@inject('testController', 'App\Services\TestController')

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ route('home.index') }}">Tests</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->path() === '/' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home.index') }}">Home</a>
            </li>
            @auth
                @if(auth()->user()->role_id === 2)
                    <li class="nav-item {{ request()->path() === 'tests/create' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('tests.create') }}">Create</a>
                    </li>
                @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tests</a>
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
