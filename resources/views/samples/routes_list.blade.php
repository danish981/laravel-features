<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #f4f6f4;
            font-family: "JetBrains Mono", sans-serif;
        }

        table {
            border: 1px solid dimgray;
            margin: 5px;
            padding: 5px;
            box-shadow: 0 10px 25px dimgray;
            background-color: #e7eaef;
        }

        .tb-head-footer {
            background-color: #d6ecd0;
            color: #442020;
        }

    </style>
</head>
<body style="width: 90%; margin: 0 auto; padding-top: 5rem">

<table id="example" class="display" width="100%">
    <thead class="tb-head-footer">
    <tr>
        <th>HTTP Method</th>
        <th>Route</th>
        <th>Name</th>
        <th>Corresponding Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($routeCollection as $value)
        <tr>
            <td>{{ $value->methods()[0] }}</td>
            <td><a href="{{ $value->uri() }}" target="_blank">{{ $value->uri() }}</a></td>
            <td>{{ $value->getName() }}</td>
            <td>{{ $value->getActionName()  }}</td>
        </tr>
    @endforeach

    </tbody>

    <tfoot class="tb-head-footer">
    <tr>
        <th>HTTP Method</th>
        <th>Route</th>
        <th>Name</th>
        <th>Corresponding Action</th>
    </tr>
    </tfoot>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable({});
    });
</script>

</body>
</html>
