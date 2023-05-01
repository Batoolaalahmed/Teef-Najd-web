


<?php


if($_POST["message"]) {


mail("batool313@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */

else {            
   /* send the submitted data */
  
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("batool313@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>
      
     
      






         
      

          
             

          

          
        

          

          
        

      
        