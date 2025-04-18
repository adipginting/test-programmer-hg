<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Karyawan</title>
</head>

<body>
  <div class="container">
    <h1>Data Karyawan</h1>
    <div class="content">
      <table>
        <thead>
          <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telpon</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $employee)
          <tr>
            <td>{{ $employee->kdkary }}</td>
            <td>{{ $employee->nama }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone }}</td>
            <td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>