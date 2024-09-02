<?php
   include('connection.php')
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">  
</head>
  <body>
    <div class="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Iftakhir Nibir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about-me-part2">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#skill">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Project">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- About me-->
    <div class="row align-items-center my-3">
        <div class="col-12 col-md-6 text-center">
            <img src="images/programmer.gif" alt="..." class="img-fluid float-animation">
        </div>
        <div class="col-12 col-md-6 mt-3 mt-md-0 text-center typewriter">
            <p>Hello, I'm</p>
            <h1>Iftakhir Nibir</h1>
            <h3>Full Stack Software Developer</h3>
             <div class="mt-3">
        <a href="https://github.com/IftakhirNibir" target="_blank" style="text-decoration: none; color: #333;">
            <i class="fab fa-github fa-2x me-3"></i>
        </a>
        <a href="https://www.linkedin.com/in/iftakhir-mozumder-nibir-b68272283/" target="_blank" style="text-decoration: none;  color: #333;">
            <i class="fab fa-linkedin fa-2x me-3"></i>
        </a>
        <a href="mailto:iftakhirnibir@gmail.com" target="_blank" style="text-decoration: none;  color: #333;">
            <i class="far  fa-envelope fa-2x"></i>
        </a>
    </div>
        </div>
    </div>

   <!-- About me part 2 -->
    <div class="abtme-2 mt-5" id="about-me-part2">
    <div class="text text-center mb-4">
        <p>Get To Know More</p>
        <h3>About Me</h3>
    </div>
    <div class="row align-items-center">
        <div class="col-12 col-md-4 text-center mb-3 mb-md-0">
            <img src="images/programmer.png" alt="" class="img-fluid floating-animation">
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <a href="#" style="text-decoration: none; color: #333;">
                                <i class="fas fa-award fa-2x"></i>
                            </a>
                            <h5 class="card-title">Experience</h5>
                            <p>1+ years</p>
                            <p class="card-text">Full Stack Software Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <a href="#" style="text-decoration: none; color: #333;">
                                <i class="fas fa-building fa-2x"></i>
                            </a>
                            <h5 class="card-title">Education</h5>
                            <p>Graduate</p>
                            <p class="card-text">B.Sc. Bachelor's Degree</p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, iusto voluptate? Eius voluptate non, officiis vero obcaecati totam libero reprehenderit consectetur. Quos quibusdam consectetur minima libero incidunt, architecto officia sed?</p>
        </div>
    </div>
</div>

 <!-- Skill -->
<div id="skill">
    <div class="text text-center mb-4">
        <p>Explore My</p>
        <h3>Skills</h3>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h4 class="card-title text-center">Programming Languages</h4>
                        <ul>
                            <li><i class="fas fa-clipboard-list me-2"></i>HTML5</li>
                            <li><i class="fas fa-clipboard-list me-2"></i>CSS3</li>
                            <li><i class="fas fa-clipboard-list me-2"></i>JavaScript</li>
                            <li><i class="fas fa-clipboard-list me-2"></i>Python</li>
                            <li><i class="fas fa-clipboard-list me-2"></i>PHP</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h4 class="card-title text-center">Frameworks</h4>
                        <ul>
                            <li><i class="fas fa-clipboard-list me-2"></i>Bootstrap</li>
                            <li><i class="fas fa-clipboard-list me-2"></i>Tailwind CSS</li>
                            <li><i class="fas fa-clipboard-list me-2"></i>Vue JS</li>
                            <li><i class="fas fa-clipboard-list me-2"></i>Django</li>
                            <li><i class="fas fa-clipboard-list me-2"></i>Laravel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$projectsPerPage = 3;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; //This line retrieves the current page number from the URL query parameter page. If $_GET['page'] is not set, it defaults to 1, indicating the first page.
$offset = ($page - 1) * $projectsPerPage; //calculates where to start fetching results for the current page.


$totalProjects = $pdo->query("SELECT COUNT(*) FROM projects")->fetchColumn(); //The fetchColumn() method in PDO is used to fetch a single column from the next row of a result set. This is particularly useful when you have a query that returns a single value, such as a count, sum, or any other aggregate function.
$totalPages = ceil($totalProjects / $projectsPerPage);

$page = max(1, min($page, $totalPages)); // This line ensures that the $page variable is always within the valid range of page numbers. If $page is 0 or negative, it will be set to 1. If $page is greater than $totalPages, it will be set to $totalPages.
$offset = ($page - 1) * $projectsPerPage;

try {
    $query = "SELECT * FROM projects LIMIT $projectsPerPage OFFSET $offset";
    $stmt = $pdo->query($query);
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>


<div id="Project">
    <div class="text text-center my-4">
        <p>Browse My Recent</p>
        <h3>Projects</h3>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($projects as $project): ?>
                <div class="col">
                    <div class="card shadow">
                        <img src="images/<?= htmlspecialchars($project['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($project['title']) ?>"> 
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= htmlspecialchars($project['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($project['description']) ?></p>
                            <a href="#" class="btn btn-outline-dark">Github</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        

        <!-- htmlspecialchars() is used to escape special characters to prevent XSS (Cross-Site Scripting) attacks. -->
        <!-- Pagination controls -->
        <nav aria-label="Page navigation" class="my-3">
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>#Project">Previous</a></li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i ?>#Project"><?= $i ?></a></li>
                <?php endfor; ?>
                <?php if ($page < $totalPages): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>#Project">Next</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>




<!-- Contact -->
<div id="contact">
    <div class="text text-center my-4">
        <p>Get in Touch</p>
        <h3>Contact Me</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <form id="contact-form" action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Write your full name here..">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Write your email id here..">
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment: </label>
                        <textarea class="form-control" id="comment" name="comment" placeholder="Write your comment or question here.."></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </form>
                <div id="form-messages" class="mt-3">
                    <?php
                
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                       
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $comment = $_POST['comment'];
                           
                    try {
                        $stmt = $pdo->prepare("INSERT INTO submissions (name, email, comment) VALUES (:name, :email, :comment)");
                        $stmt->execute([
                            ':name' => $name,
                            ':email' => $email,
                            ':comment' => $comment
                        ]);
                        echo '<p class="text-success">Form submitted successfully!</p>';

                    } catch (PDOException $e) {
                        echo '<p class="text-danger">An error occurred. Please try again.</p>';
                    }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--footer-->
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">©IftakhirNibir</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#about-me-part2" class="nav-link px-2 text-body-secondary" style="color: black;">About</a></li>
      <li class="nav-item"><a href="#skill" class="nav-link px-2 text-body-secondary" style="color: black;">Skill</a></li>
      <li class="nav-item"><a href="#Project" class="nav-link px-2 text-body-secondary" style="color: black;">Project</a></li>
      <li class="nav-item"><a href="#contact" class="nav-link px-2 text-body-secondary" style="color: black;">Contact</a></li>
    </ul>
  </footer>
</div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>