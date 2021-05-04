<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Models\User;

class TweetController extends Controller
{
    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' => auth()->user()->id,
            'body' => $attributes['body']
        ]);

        return redirect('/tweet');
    }

    public function index()
    {
        return view('tweet.index', [
            'tweets' => auth()->user()->timeline(),
        ]);
    }
}
