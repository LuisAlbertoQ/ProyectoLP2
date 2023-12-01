<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <style>
        .body{
            margin-top:3cm;
            margin-right: 2cm;
            margin-left: 2.5cm;
            margin-bottom: 3cm;
        }
    </style>
    <title>Document</title>
</head>
<body>



    <table class="table table-bordered table-striped">
        <thead>

        </thead>
        <tbody>
            @foreach ($companies as $company)


                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->address}}</td>
                <td>{{$company->ruc}}</td>
                <td>{{$company->rubro}}</td>


            </tr>

            @endforeach
        </tbody>
    </table>


</body>
</html>
