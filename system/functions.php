<?
/**
 * Display a fancy error page and quit.
 * @param $error_file_name_or_msg string The view file of the specific error (in views/errors folder, without _error_view.php suffix)
 */
function error_out($error_file_name_or_msg)
{
	if (!file_exists("views/errors/{$error_file_name_or_msg}_error_view.php")) {
		$errors[] = $error_file_name_or_msg;
	}
	require('templates/error_template.php');
	exit();
}

function __autoload($className)
{
	@(include 'system/classes/' . $className . '.php') or
	(include 'classes/' . $className . '.php') or
	(error_out("Autoload of class $className failed."));
	debug("Autoloaded " . $className);
}

/**
 * @param $text string Text to translate
 * @return string
 */
function __($text)
{
	//TODO: Write your own translation code here
	echo $text;
}

function debug($msg)
{
	if (!DEBUG) return false;
	echo "<br>\n";
	$file = debug_backtrace()[0]['file'];
	$line = debug_backtrace()[0]['line'];
	echo "[" . $file . ":" . $line . "] <b>" . $msg . "</b>";
}
function getDataURI($image, $mime = 'image/gif') {
    return 'data: '.$mime.';base64,'.base64_encode($image);
}
function send_mail($to_address, $to_name, $reply_address, $reply_name, $subject, $message)
{
    require_once 'lib/phpmailer/PHPMailerAutoload.php';
    $results_messages = array();
    $mail = new PHPMailer(true);
    $mail->CharSet = 'utf-8';
    class phpmailerAppException extends phpmailerException
    {
    }
    try {
        if (!PHPMailer::validateAddress($to_address)) {
            throw new phpmailerAppException("Email address " . $to_address . " is invalid -- aborting!");
        }
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com";
        $mail->Port = EMAIL_PORT;
        $mail->SMTPSecure = EMAIL_SSL ? "ssl" : false;
        $mail->SMTPAuth = EMAIL_AUTH;
        $mail->Username = EMAIL_USERNAME;
        $mail->Password = EMAIL_PASSWORD;
        $mail->addReplyTo($reply_address, $reply_name);
        $mail->From = EMAIL_EMAIL;
        $mail->FromName = EMAIL_EMAIL;
        $mail->addAddress($to_address, $to_name);
        $mail->Subject = $subject;
        $body = $message;
        $mail->WordWrap = 80;
        $mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images
        try {
            $mail->send();
            $results_messages[] = "Message has been sent using SMTP";
        } catch (phpmailerException $e) {
            throw new phpmailerAppException('Unable to send to: ' . $to_address . ': ' . $e->getMessage());
        }
    } catch (phpmailerAppException $e) {
        $results_messages[] = $e->errorMessage();
    }
    if (count($results_messages) > 0) {
        echo "<h2>Meil on saadetud!</h2>\n";
        echo "<ul>\n";
        foreach ($results_messages as $result) {
            echo "<li>$result</li>\n";
        }
        echo "</ul>\n";
    }
}