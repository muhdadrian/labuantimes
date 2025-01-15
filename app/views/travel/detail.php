<?php



// Capture the ID from the URL path (without query string)
// $path = $_SERVER['REQUEST_URI'];
// $segments = explode('/', $path);

// Assuming the ID is always the last segment
// $id = end($segments);

// Now use the ID for fetching the blog post details
// echo "The blog post ID is: " . $id;

// Assuming $data['blg'] contains the blog post information
if (isset($data["blg"])) {
    // Output the blog post details
    echo "<h1 class='my-2 detail-title'>" . htmlspecialchars($data["blg"]["title"]) . "</h1>"; 
     // Sanitize the title
    
    // Display the photo (you might want to wrap it in an <img> tag)


    // echo "<img src='data:image/jpeg;base64," . base64_encode($data["blg"]["photo"]) . "' alt='Blog Photo' />";

    echo "<img class='img-fluid rounded mx-auto d-block' src='data:image/jpeg;base64," . base64_encode($data["blg"]["photo"]) . "' alt='Blog Photo' />";

    


    
    // Output the content
    echo "<p class='detail-content mt-4'>" . nl2br(htmlspecialchars($data["blg"]["content"])) . "</p>";  // Sanitize and format content
} else {
    echo "Blog post not found.";
}
?>
