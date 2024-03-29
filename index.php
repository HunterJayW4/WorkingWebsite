<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include("Header.php"); ?>
<html>
    <title>Idaho River Shorts</title>
    <head>
        <link rel="stylesheet" href="Style.css">
        <link rel="icon" type="image/x-icon" href="https://cdni.iconscout.com/illustration/premium/thumb/man-surfing-in-sea-6210638-5121889.png">
    </head>

    <link rel="icon" type="image/png" href="/Images/shorts.png">
    <body>
    <img src="Images/VerticalRiver.jpg", alt="riverImage", id="homeIMG">
	<p id="HomeP">
                At Idaho River Shorts, we value quality over anything else. We sell only the highest quality fabrics
                and garments. We have a deep rooted passion for all things shorts. It doesn't matter if it's a 10 inch
                inseam, where the shorts are bordering on capris, or a 2 inch inseam that might be showing off a little more
                than they should.<br><br> "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum
                quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
                cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis
                dolor repellendus.<br><br> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus
                asperiores repellat."
            </p>
        </div>
    </body>
    <footer>
        
    </footer>
</html>
