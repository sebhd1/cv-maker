<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-white px-3 py-3">Languages</h2>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit.prevent="save">

                        <!-- Skill Name -->
                        <div>
                            <x-input-label for="skill" :value="__('Skill')" />
                            <x-text-input wire:model="form.skill" id="skill" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.skill')" class="mt-2" />
                        </div>


                        <!-- Language Level Selection -->
                        <div>
                            <label for="level" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Skill Level</label>
                            <select wire:model="form.level" id="level" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm dark:bg-gray-700 dark:text-gray-200" required>
                                <option value="">Select a level</option>
                                <option value="novice">Novice</option>
                                <option value="beginner">Beginner</option>
                                <option value="skillful">Skillful</option>
                                <option value="experienced">Experienced</option>
                                <option value="expert">Expert</option>
                            </select>
                            @error('level') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <x-primary-button type="submit">Save</x-primary-button>
                    </form>
                </div>

                <div class="space-y-6 p-6 bg-gray-800 rounded-lg shadow-lg">
                    @forelse($entries as $skill)
                        <div class="bg-gray-700 p-4 rounded-lg">
                            <div class="col-span-full flex justify-between items-center mb-2">
                                <h3 class="text-lg text-white font-semibold">
                                    {{$skill->skill}} - {{$skill->level}}
                                </h3>
                                <div class="flex space-x-2">
                                    <x-danger-button
                                        wire:click="delete({{ $skill->id }})"
                                        wire:confirm="Are you sure you want to delete this social link?"
                                    >🗑️</x-danger-button>
                                    <x-secondary-button
                                        wire:click="set('editingEntryId', {{ $skill->id }})"
                                    >✒️</x-secondary-button>
                                </div>
                            </div>

                        </div>
                    @empty
                        <p class="text-center text-lg p-4">You have no skills to show, please add a new one!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
