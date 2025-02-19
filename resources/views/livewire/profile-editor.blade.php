<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold text-white px-3 py-3">Personal Details</h2>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Job title -->
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input wire:model.live="form.title" id="title" class="block mt-1 w-full" type="text" name="title" required />
                        <x-input-error :messages="$errors->get('form.title')" class="mt-2" />
                    </div>

                    <!-- First Name -->
                    <div>
                        <x-input-label for="first-name" :value="__('First Name')" />
                        <x-text-input wire:model.live="form.first_name" id="first-name" class="block mt-1 w-full" type="text" name="first-name" required />
                        <x-input-error :messages="$errors->get('form.first_name')" class="mt-2" />
                    </div>

                    <!-- Last Name -->
                    <div>
                        <x-input-label for="last-name" :value="__('Last Name')" />
                        <x-text-input wire:model.live="form.last_name" id="last-name" class="block mt-1 w-full" type="text" name="last-name" required />
                        <x-input-error :messages="$errors->get('form.last_name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model.live="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div>
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input wire:model.live="form.phone" id="phone" class="block mt-1 w-full" type="text" name="phone" required autofocus autocomplete="phone" />
                        <x-input-error :messages="$errors->get('form.phone')" class="mt-2" />
                    </div>

                    <!-- Country -->
                    <div>
                        <x-input-label for="country" :value="__('Country')" />
                        <x-text-input wire:model.live="form.country" id="country" class="block mt-1 w-full" type="text" name="country" required autofocus autocomplete="country" />
                        <x-input-error :messages="$errors->get('form.country')" class="mt-2" />
                    </div>


                    <!-- City -->
                    <div>
                        <x-input-label for="city" :value="__('City')" />
                        <x-text-input wire:model.live="form.city" id="city" class="block mt-1 w-full" type="text" name="city" required autofocus autocomplete="city" />
                        <x-input-error :messages="$errors->get('form.city')" class="mt-2" />
                    </div>

                    <!-- Line1 -->
                    <div>
                        <x-input-label for="line1" :value="__('Line 1')" />
                        <x-text-input wire:model.live="form.line1" id="Line1" class="block mt-1 w-full" type="text" name="line1" required autofocus autocomplete="line1" />
                        <x-input-error :messages="$errors->get('form.Line1')" class="mt-2" />
                    </div>

                    <!-- Line2 -->
                    <div>
                        <x-input-label for="line2" :value="__('Line 2')" />
                        <x-text-input wire:model.live="form.line2" id="line2" class="block mt-1 w-full" type="text" name="line2" required autofocus autocomplete="line2" />
                        <x-input-error :messages="$errors->get('form.line2')" class="mt-2" />
                    </div>

                    <!-- Postal Code -->
                    <div>
                        <x-input-label for="postal-code" :value="__('Postal Code')" />
                        <x-text-input wire:model.live="form.postal_code" id="postal-code" class="block mt-1 w-full" type="text" name="postal-code" required />
                        <x-input-error :messages="$errors->get('form.postal_code')" class="mt-2" />
                    </div>

                    <!-- Driving License -->
                    <div>
                        <x-input-label for="driving-license" :value="__('Driving License')" />
                        <x-text-input wire:model.live="form.driving_license" id="driving-license" class="block mt-1 w-full" type="text" name="driving-license" />
                        <x-input-error :messages="$errors->get('form.driving_license')" class="mt-2" />
                    </div>

                    <!-- Nationality -->
                    <div>
                        <x-input-label for="nationality" :value="__('Nationality')" />
                        <x-text-input wire:model.live="form.nationality" id="nationality" class="block mt-1 w-full" type="text" name="nationality" required />
                        <x-input-error :messages="$errors->get('form.nationality')" class="mt-2" />
                    </div>

                    <!-- Place Of Birth -->
                    <div>
                        <x-input-label for="place-of-birth" :value="__('Place Of Birth')" />
                        <x-text-input wire:model.live="form.place_of_birth" id="postal-code" class="block mt-1 w-full" type="text" name="place-of-birth" required />
                        <x-input-error :messages="$errors->get('form.place_of_birth')" class="mt-2" />
                    </div>

                    <!-- Date Of Birth -->
                    <div>
                        <x-input-label for="date-of-birth" :value="__('Date Of Birth')" />
                        <x-text-input wire:model.live="form.date_of_birth" id="date-of-birth" class="block mt-1 w-full" type="date" name="date-of-birth" required />
                        <x-input-error :messages="$errors->get('form.date_of_birth')" class="mt-2" />
                    </div>

                    <!-- Professional Summary -->
                    <div class="col-span-full">
                        <x-input-label for="bio" :value="__('Professional Summary')" />
                        <x-text-area-input wire:model.live="form.bio" id="bio" class=" mt-1 w-full" type="text" name="professional-summary" required />
                        <x-input-error :messages="$errors->get('form.bio')" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
