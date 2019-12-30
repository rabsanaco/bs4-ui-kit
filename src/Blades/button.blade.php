<button
        class="btn btn-{{ $drawer->getType() }} {{ $drawer->isBlock() ? ' btn-block ' : '' }}"
        @if($drawer->getName())
        name="{{ $drawer->getName() }}"
        @endif
        @if($drawer->getValue())
        value="{{ $drawer->getValue() }}"
        @endif

>
  {!! $drawer->getText() !!}
</button>
