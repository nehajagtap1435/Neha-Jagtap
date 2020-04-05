<!DOCTYPE html>
<html>
    <head>
        <title>arrayCity</title>
        
    </head>
    <body>
        <?php
            $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos",
            "Buenos Aires", "Cairo", "London");
            foreach ($cities as $c)
            {
                echo "$c, ";
            }
                
                sort($cities);
                echo "<ul>";
            foreach ($cities as $x)
            {
                echo "<li>$x</li>";
            }
                echo "</ul>";
            
                array_push($cities,"Los Angeles","Calcutta","Osaka","Beijing");
                
                sort($cities);
                echo "<ul>";
            foreach ($cities as $u)
            {
                echo "<li>$u</li>";
            }
                echo "</ul>";
        ?>
    </body>
</html>