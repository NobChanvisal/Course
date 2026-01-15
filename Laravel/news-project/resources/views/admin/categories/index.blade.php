<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{--  --}}

                    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                        <table class="w-full text-sm text-left rtl:text-right text-body">
                            <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Create date
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                <tr class="bg-neutral-primary-soft border-b  border-default">
                                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                        {{$item->id}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$item->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$item->updated_at}}
                                    </td>
                                    
                                    <td class="px-6 py-4">
                                        <div class=" flex gap-2">
                                            <a href="{{route('admin.categories.edit', $item->id)}}" class="font-medium text-blue-500 hover:underline">Edit</a>
                                            <form action="" method="post">
                                                @csrf
                                                <button type="submit" class=" text-red-500">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
