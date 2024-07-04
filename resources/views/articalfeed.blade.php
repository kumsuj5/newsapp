<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Website</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
            font-family: 'Arial', sans-serif;
            background-color: #8bdcf0;
        }
        .news-article {
            margin-bottom: 30px;
        }
        .news-article .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }
        .news-article .card:hover {
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
        .news-article img {
            max-width: 100%;
            height: auto;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .news-article .card-body {
            padding: 1.2rem;
        }
        .news-article .card-title {
            font-size: 1.25rem;
            /* font-weight: bold; */
        }
        .news-article .card-text {
            font-size: 1rem;
            line-height: 1;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <h1 class="mb-4">News Articles</h1>
        <a href="/artical" class="btn btn-secondary mt-3 mb-3">Create Articles</a>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 news-article">
                    <a href="{{ url('/artical-show', $article->id) }}">
                        <div class="card">
                            @if ($article->image)
                                <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                            @endif
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">{{ $article->articletype->typeartical ?? 'N/A' }}</small></p>
                                <h6 class="card-title">{{ $article->title }}</h6>
                                {{-- <p class="card-text">{{ $article->content }}</p> --}}
                                <p class="card-text">Contact: {{ $article->contact_name }} - {{ $article->contact_email }}</p>
                           
                                    <form action="{{ url('/articalfeed', ['id' => $article->id]) }}" method="get"
                                        onsubmit="return confirm('Are you sure you want to delete this Artical?');">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                           
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
