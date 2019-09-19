<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TwEeTeR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">TwEeTeR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        <i class="material-icons">
        home
        </i>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Explore</a>
        <i class="material-icons">
        visibility
        </i>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Notifications</a>
        <i class="material-icons">
announcement
</i>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Messages</a>
        <i class="material-icons">
mail_outline
</i>
      </li>
      <li class="nav-item dropdown">
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search something" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<body>
    <div class="container px 5">
    <?php foreach ($result as $row): ?>
    <div class="card" style="width: 50rem;">
                <div class="card-body">
                  <h5 class="card-title">
                  <img class="rounded-circle" 
                    src="img/tweet/1.jpg" 
                    alt="" 
                    style="width:40px; height:40px;">
                      <?= $row['name'] ?>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                      <?= $row['created_at'] ?>
                  </h6>
                  <p class="card-text">
                      <?= $row['body'] ?>
                  </p>
                  <div class="input-group input-group-lg">
                  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button">Add comment</button>
  </div>
  <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
</div>
<i class="material-icons">
favorite_border
</i>
<a href="tweet.php?id=<?= $row['id'] ?>" class="card-link">Show thread</a>
                </div>
                </div>
            <?php endforeach ?>
            </div> 
                          
</body>
</html>