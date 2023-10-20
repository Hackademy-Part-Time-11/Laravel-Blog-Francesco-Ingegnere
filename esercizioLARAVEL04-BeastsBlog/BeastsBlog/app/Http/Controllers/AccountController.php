<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SettingAccountRequest;

class AccountController extends Controller
{
    public function index() {
        return view('account.index');
    }

    public function settings() {
        return view('account.settings');
    }

    public function settingStore(SettingAccountRequest $request) {
        $user = \App\Models\User::find(auth()->user()->id);

        $user->update([
            'name' => $request->name,
            'password' => $request->password,
        ]);

        return redirect()->back()->with(['success' => 'Dati modificati con successo']);
    }
}
