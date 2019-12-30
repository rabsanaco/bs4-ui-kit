<div class="col-sm{{$drawer->getSize() ? '-'.$drawer->getSize() : ''}}">
  @foreach($drawer->getGraphics() as $g)
    {!! $g->draw() !!}
  @endforeach
</div>
