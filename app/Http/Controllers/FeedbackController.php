<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    function index()
    {
        $feedback = Feedback::all();
        return view('admin.index_feedback', compact('feedback'));
    }
}
