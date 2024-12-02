<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">

        @csrf

        <div class="space-y-12">
            <div>
                <div class=" grid grid-cols-1 gap-4">
                    <x-form-field>
                        <x-form-label for="first_name">Firstname</x-form-label>
                        <div class="mt-2">
                            <x-form-input placeholder="John" name="first_name" id="first_name" autofocus />
                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Lastname</x-form-label>
                        <div class="mt-2">
                            <x-form-input placeholder="Doe" name="last_name" id="last_name" />
                            <x-form-error name="last_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" placeholder="johndoe@email.com" name="email"
                                id="email" />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" placeholder="******" name="password" id="password" />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" placeholder="******" name="password_confirmation"
                                id="password_confirmation" />
                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>
