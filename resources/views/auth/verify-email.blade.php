@extends('layouts.app')

@section('title', 'Email Verification | Madridejos Community College')

@section('content')

    <main class="main">
        <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li class="current">Email Verification<br></li>
            </ol>
            </div>
        </nav>
        </div>

        <section id="email-verification" class="section email-verification">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="section-title">Email Verification</h2>
                    </div>
                    <div class="col-lg-12 verification-text" data-aos="fade-up" data-aos-delay="100">
                        {{ __('Thank you for registering at Madridejos Community College! Before you can proceed to pre-enrollment, please verify your email by clicking the link we sent to your inbox. If you did not receive the email, you can request another verification link below.') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="verification-text-new" data-aos="fade-up" data-aos-delay="100" >
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif
                </div>

                <div class="mt-4 d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-delay="100">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary custom-btn-global">
                            Resend Verification Email
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

@endsection