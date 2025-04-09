<!-- Sign-in Sign-up Modal -->
<div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">
      <div class="modal-header">
        <h5 class="modal-title" id="signInModalLabel">Login Required</h5> 
        <!-- <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close" style="color: red"></button> -->
      </div>
      <div class="modal-body">
        
      <p class="text-danger fw-bold">Login is required to proceed with pre-enrollment.</p>
        <a href="{{ route('login') }}" class="btn btn-primary w-100 custom-btn">Proceed Login Page</a>

        <!-- Login Form -->
        <div class="sign-in-modal" style="display: none !important;">
          <form method="POST"id="login-form">
            <!-- Alert Text -->
            <div class="alert alert-warning" role="alert">
              To proceed with your enrollment, please login first.
            </div>
            <!-- Email input -->
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control custom-input" id="email" placeholder="Enter email" aria-label="Email" aria-describedby="basic-addon1" required>
              </div>
            </div>

            <!-- Password input -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control custom-input" id="password" placeholder="Enter password" aria-label="Password" aria-describedby="basic-addon2" required>
                <span class="input-group-text" id="togglePassword" style="cursor: pointer;"><i class="bi bi-eye-slash" id="eyeIcon"></i></span>
              </div>
            </div>

            <!-- Remember me checkbox -->
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input custom-checkbox" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>

            <!-- Login Button -->
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-danger custom-btn">Login</button>
            </div>

            <!-- Alternative login options -->
            <!-- <div class="text-center mt-4">
              <p class="text-muted">Or sign in with</p>
              <button type="button" class="btn btn-outline-danger custom-social-btn">
                <i class="bi bi-google"></i> Google
              </button>
              <button type="button" class="btn btn-outline-primary custom-social-btn">
                <i class="bi bi-facebook"></i> Facebook
              </button>
            </div> -->

            <!-- Sign Up Button -->
            <div class="text-center mt-3">
              <p>Don't have an account? <button type="button" class="btn btn-link sign-up-link">Sign Up</button></p>
            </div>
          </form>
        </div>

        <!-- Sign Up Form (Initially hidden) -->
        <div class="sign-up hidden">
          <form  method="POST">
            <!-- Alert Text -->
            <div class="alert alert-warning" role="alert">
              To proceed with your enrollment, please sign in first.
            </div>
            <!-- Email input -->
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control custom-input" id="email" name="email" placeholder="Enter email" aria-label="Email" aria-describedby="basic-addon1" required>
              </div>
            </div>

            <!-- Password input -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control custom-input" id="password" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="basic-addon2" required>
                <span class="input-group-text" id="togglePassword" style="cursor: pointer;"><i class="bi bi-eye-slash" id="eyeIcon"></i></span>
              </div>
            </div>

            <!-- Remember me checkbox -->
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input custom-checkbox" id="rememberMe" name="remember" >
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>

            <!-- Login Button -->
            <div class="d-grid gap-2">
              <button type="submit" id="signin" class="btn btn-danger custom-btn">
              <span id="signin-spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
              <span id="signin-text">Login</span>
              </button>
            </div>

            <!-- Alternative login options -->
            <!-- <div class="text-center mt-4">
              <p class="text-muted">Or sign in with</p>
              <button type="button" class="btn btn-outline-danger custom-social-btn">
                <i class="bi bi-google"></i> Google
              </button>
              <button type="button" class="btn btn-outline-primary custom-social-btn">
                <i class="bi bi-facebook"></i> Facebook
              </button>
            </div> -->
          </form>

           <!-- Register Link -->
           <div class="text-center mt-3">
            <p>Already have an account? <button type="button" class="btn btn-link sign-in-link">Login</button></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    const $signUpLink = $('.sign-up-link');
    const $signInLink = $('.sign-in-link');
    const $signInForm = $('.sign-in-modal');
    const $signUpForm = $('.sign-up');
    const $modalTitle = $('#signInModalLabel');

    // Initially show the Sign-In form
    // $signInForm.fadeIn(500).addClass('visible');

    // Handle the "Sign Up" button click (show Sign Up form with animation)
    $signUpLink.on('click', function() {
      $signInForm.fadeOut(500, function() {
        $signInForm.removeClass('visible');
        $signUpForm.fadeIn(500).addClass('visible');
        $modalTitle.text('Register');
      });
    });

    // Handle the "Login" button click (show Login form with animation)
    $signInLink.on('click', function() {
      $signUpForm.fadeOut(500, function() {
        $signUpForm.removeClass('visible');
        $signInForm.fadeIn(500).addClass('visible');
        $modalTitle.text('Login');
      });
    });


    $('#togglePassword').on('click', function() {
      const $passwordField = $('#password');
      const $eyeIcon = $('#eyeIcon');
      
      if ($passwordField.attr('type') === 'password') {
        $passwordField.attr('type', 'text');
        $eyeIcon.removeClass('bi-eye-slash').addClass('bi-eye');
      } else {
        $passwordField.attr('type', 'password');
        $eyeIcon.removeClass('bi-eye').addClass('bi-eye-slash');
      }
    });

    // $("#login-form").submit(function(event) {
    //     event.preventDefault(); // Prevent default form submission

    //     // Show loading spinner and disable button
    //     $("#signin").prop("disabled", true);
    //     $("#signin-text").text("Logging in...");
    //     $("#signin-spinner").removeClass("d-none");

    //     $.ajax({
    //         url: "{{ route('login') }}",
    //         type: "POST",
    //         data: $(this).serialize(), // Serialize form data
    //         headers: {
    //             "X-CSRF-TOKEN": $('input[name="_token"]').val() // Include CSRF token
    //         },
    //         success: function(response) {
    //             // Handle successful login
    //             $("#response-message").html('<div class="text-success">Login successful! Redirecting...</div>');
    //             setTimeout(function() {
    //                 window.location.href = '/profile'; // Redirect to the desired page
    //             }, 1000);
    //         },
    //         error: function(xhr) {
    //             let errorMessage = "Login failed. Please check your credentials.";
    //             console.log(xhr);
    //             if (xhr.responseJSON?.message) {
    //                 errorMessage = xhr.responseJSON.message;
    //             } else if (xhr.responseJSON?.errors) {
    //                 errorMessage = Object.values(xhr.responseJSON.errors).flat().join("<br>");
    //             }

    //             $("#response-message").html('<div class="text-danger">' + errorMessage + '</div>');
                
    //             // Reset button state
    //             $("#signin").prop("disabled", false);
    //             $("#signin-text").text("Log in");
    //             $("#signin-spinner").addClass("d-none");
    //         }
    //     });
    // });
  });
</script>
