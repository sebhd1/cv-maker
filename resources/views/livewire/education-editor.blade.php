<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-white px-3 py-3">Education History</h2>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit.prevent="save">

                        <!-- School -->
                        <div>
                            <x-input-label for="course" :value="__('School')" />
                            <x-text-input wire:model="form.school" id="school" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.school')" class="mt-2" />
                        </div>

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input wire:model="form.name" id="name" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
                        </div>

                        <!-- Start Date -->
                        <div>
                            <x-input-label for="start-date" :value="__('Start Date')" />
                            <x-text-input wire:model="form.start_date" id="start-date" class="block mt-1 w-full" type="date" required />
                            <x-input-error :messages="$errors->get('form.start_date')" class="mt-2" />
                        </div>

                        <!-- End Date -->
                        <div>
                            <x-input-label for="end-date" :value="__('End Date')" />
                            <x-text-input wire:model="form.end_date" id="end-date" class="block mt-1 w-full" type="date" />
                            <x-input-error :messages="$errors->get('form.end_date')" class="mt-2" />
                        </div>

                        <!-- City -->
                        <div>
                            <x-input-label for="city" :value="__('City')" />
                            <x-text-input wire:model.live="form.city" id="city" class="block mt-1 w-full" type="text" required  />
                            <x-input-error :messages="$errors->get('form.city')" class="mt-2" />
                        </div>

                        <!-- Country -->
                        <div>
                            <x-input-label for="country" :value="__('Country')" />
                            <x-text-input wire:model.live="form.country" id="country" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.country')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="col-span-full">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-area-input wire:model.live="form.description" id="bio" class=" mt-1 w-full" type="text"  />
                            <x-input-error :messages="$errors->get('form.description')" class="mt-2" />
                        </div>

                        <x-primary-button type="submit">Save</x-primary-button>
                    </form>
                </div>

                <div class="space-y-6 p-6 bg-gray-800 rounded-lg shadow-lg">
                    @foreach($this->educations as $education)
                        <div x-data="{ open: false }" class="bg-gray-700 p-4 rounded-lg">
                            <div class="col-span-full flex justify-between items-center mb-2">
                                <h3 class="text-lg text-white font-semibold">
                                    {{$education->school}} - {{$education->name}}
                                </h3>
                                <div class="flex space-x-2">
                                    <x-danger-button
                                        wire:click="delete({{ $education->id }})"
                                        wire:confirm="Are you sure you want to delete this education entry?"
                                    >🗑️</x-danger-button>
                                    <x-secondary-button
                                        wire:click="set('editingEducationId', {{ $education->id }})"
                                    >✒️</x-secondary-button>
                                    <button @click="open = ! open" class="text-white focus:outline-none">
                                        <span x-show="!open">🔽</span>
                                        <span x-show="open">🔼</span>
                                    </button>
                                </div>
                            </div>

                            <div x-show="open" x-transition class="grid grid-cols-2 gap-6">
                                <!-- School -->
                                <div>
                                    <p class="text-sm text-gray-400">School</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$education->school}}
                                    </p>
                                </div>

                                <!-- Degree -->
                                <div>
                                    <p class="text-sm text-gray-400">Degree Name</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$education->name}}
                                    </p>
                                </div>

                                <!-- Start Date -->
                                <div>
                                    <p class="text-sm text-gray-400">Start Date</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$education->start_date->isoFormat('LL')}}
                                    </p>
                                </div>

                                <!-- End Date -->
                                <div>
                                    <p class="text-sm text-gray-400">End Date</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$education->end_date?->isoFormat('LL') ?? __('Ongoing') }}
                                    </p>
                                </div>

                                <!-- City -->
                                <div>
                                    <p class="text-sm text-gray-400">City</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$education->city}}
                                    </p>
                                </div>

                                <!-- Country -->
                                <div>
                                    <p class="text-sm text-gray-400">Country</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$education->country}}
                                    </p>
                                </div>

                                <!-- Description -->
                                <div class="col-span-full">
                                    <p class="text-sm text-gray-400">Description</p>
                                    <p class="text-lg text-white font-normal ml-4">
                                        {{$education->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
