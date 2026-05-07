<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateArticleForm extends Component
{
    #[Validate('required|min:5')]
    public $title;

    #[Validate('required|min:10')]
    public $description;

    #[Validate('required|numeric')]
    public $price;

    #[Validate('required')]
    public $category;

    public $article;
    public $categories = [];

    public function mount()
    {
        $this->categories = Category::orderBy('name')->get();
    }

    public function save()
    {
        $this->validate();

        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);

        session()->flash('status', 'Articolo creato con successo!');
        
        $this->reset('title', 'description', 'price', 'category');
        
        return $this->redirect(route('articles.my'), navigate: true);
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}