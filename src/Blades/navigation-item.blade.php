@php
  $navigationRoutePath =  trim((parse_url($drawer->getLink(), PHP_URL_PATH)), '/');
  $isActive = request()->is($navigationRoutePath.'*');
@endphp
<li class="side-nav-menu-item{{ $isActive ? ' active ' : '' }}">
  <a class="side-nav-menu-link media align-items-center" href="{{ $drawer->getLink()  }}">
    <span class="side-nav-menu-icon d-flex mr-3">
      <i class="{{ $drawer->getIcon() }}"></i>
    </span>
    <span class="side-nav-fadeout-on-closed media-body">{{ $drawer->getTitle() }}</span>
  </a>
</li>
