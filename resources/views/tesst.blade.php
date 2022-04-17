<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table>
      <tr>
          <th> Name </th>
          <th> ID </th>
          <th> Price </th>
          <th> Payment </th>
      </tr>
      @foreach ($data as $row)
      <tr>
          <td> {{ $row->product_name}} </td>
          <td> {{ $row->price}}</td> </td>
          <td> {{ $row->quantity}}</td> </td>
          <td> {{ $row->create_at}}</td> </td>
      </tr>
      @endforeach
  </table>
</body>
</html>