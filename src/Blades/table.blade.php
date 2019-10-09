<div class="card mb-3 mb-md-4">
  <div class="card-header">
    <h5 class="font-weight-semi-bold mb-0"></h5>
  </div>

  <div class="card-body pt-0">
    <div class="table-responsive-xl">
      @if(count($drawer->getData()) > 0)
      <table class="table mb-0">
        @if(count($drawer->getHead()) > 0)
        <thead>
        <tr>
          @foreach($drawer->getHead() as $h)
          <th class="font-weight-semi-bold border-top-0 py-2">{!! $h !!}</th>
          @endforeach
        </tr>
        </thead>
        @endif
        <tbody>
        @foreach($drawer->getData() as $d)
          {!! $d->draw() !!}
        @endforeach
        </tbody>
      </table>
      @else
        <div class="alert alert-warning">{{ __('messages.not_found_any_data') }}</div>
      @endif
    </div>
  </div>
</div>
