<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register and login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="css/style_housing.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="wrapper">
        <div class="profile_wrapper">
            <div class="profile_info">
                <div class="profile_picture">
                    <img src="" alt="">
                </div>
                <div class="profile">
                    <p class="profile_name"><?php echo $_COOKIE['user'] ?></p>
                    <p class="profile_description">What will you do today?</p>
                </div>
            </div>
            <div class="action_icons">
                <div class="messages_icon icon">
                    <a href="#"><img src="img/fluent_chat-24-regular.svg" alt=""></a>
                </div>
                <div class="notifications_icon icon">
                    <a href="#"><img src="img/notifications.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="wrapper">
        <div class="house_block">
            <div class="house_picture">
                <img src="img/house.jpg" alt="">
            </div>
            <div class="house_info">
                <div class="house_description">
                    <div class="house_name">Studio apartment</div>
                    <div class="publication_date">Kostanay - 7 October 2024</div>
                </div>
                <div class="house_description">
                    <div class="favorite_icon">
                        <img src="img/favorite.svg" alt="">
                    </div>
                    <div class="house_price">$200/month</div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/script.js"></script>
</body>
</html>