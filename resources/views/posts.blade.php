<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h3>Posts:</h3>
    <?php
    foreach($posts as $row){
        echo "$row[title]" . " $row[content]<br>";
    }
    ?>
</body>
</html>