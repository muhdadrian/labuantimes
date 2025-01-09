<?php
// Capture the ID from the URL path (without query string)
$path = $_SERVER['REQUEST_URI'];
$segments = explode('/', $path);

// Assuming the ID is always the last segment
$id = end($segments);

// Now use the ID for fetching the blog post details
echo "The blog post ID is: " . $id;
?>

 <!-- <?php
$data["blg"];
    echo "<h1>" . $data["blg"]["title"] . "</h1>";

    echo "<p>" . $data["blg"]["content"] . "</p>";
?>  -->


<?php
// Assuming $data['blg'] contains the blog post information
if (isset($data["blg"])) {
    // Output the blog post details
    echo "<h1>" . htmlspecialchars($data["blg"]["title"]) . "</h1>";  // Sanitize the title
    
    // Display the photo (you might want to wrap it in an <img> tag)


    // echo "<img src='data:image/jpeg;base64," . base64_encode($data["blg"]["photo"]) . "' alt='Blog Photo' />";

    echo "<img class='img-fluid' src='data:image/jpeg;base64," . base64_encode($data["blg"]["photo"]) . "' alt='Blog Photo' />";

    


    
    // Output the content
    echo "<p>" . nl2br(htmlspecialchars($data["blg"]["content"])) . "</p>";  // Sanitize and format content
} else {
    echo "Blog post not found.";
}
?>
