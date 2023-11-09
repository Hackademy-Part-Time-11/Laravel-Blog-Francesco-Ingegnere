<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;

class CategoriesList extends Component
{
    public $categories;

    public function mount() {
        $this->loadCategories();
    }

    #[On('category-created')]
    public function loadCategories() {

        $this->categories = Category::all();
    }

    public function edit($category_id) {

        $this->dispatch('category-edit', category: $category_id)->to(CategoryForm::class);
    }

    public function delete(Category $category) {

        $category->articles()->detach();
        $category->delete();

        $this->loadCategories();
    }

    public function render()
    {
        return view('livewire.categories-list');
    }
}
