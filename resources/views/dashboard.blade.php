<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }} 
        </h2>

    </x-slot>
    <div class="container">
        <div class="msg" style="margin-top: 1rem">
            @if (session()->has('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <a  href="{{route('post_index')}} " class="btn btn-secondary">Create Post</a>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                    <div class="p-6 bg-white border-b border-gray-200 posts">

                        <div class="heading">
                            <div class="author">
                                <p>Created By: <strong>{{ $post->user->name }}</strong></p>
                            </div>
                            <h3>{{ $post->title }}</h3>

                        </div>
                        <div class="body">
                            <p>{{ $post->body }}</p>
                        </div>
                        <div class="buttons">
                            @if (Auth::user()->name == $post->user->name)
                                <a class="btn btn-secondary" href="{{ url('/edit', $post->id) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ url('/delete', $post->id) }}">Delete</a>
                            
                            @endif
                            
                        </div>

                    </div>
                @endforeach
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
