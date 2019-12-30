<a class="nav-mobile-link btn btn-outline-primary border-0 mr-2 {{ $drawer->isActive() ? ' active ' : '' }}"
   href="{{ $drawer->isActive() ? 'javascript:;' : $drawer->getLink() }}">
  <i class="{{ $drawer->getIcon() }} icon-text align-middle mr-2"></i>
  <span class="align-middle">{{ $drawer->getTitle() }}</span>
</a>
