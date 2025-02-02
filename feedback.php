<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Molda</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="menu-container">
            <a href="index.html" class="dmolda_button">
                <span class="actual-text">&nbsp;Daniel&nbsp;Molda&nbsp;</span>
            </a>
        </div>
    </nav>
    <div class="main">
        <div class="d3">
            <h2>Give me feedback on my website :)</h2><br>
            <form action="process_message.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required><br>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required><br>
        
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" placeholder="Your Message" rows="4" style="width: 17rem;"></textarea><br><br>
        
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
<footer>
    <p style="text-align: center;">
        Daniel Molda 2024-2025<br>
        email: danielmolda1@gmail.com
    </p>
</footer>
</body>

</html>