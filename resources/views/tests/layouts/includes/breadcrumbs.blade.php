@if(isset($items))
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                @foreach($items as $name => $link)
                    @if($loop->last)
                        <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ $link }}">{{ $name }}</a></li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
@endif
