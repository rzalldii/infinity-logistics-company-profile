<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'recaptcha_token' => 'required|string',
            'cf-turnstile-response' => 'required|string',
        ]);

        $subjectMapping = [
            'quotation' => 'Request For Quotation',
            'general' => 'General Inquiry',
            'partnership' => 'Partnership Opportunity',
            'technical' => 'Technical Support',
            'feedback' => 'Feedback & Suggestions',
            'other' => 'Other'
        ];

        $subjectLabel = $subjectMapping[$validated['subject']] ?? $validated['subject'];

        $subscribe = $request->has('subscribe') ? 'Yes' : 'No';

        $responserecaptcha = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->recaptcha_token,
        ]);

        $resultrecaptcha = $responserecaptcha->json();

        if (!($resultrecaptcha['success'] ?? false) || ($resultrecaptcha['score'] ?? 0) < 0.5) {
            return response()->json([], 422);
        }

        $responseturnstile = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
            'secret' => env('TURNSTILE_SECRET_KEY'),
            'response' => $request->input('cf-turnstile-response'),
            'remoteip' => $request->ip(),
        ]);

        $resultturnstile = $responseturnstile->json();

        if (!($resultturnstile['success'] ?? false)) {
            return response()->json([], 422);
        }

        Mail::send([], [], function ($message) use ($subjectLabel, $validated, $subscribe) {
            $message->to('marketing1@infinity-sby.com')
                    ->subject($subjectLabel)
                    ->text( 'Name : ' . $validated['name'] . "\n" .
                            'Email : ' . $validated['email'] . "\n\n" .
                            'Message : ' . "\n\n" . $validated['message'] . "\n\n" .
                            'Subscribe Newsletter : ' . $subscribe);
        });

        response()->json(['redirect_url' => url('/')]);

    }
}
