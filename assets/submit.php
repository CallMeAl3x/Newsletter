<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/style.css" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
  
  <title>Frontend Mentor | Newsletter sign-up form with success message</title>

</head>
<body>
    <main>
       <div class="sub_container">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 21 21"><g fill="none"><circle cx="10.5" cy="10.5" r="10.5" fill="#FF6155"/><path stroke="#FFF" stroke-width="2" d="M6 11.381 8.735 14 15 8"/></g></svg>
            <h1>Thanks for subscribing!</h1>
            <p>A confirmation email has been sent to <strong><?php echo $_POST['email']; ?></strong>. 
                Please open it and click the button inside to confirm your subscription.</p>
            <input type="submit" value="Dismiss message">
        </div>
    </main>
</body>
</html>