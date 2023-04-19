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
    <link rel="stylesheet" href="Style.css">
    <head>
        <link rel="icon" type="image/x-icon" href="https://cdni.iconscout.com/illustration/premium/thumb/man-surfing-in-sea-6210638-5121889.png">
    </head>
        <body>
            <p>
                Idaho River Shorts is a company that was born out of a love for the great outdoors and a passion for comfortable, high-quality clothing. The company was founded by a group of friends who were avid hikers, campers, and kayakers. They realized that finding comfortable and durable clothing that could withstand the rigors of outdoor activities was a challenge, especially when it came to shorts.
                <br>
                <br>
                After countless trips to the great outdoors, the founders of Idaho River Shorts decided to take matters into their own hands and create a line of shorts specifically designed for outdoor enthusiasts. They began by researching the best materials and testing different designs, making sure that every aspect of the shorts was optimized for outdoor activities.
                <br>
                <br>
                Once they had perfected their product, the founders of Idaho River Shorts launched their company, starting small and selling their shorts at local outdoor markets and festivals. Word quickly spread about the comfort and durability of their shorts, and the company began to grow.
                <br>
                <br>
                Hunter, Larry, and Mike were the three friends who first came up with the idea for the company. Each of them brought a unique set of skills and experiences to the table.

                Hunter was an expert kayaker and had years of experience navigating some of the most challenging rivers in the country. He knew firsthand the importance of having comfortable and durable shorts that could handle the rigors of the outdoors.

                Larry was a talented artist and designer, with a keen eye for detail. He worked tirelessly to create the perfect design for the shorts, making sure that they were both functional and stylish.

                Mike was the business-minded member of the group, with years of experience running his own successful company. He knew how to navigate the challenges of entrepreneurship and was instrumental in getting the company off the ground.

                Together, the three friends were a perfect team, each bringing their own strengths and expertise to the table. They spent countless hours researching materials, testing different designs, and perfecting every aspect of their product.
                <br>
                <br>
                Today, Idaho River Shorts is a thriving business, known for their comfortable and stylish shorts that are perfect for all kinds of outdoor activities. The company has expanded its product line to include other outdoor clothing items, such as shirts and hats, but their shorts remain the cornerstone of their brand.
                <br>
                <br>
                Despite their success, the founders of Idaho River Shorts remain true to their roots, and the company continues to be run by outdoor enthusiasts who are passionate about providing the best possible clothing for people who love to explore the great outdoors.
            </p>
        </body>
    <title>Idaho River Shorts - Shop</title>
</html>
