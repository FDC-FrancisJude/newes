<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreEnrollController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated and their email is verified
        if (Auth::check() && !Auth::user()->hasVerifiedEmail()) {
            // If the user is logged in but their email is not verified, redirect to the verification.notice route
            return redirect()->route('verification.notice');
        }

        // If the user is either not logged in or their email is verified, proceed to the pre-enroll page
        return view('pre-enroll');
    }
}
