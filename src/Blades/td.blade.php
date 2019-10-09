<td>
  @foreach($drawer->getGraphics() as $g)
  {!! $g->draw() !!}
  @endforeach
</td>
