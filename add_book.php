<?php
include 'dbconnect.php';

$sql_authors = "SELECT * FROM author";
$result_authors = $conn->query($sql_authors);

$sql_genres = "SELECT * FROM genre";
$result_genres = $conn->query($sql_genres);

$sql_publishers = "SELECT * FROM publisher";
$result_publishers = $conn->query($sql_publishers);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['book_id'];
    $title = $_POST['title'];
    $author = $_POST['author_name'];
    $isbn = $_POST['isbn'];
    $genre = $_POST['genre_name'];
    $publicationYear = $_POST['publication_year'];
    $publisher = $_POST['publisher_name'];
    $edition = $_POST['edition'];
    $language = $_POST['language'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $copiesAvailable = $_POST['copies_available'];
    $totalCopies = $_POST['total_copies'];

    $sql = "INSERT INTO books (book_id, title, author_name, isbn, genre_name, publication_year, publisher_name, edition, language, description, price, copies_available, total_copies) 
            VALUES ('$id', '$title', '$author', '$isbn', '$genre', '$publicationYear', '$publisher', '$edition', '$language', '$description', '$price', '$copiesAvailable', '$totalCopies')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
