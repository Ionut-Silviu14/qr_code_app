
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>Hello</div>

        <div>
            @isset($nume)
            Numele e: {{$nume}}   
            @endisset
        </div>

        <div>
            @isset($data)
            Data e: {{$data}}     
            @endisset
        </div>

    
        <div>
            @isset($locatia)
            Locatia e: {{$locatia}}     
            @endisset
        </div>

        <div>
            @isset($logo)
            Logo-ul e: {{$logo}}     
            @endisset
        </div>

        <div>
            @isset($cover)
            Coverul e: {{$cover}}     
            @endisset
        </div>

        <div>
            @isset($porti_acces)
            Porta e: {{$porti_acces}}     
            @endisset
        </div>

        <div>
            @isset($editie)
            editia e: {{$editie}}     
            @endisset
        </div>

</body>
</html>
