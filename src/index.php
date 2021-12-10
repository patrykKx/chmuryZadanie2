<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App</title>
    </head>
    <body>
        <?php
        $connection = new PDO('mysql:host=mysql;dbname=student;charset=utf8', 'root', 'student');
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'student'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p>There are no tables in database.</p>';
        } else {
            echo '<p>Database contains the following tables:</p>';
            echo '<ul>';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
        }
        ?>
    </body>
</html>