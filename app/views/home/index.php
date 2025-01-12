<!-- slider -->

<!-- <?php
// Function to limit the number of words in the content
function limit_words($text, $limit) {
  $words = explode(" ", $text);
  return implode(" ", array_splice($words, 0, $limit));
}
?> -->


<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <?php foreach($data['latest_blogs'] as $index => $blog): ?>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $index ?>" 
              class="<?= $index == 0 ? 'active' : '' ?>" aria-current="<?= $index == 0 ? 'true' : 'false' ?>" 
              aria-label="Slide <?= $index + 1 ?>"></button>
    <?php endforeach; ?>
  </div>
  <div class="carousel-inner">
    <?php foreach($data['latest_blogs'] as $index => $blog): ?>
      <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
        <?php
          // If photo is stored as BLOB, convert to base64 for display
          $photoData = $blog['photo']; // This is the binary data
          if ($photoData) {
              $base64Photo = base64_encode($photoData);
              echo '<img src="data:image/jpeg;base64,' . $base64Photo . '" class="d-block w-100" alt="' . $blog['title'] . '">';

    
          } else {
              // Fallback image in case there's no image data
              echo '<img src="' . BASEURL . '/img/default.jpg" class="d-block w-100" alt="' . $blog['title'] . '" loading="lazy">';
          }
        ?>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="slider-title"><?= $blog['title'] ?></h5>
          <!-- <p class="slider-text"><?= limit_words($blog['content'], 20) ?></p> -->
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- <div id="carouselExampleCaptions" class="carousel slide carousel-fade"  data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= BASEURL ?>/img/forest1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="slider-title"><?= $data["title"] ?>First slide label</h5>
        <p class="slider-text">Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  -->

  


<!-- <div id="carouselExampleCaptions" class="carousel slide carousel-fade"  data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= BASEURL ?>/img/forest1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="slider-title">First slide label</h5>
        <p class="slider-text">Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= BASEURL ?>/img/forest2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= BASEURL ?>/img/forest3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

   -->

<!-- second image -->


<div class="second-image">
<div class="card mb-3 mt-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= BASEURL ?>/img/forest1.jpg" class="img-fluid rounded-start img-height" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title second-title">Card title</h5>
        <p class="card-text second-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
<div class="space"></div>
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= BASEURL ?>/img/forest1.jpg" class="img-fluid rounded-start img-height" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title second-title ">Card title</h5>
        <p class="card-text second-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mt-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= BASEURL ?>/img/forest3.jpg" class="img-fluid rounded-start img-height" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title second-title">Card title</h5>
        <p class="card-text second-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
<div class="space"></div>
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= BASEURL ?>/img/forest1.jpg" class="img-fluid rounded-start img-height" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title second-title">Card title</h5>
        <p class="card-text second-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div> 

<!-- third image -->

<div class="card text-bg-dark">
  <img src="<?= BASEURL ?>/img/forest1.jpg" class="card-img third-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title third-title">Card title</h5>
    <p class="card-text third-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div>
</div>

<!-- fourth image -->

<div class="fourth-image">
  <div class="card mb-3 mt-3" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?= BASEURL ?>/img/forest1.jpg" class="img-fluid rounded-start img-height" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title fourth-title">Card title</h5>
          <p class="card-text fourth-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  <div class="space"></div>
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?= BASEURL ?>/img/forest2.jpg" class="img-fluid rounded-start img-height" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title fourth-title">Card title</h5>
          <p class="card-text fourth-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3 mt-3" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?= BASEURL ?>/img/forest3.jpg" class="img-fluid rounded-start img-height" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title fourth-title">Card title</h5>
          <p class="card-text fourth-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  <div class="space"></div>
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?= BASEURL ?>/img/forest1.jpg" class="img-fluid rounded-start img-height" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title fourth-title">Card title</h5>
          <p class="card-text fourth-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  </div>
