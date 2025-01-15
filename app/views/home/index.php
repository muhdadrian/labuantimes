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
    <?php foreach($data['latest_blogs'] as $index => $blg): ?>
      
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $index ?>" 
              class="<?= $index == 0 ? 'active' : '' ?>" aria-current="<?= $index == 0 ? 'true' : 'false' ?>" 
              aria-label="Slide <?= $index + 1 ?>"></button>
    <?php endforeach; ?>
  </div>
  <div class="carousel-inner">
  <?php foreach($data['latest_blogs'] as $index => $blg): ?>
    <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
      <?php
      // var_dump($data['latest_blogs']);
        // If photo is stored as BLOB, convert to base64 for display
        $photoData = $blg['photo']; // This is the binary data
        if ($photoData) {
            $base64Photo = base64_encode($photoData);
            // echo '<a href="' . BASEURL . '/blog/detail/' . $blog['id'] . '" style="pointer-events: auto;">';
            // echo '<img src="data:image/jpeg;base64,' . $base64Photo . '" class="d-block w-100" alt="' . $blog['title'] . '">';
            // echo '</a>';
            
    // echo '<a href="' . BASEURL . '/blog/detail/' . $blg['id'] . '" style="pointer-events: auto;">';
    //         echo '<img src="data:image/jpeg;base64,' . $base64Photo . '" class="d-block w-100" alt="' . $blg['title'] . '" loading="lazy">';
    //         echo '</a>';
    
echo '<a href="' . BASEURL . '/home/detail/' . $blg['id'] . '" style="pointer-events: auto;">';
echo '<img src="data:image/jpeg;base64,' . $base64Photo . '" class="d-block w-100" alt="' . $blg['title'] . '" loading="lazy">';
echo '</a>';



        } else {
            // Fallback image in case there's no image data
            echo '<a href="' . BASEURL . '/home/detail/' . $blg['id'] . '" style="pointer-events: auto;">';
            echo '<img src="' . BASEURL . '/img/default.jpg" class="d-block w-100" alt="' . $blg['title'] . '" loading="lazy">';
            echo '</a>';
        }
      ?>
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5 class="slider-title"><?= $blg['title'] ?></h5> -->
        <h5 class="slider-title">
  <a href="<?= BASEURL . '/local/detail/' . $blg['id'] ?>" style="color: inherit; text-decoration: none;">
    <?= $blg['title'] ?>
  </a>
</h5>

        <!-- <p class="slider-text"><?= limit_words($blg['content'], 20) ?></p> -->
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

