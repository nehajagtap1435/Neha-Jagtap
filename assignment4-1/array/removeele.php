<html>
    <head>
        <title>  Element deletion </title>
    </head>
<body>

    <?php
        $delete_element = 'sep';

        $months = array('jan', 'feb', 'march', 'april', 'may', 'jun', 'july', 'august', 'sep', 'october', 'nov', 'dec');

        var_dump($months);
        echo "<br>";
        echo "Delete element from array<br>";
        if (($key = array_searelement$delete_element, $months)) != false) 
        {
            unset($months[$key]);
        }
        
        // array after deletion
        var_dump($months);
    ?>

</body>
</html>