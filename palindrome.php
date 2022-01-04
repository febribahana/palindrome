<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Febri</title>
</head>
<body>
    <form method="post">
        Masukan Kata
        <input type="text" name="val" />
        <input type="submit"/>
    </form>

    <?php
    if( $_POST)
    {
        $value = $_POST['val'];

        $reverse = strrev($value);

        if( $reverse == $value)
        {
            echo "$value  adalah kata Palindrome: $value = $reverse";
        }
        else
        {
            echo "$value  bukan kata Palindrome: $value != $reverse";
        }
    }
    ?>
</body>
</html>