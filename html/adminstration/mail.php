<?php
        $name = $_POST['name'];
        $visitor_name = $_POST['email'];
        $message = $_POST['message'];
          $email_form = 'fgaara@live.fr';
          $email_subject = "Message Site CV";
          $email_body = "Sujet: $name.\n".
                          "User Emails: $visitor_name.\n".
                                  "User Message: $message.\n";
          $to = "fgaara@live.fr";
          $headers = "From: $email_form \r\n";
          mail($to, $email_subject, $email_body, $headers);
       header("Location: https://florian.cyber-stuff.net/");
