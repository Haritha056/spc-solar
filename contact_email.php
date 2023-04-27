<?php

    $res = [];

    if(isset($_POST['submit']))
    {
        $to = "vibrotechseo@gmail.com";

        $from = $_POST['email'];
        $name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $headers = "From:" . $from;
        
        $mail_content = 'A new response has been submitted: <br>
                            Name: '.$name.'<br>
                            Mobile Number: '.$phone.'<br>
                            Email: '.$email.'<br>
                            Message: '.$message.'<br>';

        mail($to,'New Enquiry', $mail_content, $headers);
        
        $res['status'] = 'Success';
        $res['remarks'] = "Query Sent. Thank you " . $name . ", we will contact you shortly.";
    }
    else
    {
        $res['status'] = 'Failed' ;
        $res['remarks'] = 'Invalid Access';
    }

    echo json_encode($res);

?>