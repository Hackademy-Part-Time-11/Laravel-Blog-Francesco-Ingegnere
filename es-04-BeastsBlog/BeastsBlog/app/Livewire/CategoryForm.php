<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On;

class CategoryForm extends Component
{
    public $categoryId = null;

    public $name = '';

    public function store() {

        $this->validate([
            'name' => 'required|max:30',
        ], [
            'name.required' => 'Il campo Nome Utente è obbligatorio!',
            'name.max' => 'Il campo Nome Utente non può essere più lungo di :max caratteri!',
        ]);

        if($this->categoryId) {

            (Category::find($this->categoryId))->update($this->only('name'));

            session()->flash('success', 'Categoria modificata con successo!');

        } else {
            Category::create($this->only('name'));

            session()->flash('success', 'Categoria creata con successo!');
        }  

        $this->resetCategory();

        $this->dispatch('category-created');
    }

    #[On('category-edit')]
    public function edit(Category $category) {

        $this->categoryId = $category->id;

        $this->name = $category->name;

        $this->resetErrorBag();

    }

    public function resetCategory() {

        $this->categoryId = null;
        
        $this->name = '';

        $this->resetErrorBag();

    }


    public function render()
    {
        return view('livewire.category-form');
    }
}
