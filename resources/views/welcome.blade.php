<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraLoved</title>
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
</head>

<body>

    <div class="container">


        <table class="table table-striped">
            <thead class="thead thead">
                <tr>
                    <th>I#D</th>
                    <th>Home</th>
                    <th>Dono</th>
                    <th>cidade</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($homes as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->dono->nome }}</td>
                        <td>{{ $item->cidade->nome }}</td>
                        <td>{{ $item->tipo->nome }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>Sem Nenhuma infromcacao</td>
                    </tr>
                @endforelse
            </tbody>

        </table>





    </div>

    <script src="{{ asset('assets/fontawesome/js/all.min.css') }}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.js') }}"></script>
</body>

</html>
