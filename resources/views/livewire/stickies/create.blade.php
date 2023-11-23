<?php

use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new class extends Component
{
    #[Rule('required|string|max:255')]
    public string $message = '';

    public function store(): void
    {
        $validated = $this->validate();
 
        auth()->user()->stickies()->create($validated);
 
        $this->message = '';
    } 

}; ?>

<div>
    <form wire:submit="store">
        <textarea wire:model="message" placeholder="{{ __('What\'s on your mind?') }}" class="block w-full h-48 border-blue-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>

        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Sticky') }}</x-primary-button>
    </form>
</div>