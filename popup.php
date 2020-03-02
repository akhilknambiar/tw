<!-- Request Modal -->
<div aria-hidden="true" class="modal fade" id=request_popup role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered request_popup" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- Contact Details Start -->
                <section class="pos-rel bg-light-gray">
                    <div class="container-fluid p-0">
                        <a aria-label="Close" class="close" data-dismiss="modal" href="#">
                            <i class="icofont-close-line"></i>
                        </a>
                        <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md"
                             style="box-shadow: 0px 18px 76px 0px rgba(0, 0, 0, 0.06);">
                            <div class="col bg-fixed bg-img-7 request_pag_img">
                                &nbsp;
                            </div>


                            <div class="col-md-7 col-12">
                                <div class="px-3 m-5">
                                    <h2 class="h2-xl mb-4 fw-6">Request A Quote</h2>
                                    <form id="success" role="form" method="post" action="" class="wow fadeInUp"
                                          data-wow-delay="400ms" class="rounded-field">

                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <select aria-invalid="false" aria-required="true" class="custom-select"
                                                        name="Freight_Package" required=""
                                                        title="Please choose a package">
                                                    <option value="">Type of freight</option>
                                                    <option value="General Cargo">General Cargo</option>
                                                    <option value="Dangerous Goods">Dangerous Goods</option>
                                                    <option value="Perishable">Perishable</option>
                                                    <option value="Pharmaceutical">Pharmaceutical</option>
                                                    <option value="Vehicle">Vehicle</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <div class="col">
                                                    <input class="form-control" name="departure"
                                                           placeholder="City of departure"
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <input class="form-control" name="pieces"
                                                       placeholder="Number of Pieces"
                                                       type="number">
                                            </div>
                                            <div class="col">
                                                <input class="form-control" name="Delivery" placeholder="Delivery city"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <input class="form-control" name="weight"
                                                       placeholder="Total gross weight (KG)"
                                                       type="text">
                                            </div>
                                            <div class="col">
                                                <input class="form-control" name="Dimension" placeholder="Dimension"
                                                       type="text">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col">
                                                <div class="center-head"><span class="bg-light-gray txt-orange">Your Personal Details</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <input class="form-control mb-3" name="name" placeholder="Your Name"
                                                       type="text">
                                                <input class="form-control mb-3" name="Email" placeholder="Email"
                                                       type="text">
                                                <input class="form-control" name="Phone" placeholder="Phone Number"
                                                       type="text">
                                            </div>
                                            <div class="col">
                                                <textarea class="form-control" name="Message" placeholder="Message"
                                                          rows="7"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col pt-3">
                                                <button class="form-btn btn-theme bg-orange" name="submit"
                                                        type="submit">Send Message
                                                    <i class="icofont-rounded-right"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Contact Details End -->
            </div>
        </div>
    </div>
</div>
<!-- Request Modal -->

<?php


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
require_once 'credentials.php';
if (isset($_POST['submit'])) {


    $Freight_Package = $_POST['Freight_Package'];
    $Incoterms = $_POST['pieces'];
    $departure = $_POST['departure'];
    $Delivery = $_POST['Delivery'];
    $weight = $_POST['weight'];
    $Dimension = $_POST['Dimension'];
    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Message = $_POST['Message'];

    $message = "
	<html>
	<head>
	<title>True Ways Cargo Transports L.L.C - Website Enquiry</title>
	</head>
	<body>
	<p>This email contains True Ways Cargo Transports L.L.C - Website Enquiry!</p>
	<table>
	<tr style='background: #159eda; color:#fff;'>
	<th style='padding: 10px 30px;'>Freight Package</th>
	<th style='padding: 10px 30px;'>Incoterms</th>
	<th style='padding: 10px 30px;'>City of Departure</th>
	<th style='padding: 10px 30px;'>Delivery City</th>
	<th style='padding: 10px 30px;'>Total Gross Weight</th>
	<th style='padding: 10px 30px;'>Dimension</th>
	</tr>
	<tr style='background: #e8e6e6;'>
	<td style='padding: 10px 30px;'>$Freight_Package</td>
	<td style='padding: 10px 30px;'>$Incoterms</td>
	<td style='padding: 10px 30px;'>$departure</td>
	<td style='padding: 10px 30px;'>$Delivery</td>
	<td style='padding: 10px 30px;'>$weight</td>
	<td style='padding: 10px 30px;'>$Dimension</td>
	</tr>
	</table><br>
	<table>
	<tr style='background: #159eda; color:#fff;'>
	<th style='padding: 10px 30px;'>Name</th>
	<th style='padding: 10px 30px;'>Email</th>
	<th style='padding: 10px 30px;'>Phone</th>
	<th style='padding: 10px 30px;'>Message</th>
	</tr>
	<tr style='background: #e8e6e6;'>
	<td style='padding: 10px 30px;'>$name</td>
	<td style='padding: 10px 30px;'>$Email</td>
	<td style='padding: 10px 30px;'>$Phone</td>
	<td style='padding: 10px 30px;'>$Message</td>
	</tr>
	</table>
	</body>
	</html>
	";

    $subject = 'True Ways Cargo Transports L.L.C - Website Enquiry';

    $mail = new PHPMailer(true);

    try {
        // Specify the SMTP settings.
        $mail->isSMTP();
        $mail->setFrom($from, "Trueways");
        $mail->Username = $username;
        $mail->Password = $password;
        $mail->Host = $host;
        $mail->Port = $port;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';

        $mail->addAddress($from);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        if (!$mail->send()) {
            $error = "Mailer Error: " . $mail->ErrorInfo;
            ?>
            <script>alert('<?php echo $error ?>');</script><?php
        } else {
            echo $status_message = "<br><br><p style=\"color:#049810 !important; font-size:16px; text-align: center;\">[ Thank you. Your information has been submitted. ]</p>";
        }

    } catch (phpmailerException $e) {
        echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
    } catch (Exception $e) {
        echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
    }


}

?>		
