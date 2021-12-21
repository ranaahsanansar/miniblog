<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                <div class="p-6 bg-white border-b border-gray-200 posts">
                    
                        <div class="heading">
                            <h3>{{$post->title}}</h3>
                            <div class="author">
                            <p>Created By: <strong>{{$post->user->name}}</strong></p>
                            </div>
                        </div>
                        <div class="body">
                            <p>{{$post->body}}</p>
                        </div>
                        <div class="buttons">
                            <button type="button" class="btn btn-secondary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                        

                    
                </div>
                @endforeach
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
