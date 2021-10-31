<?php

function check_login($conn)
{
    if(isset($_SESSION["stc"]))
    {mysqli_select_db($conn, "josefem");
        $state_code = $_SESSION["stc"];
        $query = "select * from users where statecode = '$state_code' limit 1";

        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
   header("location: login.php");
    die;

}
