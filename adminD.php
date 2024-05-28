<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="adminD.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="adminD.php">Admin Portal</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="adminD.php?page=members" class="sidebar-link">
                        <i class="lni lni-book"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-layers"></i>
                        <span>Menu</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="adminD.php?page=authors" class="sidebar-link">
                                <i class="lni lni-users"></i>
                                <span>Authors</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="adminD.php?page=publishers" class="sidebar-link">
                                <i class="lni lni-notepad"></i>
                                <span>Publishers</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="adminD.php?page=members" class="sidebar-link">
                                <i class="lni lni-database"></i>
                                <span>Members</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="adminD.php?page=borrowings" class="sidebar-link">
                                <i class="lni lni-shopping-basket"></i>
                                <span>Borrowings</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="adminD.php?page=reviews" class="sidebar-link">
                                <i class="lni lni-magnifier"></i>
                                <span>Reviews</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="content">
            <?php include 'header.php'; ?>

            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check visually-hidden" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-custom" for="btnradio1">Students</label>

                <input type="radio" class="btn-check visually-hidden" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-custom" for="btnradio2">Teachers</label>

                <input type="radio" class="btn-check visually-hidden" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-custom" for="btnradio3">Strands</label>
            </div>


            <div class="container">
                <div class="table-container">

                    <table class="table table-striped" id="student-table">
                        <thead>
                            <tr>
                                <th>LRN</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Birthdate</th>
                                <th>Email</th>
                                <th>Grade Level</th>
                                <th>Strand</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                    <table class="table table-striped" id="teacher-table" style="display:none;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Birthdate</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                    <table class="table table-striped" id="strand-table" style="display:none;">
                        <thead>
                            <tr>
                                <th>Strands</th>
                                <th>Grade 11</th>
                                <th>Grade 12</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cookery</td>
                                <td><?php echo rand(80, 100); ?></td>
                                <td><?php echo rand(80, 100); ?></td>
                            </tr>
                            <tr>
                                <td>Bread & Pastry</td>
                                <td><?php echo rand(80, 100); ?></td>
                                <td><?php echo rand(80, 100); ?></td>
                            </tr>
                            <tr>
                                <td>Fish Capture</td>
                                <td><?php echo rand(80, 100); ?></td>
                                <td><?php echo rand(80, 100); ?></td>
                            </tr>
                            <tr>
                                <td>ABM</td>
                                <td><?php echo rand(80, 100); ?></td>
                                <td><?php echo rand(80, 100); ?></td>
                            </tr>
                            <tr>
                                <td>CSS</td>
                                <td><?php echo rand(80, 100); ?></td>
                                <td><?php echo rand(80, 100); ?></td>
                            </tr>
                            <tr>
                                <td>Food Processing</td>
                                <td><?php echo rand(80, 100); ?></td>
                                <td><?php echo rand(80, 100); ?></td>
                            </tr>
                            <tr>
                                <td>HUMMS</td>
                                <td><?php echo rand(80, 100); ?></td>
                                <td><?php echo rand(80, 100); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="notification-panel">
                <h2 class="notification-title">Notifications</h2>
                <div class="notification">
                    <div class="user-info">
                        <span class="user-name">John Doe</span> wants to sign up as a teacher.
                    </div>
                    <div class="action-buttons">
                        <button class="btn btn-accept">Yes</button>
                        <button class="btn btn-decline">No</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];

                    switch ($page) {
                        case 'members':
                            include 'members.php';
                            break;
                        case 'authors':
                            include 'authors.php';
                            break;
                        case 'publishers':
                            include 'publishers.php';
                            break;
                        case 'borrowings':
                            include 'borrowings.php';
                            break;
                        case 'reviews':
                            include 'reviews.php';
                            break;
                        default:
                            echo "<h1>Page not found</h1>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="style.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const studentTable = document.getElementById('student-table');
            const teacherTable = document.getElementById('teacher-table');
            const strandTable = document.getElementById('strand-table');

            const studentRadio = document.getElementById('btnradio1');
            const teacherRadio = document.getElementById('btnradio2');
            const strandRadio = document.getElementById('btnradio3');

            studentRadio.addEventListener('change', function() {
                studentTable.style.display = 'table';
                teacherTable.style.display = 'none';
                strandTable.style.display = 'none';
            });

            teacherRadio.addEventListener('change', function() {
                studentTable.style.display = 'none';
                teacherTable.style.display = 'table';
                strandTable.style.display = 'none';
            });

            strandRadio.addEventListener('change', function() {
                studentTable.style.display = 'none';
                teacherTable.style.display = 'none';
                strandTable.style.display = 'table';
            });
        });
    </script>
</body>

</html>