<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Bootstrap Bundel --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <style>
        .heading h2 {
            color: wheat;
        }

        .posts {
            border: 2px solid rgb(2, 15, 124);
            margin-bottom: 2px;
        }

        .author {
            float: right;
            /* position: absolute;
                right: 140px; */
        }

        .msg {
            margin-top: 2px;
        }
        .title {
            margin-top: 1rem;
            border: 2px solid red;
            padding: 0.9rem;
            margin-bottom: 1rem;
        }
    </style>

    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="title">
            <h2>You are offline Please Login/Singup to Edit</h2>
            <h2>Miniblog Project RANA AHSAN ANSAR</h2>
        </div>
    </div>

    <div class="container">
        <a class="btn btn-secondary" href="{{route('login')}}">LogIn</a>
        <a class="btn btn-secondary" href="{{route('register')}}">Register</a>
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

                        </div>
                    @endforeach
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>


</body>

<script>
    < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin = "anonymous" >
</script>
</script>

</html>
