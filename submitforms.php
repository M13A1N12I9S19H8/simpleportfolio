<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $url = 'Yhttps://script.google.com/macros/s/AKfycbxUmmsG2HcO-dUyqywCuN7jozY64hoIsluQ4h39oIi_q1zF_EUal0Z_-FEX_9u54BAc/exec';

    $data = array(
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message
    );

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo "There was an error submitting your form.";
    } else {
        echo "Form submitted successfully!";
    }
} else {
    echo "Invalid request method.";
}
?>
