<div class="card flex-row align-items-center p-3 p-md-4">
  <div class="icon icon-lg bg-soft-info rounded-circle ml-3">
    <i class="{{ $drawer->getIcon() }} icon-text d-inline-block text-info"></i>
  </div>
  <div>
    <h4 class="lh-1 mb-1">{{ $drawer->getCount() }}</h4>
    <small>{{ $drawer->getText() }}</small>
  </div>
  <div class="d-flex mr-auto align-items-center text-{{ $drawer->isDesc() ? 'danger' : 'success' }}">
    @if(!empty($drawer->getPercent()))
      <span class="ml-1" style="direction: ltr;">{{ $drawer->isDesc() ? '-' : '+' }}{{ $drawer->getPercent() }}%</span>
      <i class="fas fa-arrow-{{ $drawer->isDesc() ? 'down' : 'up' }} icon-text icon-text-xs"></i>
    @endif
  </div>
</div>
