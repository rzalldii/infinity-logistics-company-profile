<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
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

        try {
            Mail::raw(
                'Name : ' . $validated['name'] . "\n" .
                'Email : ' . $validated['email'] . "\n\n" .
                'Message : ' . "\n\n" . $validated['message'] . "\n\n" .
                'Subscribe Newsletter : ' . $subscribe,
                function ($message) use ($validated, $subjectLabel) {
                    $message->to('marketing1@infinity-sby.com')
                        ->subject($subjectLabel)
                        ->replyTo($validated['email'], $validated['name']);
                }
            );

            return response()->json([], 200);

        } catch (\Exception $e) {
            return response()->json([], 500);
        }
    }
}
