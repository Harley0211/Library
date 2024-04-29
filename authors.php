<?php include 'dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="books.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php include 'main.php'; ?>
    <div class="container-fluid">
        <h2>Author List</h2>
        <div class="table-container">
            <table class="table">
                <thead style="background-color: rgb(0, 109, 211); color: white; text-align: left;">
                    <tr>
                        <th>Author ID</th>
                        <th>Name</th>
                        <th>Biography</th>
                        <th>Nationality</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM author";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["author_id"] . "</td>";
                            echo "<td>" . $row["author_name"] . "</td>";
                            echo "<td>" . $row["biography"] . "</td>";
                            echo "<td>" . $row["nationality"] . "</td>";
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

    </div>

</body>

</html>