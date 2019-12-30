<div class="alert alert-{{ $drawer->getType() }}">
  {!! $drawer->getContent() !!}
  @foreach($drawer->getGraphics() as $g)
    {!! $g->draw() !!}
  @endforeach
</div>
