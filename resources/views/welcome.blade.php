<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ 'user.store' }}" method="POST">
        @csrf
        <label for="name">name</label>
        <input type="text" for="name" id="name" />

        <label for="harga">harga</label>
        <input type="text" for="harga" id="harga" />

        <label for="deskripsi">deskripsi</label>
        <input type="text" for="deskripsi" id="deskripsi" />

        <button type="submit">Submit</button>
    </form>
</body>
</html>
