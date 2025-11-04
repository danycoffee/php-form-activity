<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">

    <title>Sign Up Today!</title>
    <style>
        /* Extremely lean, typeable styles */
        body { font-family: sans-serif; margin: 0; }
        .wrap { max-width: 360px; margin: 2rem auto; padding: 1rem; }
        label { display: block; margin: 0.5rem 0 0.25rem; }
        input, select, button    { width: 90%; padding: 0.5rem; margin: .2rem auto;}
        button { margin-top: 0.75rem; }
        .formdiv {
            border: 2px solid pink;
            border-radius: 2rem;
            padding: 1rem;
            max-width: 500px;
            width: 300px;  
        }
    </style>
</head>

<body>
    <div class="wrap">
        <h2>Join Our Service</h2>
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
    </div>

    <nav style="text-align:center; padding:10px; background:#eee;">
        <a href="index.php">Home (Form)</a> | 
        <a href="#">About</a> | 
        <a href="#">Contact</a>
    </nav>
