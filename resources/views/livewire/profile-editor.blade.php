<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit.prevent="save" class="grid grid-cols-2 gap-6">

                        <!-- Job title -->
                        <div>
                            <x-input-label for="job-title" :value="__('Job Title')" />
                            <x-text-input wire:model.debounce="profileEditorForm.jobTitle" id="job-title" class="block mt-1 w-full" type="email" name="job-title" required autofocus autocomplete="job-title" />
                            <x-input-error :messages="$errors->get('form.job-title')" class="mt-2" />
                        </div>

                        <!-- First Name -->
                        <div>
                            <x-input-label for="first-name" :value="__('First Name')" />
                            <x-text-input wire:model.debounce="profileEditorForm.firstName" id="first-name" class="block mt-1 w-full" type="text" name="first-name" required autofocus autocomplete="first-name" />
                            <x-input-error :messages="$errors->get('form.first-name')" class="mt-2" />
                        </div>

                        <!-- Last Name -->
                        <div>
                            <x-input-label for="last-name" :value="__('Last Name')" />
                            <x-text-input wire:model.debounce="profileEditorForm.lastName" id="last-name" class="block mt-1 w-full" type="text" name="last-name" required autofocus autocomplete="last-name" />
                            <x-input-error :messages="$errors->get('form.last-name')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input wire:model.debounce="profileEditorForm.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="email" />
                            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                        </div>

                        <!-- Phone -->
                        <div>
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input wire:model.debounce="profileEditorForm.phone" id="phone" class="block mt-1 w-full" type="text" name="phone" required autofocus autocomplete="phone" />
                            <x-input-error :messages="$errors->get('form.phone')" class="mt-2" />
                        </div>

                        <!-- Country -->
                        <div>
                            <x-input-label for="country" :value="__('Country')" />
                            <x-text-input wire:model.debounce="profileEditorForm.country" id="country" class="block mt-1 w-full" type="text" name="country" required autofocus autocomplete="country" />
                            <x-input-error :messages="$errors->get('form.country')" class="mt-2" />
                        </div>


                        <!-- City -->
                        <div>
                            <x-input-label for="city" :value="__('City')" />
                            <x-text-input wire:model.debounce="profileEditorForm.city" id="city" class="block mt-1 w-full" type="text" name="city" required autofocus autocomplete="city" />
                            <x-input-error :messages="$errors->get('form.city')" class="mt-2" />
                        </div>

                        <!-- Line1 -->
                        <div>
                            <x-input-label for="line1" :value="__('Line 1')" />
                            <x-text-input wire:model.debounce="profileEditorForm.line1" id="Line1" class="block mt-1 w-full" type="text" name="line1" required autofocus autocomplete="line1" />
                            <x-input-error :messages="$errors->get('form.Line1')" class="mt-2" />
                        </div>

                        <!-- Line2 -->
                        <div>
                            <x-input-label for="line2" :value="__('Line 2')" />
                            <x-text-input wire:model.debounce="profileEditorForm.line2" id="line2" class="block mt-1 w-full" type="text" name="line2" required autofocus autocomplete="line2" />
                            <x-input-error :messages="$errors->get('form.line2')" class="mt-2" />
                        </div>

                        <!-- Postal Code -->
                        <div>
                            <x-input-label for="postal-code" :value="__('Postal Code')" />
                            <x-text-input wire:model.debounce="profileEditorForm.postalCode" id="postal-code" class="block mt-1 w-full" type="text" name="postal-code" required autofocus autocomplete="postal-code" />
                            <x-input-error :messages="$errors->get('form.postal-code')" class="mt-2" />
                        </div>

                        <!-- Driving License -->
                        <div>
                            <x-input-label for="driving-license" :value="__('Driving License')" />
                            <x-text-input wire:model.debounce="profileEditorForm.drivingLicense" id="driving-license" class="block mt-1 w-full" type="text" name="driving-license" required autofocus autocomplete="driving-license" />
                            <x-input-error :messages="$errors->get('form.driving-license')" class="mt-2" />
                        </div>

                        <!-- Nationality -->
                        <div>
                            <x-input-label for="nationality" :value="__('Nationality')" />
                            <x-text-input wire:model.debounce="profileEditorForm.nationality" id="nationality" class="block mt-1 w-full" type="text" name="nationality" required autofocus autocomplete="nationality" />
                            <x-input-error :messages="$errors->get('form.nationality')" class="mt-2" />
                        </div>

                        <!-- Place Of Birth -->
                        <div>
                            <x-input-label for="place-of-birth" :value="__('Place Of Birth')" />
                            <x-text-input wire:model.debounce="profileEditorForm.placeOfBirth" id="postal-code" class="block mt-1 w-full" type="text" name="place-of-birth" required autofocus autocomplete="place-of-birth" />
                            <x-input-error :messages="$errors->get('form.place-of-birth')" class="mt-2" />
                        </div>

                        <!-- Date Of Birth -->
                        <div>
                            <x-input-label for="date-of-birth" :value="__('Date Of Birth')" />
                            <x-text-input wire:model.debounce="profileEditorForm.dateOfBirth" id="date-of-birth" class="block mt-1 w-full" type="text" name="date-of-birth" required autofocus autocomplete="date-of-birth" />
                            <x-input-error :messages="$errors->get('form.date-of-birth')" class="mt-2" />
                        </div>

                        <!-- Professional Summary -->
                        <div>
                            <x-input-label for="professional-summary" :value="__('Professional Summary')" />
                            <x-text-area-input wire:model.debounce="profileEditorForm.bio" id="professional-summary" class=" mt-1 w-full" type="text" name="professional-summary" required autofocus autocomplete="professional-summary" />
                            <x-input-error :messages="$errors->get('form.professional-summary')" class="mt-2" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
