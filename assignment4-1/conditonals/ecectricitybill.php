<?php
                $unit=$_POST['units'];
                    if($unit <= 50)
                    {
                        $calculate_bill = $unit*3.50;
                    }
                    elseif($unit > 50 && $unit <= 150)
                    {
                        $temp = 50*3.50;
                        $remained_units = $unit - 50;
                        $calculate_bill = $temp + ($remained_units * 4.00);
                    }
                    elseif($unit > 150 && $unit <=250)
                    {
                        $temp = (50*3.50)+ (100*4.00);
                        $remained_units = $unit - 150;
                        $calculate_bill = $temp + ($remained_units *5.20);
                    }   
                    else
                    {
                        $temp = (50*3.50)+ (100*4.00)+ (100*5.20);
                        $remaining_units = $unit - 250;
                        $calculate_bill = $temp + ($remained_units *6.50);
                    }
                     echo "<br>","Electricity bill for ",$unit," units is ",$calculate_bill; 
?>