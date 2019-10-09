<tr>
  @foreach($drawer->getGraphics() as $g)
  {!! $g->draw() !!}
  @endforeach
</tr>
