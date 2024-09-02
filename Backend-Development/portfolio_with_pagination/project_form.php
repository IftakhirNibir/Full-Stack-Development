<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center">Upload project here...</h3>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title: </label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Write project title here.." required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Comment: </label>
                        <textarea class="form-control" id="description" name="description" placeholder="Write project description here.." required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image: </label>
                        <input type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png" required>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    if ($image && $image['error'] === 0) { //This checks if an image was uploaded and if there were no errors during the upload process ($image['error'] === 0 means no error).
        
        $extension = pathinfo($image['name'], PATHINFO_EXTENSION); //This gets the file extension (like jpg, jpeg, or png) from the uploaded image's name.

    
        if (in_array($extension, ['jpg', 'jpeg', 'png'])) { //This checks if the image's extension is one of the allowed types (jpg, jpeg, or png). If it is, the code inside this block will run.
            
            $imageName = uniqid('img_', true) . '.' . $extension; //This creates a unique name for the image file to avoid overwriting any existing files in the images folder. uniqid('img_', true) generates a unique ID, and the extension is added to the end.

           
            move_uploaded_file($image['tmp_name'], 'images/' . $imageName); //This moves the uploaded image from its temporary location to the images folder on the server

        
            include 'connection.php';
            $stmt = $pdo->prepare("INSERT INTO projects (title, description, image) VALUES (:title, :description, :image)");
            $stmt->execute([
                ':title' => $title,
                ':description' => $description,
                ':image' => $imageName,
            ]);

            echo "Project saved successfully!";
        } else {
            echo "Only JPG and PNG images are allowed.";
        }
    } else {
        echo "Error uploading the image.";
    }
}
?>


