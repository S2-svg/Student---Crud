<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('partials.navbar')
    <table class=" table">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $index => $movie)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>{{ $movie->desc }}</td>
                    <td>{{ $movie->created_at }}</td>
                    <td>{{ $movie->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
