<?php
	//Mail with attachment
if(isset($_POST) && (!empty($_POST))){
    if(!empty($_FILES['attachment']['name'])){
        //Get uploaded file data using $_FILES array 
    $tmp_name    = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server 
    $name        = $_FILES['attachment']['name'];  // get the name of the file 
    $size        = $_FILES['attachment']['size'];  // get size of the file for size validation 
    $type        = $_FILES['attachment']['type'];  // get type of the file 
    $error       = $_FILES['attachment']['error']; // get the error (if any) 

    //Get Extension of the file name
    $base = basename($filename);
    $extension = substr($base, strlen($base)-4,strlen($base));

    //Allow only these file types
    $allowed_extensions  =array(".doc",".pdf","docx");

    if(in_array($extension, $allowed_extensions)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $subject = "Mail from WebForm";
        $message = "Please find the resume attachment below"
        $from_email  = 'sujibalki@gmail.com'; //from mail, sender email addrress 
        $to    = 'sujibalki678@gmail.com'; //recipient email addrress 

        $file = $tmp_name;
        $content = chunk_split(base64_encode(file_get_contents($file)));
        $uid = md5(uniqid(time()));

        //Headers
        $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version 
        $headers .= "From:".$from_email."\r\n"; // Sender Email 
        $headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email addrress to reach back 
        $headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
        $headers .= "This is a multipart message in MIME format.\r\n";

        //Plain Text Part
        $headers .= "--".$uid."\r\n"; 
        $headers .= "Content-Type: text/plain; charset=ISO-8859-1\r\n"; 
        $headers .= "Content-Transfer-Encoding: 7bit\r\n\r\n";

        //File Attachment
        $headers .= "--".$uid."\r\n"; 
        $headers .="Content-Type: $file_type; name=".$file_name."\r\n"; 
        $headers .="Content-Transfer-Encoding: base64\r\n"; 
        $headers .="Content-Disposition: attachment; filename=".$file_name."\r\n"; 
        $headers .= $encoded_content; // Attaching the encoded file with email
        
        //SendMail
        if(mail($to,$subject,$message,$headers)){
            echo "Success";
        }else{
            echo "Failed";
        }
         

    }else{
        echo "File type not allowed";
    }

    }else{
        echo "No file posted";
    }
        }
        

?>