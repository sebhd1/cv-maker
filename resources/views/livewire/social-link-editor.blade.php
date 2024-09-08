<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-white px-3 py-3">Social Links</h2>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit.prevent="save">

                        <!-- Label -->
                        <div>
                            <x-input-label for="label" :value="__('Label')" />
                            <x-text-input wire:model="form.label" id="label" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.label')" class="mt-2" />
                        </div>

                        <!-- Link -->
                        <div>
                            <x-input-label for="link" :value="__('Link')" />
                            <x-text-input wire:model="form.link" id="link" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.link')" class="mt-2" />
                        </div>

                        <x-primary-button type="submit">Save</x-primary-button>
                    </form>
                </div>

                <div class="space-y-6 p-6 bg-gray-800 rounded-lg shadow-lg">
                    @forelse($entries as $socialLink)
                        <div x-data="{ open: false }" class="bg-gray-700 p-4 rounded-lg">
                            <div class="col-span-full flex justify-between items-center mb-2">
                                <h3 class="text-lg text-white font-semibold">
                                    {{$socialLink->label}}
                                </h3>
                                <div class="flex space-x-2">
                                    <x-danger-button
                                        wire:click="delete({{ $socialLink->id }})"
                                        wire:confirm="Are you sure you want to delete this social link?"
                                    >🗑️</x-danger-button>
                                    <x-secondary-button
                                        wire:click="set('editingEntryId', {{ $socialLink->id }})"
                                    >✒️</x-secondary-button>
                                    <button @click="open = ! open" class="text-white focus:outline-none">
                                        <span x-show="!open">🔽</span>
                                        <span x-show="open">🔼</span>
                                    </button>
                                </div>
                            </div>

                            <div x-show="open" x-transition class="grid grid-cols-2 gap-6">
                                <!-- Label -->
                                <div>
                                    <p class="text-sm text-gray-400">Label</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$socialLink->label}}
                                    </p>
                                </div>

                                <!-- Link -->
                                <div>
                                    <p class="text-sm text-gray-400">URL</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$socialLink->link}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-lg p-4 text-white">You have no social links to show, please add a new one!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
