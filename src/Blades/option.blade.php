<{{$drawer->isButton() ? 'button' : 'a'}}
  @if(!$drawer->isButton())
  href="{{ $drawer->getHref() }}"
@endif
class="btn btn-sm btn-outline-{{ $drawer->getType() }}" title="{{ $drawer->getTitle() }}" data-toggle="tooltip">
<i class="align-middle icon-text icon-text-xs {{ $drawer->getIcon() }}"></i>
</{{$drawer->isButton() ? 'button' : 'a'}}>
