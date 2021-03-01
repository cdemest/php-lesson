<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
$reg_no = "1234";
?>

    <h1>Test message</h1>

    <p id="message1">This is message 1</p>
    <p id="message2">This is message 2</p>

    <script language="javascript" type="text/javascript">
    message = "Η εγγραφή πραγματοποιήθηκε επιτυχώς! Ο Αριθμός Μητρώου του χρήστη είναι: ";
    document.getElementById("message2").innerHTML = message + "<?php echo $reg_no ?>";
    document.getElementById("message1").innerHTML = "";
    </script>

</body>

</html>