<!-- Header -->
<header class="header header-light bg-white">
  <nav class="navbar flex-nowrap p-0">
    <div class="navbar-brand-wrapper col-auto">
      <!-- Logo For Mobile View -->
      <a class="navbar-brand navbar-brand-mobile" href="index.html">
        <img class="img-fluid w-100" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/logo-mini.png') }}" alt="Nova">
      </a>
      <!-- End Logo For Mobile View -->

      <!-- Logo For Desktop View -->
      <a class="navbar-brand navbar-brand-desktop" href="index.html">
        <img class="side-nav-show-on-closed" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/logo-mini.png') }}" alt="Nova" style="width: 41px; height: 33px;">
        <img class="side-nav-hide-on-closed" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/logo.png') }}" alt="Nova" style="width: 130px; height: 33px;">
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
          <i class="nova-align-left"></i>
        </a>
        <!-- End Side Nav Toggle -->

        @if(0)
        <!-- Header Search -->
        <div class="js-header-search position-relative"
             data-search-target="#headerSearchResults"
             data-search-mobile-invoker="#headerSearchMobileInvoker"
             data-search-form="#headerSearchForm"
             data-search-field="#headerSearchField"
             data-search-clear="#headerSearchResultsClear">
          <a id="headerSearchMobileInvoker" class="header-search-invoker header-invoker" href="#">
            <i class="nova-search"></i>
          </a>

          <form id="headerSearchForm" class="header-search input-group input-group-merge w-18_75rem w-md-22_5rem" action="#">
            <input id="headerSearchField" class="header-search-input form-control form-control-append-icon" type="text" placeholder="Search nova database">
            <div class="input-group-append-merge focus-hide">
              <i class="nova-search icon-text"></i>
            </div>
            <div class="input-group-append-merge focus-show">
              <span id="headerSearchResultsClear">
                <i class="nova-close icon-text"></i>
              </span>
            </div>

            <div id="headerSearchResults" class="unfold unfold-light unfold-top unfold-centered position-absolute w-100 mt-3">
              <div class="border-bottom px-3 px-md-4 py-3">
                <h6 class="font-weight-semi-bold mb-3">Projects</h6>

                <ul class="list-unstyled mb-0">
                  <li class="mb-2">
                    <a class="link-dark" href="#">Technical delivery call</a>
                  </li>
                  <li class="mb-2">
                    <a class="link-dark" href="#">R&D meeting</a>
                  </li>
                  <li class="mb-2">
                    <a class="link-dark" href="#">Discuss campaign performance</a>
                  </li>
                  <li class="mb-0">
                    <a class="link-dark" href="#">SciFi Writing Group</a>
                  </li>
                </ul>
              </div>

              <div class="border-bottom px-3 px-md-4 py-3">
                <h6 class="font-weight-semi-bold mb-3">Projects</h6>

                <ul class="list-unstyled mb-0">
                  <li class="mb-2">
                    <a class="link-dark media align-items-center" href="#">
                      <img class="avatar rounded-circle mr-2" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/100x100/img4.jpg') }}" width="40" alt="Image description">

                      <div class="media-body">
                        <h6 class="font-weight-semi-bold mb-0">Frances James</h6>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="link-dark media align-items-center" href="#">
                      <img class="avatar rounded-circle mr-2" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/100x100/img6.jpg') }}" width="40" alt="Image description">

                      <div class="media-body">
                        <h6 class="font-weight-semi-bold mb-0">Susie Gibbs</h6>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="link-dark media align-items-center" href="#">
                      <img class="avatar rounded-circle mr-2" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/100x100/img12.jpg') }}" width="40" alt="Image description">

                      <div class="media-body">
                        <h6 class="font-weight-semi-bold mb-0">Gertrude Ramsey</h6>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="px-3 px-md-4 py-3">
                <a class="link" href="#">Show all (24) Results</a>
              </div>
            </div>
          </form>
        </div>
        <!-- End Header Search -->
        @endif

        <!-- Header Dropdown -->
        <div class="dropdown ml-auto">


        </div>
        <!-- End Header Dropdown -->

      @if(auth()->check())
        <!-- Header Dropdown -->
        <div class="dropdown ml-2">
          <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications" aria-haspopup="true" aria-expanded="false"
             data-unfold-event="click"
             data-unfold-target="#notifications"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
            @if(auth()->user()->unreadNotifications()->count() > 0)
            <span class="indicator indicator-bordered indicator-top-right indicator-danger rounded-circle"></span>
            @endif
            <i class="nova-bell"></i>
          </a>


          <div id="notifications" class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem" aria-labelledby="notificationsInvoker">
            <div class="card">
              <div class="card-header d-flex align-items-center border-bottom py-3">
                <h5 class="mb-0">{{__('messages.notifications')}} ( {{ auth()->user()->unreadNotifications()->count() }} )</h5>
                <a class="link small ml-auto" href="{{ route('notifications.index') }}">{{__('messages.clear_all')}}</a>
              </div>

              <div class="card-body p-0">
                <div class="list-group list-group-flush">
                  @foreach(auth()->user()->unreadNotifications as $un)
                  <div class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center text-nowrap mb-2">
                      <i class="nova-star icon-text text-primary mr-2"></i>
                      <h6 class="font-weight-semi-bold mb-0">{{ $un->type }}</h6>
                      <span class="list-group-item-date text-muted ml-auto">{{\Morilog\Jalali\Jalalian::fromCarbon($un->created_at)->ago()}}</span>
                    </div>

                    <p class="mb-0">
                      Reminder about your Appointment.
                    </p>
                    <a class="list-group-item-closer text-muted" href="#"><i class="nova-close"></i></a>
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
          <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false"
             data-unfold-event="click"
             data-unfold-target="#profileMenu"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
            <img class="avatar rounded-circle mr-md-2" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/100x100/img9.jpg') }}" alt="Image description">
            <span class="d-none d-md-block">{{ auth()->check() ? auth()->user()->name : __('messages.guest_user') }}</span>
            <i class="nova-angle-down d-none d-md-block ml-2"></i>
          </a>

          <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4" aria-labelledby="profileMenuInvoker">
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('settings.index', 'profile') }}">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-user"></i>
                </span>
                {{__('messages.my_profile')}}
              </a>
            </li>
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-cup"></i>
                </span>
                {{__('messages.raise_balance')}}
              </a>
            </li>
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-folder"></i>
                </span>
                {{__('messages.latest_orders')}}
              </a>
            </li>
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-book"></i>
                </span>
                {{__('messages.get_support')}}
              </a>
            </li>
            <li class="unfold-item unfold-item-has-divider">
              <form method="post" action="{{ route("auth.signout") }}">
                @csrf
              <button class="btn btn-link unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-power-off"></i>
                </span>
                {{__('messages.signout')}}
              </button>
              </form>
            </li>
          </ul>
        </div>
        <!-- End Header User Dropdown -->

        <!-- Info Sidebar Toggle -->
        <a id="activityInvoker" class="header-invoker" href="#" aria-controls="activity" aria-haspopup="true" aria-expanded="false"
           data-unfold-event="click"
           data-unfold-target="#activity"
           data-unfold-type="css-animation"
           data-unfold-animation-in="fadeInRight"
           data-unfold-animation-out="fadeOutRight"
           data-unfold-duration="300">
          <i class="nova-align-right"></i>
        </a>
        <!-- End Info Sidebar Toggle -->

        <!-- Info Sidebar -->
        <div id="activity" class="js-custom-scroll sidebar sidebar-light sidebar-right sidebar-full-height unfold-css-animation unfold-hidden position-fixed" aria-labelledby="activityInvoker">
          <div class="border-bottom d-flex align-items-center text-nowrap px-3 px-md-4 py-3">
            <h5 class="mb-0">Activity</h5>
            <a id="activityClose" class="text-muted small ml-auto" href="#" aria-controls="activity" aria-haspopup="true" aria-expanded="false"
               data-unfold-event="click"
               data-unfold-target="#activity"
               data-unfold-type="css-animation"
               data-unfold-animation-in="fadeInRight"
               data-unfold-animation-out="fadeOutRight"
               data-unfold-duration="300">
              <i class="nova-close icon-text"></i>
            </a>
          </div>

          <form>
            <section class="border-bottom p-3 p-md-4">
              <h6 class="d-none font-weight-semi-bold mb-0">Activity</h6>
              <div class="row">
                <div class="col-md-6">
                  <select id="period" class="js-custom-select"
                          data-width="auto"
                          data-classes="custom-select-without-bordered">
                    <option value="thisWeek">This Week</option>
                    <option value="thisMonth">This Month</option>
                    <option value="thisYear">This Year</option>
                  </select>
                </div>

                <div class="col-md-4 ml-auto text-md-right">
                  <a class="link small" href="#">Show Report</a>
                </div>
              </div>

              <div class="js-bar-chart transition-opacity-0_1" style="height: 219px; opacity: 0;"
                   data-series="[
                         [90,60,70,100,60,20,5]
                       ]"
                   data-labels='["Mon","Tue","Wed","Thu","Fri","Sat","Sun"]'
                   data-is-show-axis-x="false"
                   data-is-show-axis-y="false"
                   data-is-show-label-axis-x="true"
                   data-is-show-label-axis-y="false"
                   data-height="219"
                   data-high="150"
                   data-offset-axis-x="23"
                   data-offset-axis-y="0"
                   data-low="0"
                   data-distance="52"
                   data-stroke-width="40"
                   data-mobile-stroke-width="30"
                   data-stroke-color='["#8069f2"]'
                   data-is-grid-solid-line="true"
                   data-is-show-bar-labels="true"
                   data-grid-line-color="#eeeef1"
                   data-label-color-axis-x="#4a4e69"
                   data-label-font-size-axis-x="14px"
                   data-label-color-axis-y="#868e96"
                   data-label-font-size-axis-y="14px"></div>
            </section>

            <section class="border-bottom p-3 p-md-4">
              <div class="d-flex align-items-center mb-3">
                <h6 class="font-weight-semi-bold mb-0">Most Active</h6>
                <a class="link small ml-auto" href="#">Show All</a>
              </div>

              <div class="d-flex">
                <div class="position-relative mr-3">
                  <span class="indicator indicator-success indicator-lg indicator-bordered-reverse indicator-top-left rounded-circle"></span>
                  <img class="avatar-lg rounded-circle" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/100x100/img11.jpg') }}" alt="Image description">
                </div>

                <div class="position-relative mr-3">
                  <span class="indicator indicator-success indicator-lg indicator-bordered-reverse indicator-top-left rounded-circle"></span>
                  <img class="avatar-lg rounded-circle" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/100x100/img7.jpg') }}" alt="Image description">
                </div>

                <div class="position-relative">
                  <span class="indicator indicator-success indicator-lg indicator-bordered-reverse indicator-top-left rounded-circle"></span>
                  <img class="avatar-lg rounded-circle" src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/img/100x100/img10.jpg') }}" alt="Image description">
                </div>
              </div>
            </section>

            <section class="border-bottom p-3 p-md-4">
              <div class="mb-3">
                <h6 class="font-weight-semi-bold mb-0">Today</h6>
              </div>

              <div class="datepicker-inline position-relative mb-3">
                <input id="headerRightSidebarDatepicker" type="text"
                       data-rp-is-inline="true"
                       data-rp-event-dates='["20180401", "20180403", "20180406"]'>
              </div>

              <div class="alert alert-dismissible alert-left-bordered border-primary bg-soft-primary d-flex align-items-center rounded-0 p-3 fade show" role="alert" style="margin-bottom: 1px;">
                <i class="nova-alarm-clock icon-text text-primary mr-2"></i>
                <span>Discuss project requirements</span>
                <strong class="font-weight-semi-bold ml-auto">9:36pm</strong>
              </div>

              <div class="alert alert-dismissible alert-left-bordered border-warning bg-soft-warning d-flex align-items-center rounded-0 p-3 fade show" role="alert" style="margin-bottom: 1px;">
                <i class="nova-pin-alt icon-text text-warning mr-2"></i>
                <span>Secret Project presentation</span>
                <strong class="font-weight-semi-bold ml-auto">6:50am</strong>
              </div>

              <div class="alert alert-dismissible alert-left-bordered border-success bg-soft-success d-flex align-items-center rounded-0 p-3 mb-3 fade show" role="alert">
                <i class="nova-pin-alt icon-text text-success mr-2"></i>
                <span>Discuss campaign performance</span>
                <strong class="font-weight-semi-bold ml-auto">6:50am</strong>
              </div>

              <a class="btn btn-primary" href="#">Add New Event</a>
            </section>

            <section class="border-bottom p-3 p-md-4">
              <div class="d-flex align-items-center mb-3">
                <h6 class="font-weight-semi-bold mb-0">Projects</h6>
                <a class="link small ml-auto" href="#">Show All</a>
              </div>

              <div id="headerProjects">
                <div class="accordion accordion-bordered accordion-rounded mb-2">
                  <div id="headerProjectsHeading1" class="accordion-header accordion-header-bordered-bottom p-0" aria-expanded="true" aria-controls="headerProjectsBody1"
                       data-toggle="collapse"
                       data-target="#headerProjectsBody1" role="region">
                    <div class="accordion-icon accordion-icon-md position-relative text-white bg-success mr-2">
                      <span class="font-weight-semi-bold text-white">D</span>
                    </div>

                    <h6 class="font-weight-semi-bold mb-0">Design Indaba Conference</h6>
                    <i class="accordion-control nova-angle-down icon-text icon-text-xs ml-auto mr-3"></i>
                  </div>

                  <div id="headerProjectsBody1" class="collapse in show" aria-labelledby="headerProjectsHeading1"
                       data-parent="#headerProjects">
                    <div class="accordion-body px-3 pt-3 pt-md-4">
                      <div class="form-check position-relative mb-2">

                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck1" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck1">Visualize vertical interfaces</label>
                        </div>
                      </div>

                      <div class="form-check position-relative mb-2">

                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck2" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck2">Monetize B2B portals</label>
                        </div>
                      </div>

                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck3" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck3">Repurpose viral metrics</label>
                        </div>
                      </div>

                      <div class="form-check position-relative">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck4" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck4">Repurpose viral metrics</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion accordion-bordered accordion-rounded mb-2">
                  <div id="headerProjectsHeading2" class="accordion-header accordion-header-bordered-bottom p-0 collapsed" aria-expanded="false" aria-controls="headerProjectsBody2"
                       data-toggle="collapse"
                       data-target="#headerProjectsBody2" role="region">
                    <div class="accordion-icon accordion-icon-md position-relative text-white bg-primary mr-2">
                      <span class="font-weight-semi-bold text-white">O</span>
                    </div>

                    <h6 class="font-weight-semi-bold mb-0">OFFSET Dublin</h6>
                    <i class="accordion-control nova-angle-down icon-text icon-text-xs ml-auto mr-3"></i>
                  </div>

                  <div id="headerProjectsBody2" class="collapse in" aria-labelledby="headerProjectsHeading2"
                       data-parent="#headerProjects">
                    <div class="accordion-body px-3 pt-3 pt-md-4">
                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck5" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck5">Visualize vertical interfaces</label>
                        </div>
                      </div>

                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck6" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck6">Monetize B2B portals</label>
                        </div>
                      </div>

                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck7" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck7">Repurpose viral metrics</label>
                        </div>
                      </div>

                      <div class="form-check position-relative">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck8" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck8">Repurpose viral metrics</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion accordion-bordered accordion-rounded mb-2">
                  <div id="headerProjectsHeading3" class="accordion-header accordion-header-bordered-bottom p-0 collapsed" aria-expanded="false" aria-controls="headerProjectsBody3"
                       data-toggle="collapse"
                       data-target="#headerProjectsBody3" role="region">
                    <div class="accordion-icon accordion-icon-md position-relative text-white bg-primary-darker mr-2">
                      <span class="font-weight-semi-bold text-white">I</span>
                    </div>

                    <h6 class="font-weight-semi-bold mb-0">Interaction 17</h6>
                    <i class="accordion-control nova-angle-down icon-text icon-text-xs ml-auto mr-3"></i>
                  </div>

                  <div id="headerProjectsBody3" class="collapse in" aria-labelledby="headerProjectsHeading3"
                       data-parent="#headerProjects">
                    <div class="accordion-body px-3 pt-3 pt-md-4">
                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck9" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck9">Visualize vertical interfaces</label>
                        </div>
                      </div>

                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck10" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck10">Monetize B2B portals</label>
                        </div>
                      </div>

                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck11" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck11">Repurpose viral metrics</label>
                        </div>
                      </div>

                      <div class="form-check position-relative">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck12" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck12">Repurpose viral metrics</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion accordion-bordered accordion-rounded">
                  <div id="headerProjectsHeading4" class="accordion-header accordion-header-bordered-bottom p-0 collapsed" aria-expanded="false" aria-controls="headerProjectsBody4"
                       data-toggle="collapse"
                       data-target="#headerProjectsBody4" role="region">
                    <div class="accordion-icon accordion-icon-md position-relative text-white bg-warning mr-2">
                      <span class="font-weight-semi-bold text-white">S</span>
                    </div>

                    <h6 class="font-weight-semi-bold mb-0">Salone del Mobile Milano</h6>
                    <i class="accordion-control nova-angle-down icon-text icon-text-xs ml-auto mr-3"></i>
                  </div>

                  <div id="headerProjectsBody4" class="collapse in" aria-labelledby="headerProjectsHeading4"
                       data-parent="#headerProjects">
                    <div class="accordion-body px-3 pt-3 pt-md-4">
                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck13" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck13">Visualize vertical interfaces</label>
                        </div>
                      </div>

                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck14" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck14">Monetize B2B portals</label>
                        </div>
                      </div>

                      <div class="form-check position-relative mb-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck15" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck15">Repurpose viral metrics</label>
                        </div>
                      </div>

                      <div class="form-check position-relative">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="headerProjectsCheck16" class="custom-control-input">
                          <label class="custom-control-label" for="headerProjectsCheck16">Repurpose viral metrics</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </form>
        </div>
        <!-- End Info Sidebar -->
      </div>
    </div>
  </nav>
</header>
<!-- End Header -->
