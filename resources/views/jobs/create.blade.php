<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">

        @csrf

        <div class="space-y-12">
            <div>
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="title">Jobtitle</x-form-label>
                        <div class="mt-2">
                            <x-form-input placeholder="janesmith" name="title" id="title" autofocus />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input placeholder="$ 50,000" name="salary" id="salary" />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button>Create!</x-form-button>
        </div>
    </form>

</x-layout>
