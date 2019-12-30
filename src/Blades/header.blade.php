<!-- Header -->
<header class="header header-light bg-white">
  <nav class="navbar flex-nowrap p-0">
    <div class="navbar-brand-wrapper col-auto">
      <!-- Logo For Mobile View -->
      <a class="navbar-brand navbar-brand-mobile" href="{{ env('APP_URL') }}">
        <img class="img-fluid w-100"
             src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/logo-mini.png') }}" alt="Nova">
      </a>
      <!-- End Logo For Mobile View -->

      <!-- Logo For Desktop View -->
      <a class="navbar-brand navbar-brand-desktop" href="{{ env('APP_URL') }}">
        <img class="side-nav-show-on-closed"
             src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/logo-mini.png') }}" alt="Nova"
             style="width: 41px; height: 33px;">
        <img class="side-nav-hide-on-closed"
             src="{{ env('APP_URL').'/storage/'.setting('general.logo') }}" alt="{{ setting('general.title', env('APP_NAME')) }}"
             style="width: 130px; height: 33px;">
      </a>
      <!-- End Logo For Desktop View -->
    </div>

    <div class="header-content col px-md-3 px-md-3">
      <div class="d-flex align-items-center">
        <!-- Side Nav Toggle -->
        <a class="js-side-nav header-invoker mr-md-2" href="#"
           data-close-invoker="#sidebarClose"
           data-target="#sidebar"
           data-target-wrapper="body">
          <i class="fas fa-align-{{ Loc::isRtl() ? 'right' : 'left' }}"></i>
        </a>
        <!-- End Side Nav Toggle -->

      <!-- Header Dropdown -->
        <div class="dropdown ml-auto">


        </div>
        <!-- End Header Dropdown -->

      @if(auth()->check())
        <!-- Header Dropdown -->
          <div class="dropdown ml-2">
            <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications"
               aria-haspopup="true" aria-expanded="false"
               data-unfold-event="click"
               data-unfold-target="#notifications"
               data-unfold-type="css-animation"
               data-unfold-duration="300"
               data-unfold-animation-in="fadeIn"
               data-unfold-animation-out="fadeOut">
              @if(auth()->user()->unreadNotifications()->count() > 0)
                <span class="indicator indicator-bordered indicator-top-right indicator-danger rounded-circle"></span>
              @endif
              <i class="fas fa-bell"></i>
            </a>


            <div id="notifications" class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem"
                 aria-labelledby="notificationsInvoker">
              <div class="card">
                <div class="card-header d-flex align-items-center border-bottom py-3">
                  <h5 class="mb-0">{{__('messages.notifications')}}
                    ( {{ auth()->user()->unreadNotifications()->count() }} )</h5>
                  <a class="link small ml-auto"
                     href="{{ route('notifications.index') }}">{{__('messages.clear_all')}}</a>
                </div>

                <div class="card-body p-0">
                  <div class="list-group list-group-flush">
                    @foreach(auth()->user()->unreadNotifications as $un)
                      <div class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center text-nowrap mb-2">
                          <i class="fas fa-star icon-text text-primary mr-2"></i>
                          <h6 class="font-weight-semi-bold mb-0">{{ __('notifications.'.str_replace('\\', '', \Illuminate\Support\Str::snake($un->type))) }}</h6>
                          <span class="list-group-item-date text-muted ml-auto">{{\Morilog\Jalali\Jalalian::fromCarbon($un->created_at)->ago()}}</span>
                        </div>

                        <p class="mb-0">
                          @if(isset($un->data['title']))
                            {{ $un->data['title'] }}
                          @elseif(isset($un->data['description']))
                            {{ $un->data['description'] }}
                          @endif
                        </p>
                        <form action="{{route('notifications.update', $un->id)}}" method="post">@csrf @method('PUT')
                          <button type="submit" class="list-group-item-closer text-muted btn"><i class="fa fa-close"></i>
                          </button>
                        </form>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- End Header Dropdown -->
      @endif

      <!-- Header User Dropdown -->
        <div class="dropdown mx-3">
          <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu"
             aria-haspopup="true" aria-expanded="false"
             data-unfold-event="click"
             data-unfold-target="#profileMenu"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
            <img class="avatar rounded-circle mr-md-2" src="{{ auth()->user()->imageUrl('avatar') }}"
                 alt="{{ auth()->user()->name }}">
            <span class="d-none d-md-block">{{ auth()->check() ? auth()->user()->name : __('messages.guest_user') }}</span>
            <i class="fas fa-angle-down d-none d-md-block ml-2"></i>
          </a>

          <ul id="profileMenu"
              class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4"
              aria-labelledby="profileMenuInvoker">
            @can('userDashboardIndex', \App\Models\User::class)
              <li class="unfold-item">
                <a class="unfold-link d-flex align-items-center text-nowrap"
                   href="{{ route('settings.index', 'profile') }}">
                  <span class="unfold-item-icon mr-3">
                    <i class="fas fa-user"></i>
                  </span>
                  {{__('messages.my_profile')}}
                </a>
              </li>
              <li class="unfold-item">
                <a class="unfold-link d-flex align-items-center text-nowrap"
                   href="{{ route('settings.index', 'password') }}">
                  <span class="unfold-item-icon mr-3">
                    <i class="fas fa-key"></i>
                  </span>
                  {{__('messages.change_password')}}
                </a>
              </li>
              <li class="unfold-item">
                <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('verifications.index') }}">
                  <span class="unfold-item-icon mr-3">
                    <i class="fas fa-crosshairs"></i>
                  </span>
                  {{__('messages.verification')}}
                </a>
              </li>
              <li class="unfold-item">
                <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('wallets.index') }}">
                  <span class="unfold-item-icon mr-3">
                    <i class="fas fa-trophy"></i>
                  </span>
                  {{__('messages.raise_balance')}}
                </a>
              </li>
              <li class="unfold-item">
                <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('orders.index') }}">
                  <span class="unfold-item-icon mr-3">
                    <i class="fas fa-folder"></i>
                  </span>
                  {{__('messages.latest_orders')}}
                </a>
              </li>
              <li class="unfold-item">
                <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('tickets.index') }}">
                  <span class="unfold-item-icon mr-3">
                    <i class="fas fa-book"></i>
                  </span>
                  {{__('messages.get_support')}}
                </a>
              </li>
            @endcan
            <li class="unfold-item unfold-item-has-divider">
              <form method="post" action="{{ route("auth.signout") }}">
                @csrf
                <button class="btn btn-link unfold-link d-flex align-items-center text-nowrap" href="#">
                  <span class="unfold-item-icon mr-3">
                    <i class="fas fa-power-off"></i>
                  </span>
                  {{__('messages.signout')}}
                </button>
              </form>
            </li>
          </ul>
        </div>
        <!-- End Header User Dropdown -->
      </div>
    </div>
  </nav>
</header>
<!-- End Header -->
