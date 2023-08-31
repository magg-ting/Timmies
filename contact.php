<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tim Hortons">
    <meta name="description" content="Home of Canada's favourite coffee. Find the Tim Hortons closest to you and start your Tims journey.">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="script/script.js" defer></script>
    <title>Contact | Tim Hortons</title>
</head>
<body>
    <header>
        <?php include("includes/navbar.php"); ?>
    </header>
    <main class="contact-page form-container">
        <h1>Your opinion matters!</h1>
            <form id="contact-form" action="https://formspree.io/f/mbjvlvvr" method="post">
                <div class="input-container">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Your name">
                </div>
                <div class="input-container">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="example@mail.com">
                </div>
                <div class="input-container">
                    <label for="dropdown">Product:</label>
                    <select id="dropdown" name="dropdown">
                        <option selected disabled>-- Select a product --</option>
                        <option value="americano">Americano Coffee</option>
                        <option value="latte">Latte Vanilla</option>
                        <option value="quenchers">Quenchers</option>
                        <option value="donuts">Donuts</option>
                        <option value="cookies">Cookies</option>
                        <option value="timbits">Timbits</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required placeholder="Subject">
                </div>
                <div class="input-container">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" cols="50" required>Your message goes here.</textarea>
                </div>
                <div class="input-container">
                    <input type="submit" value="Submit">
                </div>
            </form>
    </main>
    <footer>
        <?php include("includes/footer.php"); ?>
    </footer>

    <script>
        //Obtain the information from the form id
        const $form = document.querySelector('#contact-form');

        $form.addEventListener('submit',handleSubmit);
        //asyncrhronous function declaration to handle the submit.
        async function handleSubmit (event){
            event.preventDefault();
            //get the data from the fields
            const form = new FormData(this);
            const response = await fetch(this.action, {
                method: this.method,
                body: form,
                headers: {
                    'Accept': 'application/json'
                }
            });
            //if the response from the server is equal to 200 or true, then will send the response as an alert.
            if(response.ok) {
                this.reset();
                alert('Thank you for providing your feedback.');
            }
        }
    </script>
    
</body>
</html>