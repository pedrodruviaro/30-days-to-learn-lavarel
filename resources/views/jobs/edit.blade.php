<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">

        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Jobtitle</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md  shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input required type="text" name="title" id="title" autofocus
                                    value="{{ $job->title }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3  text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder="janesmith">
                            </div>

                            @error('title')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md  shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input required type="text" name="salary" id="salary" value="{{ $job->salary }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3  text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                    placeholder="$ 50,000">
                            </div>

                            @error('salary')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>

            <button form="delete-form" type="submit"
                class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
