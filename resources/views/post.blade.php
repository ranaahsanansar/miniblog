<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Create a  new Post') }}
        </h2>


    </x-slot>

    <div class="container">

        <div class="forms" style="margin-top: 20px">
            <form method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea name="body" class="form-control" id="body" name="body" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Post</button>
            </form>
            <div class="msg">
                @if (session()->has('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @else
                    <p><strong>Ahsan</strong> Laravel Project MiniBlog</p>
                @endif
            </div>

        </div>
    </div>

</x-app-layout>
