<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:255',
            'content' => 'required'
        ]);

        $review = Review::query()->create([
            'full_name' => $request->full_name,
            'content' => $request->text,
        ]);

        return redirect()->route('home');
    }
}
