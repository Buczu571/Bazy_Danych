<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test bazy danych</title>
</head>
<body>
    <div>
        <?php
        
        if(DB::connection()->getPdo()) {
            echo "Polaczono z baza danych: " . DB::connection()->getDatabaseName();
        } else {
            echo "Nie polaczono z bazz danych.";
        } 
        ?>
</body>
</html>