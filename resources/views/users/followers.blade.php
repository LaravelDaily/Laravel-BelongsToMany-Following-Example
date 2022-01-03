<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        @if($followers->count() > 0)
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</span>
                                </th>
                                @auth
                                    <th class="px-6 py-3 bg-gray-50"></th>
                                @endauth
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                @foreach($followers as $user)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $user->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $user->email }}
                                        </td>
                                        @auth
                                            <td>
                                                @livewire('user-follow', ['userId' => $user->id])
                                            </td>
                                        @endauth
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-center">You have no followers</p>
                        @endif
                    </div>

                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
