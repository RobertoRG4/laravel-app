<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Test</title>
</head>
<body>
    <h1> Universe</h1>
        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
            </thead>
            <tbody> 
               @foreach($universes as $item)
                <tr>
                    <td>{{$item -> id}}</td>
                    <td>{{$item -> name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>