<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class TagEdit extends Component
{
    public $tag_id;
    public $name;
    public $slug;
    public $status;

    public function mount()
    {
        $tag = Tag::findOrFail($this->tag_id);
        $this->tag_id = $tag->id;
        $this->name = $tag->name;
        $this->status = $tag->status;
    }

    public function render()
    {
        $tag = Tag::findOrFail($this->tag_id);

        return view('livewire.tag-edit', [
            'tag' => $tag
        ]);
    }

    // protected $rules = [
    //     'name' => 'required',
    // ];

    public function submitFrom()
    {
        $tag = Tag::findOrFail($this->tag_id)->update([
            $this->validate([
                'name' => 'required|min:3|max:200|unique:categories,name,' . $this->tag_id,
            ]),
            'name' => $this->name,
            'slug' => Str::slug($this->name, '-'),
            'status' => $this->status,
        ]);

        flash()->addSuccess('Tag updated successfully');
        return redirect()->route('tag.index');
    }
}