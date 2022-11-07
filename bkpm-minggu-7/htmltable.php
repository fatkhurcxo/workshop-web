<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>

  <!-- Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="htmltable.css">
</head>

<body>

  <header style="font-family: Unna;" class="container-fluid header">
    <h2 class="p-3 text-center text-white">User Management</h2>
  </header>
  <aside class="container-sm float-start admin-cons rounded-end">
    <div class="admin_nav ps-3 pt-2 pb-2 rounded mt-3">
      <div class="d-flex flex-row">
        <div class="">
          <a href="" class="navbar-brand">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="25" cy="25" r="25" fill="#D6E2E0" />
              <path d="M34.3004 26.2375L34.2879 26.2625C34.3379 25.85 34.3879 25.425 34.3879 25C34.3879 24.575 34.3504 24.175 34.3004 23.7625L34.3129 23.7875L37.3629 21.3875L34.3254 16.1125L30.7379 17.5625L30.7504 17.575C30.1004 17.075 29.3879 16.65 28.6129 16.325H28.6254L28.0504 12.5H21.9629L21.4129 16.3375H21.4254C20.6504 16.6625 19.9379 17.0875 19.2879 17.5875L19.3004 17.575L15.7004 16.1125L12.6504 21.3875L15.7004 23.7875L15.7129 23.7625C15.6629 24.175 15.6254 24.575 15.6254 25C15.6254 25.425 15.6629 25.85 15.7254 26.2625L15.7129 26.2375L13.0879 28.3L12.6754 28.625L15.7129 33.875L19.3129 32.4375L19.2879 32.3875C19.9504 32.9 20.6629 33.325 21.4504 33.65H21.4129L21.9754 37.5H28.0379C28.0379 37.5 28.0754 37.275 28.1129 36.975L28.5879 33.6625H28.5754C29.3504 33.3375 30.0754 32.9125 30.7379 32.4L30.7129 32.45L34.3129 33.8875L37.3504 28.6375C37.3504 28.6375 37.1754 28.4875 36.9379 28.3125L34.3004 26.2375V26.2375ZM25.0004 29.375C22.5879 29.375 20.6254 27.4125 20.6254 25C20.6254 22.5875 22.5879 20.625 25.0004 20.625C27.4129 20.625 29.3754 22.5875 29.3754 25C29.3754 27.4125 27.4129 29.375 25.0004 29.375Z" fill="#508068" />
            </svg>
          </a>
        </div>
        <div><a style="color: white; font-size: 20px;" href="" class="nav-link">Fatkhur Rozak</a></div>
      </div>
    </div>
  </aside>
  <section class="float-start ms-3 rounded p-3">
    <table class="container table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Point of Morality</th>
          <th scope="col">Option</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($konekdb, "SELECT * FROM user_detail");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo $d['user_fullname']; ?></td>
            <td><?php echo $d['user_email']; ?></td>
            <td><?php echo $d['user_password']; ?></td>
            <td><?php echo $d['user_value']; ?></td>
            <th><a href="">Delete</a> | <a href="">Change</a></th>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </section>
</body>

</html>