<div class="py-4 px-3 px-md-4">
  <div class="d-flex justify-content-between align-items-center">
    @if($drawer->getTitle())
      <h5 class=" mb-3">
        {!! $drawer->getTitle() !!}
      </h5>
    @endif
    <!-- Breadcrumb -->
    <nav class="d-none d-md-block" aria-label="breadcrumb">
      <ol class="breadcrumb">
        @foreach($drawer->getGraphics() as $g)
        <li class="breadcrumb-item {{$loop->last ? ' active ' : ''}}" @if($loop->last) aria-current="page" @endif>
          {!! $g->draw() !!}
        </li>
        @endforeach
      </ol>
    </nav>
    <!-- End Breadcrumb -->
  </div>
</div>
