<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class SubCategoryCreate extends Component
{
    public $category_id;
    public $name;
    public $status;

    public function render()
    {
        $categories = Category::all();
        return view('livewire.sub-category-create', [
            'categories' => $categories
        ]);
    }

    protected $rules = [
        'category_id' => 'required',
        'name' => 'required|unique:sub_categories,name',
        'status' => 'required',
    ];

    public function submitFrom()
    {
        $this->validate();
        SubCategory::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-'),
            'status' => $this->status,
        ]);

        flash()->addSuccess('Sub-category created successfully');

        return redirect()->route('sub-category.index');
    }
}