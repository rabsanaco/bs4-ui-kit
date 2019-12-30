<div class="container py-7 my-auto">
  <div class="d-flex align-items-center justify-content-center">
    <!-- Card -->
    <div class="card" style="width: 460px; max-width: 100%;">
      <div class="card-body p-4 p-lg-7">
        @foreach($drawer->getGraphics() as $g)
          {!! $g->draw() !!}
        @endforeach
        {{--<h2 class="text-center mb-4 h3">Sign in</h2>

        <form class="js-validate" target="_blank">
          <!-- Email -->
          <div class="form-group js-form-message js-focus-state">
            <label for="email">Your email</label>
            <div class="input-group input-group-merge">
              <!-- Email Field Icon -->
              <div class="input-group-prepend-merge">
                <i class="nova-email"></i>
              </div>
              <!-- End Email Field Icon -->

              <!-- Email Field -->
              <input type="email" id="email" class="form-control form-control-prepend-icon" placeholder="Your email" name="email" required
                     data-msg="Please enter your email address."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
              <!-- End Email Field -->
            </div>
          </div>
          <!-- End Email -->

          <!-- Password -->
          <div class="form-group js-form-message js-focus-state">
            <label for="password">Password</label>
            <div class="input-group input-group-merge">
              <!-- Password Field Icon -->
              <div class="input-group-prepend-merge">
                <i class="nova-lock"></i>
              </div>
              <!-- End Password Field Icon -->

              <!-- Password Field -->
              <input type="password" id="password" class="form-control form-control-prepend-icon" placeholder="Enter your password" name="password" required
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
              <!-- End Password Field -->
            </div>
          </div>
          <!-- End Password -->

          <div class="d-flex align-items-center justify-content-between my-4">
            <!-- Remember -->
            <div class="custom-control custom-checkbox">
              <input type="checkbox" id="rememberMe" class="custom-control-input" name="rememberMe">
              <label class="custom-control-label text-dark" for="rememberMe">Remember me</label>
            </div>
            <!-- End Remember -->

            <a href="forgot-password.html">Forgot password?</a>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-block btn-wide btn-primary text-uppercase">Sing In</button>
          <!-- End Submit Button -->

          <!-- Divider with Text -->
          <div class="divider-with-text text-center my-4 mx-7">
            <span class="divider-with-text__content"></span>
          </div>
          <!-- End Divider with Text -->

          <!-- Link -->
          <p class="text-center mb-0">
            Don’t have an account? <a class="font-weight-semi-bold" href="registration.html">Sign up here</a>
          </p>
          <!-- End Link -->
        </form>--}}
      </div>
    </div>
    <!-- End Card -->
  </div>
</div>
