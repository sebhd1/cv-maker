@props([
    'id'
])

<x-secondary-button {{ $attributes->merge([
        'wire:click' => "set('editingEntryId', $id)"
    ]) }}
>{{ $slot ?? '✒️' }}</x-secondary-button>
