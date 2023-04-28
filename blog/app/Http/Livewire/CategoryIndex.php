<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class CategoryIndex extends Component
{
    use WithPagination;

    public $active;

    public function render()
    {
        $categories = DB::table('categories')
            ->when($this->active, function ($query) {
                return $query->where('status', 1);
            })
            ->latest()
            ->paginate(10);

        // $categories = Category::when($this->active, function ($query) {
        //     return $query->where('status', 1);
        // })
        // ->latest()
        // ->paginate(10);

        return view('livewire.category-index', [
            'categories' => $categories
        ]);
    }

    public function categoryDelete($id)
    {
        $category = DB::table('categories')->where('id', $id)->delete();

        // $category = Category::findOrFail($id);
        // $category->delete();

        flash()->addSuccess('Category deleted successfully');
    }
}
