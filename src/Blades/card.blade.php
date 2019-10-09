<div class="card mb-3 mb-md-4">
  @if(! empty($drawer->getTitle()))
  <div class="card-header">
    <h5 class="font-weight-semi-bold mb-0">{{ $drawer->getTitle() }}</h5>
  </div>
  @endif
  <div class="card-body">
    @foreach($drawer->getGraphics() as $graphic)
      {!! $graphic->draw() !!}
    @endforeach
  </div>
</div>
