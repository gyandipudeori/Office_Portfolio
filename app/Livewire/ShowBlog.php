<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Url;

class ShowBlog extends Component
{
    #[Url]
    public  $categorySlug = null;
    

   public function render()
{
    $categories = Category::all();
    $paginate = 10;

    if (!empty($this->categorySlug)) {
        $category = Category::where('slug', $this->categorySlug)->first();

        if (empty($category)) {
            abort(404);
        }

        $articles = Article::orderBy('created_at', 'DESC')
            ->where('category_id', $category->id)
            ->where('status', 1)
            ->paginate($paginate);

    } else {
        $articles = Article::orderBy('created_at', 'DESC')
            ->where('status', 1) // ✅ This was missing
            ->paginate($paginate);
    }

    return view('livewire.show-blog', [
        'articles' => $articles,
        'categories' => $categories,
    ]);
}

}
