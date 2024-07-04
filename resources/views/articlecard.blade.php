<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #555;
            font-size: 24px;
            margin-bottom: 10px;
        }
        img {
            max-width: 70%;
            height: 50%;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .article-meta {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }
        .contact-info {
            margin-top: 20px;
        }
        .contact-info h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{$articles->title}}</h1>
        <div class="article-meta">
            <h2>Article Type: {{$articles->articletype->typeartical}}</h2>
        </div>
        @if ($articles->image)
            <img src="{{ asset('storage/' . $articles->image) }}" class="card-img-top" alt="{{ $articles->title }}">
        @endif
        <p>{{$articles->content}}</p>
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Name: {{$articles->contact_name}}</p>
            <p>Email: {{$articles->contact_email}}</p>
        </div>
    </div>
</body>
</html>
