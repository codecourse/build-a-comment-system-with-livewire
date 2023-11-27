<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function __invoke(Episode $episode)
    {
        return view('episodes.show', [
            'episode' => $episode
        ]);
    }
}
