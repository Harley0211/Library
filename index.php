<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Library</title>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Library</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="index.php?page=books" class="sidebar-link">
                        <i class="lni lni-book"></i>
                        <span>Books</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-layers"></i>
                        <span>Menu</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="index.php?page=authors" class="sidebar-link">
                                <i class="lni lni-users"></i>
                                <span>Authors</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index.php?page=publishers" class="sidebar-link">
                                <i class="lni lni-notepad"></i>
                                <span>Publishers</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index.php?page=members" class="sidebar-link">
                                <i class="lni lni-database"></i>
                                <span>Members</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index.php?page=borrowings" class="sidebar-link">
                                <i class="lni lni-shopping-basket"></i>
                                <span>Borrowings</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index.php?page=reviews" class="sidebar-link">
                                <i class="lni lni-magnifier"></i>
                                <span>Reviews</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'books':
                        include 'books.php';
                        break;
                    case 'authors':
                        include 'authors.php';
                        break;
                    case 'publishers':
                        include 'publishers.php';
                        break;
                    case 'members':
                        include 'members.php';
                        break;
                    case 'borrowings':
                        include 'borrowings.php';
                        break;
                    case 'reviews':
                        include 'reviews.php';
                        break;
                    default:
                        echo "Page not found";
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="style.js"></script>
</body>


</html>