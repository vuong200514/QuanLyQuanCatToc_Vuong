<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Menu</title>
</head>
<body>
    <h1>Danh sách Menu</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Menu</th>
                <th>Mô Tả</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->mota }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
