<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Fortify\UpdateUserPassword;

class AccountController extends Controller
{
    public function index() {
        return view('account.index');
    }

    public function settings() {
        return view('account.settings');
    }

    public function settingStore(Request $request) {

        (new UpdateUserPassword())->update(auth()->user(), [
            'name' => $request->name,
            'current_password' => $request->current_password,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);

        return redirect()->back()->with(['success' => 'Dati modificati con successo']);
    }
}
