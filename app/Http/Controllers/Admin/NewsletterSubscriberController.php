<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use App\Models\NewsletterSubscriber;

class NewsletterSubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriber = NewsletterSubscriber::all();
        return view('admin_dashboard.newsletter-subscriber.index', compact('subscriber'));
    }

    public function sendNewsletter(Newsletter $newsletter)
    {
        return view('admin_dashboard.newsletter-subscriber.sendnewsletter', compact('newsletter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubscriberNewsletter  $subscriberNewsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterSubscriber $newsletterSubscriber)
    {
        if ($newsletterSubscriber->delete()) {
            return redirect()->route('admin.newsletter.view')->with('success', 'Subscriber successfully deleted');
        } else {
            return redirect()->route('admin.newsletter.view')->with('error', 'Subscriber not deleted');
        }
    }
}
