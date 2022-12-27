<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h5 align="center">Data Jenis | SI Laundry</h5>
    <table class="table table-stripped">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Jenis Laundry</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($jenis as $row)
            <tr>
                <th>{{$no++}}</th>
                <td>{{ $row->jenis_laundry }}</td>
                <td>Rp. {{number_format($row['harga'], 2,',','.')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>