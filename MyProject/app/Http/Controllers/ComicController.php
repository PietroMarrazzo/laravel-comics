<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function show($id) {
        // return 'details page for id: ' . $id;

        $comics = config('comics');

        $comic = [];

        foreach ($comics as $item) {
            if ($item['id'] == $id) {
                $comic = $item;
            }
        }

        return view('comics.show', compact('comic'));
    }
}
