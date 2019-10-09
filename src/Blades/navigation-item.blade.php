@php
$navigationRoutePath =  trim((parse_url($drawer->getLink(), PHP_URL_PATH)), '/');
@endphp
<li class="side-nav-menu-item{{ request()->is($navigationRoutePath.'*') ? ' active ' : '' }}">
  <a class="side-nav-menu-link media align-items-center" href="{{ $drawer->getLink() }}">
          <span class="side-nav-menu-icon d-flex mr-3">
            <i class="{{ $drawer->getIcon() }}"></i>
          </span>
    <span class="side-nav-fadeout-on-closed media-body">{{ $drawer->getTitle() }}</span>
  </a>
</li>
