<?php include 'header.php'; ?>

            <div class="formdiv">
        <form action="register.php" method="POST">
            <label for="name">Name</label>
            <input id="name" type="text" name="user_name">

            <label for="email">Email</label>
            <input id="email" type="email" name="user_email">

            <label for="level">Service Level</label>
            <select id="level" name="service_level">
                <option value="Basic">Basic</option>
                <option value="Pro">Pro</option>
                <option value="Enterprise">Enterprise</option>
            </select>

            <button type="submit" name="submit_button">Sign Up</button>
        </form>
            </div>

<?php include 'footer.php'; ?>