<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
     #[Rule(['required', 'string', 'min:3', 'max:255ex'])]
    public string $title = '';

    #[\Livewire\Attributes\Rule(['required'])]
    public string $body = '';

    public function store(): void
    {
        $user = User::find(1); //tofo

        $user->posts()->create(
            $this->validate()
        );


        flash('Post Created Successfully');

        $this->reset();
    }
}
