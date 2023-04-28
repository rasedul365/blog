<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SubCategory;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class SubCategoryIndex extends Component
{
    use WithPagination;
    public $active;
    
    public function render()
    {
        $sub_categories = SubCategory::with('categories')->paginate(10);

        // dd($sub_categories);
        return view('livewire.sub-category-index',[
            'sub_categories' => $sub_categories
        ]);
    }

    public function subCategoryDelete($id){
        $category = DB::table('sub_categories')->where('id', $id)->delete();

        flash()->addSuccess('Sub Category deleted successfully');
        return redirect()->route('sub-category.index');
    }
}