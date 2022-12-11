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
                    <th>HONE</th>
                    <th>DONO</th>
                    <th>CIDADE</th>
                    <th>TIPO</th>
                    <th>TIPO</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($carro as $item)
                    <tr>
                        {{-- <td>{{ $item->id }}</td> --}}
                        {{-- <td>{{ $item->dono->nome }}</td> --}}

                    </tr>
                @empty
                    <tr class="text-center">
                        <td class="text-center">Sem Nenhuma infromcacao</td>
                    </tr>
                @endforelse
            </tbody>

        </table>


        <br>
        <div class="row">
            <div class="col-6 col-6-offset">
                {{-- {{ $user->home->nome }} --}}

            </div>
        </div>





    </div>

    <script src="{{ asset('assets/fontawesome/js/all.min.css') }}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.js') }}"></script>
</body>

</html>
