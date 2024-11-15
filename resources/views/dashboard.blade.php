<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded p-4">
                <h2 class="font-extrabold text-teal-400 hover:text-teal-600">My Skills</h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Skill</th>
                                <th>Skill Scaled</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
