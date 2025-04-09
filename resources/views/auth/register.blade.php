@extends('layouts.app')

@section('title', 'Register | Madridejos Community College')

@section('content')

    <main class="sign-in-main main">
        <section class="signup sign-in">
            <div class="sign-in-container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <div id="response-message"></div>
                        <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="bi bi-person-fill"></i></label>
                                <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" id="name" placeholder="Name" oninput="capitalizeFirstLetterInWords(this)" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="bi bi-envelope-fill"></i></label>
                                <input type="email" name="email" :value="old('email')" required autocomplete="username" id="email" placeholder="Username" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="bi bi-lock"></i></label>
                                <input type="password" name="password" autocomplete="new-password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="bi bi-lock-fill"></i></label>
                                <input type="password" name="password_confirmation" required autocomplete="new-password" id="re_pass" placeholder="Repeat your password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                <label for="agree-term" class="label-agree-term">
                                    <span><span></span></span> I agree to 
                                    <a href="#" class="term-service">Terms and condition</a>
                                </label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" id="signup" class="form-submit">
                                    <span id="signup-spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    <span id="signup-text">Register</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/img/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function() {
            $('#register-form').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = $(this).serialize(); // Serialize the form data


                $("#signup").prop("disabled", true);
                $("#signup-text").text("Registering...");
                $("#signup-spinner").removeClass("d-none");

                $.ajax({
                    url: '{{ route('register') }}', // Your route for registration
                    type: 'POST',
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": $('input[name="_token"]').val() // Include CSRF token
                    },
                    success: function(response) {
                        // Handle success
                        // $("#response-message").html('<div class="text-success">'+ response.message +'</div>');
                        setTimeout(function() {
                            window.location.href = response.redirect_url
                        }, 0);
                    },
                    error: function(xhr) {
                        // Handle error
                        var errors = xhr.responseJSON.errors;
                        var errorMessages = '';
                        $.each(errors, function(key, value) {
                            errorMessages += value.join('<br>') + '<br>';
                        });
                        $("#response-message").html('<div class="text-danger">' + errorMessages + '</div>');

                        // Reset button state
                        $("#signup").prop("disabled", false);
                        $("#signup-text").text("Register");
                        $("#signup-spinner").addClass("d-none");
                    }
                });
            });
        });
    </script>

@endsection


   
