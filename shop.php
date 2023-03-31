
<!DOCTYPE html>
<?php include("Header.php"); ?>

<html>
<link rel="stylesheet" href="Style.css">
<title>Idaho River Shorts - Shop</title>
<head>
    <link rel="icon" type="image/x-icon" href="https://cdni.iconscout.com/illustration/premium/thumb/man-surfing-in-sea-6210638-5121889.png">
</head>
<body>
<div id="SexSelect">
    <div id="waves">
        <img src="Images/bye.png", style="float: left", id="invWave">
        <div id="Gender">
            <div onclick="location.href='Men.php';" id="Man"></div>
            <div onclick="location.href='Women.php'" id="Woman"></div>
        </div>
    </div>
</div>
<p style="padding-top: 150px">
    To navigate the shop, the user will be able to click on either the man or woman surfing and
    the page will display either men's or women's shorts. As I wanted to make sure that this website
    was online on Heroku, I didn't get to finish this implementation. As of now, clicking on either
    image just redirects back to the shop page. I'm still deciding if I want to create two seperate pages
    for men's and women's or try to use php to display them on the same page. I think creating two different
    pages will be easier, so that's what I will likely do.
    <br>
    <br>
    Also, I still need to add a shopping cart page and make that system functional.
</p>
</body>
</html>