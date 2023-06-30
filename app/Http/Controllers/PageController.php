<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage() {
        return view('home');
    }

    public function attendeesPage() {
        return view('attendees');
    }

    public function collectionPage() {
        return view('collection');
    }

    public function packagesPage() {
        return view('packages');
    }

    public function loginPage() {
        return view('login');
    }
}