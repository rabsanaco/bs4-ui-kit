<p
        class="{{ $drawer->getClasses() }}"
>
  @foreach($drawer->getGraphics() as $g)
    {!! $g->draw() !!}
  @endforeach
</p>
