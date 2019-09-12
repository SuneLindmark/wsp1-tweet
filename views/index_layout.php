<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TwEeT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container px 5">
    <?php foreach ($result as $row): ?>
    <div class="card" style="width: 50rem;">
                <div class="card-body">
                  <h5 class="card-title">
                      <?= $row['name'] ?>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                      <?= $row['created_at'] ?>
                  </h6>
                  <p class="card-text">
                      <?= $row['body'] ?>
                  </p>
                  <a href="#" class="card-link">Show thread</a>
                </div>
                </div>
            <?php endforeach ?>
            </div>               
</body>
</html>