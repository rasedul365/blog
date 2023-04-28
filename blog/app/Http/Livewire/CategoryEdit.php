<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Rule;

class CategoryEdit extends Component
{
    public $category_id;
    public $name;
    public $slug;
    public $status;

    public function mount() {
        $category = Category::findOrFail($this->category_id);
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->status = $category->status;
    }

    public function render()
    {
        $category = Category::findOrFail($this->category_id);

        return view('livewire.category-edit', [
            'category' => $category
        ]);
    }

    // protected $rules = [
    //     'name' => 'required',
    // ];

    public function submitFrom() {
     $category = Category::findOrFail($this->category_id)->update([
         $this->validate([
            'name' => 'required|min:3|max:200|unique:categories,name,' . $this->category_id,
         ]),
         'name' => $this->name,
         'slug' => Str::slug($this->name, '-'),
         'status' => $this->status,
     ]);

        flash()->addSuccess('Category updated successfully');
        return redirect()->route('category.index');
    }
 }