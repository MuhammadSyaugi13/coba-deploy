<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar User</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>nama</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($people as $person)
                <tr>
                    <td>{{$person->name}}</td>
                    <td>{{$person->email}}</td>
                </tr>

            @endforeach
        </tbody>
    </table>
    

</body>
</html>