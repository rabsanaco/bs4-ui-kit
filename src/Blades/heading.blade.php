<h{{ $drawer->getSize() }} class="{{ $drawer->getClasses() }}">
@foreach($drawer->getGraphics() as $g)
{!! $g->draw() !!}
@endforeach
</h{{ $drawer->getSize() }}>
