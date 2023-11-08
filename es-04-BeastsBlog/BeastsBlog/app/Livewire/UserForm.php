<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On;

class UserForm extends Component
{
    public $userId = null;

    public $name = '';

    #[Rule('email', message: 'L\'indirizzo Email non è valido!')]
    public $email = '';

    #[Rule('required', message: 'Il campo Password è obbligatorio!')]
    #[Rule('min:5', message: 'La Password deve essere più lunga di 5 caratteri!')]
    public $password = '';

    public function store() {

        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'password' => $this->userId ? '' : 'required',
        ], [
            'name.required' => 'Il campo Nome Utente è obbligatorio!',
            'email.required' => 'Il campo Email è obbligatorio!',
        ]);

        if($this->userId) {

            if($this->password == '') {
                $update = $this->only('name', 'email');
            } else {
                $update = $this->only('name', 'email', 'password');
            }

            (User::find($this->userId))->update($update);

            session()->flash('success', 'Utente modificato con successo!');

        } else {
            User::create($this->only('name', 'email', 'password'));

            session()->flash('success', 'Utente creato con successo!');
        }  

        $this->resetUser();

        $this->dispatch('user-created');
    }

    #[On('user-edit')]
    public function edit(User $user) {

        $this->userId = $user->id;

        $this->name = $user->name;
        $this->email = $user->email;

        $this->resetErrorBag();

    }

    public function resetUser() {

        $this->userId = null;
        
        $this->name = '';
        $this->email = '';
        $this->password = '';

        $this->resetErrorBag();

    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
