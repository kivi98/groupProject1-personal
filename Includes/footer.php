<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <style>
    .footer {
        background-color: #029ee4;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;

    }

    .footerLeft {
        width: 33%;
        display: flex;
        flex-direction: column;
    }

    .footerMiddle {
        width: 33%;
        display: flex;
        flex-direction: column;
    }

    .footerRight {
        width: 33%;
        display: flex;
        flex-direction: column;
    }
    </style>
</head>
<body>
    <div class="footer">
        <div class="footerLeft">
            <h3>Useful Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>
        <div class="footerMiddle">
            <h3>Subscribe</h3>
                <p>Subscribe to our newsletter to get the latest news and updates.</p>
                <form action="">
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    <input type="submit" value="Subscribe">
                </form>
        </div>
        <div class="footerRight">
            <h3>Follow Us</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
        </div>
    </div>
</body>
</html>