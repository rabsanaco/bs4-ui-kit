<!-- Footer -->
<footer class="small bg-white p-3 px-md-4 mt-auto d-print-none {{ $drawer->isTransparent() ? ' bg-transparent ' : '' }}">
  <div class="row justify-content-between">
    <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
      <ul class="list-dot list-inline mb-0">
        <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark"
                                                                                href="{{ env('APP_URL') }}/faq">{{  __('messages.faq') }}</a>
        </li>
        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark"
                                                              href="{{ env('APP_URL') }}/terms">{{ __('messages.term_of_service') }}</a>
        </li>
        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark"
                                                              href="{{ env('APP_URL') }}/contact">{{ __('messages.contact_us') }}</a>
        </li>
      </ul>
    </div>

    <div class="col-lg text-center mb-3 mb-lg-0">
      <ul class="list-inline mb-0">
        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="fab fa-twitter"></i></a></li>
        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="fab fa-telegram"></i></a></li>
        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="fab fa-whatsapp"></i></a></li>
      </ul>
    </div>

    <div class="col-lg text-center text-lg-right">
      &copy; {{ \Morilog\Jalali\Jalalian::now()->format('Y') }} {{ env('APP_NAME') }}
      . {{  __('messages.all_rights_reserved') }}.
    </div>
  </div>
</footer>
<!-- End Footer -->
