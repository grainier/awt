<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $message; ?></title>
    </head>
    <body>
        <h1><?php echo $message; ?></h1>
        <table>
            <?php
            foreach ($data as $myData) {
                echo "<tr>";
                echo "<td>" . $myData . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>