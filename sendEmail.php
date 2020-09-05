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