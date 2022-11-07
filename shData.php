<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Data</title>
</head>

<body>
  <h3>Selamat Datang Administrator</h3>

  <table border="1" cellpadding="10" cellpadding="0">
    <!-- ROW PERTAMA  -->
    <tr>
      <th>No</th>
      <th>Email</th>
      <th>Nama</th>
      <th>Aksi</th>
      <!-- <th>Email</th> -->
    </tr>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'user');

    $result = mysqli_query($conn, "SELECT id, user_email, user_fullname FROM user_detail");


    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }

    $user_detail = $rows;
    ?>
    <!-- ROW KEDUA -->
    <?php $i = 1;
    foreach ($user_detail as $m) : ?>
    <?php endforeach ?>

    <?php foreach ($user_detail as $m) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><?= $m['user_email']; ?></td>
        <td><?= $m['user_fullname']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>