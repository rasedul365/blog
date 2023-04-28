<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class SubCategoryEdit extends Component
{
    public $sub_category_id;
    public $category_id;
    public $name;
    public $status;

    public function render()
    {
        $categories = Category::all();
        return view('livewire.sub-category-edit',[
            'categories' => $categories
        ]);
    }

    public function mount(){
        $sub_category = SubCategory::with('categories')->findOrFail($this->sub_category_id);
        // dd($sub_category);
        $this->category_id = $sub_category->category_id;
        $this->name = $sub_category->name;
        $this->status = $sub_category->status;
    }

    public function submitFrom()
    {
        SubCategory::findOrFail($this->sub_category_id)->update([
            $this->validate([
                'name' => 'required|min:3|max:200|unique:categories,name,' . $this->sub_category_id,
            ]),
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-'),
            'status' => $this->status,
        ]);

        flash()->addSuccess('Sub-category updated successfully');
        return redirect()->route('sub-category.index');
    }
}