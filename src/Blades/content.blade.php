<div class="py-4 px-3 px-md-4">
  @if($drawer->hasBreadcrumb())
    {!! $drawer->getBreadcrumb()->draw() !!}
  @endif
  @foreach($drawer->getGraphics() as $graphic)
    {!! $graphic->draw() !!}
  @endforeach
</div>
