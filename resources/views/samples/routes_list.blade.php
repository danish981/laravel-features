<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
</head>
<body style="width: 80%; margin: 0 auto; padding-top: 5rem">

<table id="example" class="display" width="100%">
    <thead>
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
            <td>{{ $value->uri() }}</td>
            <td>{{ $value->getName() }}</td>
            <td>{{ $value->getActionName()  }}</td>
        </tr>
    @endforeach

    </tbody>

    <tfoot>
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