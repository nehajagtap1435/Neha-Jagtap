<html>
    <body>
    <?php
             if(isset($_POST['Calculate'])) 
            {
                $firstNo=$_POST['n1'];
                
                $secondNo=$_POST['n2'];
            
                if( !empty($firstNo) && !empty($secondNo)   )
                {
                    $operation=$_POST['oper'];
                   
                    switch($operation)
                    {
                        case "add":$result<div class="$result"></div>= $firstNo+$secondNo;
                                    echo $firstNo ."+".$secondNo."="<div class="$result"></div>;
                                    break;
                        case "subtract":$result<div class="$result"></div>= $firstNo-$secondNo;
                                    echo $firstNo ."-".$secondNo."="<div class="$result"></div>;
                                    break;          
                        case "multiply":$result<div class="$result"></div>= $firstNo*$secondNo;
                                    echo $firstNo ."x".$secondNo."="<div class="$result"></div>;
                                    break;
                        case "divide": $result<div class="$result"></div>=$first1/$second1;
                                    echo $firstNo ."/".$secondNo."="<div class="$result"></div>;
                                    break;
                    }                
                }
            }
        ?>        
    </body>

</html>
