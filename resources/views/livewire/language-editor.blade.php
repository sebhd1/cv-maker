<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-white px-3 py-3">Languages</h2>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit.prevent="save">

                        <!-- Language -->
                        <div>
                            <x-input-label for="language" :value="__('Language')" />
                            <x-text-input wire:model="form.language" id="language" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.language')" class="mt-2" />
                        </div>


                        <!-- Language Level Selection -->
                        <div>
                            <label for="level" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Proficiency Level</label>
                            <select wire:model="form.level" id="level" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm dark:bg-gray-700 dark:text-gray-200" required>
                                <option value="">Select a level</option>
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="B1">B1</option>
                                <option value="B2">B2</option>
                                <option value="C1">C1</option>
                                <option value="C2">C2</option>
                                <option value="Native">Native</option>

                            </select>
                            @error('level') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <x-primary-button type="submit">Save</x-primary-button>
                    </form>
                </div>

                <div class="space-y-6 p-6 bg-gray-800 rounded-lg shadow-lg">
                    @forelse($entries as $language)
                        <div class="bg-gray-700 p-4 rounded-lg" wire:key="{{ $language->id }}">
                            <div class="col-span-full flex justify-between items-center mb-2">
                                <h3 class="text-lg text-white font-semibold">
                                    {{$language->language}} - {{$language->level}}
                                </h3>
                                <div class="flex space-x-2">
                                    <x-danger-button
                                        wire:click="delete({{ $language->id }})"
                                        wire:confirm="Are you sure you want to delete this entry?"
                                    >🗑️</x-danger-button>
                                    <x-secondary-button
                                        wire:click="set('editingEntryId', {{ $language->id }})"
                                    >✒️</x-secondary-button>
                                </div>
                            </div>

                        </div>
                    @empty
                        <p class="text-center text-lg p-4">You have no languages to show, please add a new one!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
