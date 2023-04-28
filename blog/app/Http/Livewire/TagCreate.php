<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class TagCreate extends Component
{
    public $name, $status;

    public function render()
    {
        return view('livewire.tag-create');
    }

    protected $rules = [
        'name' => 'required|unique:categories,name',
        'status' => 'required',
    ];

    public function submitFrom()
    {
        $this->validate();
        $categories = Tag::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-'),
            'status' => $this->status,
        ]);

        flash()->addSuccess('Tag created successfully');

        return redirect()->route('tag.index');
    }
}
