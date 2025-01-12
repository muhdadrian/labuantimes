<?php
// $text = $blg["content"];

function limit_words($text, $limit) {
  $words = explode(" ",$text);
  return implode(" ",array_splice($words,0,$limit));
}
?>

<!-- <?php
if (isset($blg) && is_array($blg)) {
    // Access array offsets here safely
    echo $blg['key'];  // Replace 'key' with the actual key you need
} else {
    echo "No blog data available.";
}
?> -->


<!-- <h1>This local page</h1> -->

<?php

// Filter blogs to only show those with the 'local' category
$localBlogs = array_filter($data['blg'], function($blg) {
    // Check if category matches 'local' (case-sensitive)
    return isset($blg['category']) && strtolower($blg['category']) == 'local';  // Use strtolower for case-insensitive comparison
});
?>

<ul class="list-group">
  <?php if (empty($localBlogs)) : ?>
    <p>No local blogs found.</p> <!-- Message when no local blogs are found -->
  <?php else: ?>
    <?php foreach($localBlogs as $blg) : ?>
      <div class="card mb-3 mt-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <?php
            // If photo is stored as BLOB
            $photoData = $blg['photo']; // This is the binary data
            if ($photoData) {
                // Convert the binary data to a base64 string
                $base64Photo = base64_encode($photoData);
                echo '<img src="data:image/jpeg;base64,' . $base64Photo . '" class="img-fluid rounded-start img-height" alt="' . $blg['title'] . '">';
            } else {
                // Fallback image in case there's no image data
                echo '<img src="' . BASEURL . '/img/default.jpg" class="img-fluid rounded-start img-height" alt="' . $blg['title'] . '">';
            }
            ?>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title fourth-title list-title"><?= $blg["title"] ?></h5>
              
 <p class="card-text fourth-text list-content">
  <?= limit_words($blg["content"], 50) . " <a href='" . BASEURL . "/local/detail/" . $blg['id'] . "' style='color: blue;'>..... Read More</a>" ?>
</p>
              <p class="card-text"><small class="text-body-secondary"><?= ucwords($blg["category"]) ?></small></p>  
             
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>


