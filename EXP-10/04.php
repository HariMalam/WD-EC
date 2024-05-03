<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>User Data</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Password</th>
        <th>Email</th>
    </tr>
    <?php
    $file = fopen("data.txt", "r") or die("Unable to open file!");
    while (!feof($file)) {
        $line = fgets($file);
        if (!empty($line)) {
            $data = explode(":", $line);
            echo "<tr>";
            echo "<td>{$data[0]}</td>";
            echo "<td>{$data[1]}</td>";
            echo "<td>{$data[2]}</td>";
            echo "</tr>";
        }
    }
    fclose($file);
    ?>
</table>

</body>
</html>
