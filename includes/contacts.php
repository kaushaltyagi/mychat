<?php  
    $mydata=
    '<div style="text-align:center;">
    <div id="contact">
        <img src="ui/images/user1.jpg">
            <br> Username
    </div>
    <div id="contact">
        <img src="ui/images/user2.jpg">
        <br> Username
    </div>
    <div id="contact">
        <img src="ui/images/user3.jpg">
        <br> Username
    </div>

</div>';
    //$result=$result[0];
    $info->message = $mydata;
    $info->data_type = "contacts"; 
    echo json_encode($result);
    die;

    $info->message=" No contacts were found";
    $info->data_type="error";
    echo json_encode($info);
?>
