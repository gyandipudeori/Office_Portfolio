<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\Member; 
use Livewire\Component;
use App\Models\Article;

class ShowHome extends Component
{
    public function render()
    {
        $services = Service::orderBy('title', 'ASC')->get();
        $members = Member::orderBy('name', 'ASC')->get(); // Or any order you prefer
         $articles = Article::latest()->take(8)->get();
        return view('livewire.show-home', [
            'services' => $services,
            'members' => $members,
            'articles' => $articles, //  Pass the team members to the view
        ]);
    }
}
