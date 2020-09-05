<?php 
    require "vendor/autoload.php";

    class SendEmail{

        public static function SendMail($to, $content){
            $key = "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";

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom($to, "Paki");
            $email->setSubject("You got mail");
            $email->addTo("nasa.nase72@gmail.com");
            //aaa
            $email->addContent("text/plain", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }
            catch (Exception $e){
                echo "Error: ".$e->getMessage();
                return false;
            }
        }
    }
?>