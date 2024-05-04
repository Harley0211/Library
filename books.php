<?php
include 'dbconnect.php';
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
        <button id="addButton">Add Book</button>
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
                    <?php
                    // Fetch book data from the database and display it in the table
                    $sql = "SELECT b.*, a.author_name 
                    FROM books b 
                    INNER JOIN author a ON a.author_id = a.author_id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["book_id"] . "</td>";
                            echo "<td>" . $row["title"] . "</td>";
                            echo "<td>" . $row["author_name"] . "</td>";
                            echo "<td>" . $row["isbn"] . "</td>";
                            echo "<td>" . $row["genre_id"] . "</td>";
                            echo "<td>" . $row["publication_year"] . "</td>";
                            echo "<td>" . $row["publisher_id"] . "</td>";
                            echo "<td>" . $row["edition"] . "</td>";
                            echo "<td>" . $row["language"] . "</td>";
                            echo "<td>" . $row["description"] . "</td>";
                            echo "<td>" . $row["price"] . "</td>";
                            echo "<td>" . $row["copies_available"] . "</td>";
                            echo "<td>" . $row["total_copies"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='12'>No data found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

        <div id="addBookForm" style="display: none;">
            <h3>Add Book</h3>
            <form action="add_book.php" method="POST">
                <label for="id">Book ID</label>
                <input type="text" id="bookTitle" name="bookTitle" required><br><br>

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
        document.getElementById("addButton").addEventListener("click", function() {
            document.getElementById("addBookForm").style.display = "block";
        });
    </script>
</body>

</html>