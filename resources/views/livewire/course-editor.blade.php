<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-white px-3 py-3">Courses History</h2>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit.prevent="save">

                        <!-- Course -->
                        <div>
                            <x-input-label for="course" :value="__('Course')" />
                            <x-text-input wire:model="form.course" id="course" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.course')" class="mt-2" />
                        </div>

                        <!-- Institution -->
                        <div>
                            <x-input-label for="institution" :value="__('Institution')" />
                            <x-text-input wire:model="form.institution" id="institution" class="block mt-1 w-full" type="text" required />
                            <x-input-error :messages="$errors->get('form.institution')" class="mt-2" />
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

                        <!-- Expires at -->
                        <div>
                            <x-input-label for="expires-at" :value="__('Expires at')" />
                            <x-text-input wire:model="form.expires_at" id="expires_at" class="block mt-1 w-full" type="date" />
                            <x-input-error :messages="$errors->get('form.expires_at')" class="mt-2" />
                        </div>

                        <!-- Token -->
                        <div class="col-span-full">
                            <x-input-label for="token" :value="__('Token')" />
                            <x-text-input wire:model="form.token" id="token" class="block mt-1 w-full" type="text" />
                            <x-input-error :messages="$errors->get('form.token')" class="mt-2" />
                        </div>

                        <x-primary-button type="submit">Save</x-primary-button>
                    </form>
                </div>

                <div class="space-y-6 p-6 bg-gray-800 rounded-lg shadow-lg">
                    @foreach($this->courses as $course)
                        <div x-data="{ open: false }" class="bg-gray-700 p-4 rounded-lg">
                            <div class="col-span-full flex justify-between items-center mb-2">
                                <h3 class="text-lg text-white font-semibold">
                                    {{$course->course}} - {{$course->institution}}
                                </h3>
                                <div class="flex space-x-2">
                                    <x-danger-button
                                        wire:click="delete({{ $course->id }})"
                                        wire:confirm="Are you sure you want to delete this course entry?"
                                    >🗑️</x-danger-button>
                                    <x-secondary-button
                                        wire:click="set('editingCourseId', {{ $course->id }})"
                                    >✒️</x-secondary-button>
                                    <button @click="open = ! open" class="text-white focus:outline-none">
                                        <span x-show="!open">🔽</span>
                                        <span x-show="open">🔼</span>
                                    </button>
                                </div>
                            </div>

                            <div x-show="open" x-transition class="grid grid-cols-2 gap-6">
                                <!-- Course -->
                                <div>
                                    <p class="text-sm text-gray-400">Course</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$course->course}}
                                    </p>
                                </div>

                                <!-- Institution -->
                                <div>
                                    <p class="text-sm text-gray-400">Institution</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$course->institution}}
                                    </p>
                                </div>

                                <!-- Start Date -->
                                <div>
                                    <p class="text-sm text-gray-400">Start Date</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$course->start_date->isoFormat('LL')}}
                                    </p>
                                </div>

                                <!-- End Date -->
                                <div>
                                    <p class="text-sm text-gray-400">End Date</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$course->end_date?->isoFormat('LL') ?? __('Ongoing') }}
                                    </p>
                                </div>

                                <!-- Expires at -->
                                <div>
                                    <p class="text-sm text-gray-400">Expires at</p>
                                    <p class="text-lg text-white font-semibold ml-4">
                                        {{$course->expires_at?->isoFormat('LL') ?? __('Not Expired yet') }}
                                    </p>
                                </div>

                                <!-- Token -->
                                <div class="col-span-full">
                                    <p class="text-sm text-gray-400">Token</p>
                                    <p class="text-lg text-white font-normal ml-4">
                                        {{$course->token ?? 'This course does not have a token'}}
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
