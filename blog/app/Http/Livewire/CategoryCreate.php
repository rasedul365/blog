<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryCreate extends Component
{
    public $name, $status;
    
    public function render()
    {
        return view('livewire.category-create');
    }

    protected $rules = [
        'name' => 'required|unique:categories,name',
        'status' => 'required',
    ];

    public function submitFrom()
    {
        $this->validate();
        $categories = Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-'),
            'status' => $this->status,
        ]);

        flash()->addSuccess('Category created successfully');

        return redirect()->route('category.index');
    }
}