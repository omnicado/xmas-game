<?php

if (isset($_SERVER['HTTP_X_MAGIC'])) {
    $xMagicHeader = $_SERVER['HTTP_X_MAGIC'];

    // Check if the header value matches 'skibidi'
    if ($xMagicHeader === 'skibidi') {
        echo "You've ventured far, uncovering secrets hidden in code and headers. But not all messages are written in plain sight.\n 
            In the digital realm, domains hold whispers of hidden truths. Some speak in aliases (CNAME), others guide mail (MX). Yet, neither of these will lead you to your goal this time.\n
            Instead, the treasure you seek lies buried deeper—hidden in the realm of TXT records. These whispers hold the key to your journey forward. If you DIG deep enough, you'll uncover the secret left for those who dare to search.\n
            The domain itself is your map. Will you follow it to the treasure?";
    } else {
        http_response_code(400);
        echo "I do not need this kind of magic! I need something much more awkard!";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Round 2!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="m-4 text-center">
    <h1>Help me, I need your magic!</h1>

    <img src="hunka.png" alt="The KING!" class="img-fluid">
</div>

</body>
</html>