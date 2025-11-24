<?php



$recipient_email = "service@melbourneelectricians.com.au";


$subject_prefix = "Website Quote Request: ";


$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$suburb = filter_var($_POST['suburb'], FILTER_SANITIZE_STRING);
$service = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);


switch ($service) {
    case 'emergency':
        $service_type = "Emergency Repair";
        break;
    case 'installation':
        $service_type = "New Installation";
        break;
    case 'lighting':
        $service_type = "Lighting";
        break;
    case 'switchboard':
        $service_type = "Switchboard Upgrade";
        break;
    case 'safety':
        $service_type = "Safety Inspection";
        break;
    case 'commercial':
        $service_type = "Commercial Work";
        break;
    default:
        $service_type = "General Inquiry";
}


$subject = $subject_prefix . $service_type;


$headers = "From: " . $name . " <" . $email . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$email_message = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: 
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid 
        }
        h1 {
            color: 
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid 
        }
        th {
            background-color: 
            font-weight: bold;
            width: 30%;
        }
        .message-box {
            background-color: 
            padding: 15px;
            border-radius: 5px;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: 
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>New Quote Request: $service_type</h1>
        <p>You have received a new quote request from your website. Details below:</p>
        
        <table>
            <tr>
                <th>Name</th>
                <td>$name</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>$phone</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>$email</td>
            </tr>
            <tr>
                <th>Suburb</th>
                <td>$suburb</td>
            </tr>
            <tr>
                <th>Service</th>
                <td>$service_type</td>
            </tr>
        </table>
        
        <div class='message-box'>
            <h3>Message:</h3>
            <p>" . nl2br($message) . "</p>
        </div>
        
        <div class='footer'>
            <p>This message was sent from the quote form on your website.</p>
            <p>Date/Time: " . date('Y-m-d H:i:s') . "</p>
        </div>
    </div>
</body>
</html>
";


$mail_success = mail($recipient_email, $subject, $email_message, $headers);


header('Content-Type: application/json');

if($mail_success) {
    
    $response = [
        'status' => 'success',
        'message' => 'Thank you! Your quote request has been submitted. We will contact you within 30 minutes during business hours.'
    ];
    echo json_encode($response);
} else {
    
    $response = [
        'status' => 'error',
        'message' => 'Sorry, there was a problem submitting your request. Please try again or call us directly.'
    ];
    echo json_encode($response);
}
?> 