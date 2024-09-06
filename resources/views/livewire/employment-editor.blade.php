<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-white px-3 py-3">Employment History</h2>
                <div class="p-6 text-gray-900 dark:text-gray-100 grid grid-cols-2 gap-4">
                    <form wire:submit.prevent="save">

                        <!-- Job Title -->
                        <div>
                            <x-input-label for="job-title" :value="__('Job Title')" />
                            <x-text-input wire:model="form.job_title" id="job-title" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.job_title')" class="mt-2" />
                        </div>

                        <!-- Employer -->
                        <div>
                            <x-input-label for="employer" :value="__('Employer')" />
                            <x-text-input wire:model="form.employer" id="employer" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.employer')" class="mt-2" />
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
                            <x-text-input wire:model="form.city" id="city" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.city')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="col-span-full">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-area-input wire:model="form.description" id="description" class="block mt-1 w-full" type="text" />
                            <x-input-error :messages="$errors->get('form.description')" class="mt-2" />
                        </div>

                        <x-primary-button type="submit">Save</x-primary-button>
                    </form>
                </div>

                <!-- TODO Show the list of the employments -->
                <div class="space-y-6 p-6 bg-gray-800 rounded-lg shadow-lg">
                    @foreach($this->employments as $employment)
                        <div class="grid grid-cols-2 gap-6 bg-gray-700 p-4 rounded-lg" wire:key="{{ $employment->id }}">
                            <div class="col-span-full flex justify-end space-x-2 mb-2">
                                <x-danger-button
                                    wire:click="delete({{ $employment->id }})"
                                    wire:confirm="Are you sure you want to delete this employment entry?"
                                >🗑️</x-danger-button>
                                <x-secondary-button
                                    wire:click="set('editingEmploymentId', {{ $employment->id }})"
                                >✒️</x-secondary-button>
                            </div>

                            <!-- Job Title -->
                            <div>
                                <p class="text-sm text-gray-400">Job title</p>
                                <p class="text-lg text-white font-semibold ml-4">
                                    {{$employment->job_title}}
                                </p>
                            </div>

                            <!-- Employer -->
                            <div>
                                <p class="text-sm text-gray-400">Employer</p>
                                <p class="text-lg text-white font-semibold ml-4">
                                    {{$employment->employer}}
                                </p>
                            </div>

                            <!-- Start Date -->
                            <div>
                                <p class="text-sm text-gray-400">Start Date</p>
                                <p class="text-lg text-white font-semibold ml-4">
                                    {{$employment->start_date->isoFormat('LL')}}
                                </p>
                            </div>

                            <!-- End Date -->
                            <div>
                                <p class="text-sm text-gray-400">End Date</p>
                                <p class="text-lg text-white font-semibold ml-4">
                                    {{$employment->end_date?->isoFormat('LL') ?? __('Ongoing') }}
                                </p>
                            </div>

                            <!-- City -->
                            <div>
                                <p class="text-sm text-gray-400">City</p>
                                <p class="text-lg text-white font-semibold ml-4">
                                    {{$employment->city}}
                                </p>
                            </div>

                            <!-- Description -->
                            <div class="col-span-full">
                                <p class="text-sm text-gray-400">Description</p>
                                <p class="text-lg text-white font-normal ml-4">
                                    {{$employment->description}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

</div>
