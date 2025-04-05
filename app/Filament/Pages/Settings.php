<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    public function mount()
    {
        $this->form->fill([
           'name' => Auth::user()->name ?? '',
        ]);
    }
    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()
        ]);
    }
}
