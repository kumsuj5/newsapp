<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>News</title>
    <style>
        body {
            padding-top: 50px;
        }
        .news-article {
            margin-bottom: 30px;
        }
        .news-article img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <h1>Create Article</h1>
        <a href="/articalfeed" class="btn btn-secondary mt-3 mb-3">View Articles</a>
        <form action="/artical" act method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="contact_name">Contact Name</label>
                <input type="text" class="form-control" id="contact_name" name="contact_name">
            </div>
            <div class="form-group">
                <label for="contact_email">Contact Email</label>
                <input type="email" class="form-control" id="contact_email" name="contact_email">
            </div>
            <div class="form-group">
                <label class="form-label">Article Type</label>
                <select class="form-select" aria-label="Default select example" name="artical_id">
                    <option selected disabled>Open this select menu</option>
                    @foreach ($articaltype as $item)
                            <option value="{{ $item->id }}">{{ $item->typeartical }}</option>
                        @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>