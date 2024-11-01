<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Genre;

class LibraryController extends Controller
{
    public  function  bookMangement()
    {
        return view('librarian.bookmangement');
    }
    public function addBook()
    {
        return view('librarian.addbook');
    }
    public function addAuthGenra(Request $res)
    {
        if ($res->isMethod('POST')) {
            // dd(gettype($res['birthdate']));
            // dd(date($res['birthdate']));
            // $a = date('Y-m-d', strtotime($res['birthdate']));
            // dd(gettype($a));
            if ($res['author'] == 1) {
                $res->validate([
                    'name' => 'required|string|max:255',
                    'birthdate' => 'required|date',
                    'nationality' => 'required|string|max:255',
                    'biography' => 'required|string',
                ]);
                $author = new Author();
                $author->birthdate = $res['birthdate']; // Automatically handled as a date type
                $author->name = $res['name'];
                $author->biography = $res['biography'];
                $author->nationality = $res['nationality'];
                $author->save();

                // Author::create([
                //     'name' => $res['name'],
                //     'birthdate' => date($res['birthdate']),
                //     'nationality' => $res['nationality'],
                //     'biography' => $res['biography'],
                // ]);
            } elseif ($res['author'] == 0) {
                $res->validate([
                    'name' => 'required|string|max:255|unique:genres,name',
                ]);
                $grnra= new Genre();
                $grnra->name = $res['name'];
                $grnra->save();
            }
        }
        return view('librarian.addauthgenra');
    }
}
