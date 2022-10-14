<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Author</th>
            <th>Description</th>
            <th>Image</th>
        </tr>

        @foreach ($booksArr as $book)
            <tr>
                <td>{{ $book['id'] }}</td>
                <td>{{ $book['name'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['desc'] }}</td>
                <td><img src="{{ $book['img'] }}" alt=""></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
