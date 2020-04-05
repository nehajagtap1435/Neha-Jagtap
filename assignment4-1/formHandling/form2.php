<html>
    <body>
    <?php
             if(isset($_POST['submit'])) 
            {
                $username=$_POST['uname'];
            
                if( !empty($username)  )
                {   
                    if(isset($_POST["myclr"]) && is_array($_POST["myclr"])){
                        echo "Username is ".$username."<br> >";

                        $colors = implode("<br> >", $_POST["myclr"]);
                        echo $colors;
                       
                        
                        
                    }           
                }
            }
        ?>        
    </body>

</html>