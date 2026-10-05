<?php

// Prevent PHP warnings/errors from being printed into the AJAX JSON response
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

// Load database/config file
require_once __DIR__ . '/../manager/database/db.php';

// Always return JSON
header('Content-Type: application/json; charset=utf-8');

function contactResponse($success, $message)
{
    echo json_encode([
        'success' => $success,
        'message' => $message
    ]);

    exit;
}

// Only allow POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    contactResponse(false, 'Invalid request.');
}

// Get form values
$name       = trim($_POST['name'] ?? '');
$phone      = trim($_POST['phone'] ?? '');
$subject    = trim($_POST['subject'] ?? '');
$email      = trim($_POST['email'] ?? '');
$service    = trim($_POST['service'] ?? '');
$message    = trim($_POST['message'] ?? '');
$formSource = trim($_POST['form_source'] ?? '');

// Home page booking bar sends its number as "mobile"
if ($phone === '') {
    $phone = trim($_POST['mobile'] ?? '');
}

// Home page booking bar fields
$room     = trim($_POST['room'] ?? '');
$checkIn  = trim($_POST['check_in'] ?? '');
$checkOut = trim($_POST['check_out'] ?? '');

// Build the message for a booking enquiry (that form has no message box)
if ($formSource === 'booking' && $message === '') {
    $message = 'Room: '        . ($room     !== '' ? $room     : 'Not selected')
             . "\nCheck In: "  . ($checkIn  !== '' ? $checkIn  : 'Not selected')
             . "\nCheck Out: " . ($checkOut !== '' ? $checkOut : 'Not selected');
}

// Validation
if ($name === '') {
    contactResponse(false, 'Please enter your name.');
}

if ($phone === '') {
    contactResponse(false, 'Please enter your phone number.');
}

if ($message === '') {
    contactResponse(false, 'Please enter your message.');
}

// Validate phone
$phoneDigits = preg_replace('/[^0-9]/', '', $phone);

if (strlen($phoneDigits) < 10) {
    contactResponse(false, 'Please enter a valid phone number.');
}

// Validate email
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    contactResponse(false, 'Please enter a valid email address.');
}

// Contact form subjects
$subjects = [
    'booking'   => 'Room Booking',
    'wedding'   => 'Wedding Enquiry',
    'event'     => 'Event Enquiry',
    'corporate' => 'Corporate Booking',
    'other'     => 'Other'
];

// Quick enquiry services
$services = [
    'rooms'     => 'Rooms & Suites Booking',
    'weddings'  => 'Weddings & Celebrations',
    'banquet'   => 'Banquet Halls & Party Lawns',
    'dining'    => 'Dine & Wine Reservation',
    'corporate' => 'Corporate Event / Conference'
];

if ($formSource === 'booking') {
    $subjectName = 'Room Booking';
} elseif (isset($subjects[$subject])) {
    $subjectName = $subjects[$subject];
} elseif (isset($services[$service])) {
    $subjectName = $services[$service];
} else {
    $subjectName = 'General Enquiry';
}

// Secure HTML values
$nameHtml = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$phoneHtml = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$emailHtml = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$subjectHtml = htmlspecialchars($subjectName, ENT_QUOTES, 'UTF-8');
$messageHtml = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));
$siteNameHtml = htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8');

// Email subject
if ($formSource === 'booking') {
    $emailSubject = 'New Room Booking Enquiry';
} elseif ($formSource === 'quick_enquiry') {
    $emailSubject = 'New Quick Enquiry';
} else {
    $emailSubject = 'New Enquiry From Contact Us';
}

// -------------------------------------------------------------
// Save the enquiry -> shows up on manager/contact.php
// -------------------------------------------------------------
$sourceLabel = 'General Enquiry';

if ($formSource === 'contact_us') {
    $sourceLabel = 'Contact Us';
} elseif ($formSource === 'quick_enquiry') {
    $sourceLabel = 'Quick Enquiry';
} elseif ($formSource === 'booking') {
    $sourceLabel = 'Room Booking';
}

$enquiryType = ($subjectName !== '' && $subjectName !== $sourceLabel)
    ? $sourceLabel . ' - ' . $subjectName
    : $sourceLabel;

$esc = function ($value) use ($con) {
    return mysqli_real_escape_string($con, (string)$value);
};

$sqlSaveEnquiry = "INSERT INTO `contact`
    (`enquiry_type`, `name`, `email`, `state`, `phone`, `message`, `status`)
    VALUES (
        '" . $esc($enquiryType) . "',
        '" . $esc($name) . "',
        '" . $esc($email) . "',
        '',
        '" . $esc($phone) . "',
        '" . $esc($message) . "',
        0
    )";

if (!@mysqli_query($con, $sqlSaveEnquiry)) {
    error_log('Enquiry could not be saved to `contact`: ' . mysqli_error($con));
}
// -------------------------------------------------------------

// Email body
$emailBody = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>' . htmlspecialchars($emailSubject, ENT_QUOTES, 'UTF-8') . '</title>
</head>

<body style="
    margin:0;
    padding:20px;
    background:#f5f5f5;
    font-family:Arial,Helvetica,sans-serif;
    color:#333333;
">

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="max-width:650px;margin:0 auto;background:#ffffff;border:1px solid #dddddd;"
>
    <tr>
        <td style="
            background:#222222;
            padding:22px 25px;
            text-align:center;
        ">
            <h2 style="
                color:#ffffff;
                margin:0;
                font-size:22px;
                font-weight:600;
            ">
                ' . htmlspecialchars($emailSubject, ENT_QUOTES, 'UTF-8') . '
            </h2>

            <p style="
                color:#dddddd;
                margin:6px 0 0;
                font-size:14px;
            ">
                ' . $siteNameHtml . '
            </p>
        </td>
    </tr>

    <tr>
        <td style="padding:22px 25px;">

            <p style="
                margin:0 0 18px;
                font-size:14px;
                color:#555555;
            ">
                You have received a new enquiry from your website.
            </p>

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                border="0"
                style="border-collapse:collapse;font-size:14px;"
            >

                <tr>
                    <td style="
                        width:130px;
                        padding:10px 8px;
                        border-bottom:1px solid #eeeeee;
                        color:#666666;
                        vertical-align:top;
                    ">
                        <strong>Name</strong>
                    </td>

                    <td style="
                        padding:10px 8px;
                        border-bottom:1px solid #eeeeee;
                        color:#222222;
                    ">
                        ' . $nameHtml . '
                    </td>
                </tr>

                <tr>
                    <td style="
                        padding:10px 8px;
                        border-bottom:1px solid #eeeeee;
                        color:#666666;
                        vertical-align:top;
                    ">
                        <strong>Phone</strong>
                    </td>

                    <td style="
                        padding:10px 8px;
                        border-bottom:1px solid #eeeeee;
                        color:#222222;
                    ">
                        ' . $phoneHtml . '
                    </td>
                </tr>

                ' . ($email !== '' ? '
                <tr>
                    <td style="
                        padding:10px 8px;
                        border-bottom:1px solid #eeeeee;
                        color:#666666;
                        vertical-align:top;
                    ">
                        <strong>Email</strong>
                    </td>

                    <td style="
                        padding:10px 8px;
                        border-bottom:1px solid #eeeeee;
                    ">
                        <a
                            href="mailto:' . $emailHtml . '"
                            style="color:#9a7a20;text-decoration:none;"
                        >
                            ' . $emailHtml . '
                        </a>
                    </td>
                </tr>
                ' : '') . '

                <tr>
                    <td style="
                        padding:10px 8px;
                        border-bottom:1px solid #eeeeee;
                        color:#666666;
                        vertical-align:top;
                    ">
                        <strong>Subject</strong>
                    </td>

                    <td style="
                        padding:10px 8px;
                        border-bottom:1px solid #eeeeee;
                        color:#222222;
                    ">
                        ' . $subjectHtml . '
                    </td>
                </tr>

                <tr>
                    <td style="
                        padding:10px 8px;
                        color:#666666;
                        vertical-align:top;
                    ">
                        <strong>Message</strong>
                    </td>

                    <td style="
                        padding:10px 8px;
                        color:#222222;
                        line-height:1.6;
                    ">
                        ' . $messageHtml . '
                    </td>
                </tr>

            </table>

        </td>
    </tr>

    <tr>
        <td style="
            padding:14px 25px;
            background:#f8f8f8;
            border-top:1px solid #eeeeee;
            text-align:center;
        ">
            <p style="
                margin:0;
                color:#888888;
                font-size:12px;
            ">
                This enquiry was submitted through the ' . $siteNameHtml . ' website.
            </p>
        </td>
    </tr>

</table>

</body>
</html>
';

// Send Email
try {

    $mailSent = SendEmailer(
        'tusharsharma6868@gmail.com',
        $emailSubject,
        $emailBody
    );

} catch (Throwable $e) {

    error_log(
        'Contact form mail error: ' . $e->getMessage()
    );

    $mailSent = false;
}

// Response
if ($mailSent === true) {

    contactResponse(
        true,
        'Thank you! Your message has been sent successfully.'
    );

} else {

    contactResponse(
        false,
        'Unable to send your message. Please try again later.'
    );
}
