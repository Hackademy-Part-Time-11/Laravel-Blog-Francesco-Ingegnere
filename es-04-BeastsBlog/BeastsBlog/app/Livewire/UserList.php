<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\On;

class UserList extends Component
{
    public $users;

    public function mount() {
        $this->loadUsers();
    }

    #[On('user-created')]
    public function loadUsers() {

        $this->users = User::all();
    }

    public function edit($user_id) {

        $this->dispatch('user-edit', user: $user_id)->to(UserForm::class);
    }

    public function delete(User $user) {

        $user->delete();

        $this->loadUsers();
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
