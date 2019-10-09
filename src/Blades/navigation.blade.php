<!-- Sidebar Nav -->
<aside id="sidebar" class="js-custom-scroll side-nav">
  <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
    @foreach($drawer->getGraphics() as $graphic)
      {!! $graphic->draw() !!}
    @endforeach
  </ul>
</aside>
<!-- End Sidebar Nav -->
