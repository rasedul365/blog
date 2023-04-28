<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class TagIndex extends Component
{
    use WithPagination;
    public $active;

    public function render()
    {
        $tags = DB::table('tags')
            ->when($this->active, function ($query) {
                return $query->where('status', 1);
            })->latest()->paginate(10);

        return view('livewire.tag-index', [
            'tags' => $tags
        ]);
    }

    public function tagDelete($id)
    {
        $category = DB::table('tags')->where('id', $id)->delete();

        // $category = Category::findOrFail($id);
        // $category->delete();

        flash()->addSuccess('Category deleted successfully');
    }
}
