<?php include 'header.php'; ?>

<?php
    // --- PART 1: PROCESS THE DATA ---
    $message = "";

    if (isset($_POST['submit_button'])) {
        // get submitted values
        $name = $_POST['user_name'] ?? "";
        $email = $_POST['user_email'] ?? "";
        $level = $_POST['service_level'] ?? "";
        
        // --- PART 2: BUILD THE RESPONSE ---
        $message = "<h1>Thank You, $name!</h1>".
                    "<p>Your registration for the <b>$level</b> plan is complete.</p>" .
                    "<p>We will email: $email</p>" .
                    "<hr>".
                    "<a href='index.html'>Back to homepage</a>";
    } else {
        $message = "<h1>Error</h1>" .
            "<p>You must fill out the form to register.</p>" .
            "<a href='index.html'>Back to homepage</a>";
    }
?>

    <div class="box">
        <?php echo $message; ?>
    </div>

<?php include 'footer.php'; ?>