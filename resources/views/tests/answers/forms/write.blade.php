<form method="POST" action="{{ route('answers.write', [$test, $answer]) }}">
    @csrf
    @foreach($answer->asks as $ask)
        <div class="col-12 py-1">
            <label for="text">
                <input type="radio"
                       name="ask_id"
                       value="{{ $ask->id }}"
                @if($loop->first) checked @endif>
                {{ $ask->text }}
            </label>
        </div>
    @endforeach
    <input type="hidden" name="next" id="next" value="{{ $next }}">
    <button type="submit">{{ __('tests.next') }}</button>
</form>
