<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Me</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Contact Me!</h1>
        <form action="contactForm.php" method="post" id="contactForm">
            <label for="user-name">Name:</label>
            <input id="user-name"type="text">

            <label for="user-email">Email:</label>
            <input id="user-email" type="mail">

            <label for="user-subject">Subject:</label>
            <input id="user-subject" type="text">

            <label for="contactForm">Comment:</label>
            <textarea name="comment" placeholder="Enter comment..." id="commentArea" cols="50" rows="4" form="contactForm"></textarea>

            <button type="submit" name="submit">SEND</button>
        </form>
    </body>

</html>