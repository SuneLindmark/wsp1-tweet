<div class="card" style="width: 50rem;">
                <div class="card-body">
                  <h5 class="card-title">
                  <img class="rounded-circle" 
                    src="img/tweet/1.jpg" 
                    alt="" 
                    style="width:40px; height:40px;">
                      <?= $result['name'] ?>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                      <?= $result['created_at'] ?>
                  </h6>
                  <p class="card-text">
                      <?= $result['body'] ?>
                  </p>
                  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button">Add comment</button>
  </div>
  <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
</div>
<i class="material-icons">
favorite_border
</i>
                </div>
                </div>
                