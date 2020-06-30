<div class="chat-popup" id="myForm">
  <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'E:\Xampp\composer\vendor\autoload.php';

    $mail = new PHPMailer;

    if(isset($_POST['submit'])){

        // $mail->SMTPDebug = 4;                               // Enable verbose debug output

          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'sunayana5688@gmail.com';                 // SMTP username
          $mail->Password = 'sUnA98*09';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

          $mail->setFrom('sunayana5688@gmail.com', 'test mail');
          $mail->addAddress('sunayana47@gmail.com');     // Add a recipient

          $mail->addReplyTo('sunayana5688@gmail.com');
          
          $mail->isHTML(true);                                  // Set email format to HTML

          $mail->Subject = 'Respond required';
          $mail->Body    =  $_POST['email']." contacted us. <br> Message: ".$_POST['msg'];

          if(!$mail->send()) {
              echo json_encode( ["status" => 0, "msg" => "Message could not be sent."] );
              echo json_encode( ["status" => 0, "msg" => 'Mailer Error: ' . $mail->ErrorInfo] );
          } 
          else{
            echo "Mesaage sent";
          }

      
      }
?>
  <form action="" method="POST" class="form-container">
    <h3>Send your query</h3>
    <input type="email" name="email" placeholder="Your email address..." required>
    <textarea placeholder="Type your message.." name="msg" required></textarea>
    <input type="submit" name="submit" class="btn" value="Send">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
    <button class="open-button" onclick="openForm()"><svg class="bi bi-question-circle-fill" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
</svg> &nbsp; Send your queries</button>