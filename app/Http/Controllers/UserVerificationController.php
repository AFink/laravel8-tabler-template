<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Providers\RouteServiceProvider;

class UserVerificationController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('send');
    }

    /**
     * Show Email-Verify notice.
     *
     * @return void
     */
    function notice()
    {
        return view('auth.verify-email');
    }

    /**
     * Send a new verification Email.
     *
     * @param Request $request
     * @return void
     */
    function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        $request->session()->put('status', 'verification-link-sent');
        return back();
    }

    /**
     * Try to verify an Email.
     *
     * @param EmailVerificationRequest $request
     * @return void
     */
    function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect(RouteServiceProvider::HOME);
    }
}
