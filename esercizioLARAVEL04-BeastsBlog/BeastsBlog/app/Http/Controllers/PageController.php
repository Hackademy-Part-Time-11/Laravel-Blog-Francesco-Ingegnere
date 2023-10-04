<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome() {
        $title = env('APP_NAME');
        return view('home', compact('title'));
    }

    public function showAboutMe() {
        $description = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore itaque obcaecati minus nisi adipisci id voluptas qui impedit sapiente, ipsa perspiciatis harum assumenda eveniet nam? Numquam dolore repellendus nobis itaque!';
        return view('pages.aboutMe', compact('description'));
    }

    public function showContacts() {
        return view('pages.contacts');
    }
}
