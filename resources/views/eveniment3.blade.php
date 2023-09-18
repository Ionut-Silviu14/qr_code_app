<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eveniment</title>
</head>
<body>
    <div class="py-12">
        <form action method>
            <div>
                <p>Current User ID: {{$curentUser}}</p>
                
                <table border="1">
                <tr>
                    <td>
                        <td>nume</td>
                        <td>data</td>
                        <td>descriere</td>
                        <td>editie</td>
                    </td>
                </tr>
                @foreach ($evenimente as $eveniment)
                <tr>
                    <td>{{$eveniment->id}}</td>
                    <td>{{$eveniment->nume}}</td>
                    <td>{{$eveniment->data}}</td>
                    <td>{{$eveniment->descriere}}</td>
                    <td>{{$eveniment->editie}}</td>
                </tr>
                @endforeach
                </table>
            </div>
        </form>
    </div>
</body>
</html>