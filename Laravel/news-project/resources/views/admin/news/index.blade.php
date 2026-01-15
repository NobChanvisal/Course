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
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Author
                                    </th>
                                    
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Status
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
                                @foreach ($news as $item)
                                <tr class="bg-neutral-primary-soft border-b  border-default">
                                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                        {{$item->id}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$item->title}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$item->categories->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$item->authors->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$item->description}}
                                    </td> 
                                    <td class="px-6 py-4">
                                        {{-- {{$item->status}} --}}
                                        <span
                                            class="flex items-center border text-xs font-medium px-1.5 py-0.5 rounded
                                                {{ $item->status === 'public' ? 'bg-green-100 border-green-500 text-green-700' : 'bg-gray-100 border-gray-400 text-gray-700' }}
                                            "
                                        >
                                            <span class="h-1.5 w-1.5  rounded-full me-1 {{ $item->status === 'public' ? 'bg-green-700' : 'bg-gray-700' }}"></span>
                                            {{$item->status}}
                                        </span>

                                        
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$item->updated_at}}
                                    </td>
                                    
                                    <td class="px-6 py-4">
                                        <div class=" flex gap-2">
                                            <a href="{{route('admin.news.edit', $item->id)}}" class="font-medium text-blue-500 hover:underline">Edit</a>
                                            <form action="" method="post">
                                                @csrf
                                                <button type="submit" class=" text-red-600 hover:underline">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>    
                    </div>
                    <div class=" mx-2 my-5">
                        {{$news->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
