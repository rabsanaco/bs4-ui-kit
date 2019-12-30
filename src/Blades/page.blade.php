<!DOCTYPE html>
<html lang="{{ $drawer->getLang() }}">
<head>
  <!-- Title -->
  <title>{{ $drawer->getTitle() }}</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="{{ $drawer->getDescription() }}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ $drawer->getFavicon() }}">

  <!-- Fonts -->
  {{--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">--}}

  <link href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/nova-icons/nova-icons.css') }}"
        rel="stylesheet">

  <!-- CSS Implementing Libraries -->
  <link rel="stylesheet"
        href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet"
        href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
  <link rel="stylesheet"
        href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/flatpickr/dist/flatpickr.min.css') }}">
  <link rel="stylesheet"
        href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet"
        href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/chartist/dist/chartist.min.css') }}">
  <link rel="stylesheet"
        href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.css') }}">
  <link rel="stylesheet"
        href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/jquery-shorten/src/jquery.shorten.css') }}">
  <link rel="stylesheet"
        href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/fontawesome-5.12/css/all.min.css') }}">

  <!-- CSS Nova Template -->
  <link rel="stylesheet" href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/css/theme.css') }}">

  @if(Loc::isRtl())
    <link rel="stylesheet"
          href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/font/iransans/css/fontiran.css') }}">
    <link rel="stylesheet" href="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/css/rtl.css') }}">
  @endif

  @if(setting('security.recaptcha_status', 'disabled') == 'enabled' && setting('security.recaptcha_site_key') && setting('security.recaptcha_secret_key'))
    {!! (new \Biscolab\ReCaptcha\ReCaptchaBuilderV3(setting('security.recaptcha_site_key'), setting('security.recaptcha_secret_key')))->htmlScriptTagJsApi([
      'lang' => 'fa'
    ]) !!}
  @endif

  @foreach($drawer->getStyles() as $style)
    {!! $style !!}
  @endforeach

  {{--<script src="https://unpkg.com/react@16/umd/react.{{env('APP_ENV') === 'local' ? 'development' : 'production.min'}}.js" crossorigin></script>--}}
  {{--<script src="https://unpkg.com/react-dom@16/umd/react-dom.{{env('APP_ENV') === 'local' ? 'development' : 'production.min'}}.js" crossorigin></script>--}}
  {{--<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>--}}
</head>

<body class="{{ $drawer->getBodyClasses() }}">
@if( $drawer->hasHeader() )
  {!! $drawer->getHeader()->draw() !!}
@endif

<main class="{{ $drawer->getMainClasses() }}">
  @if(empty($drawer->getGraphics()))
    @if( $drawer->hasNavigation() )
      {!! $drawer->getNavigation()->draw() !!}
    @endif

    <div class="content">
      @if( $drawer->hasContent() )
        {!! $drawer->getContent()->draw() !!}
      @endif

      @if( $drawer->hasFooter() )
        {!! $drawer->getFooter()->draw() !!}
      @endif
    </div>
  @else
    @foreach($drawer->getGraphics() as $g)
      {!! $g->draw() !!}
    @endforeach
  @endif
</main>

<!-- JS Global Compulsory -->
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- JS Implementing Libraries -->
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/chartist-bar-labels/src/scripts/chartist-bar-labels.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/resize-sensor/dist/resizeSensor.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/jquery-shorten/src/jquery.shorten.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/vendor/datatables.net-select/js/dataTables.select.js') }}"></script>

<!-- JS Nova -->
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/hs.core.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.malihu-scrollbar.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.side-nav.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.unfold.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.flatpickr.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.header-search.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.select2.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.chartist-area.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.chartist-bar.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.chartist-pie.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.chartist-donut.js') }}"></script>
<script src="{{ asset(config('rabsanaco-bs4-ui-kit.assets_path') . '/js/components/hs.datatables.js') }}"></script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
<script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
@foreach($drawer->getValidators() as $validator)
  {!! JsValidator::formRequest($validator) !!}
@endforeach

<!-- JS Libraries Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of custom scroll
        $.HSCore.components.HSMalihuScrollBar.init($('.js-custom-scroll'));

        // initialization of sidebar navigation component
        $.HSCore.components.HSSideNav.init('.js-side-nav');

        // initialization of dropdown component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            unfoldHideOnScroll: false,
            afterOpen: function () {
                // initialization of charts
                $.HSCore.components.HSChartistBar.init('#activity .js-bar-chart');

                setTimeout(function () {
                    $('#activity .js-bar-chart').css('opacity', 1);
                }, 100);

                // help function for accordions in hidden block
                $('#headerProjects .accordion-header').on('click', function () {
                    // vars
                    var target = $(this).data('target');

                    $(target).collapse('show');
                });
            }
        });

        // initialization of range datepicker
        $.HSCore.components.HSFlatpickr.init('#headerRightSidebarDatepicker', {
            locale: {
                weekdays: {
                    shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
                }
            },
            nextArrow: '<i class="fas fa-arrow-right icon-text icon-text-xs"></i>',
            prevArrow: '<i class="fas fa-arrow-left icon-text icon-text-xs"></i>'
        });

        $.HSCore.components.HSFlatpickr.init('#rangeDatepicker, #rangeDatepickerMyPortfolio', {
            locale: {
                weekdays: {
                    shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
                },
                rangeSeparator: ' - '
            },
            nextArrow: '<em class="fas fa-arrow-right"></em>',
            prevArrow: '<em class="fas fa-arrow-left"></em>'
        });

        // initialization of show on type module
        $.HSCore.components.HSHeaderSearch.init('.js-header-search');

        // initialization of show on type module
        $.HSCore.components.HSSelect2.init('.js-custom-select');

        // initialization of charts
        $.HSCore.components.HSChartistArea.init('.js-area-chart');
        $.HSCore.components.HSChartistBar.init('.js-bar-chart');
        $.HSCore.components.HSChartistDonut.init('.js-donut-chart');

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $(e.currentTarget.hash).find('.js-area-chart').each(function (el, tab) {
                tab.__chartist__.update();
            });
        });

        // initialization of datatables
        $.HSCore.components.HSDatatables.init('.js-datatable', {
            "columnDefs": [
                {"orderable": false, "targets": 8}
            ]
        });
    });
</script>
@foreach($drawer->getScripts() as $script)
  {!! $script !!}
@endforeach
</body>
</html>

<!-- Localized -->
