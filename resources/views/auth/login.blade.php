@extends('layouts.app')

@section('title', 'Login | Madridejos Community College')

@section('content')
    
    <main class="sign-in-main main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Login</li>
                </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="sign-in-container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="assets/img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <div id="response-message"></div>
                        <form method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="bi bi-person-fill"></i></label>
                                <input type="email" name="email" id="email" placeholder="Username" required/>
                            </div>
                            <div class="form-group">    
                                <label for="password"><i class="bi bi-lock-fill"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password"/>

                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="remember-me" name="remember" class="agree-term" />
                                <label for="remember-me" class="label-agree-term">
                                    Remember me
                                </label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" id="signin" class="form-submit">
                                    <span id="signin-spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    <span id="signin-text">Log in</span>
                                </button>
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        $(document).ready(function() {
            $("#login-form").submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                // Show loading spinner and disable button
                $("#signin").prop("disabled", true);
                $("#signin-text").text("Logging in...");
                $("#signin-spinner").removeClass("d-none");

                $.ajax({
                    url: "{{ route('login') }}",
                    type: "POST",
                    data: $(this).serialize(), // Serialize form data
                    headers: {
                        "X-CSRF-TOKEN": $('input[name="_token"]').val() // Include CSRF token
                    },
                    success: function(response) {
                        // Handle successful login
                        $("#response-message").html('<div class="text-success">Login successful! Redirecting...</div>');
                        setTimeout(function() {
                            if (document.referrer.includes('/pre-enroll')) {
                                window.location.href = document.referrer; // Redirect back to pre-enrollment
                            } else {
                                window.location.href = '/dashboard'; // Default redirect if not from pre-enrollment
                            }
                        }, 1000);
                                            },
                    error: function(xhr) {
                        let errorMessage = "Login failed. Please check your credentials.";
                        console.log(xhr);
                        if (xhr.responseJSON?.message) {
                            errorMessage = xhr.responseJSON.message;
                        } else if (xhr.responseJSON?.errors) {
                            errorMessage = Object.values(xhr.responseJSON.errors).flat().join("<br>");
                        }

                        $("#response-message").html('<div class="text-danger">' + errorMessage + '</div>');
                        
                        // Reset button state
                        $("#signin").prop("disabled", false);
                        $("#signin-text").text("Log in");
                        $("#signin-spinner").addClass("d-none");
                    }
                });
            });
        });
    </script>

@endsection