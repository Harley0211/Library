<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Library Management</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

</head>

<body>
    <div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column">
            <a class="navbar-brand mb-3" href="#">Library System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="books.php">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="authors.php">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publishers.php">Publishers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="members.php">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="borrowings.php">Borrowings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservations.php">Reservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reviews.php">Reviews</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="content">
        <button type="button" id="collapse" class="btn btn-dark">
            <i class="b bi-list"></i>
        </button>
        <div class="container-fluid">
            <h2>Main Content</h2>
            <p>This is paragraph</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-gvSwf+H9up+PxK8iZQfz2k6AnqRO0mYiUtwPIgVf3gFySBJI2AXHwLAnfYpZXay0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-i/pKEDK9GtZp8jvocX4b8zE+qrZy4WFGlvR5Rv6x5GljBQA1Wbvxks4/qofeOJG8" crossorigin="anonymous"></script>
    <script>
        document.getElementById('collapse').addEventListener("click", function() {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>