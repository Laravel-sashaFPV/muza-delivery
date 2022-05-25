<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\News;
use App\Models\Category;

class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $news = News::paginate(6);

        $categories = Category::all();
        return view('livewire.home-component',[
            'news' => $news,
            'categories' => $categories
        ])->layout('layouts.base');
    }
}
