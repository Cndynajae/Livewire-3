<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use PhpParser\Node\Expr\PostInc;

class Create extends Component
{
    public PostForm $form;

    public function save()
    {
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
