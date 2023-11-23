<?php

use App\Models\Sticky;
use Livewire\Attributes\On; 
use Livewire\Volt\Component;
use Illuminate\Database\Eloquent\Collection;

new class extends Component
{
    public Collection $stickies;

    public function mount(): void
    {
        $this->getStickies(); 
    }

    #[On('sticky-created')]
    public function getStickies(): void
    {
        $this->stickies = Sticky::with('user')
            ->latest()
            ->get();
    } 
}; ?>

<div class="mt-6 bg-white shadow-sm rounded-lg divide-y"> 
    @foreach ($stickies as $sticky)
        <div class="p-6 flex space-x-2" wire:key="{{ $sticky->id }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
            <div class="flex-1">
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-gray-800">{{ $sticky->user->name }}</span>
                        <small class="ml-2 text-sm text-gray-600">{{ $sticky->created_at->format('j M Y, g:i a') }}</small>
                    </div>
                </div>
                <p class="mt-4 text-lg text-gray-900">{{ $sticky->message }}</p>
            </div>
        </div>
    @endforeach 
</div>