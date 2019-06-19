<?php

namespace App\Http\Controllers\Secretaire\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/secretaire';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('secretaire.auth');
        $this->middleware('signed')->only('secretaire.verify');
        $this->middleware('throttle:6,1')->only('secretaire.verify', 'resend');
    }

    /**
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return $request->user('secretaire')->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('secretaire.auth.verify');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {
        if ($request->route('id') != $request->user('secretaire')->getKey()) {
            throw new AuthorizationException;
        }
        if ($request->user('secretaire')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }
        if ($request->user('secretaire')->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
        return redirect($this->redirectPath())->with('verified', true);
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        if ($request->user('secretaire')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }
        $request->user('secretaire')->sendEmailVerificationNotification();
        return back()->with('resent', true);
    }

}
