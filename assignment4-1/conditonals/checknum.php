<html>
    <body>
    <?php
             if(isset($_POST['check'])) 
            {
                $number1=$_POST['number'];
                
            
                if( !empty($number1) )
                {
                    
                    $number1=$_POST['number'];
                    
                    if($number1 > 0)
                    {
                        echo "Number is positive";
                    }
                    
                    elseif($number1 < 0)
                    {
                        echo "Number is negative";
                    }           
                }
                
                else
                {
                    echo "Its a zero";
                }   
            }
        ?>        
    </body>

</html>