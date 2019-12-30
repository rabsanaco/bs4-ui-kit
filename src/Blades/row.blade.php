<div class="row mb-3">
  @foreach($drawer->getGraphics() as $g)
    {!! $g->draw() !!}
  @endforeach
</div>
