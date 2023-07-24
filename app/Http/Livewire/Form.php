<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Support\Actions\Concerns\CanSubmitForm;
use Livewire\Component;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

class Form extends Component implements HasForms
{
    use InteractsWithForms;

    public $fullname;
    public $mobile;
    public $email;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('fullname')->string()->minLength(7)->required(),
            TextInput::make('mobile')->integer()->minLength(7),
            TextInput::make('email')->email()->required(),
        ];
    }

    public function render()
    {
        return view('livewire.form');
    }
}
