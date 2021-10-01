<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/indexo.css">
</head>
<body>
<?php

$data = [
    [
        "id" => 1,
        "name" => "Giorgi",
        "lastname" => "Amashukeli",
        "country"  => "Georgia",
        "skills" => ["html", "css", "js"],
        "available" => true
    ],
    [
        "id" => 2,
        "name" => "Mariam",
        "lastname" => "Abashidze",
        "country"  => "Georgia",
        "skills" => ["html"],
        "available" => true
    ],
    [
        "id" => 3,
        "name" => "Andria",
        "lastname" => "Beridze",
        "country"  => "USA",
        "skills" => [],
        "available" => false
    ],
    [
        "id" => 4,
        "name" => "Nino",
        "lastname" => "Nozadze",
        "country"  => "Germany",
        "skills" => ["Js", "css"],
        "available" => false
    ]
];
?>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Country</th>
            <th>Skills</th>
            <th>available for position</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $value):?>
        <tr>
            <td><?php echo $value["name"]?></td>
            <td><?php echo $value["lastname"]?></td>
            <td><?php echo $value["country"]?></td>
            <td>
                <ul>
                <?php if (count($value["skills"]) == null) {
                        echo "<p class='red'>person has no skills<p>";
                    }
                    for ($i=0; $i < count($value["skills"]); $i++) { 
                echo "<li>",$value["skills"][$i],"</li>";
                }?>
                </ul>
            </td>
            <td><?php if ($value["available"] == true) {
                echo "<p class='blue'>available<p>";
            }else {
                echo "<p class='red'>not available<p>";
            }?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>