<form method="POST" action="{{ route('answers.write', [$test, $answer]) }}">
    @csrf
    @foreach($answer->asks as $ask)
        <div class="col-12 py-1">
            <div class="form-group row">
                    <input class="form-control col-12 col-md-1 mt-4"
                           type = "radio"
                           name = "ask_id"
                           value = "{{ $ask->id }}"
                           id = "{{ $ask->id }}"
                    @if($loop->first) checked @endif>
                    <label class="col-form-label col-12 col-md-11"
                        for="{{ $ask->id }}">
                        {{ $ask->text }}
                    </label>
            </div>
        </div>
    @endforeach
    <input type="hidden" name="next" id="next" value="{{ $next }}">
    <div class="text-right">
        <button class="btn btn-success" type="submit">{{ __('tests.next') }}</button>
    </div>
</form>
