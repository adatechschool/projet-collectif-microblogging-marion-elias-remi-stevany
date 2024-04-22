<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                     <!-- Display Posts -->
                     @if(count($posts) > 0)
                     <div class="mt-4">
                         <h3>Your Posts:</h3>
                         @foreach ($posts as $post)
                             <div class="mt-2">
                                 <h4>{{ $post->title }}</h4>
                                 <p>{{ $post->content }}</p>
                             </div>
                         @endforeach
                     </div>
                 @else
                     <p>No posts found.</p>
                 @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
