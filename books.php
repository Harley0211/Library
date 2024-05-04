<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['book_id'];
    $title = $_POST['bookTitle'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $genre = $_POST['genre'];
    $publicationYear = $_POST['publicationYear'];
    $publisher = $_POST['publisher'];
    $edition = $_POST['edition'];
    $language = $_POST['language'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $copiesAvailable = $_POST['copiesAvailable'];
    $totalCopies = $_POST['totalCopies'];

    $sql = "INSERT INTO books (book_id, title, author_name, isbn, genre_name, publication_year, publisher_name, edition, language, description, price, copies_available, total_copies) 
            VALUES ('$id', '$title', '$author', '$isbn', '$genre', '$publicationYear', '$publisher', '$edition', '$language', '$description', '$price', '$copiesAvailable', '$totalCopies')";

    if ($conn->query($sql) === TRUE) {
        header("Location: books.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="books.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Books</title>
</head>

<body>
    <div class="container-fluid">
        <h2>Book List</h2>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-button"><i class="fas fa-search"></i></button>
        </div>
        <div class="button-container">
            <button id="addButton" onclick="toggleEditForm()">Add</button>
        </div>
        <div class="table-container">
            <table class="table">
                <thead style="background-color: rgb(0, 109, 211); color: white; text-align: left;">
                    <tr>
                        <th>Book ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>ISBN</th>
                        <th>Genre</th>
                        <th>Publication</th>
                        <th>Publisher</th>
                        <th>Edition</th>
                        <th>Language</th>
                        <th>Description</th>
                        <th>Prices</th>
                        <th>Copies Available</th>
                        <th>Total Copies</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <div id="addBookForm" style="display: none;">
            <h3>Add Book</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="id">Book ID</label>
                <input type="text" id="book_id" name="book_id" required><br><br>

                <label for="bookTitle">Title:</label>
                <input type="text" id="bookTitle" name="bookTitle" required><br><br>

                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required><br><br>

                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn" required><br><br>

                <label for="genre">Genre:</label>
                <input type="text" id="genre" name="genre"><br><br>

                <label for="publicationYear">Publication Year:</label>
                <input type="text" id="publicationYear" name="publicationYear"><br><br>

                <label for="publisher">Publisher:</label>
                <input type="text" id="publisher" name="publisher"><br><br>

                <label for="edition">Edition:</label>
                <input type="text" id="edition" name="edition"><br><br>

                <label for="language">Language:</label>
                <input type="text" id="language" name="language"><br><br>

                <label for="description">Description:</label><br>
                <textarea id="description" name="description"></textarea><br><br>

                <label for="price">Price:</label>
                <input type="text" id="price" name="price"><br><br>

                <label for="copiesAvailable">Copies Available:</label>
                <input type="text" id="copiesAvailable" name="copiesAvailable"><br><br>

                <label for="totalCopies">Total Copies:</label>
                <input type="text" id="totalCopies" name="totalCopies"><br><br>

                <input type="submit" value="Add Book">
            </form>
        </div>

    </div>

    <script>
        function toggleEditForm() {
            var editForm = document.getElementById("addBookForm");
            if (editForm.style.display === "none") {
                editForm.style.display = "block";
            } else {
                editForm.style.display = "none";
            }
        }
    </script>
</body>

</html>