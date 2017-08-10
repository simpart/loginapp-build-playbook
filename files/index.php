<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <?php
            try { 
                require_once(__DIR__ . '/src/php/auth/func/check.php');
                if (true === \login\isLoggedIn()) {
                    echo "<script src='./src/js/dist/main.js' defer></script>" . PHP_EOL;
                } else {
                    echo "<script src='./src/js/dist/login.js' defer></script>" . PHP_EOL;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        ?>
    </head>
    <body style='margin:0px;padding:0px;'>
    </body>
</html>
