<div class="d-flex flex-wrap align-items-center mb-3 d-print-none">
  <!-- Settings Nav -->
  <div class="nav-mobile-container">
    <div class="js-btn-list-to-dropdown nav-mobile nav-mobile-left nav-mobile-text-left nav-mobile-shade"
         data-transform-resolution="1199.98"
         data-tabs-mobile-type="slide-up-down"
         data-btn-classes="btn btn-primary">
      @foreach($drawer->getGraphics() as $g)
        {!! $g->draw() !!}
      @endforeach
    </div>
  </div>
  <!-- End Settings Nav -->
</div>
