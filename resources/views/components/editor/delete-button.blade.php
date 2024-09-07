@props([
    'id'
])

<x-danger-button {{ $attributes->merge([
    'wire:click' => "delete($id)",
    'wire:confirm' => "Are you sure you want to delete this entry?"
    ]) }}
>{{ $slot ?? '🗑️' }}</x-danger-button>
