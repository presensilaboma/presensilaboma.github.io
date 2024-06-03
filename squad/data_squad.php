<?php

require '..\conn_laboma.php'; // Connect to database

// Retrieve squad data
$sql = "SELECT * FROM squad";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Create an array to store squad data
    $squads = [];
    while ($row = $result->fetch_assoc()) {
        $squads[] = $row;
    }
} else {
    echo "No squads found.";
}

// Close database connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squads</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f0f0f0;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Squads</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nomor HP</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($squads as $squad): ?>
                <tr>
                    <td><?php echo $squad['nama']; ?></td>
                    <td><?php echo $squad['nim']; ?></td>
                    <td><?php echo $squad['username']; ?></td>
                    <td><?php echo $squad['password']; ?></td>
                    <td><?php echo $squad['nomor_hp']; ?></td>
                    <td>
                        <button type="button" class="button" onclick="window.location.href='edit_squad.php?id=<?php echo $squad['id_squad']; ?>'">Edit</button>
                        <button type="button" class="button" onclick="window.location.href='delete_squad.php?id=<?php echo $squad['id_squad']; ?>'">Delete</button>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>