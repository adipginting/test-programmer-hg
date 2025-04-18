<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Input data baru karyawan</h1>
  <form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" required>
    </div>
    <div>
      <label for="department">Department:</label>
      <input type="text" id="department" name="department" required>
    </div>
    <button type="submit">Create Employee</button>

</body>

</html>