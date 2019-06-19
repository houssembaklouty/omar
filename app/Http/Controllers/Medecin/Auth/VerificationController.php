<?php

namespace App\Http\Controllers\Medecin\Auth;

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
    protected $redirectTo = '/medecin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('medecin.auth');
        $this->middleware('signed')->only('medecin.verify');
        $this->middleware('throttle:6,1')->only('medecin.verify', 'resend');
    }

    /**
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return $request->user('medecin')->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('medecin.auth.verify');
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
        if ($request->route('id') != $request->user('medecin')->getKey()) {
            throw new AuthorizationException;
        }
        if ($request->user('medecin')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }
        if ($request->user('medecin')->markEmailAsVerified()) {
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
        if ($request->user('medecin')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }
        $request->user('medecin')->sendEmailVerificationNotification();
        return back()->with('resent', true);
    }

}
