<div class="card mb-3 mb-md-4">
  <div class="card-header">
    <h5 class="font-weight-semi-bold mb-0">
      @if($drawer->getTitle())
        <i class="fas fa-list"></i>
        &nbsp;
        {{ $drawer->getTitle() }}
      @endif
    </h5>
  </div>

  <div class="card-body pt-0">
    <div class="table-responsive-xl">
      @if(count($drawer->getData()) > 0)
        <table class="table mb-0">
          @if(count($drawer->getHead()) > 0)
            <thead>
            <tr>
              @php
              $columnsCount = 0;
              @endphp
              @foreach($drawer->getHead() as $h)
                @php
                  $columnsCount++;
                @endphp
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
            @if(($drawer->getPagination() instanceof \Illuminate\Pagination\Paginator || $drawer->getPagination() instanceof \Illuminate\Pagination\LengthAwarePaginator) && ($drawer->getPagination()->total() > $drawer->getPagination()->count()))
              <tfoot>
                <tr>
                  <td colspan="{{ $columnsCount }}">
                    {!! $drawer->getPagination()->links() !!}
                  </td>
                </tr>
              </tfoot>
            @endif
        </table>
      @else
        <div class="alert alert-warning">{{ __('messages.not_found_any_data') }}</div>
      @endif
    </div>
  </div>
</div>
