<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;

class PostCreate extends Component
{
    public $title;
    public $status;
    public $description;
    public $category;
    public $sub_category;
    public $sub_categories;


    public function render()
    {
        $categories = Category::where('status', 1)->get();
        return view('livewire.post-create', [
            'categories' => $categories
        ]);
    }

    public function updatedCategory($categoryId){
        $this->sub_categories = SubCategory::where('status', 1)->where('category_id', $categoryId)->get();
    }

}