<?php
include 'dbconnect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['book_id'];
    $title = $_POST['title'];
    $author = $_POST['author']; // Assuming you have a dropdown or autocomplete for selecting the author
    $isbn = $_POST['isbn'];
    $genre = $_POST['genre']; // Assuming you have a dropdown or autocomplete for selecting the genre
    $publicationYear = $_POST['publication_year'];
    $publisher = $_POST['publisher']; // Assuming you have a dropdown or autocomplete for selecting the publisher
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
}

$conn->close();
