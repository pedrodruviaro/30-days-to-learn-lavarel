<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">

        @csrf

        <div class="space-y-12">
            <div>
                <div class=" grid grid-cols-1 gap-4">
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" placeholder="johndoe@email.com" name="email" id="email"
                                :value="old('email')" autofocus />
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
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <x-form-button>Login</x-form-button>
        </div>
    </form>

</x-layout>
