<?php
    if(isset($_FILES['picture']))
    {
        $fname = $_FILES['picture']['name'];
        $fsize = $_FILES['picture']['size'];

        if($fname =="")
            {
                echo "Choose a file";
            }
        
        else{
            $last = explode(",", $fname);
            $xtsn = strtolower(end($last));

            if($xtsn != "jpeg" && $xtsn != "jpg" && $xtsn !="png")
                echo "<p style = 'color:red'>Picture format must be jpg, jpeg, png</p>";
            if($fsize > 4 *1024 * 1024){
                echo "File size should not be more than 4 MB";
            }
                
        }
    }
?>