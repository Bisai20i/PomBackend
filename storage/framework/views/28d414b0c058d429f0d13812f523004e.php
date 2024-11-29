<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($subject); ?></title>
    <style>
        .mailContainer{
            margin: 1rem;
            padding: 1rem;
            border-radius: 10px;
            background-color:#f9efff; 
            border: 2px solid #3a043b;
            box-shadow: 0px 1px 8px #fd8dff;
        }
        .image{
            text-align: center;
        }
        .image img{
            height: 100px;
            width: auto;
            
        }
        
        .boldhr{
            border: 3px solid #3a043b;
            margin-bottom: 1px;
        }
        strong{
            color: #8d00da;
        }
        .footer {
            text-align:center;
        }
        .footer p{
            margin: 5px 0;
        }
        .footer .footerTitle{
            display: inline-block;
            position: relative;
            margin: 8px 0px;
        }
        .footerTitle::after{
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0px;
            height: 3px;
            border-radius: 10px;
            width: 43%;
            background-color: #3a043b;
        }
        .footerTitle::before{
            content: '';
            position: absolute;
            bottom: -4px;
            left: 45%;
            height: 3px;
            border-radius: 10px;
            width: 20%;
            background-color: #cc00cf;
        }
    </style>
</head>
<body>
    <div class="mailContainer">
        <div class="image">
            <img src="https://bisai20i.github.io/pomPlace/pompalace.png" alt="logo image">
        </div>
        <hr class="boldhr">
        <hr>
        <p>Dear Client, <br>Greetings from PomPalace Nepal,</p>
        <p>We are thrilled to inform you that you have been successfully registered as a Trusted Seller on PomPalace Nepal!</p>
        <p>As a trusted seller, you’ll gain exclusive access to tools and support to grow your business and reach more customers across Nepal.</p>
        <strong>What’s Next?</strong>
        <ul>
            <li>Account Access: Log in to your account to start listing your products and manage your store.</li>
            <li>Seller Dashboard: Access real-time analytics to help optimize your listings and maximize sales.</li>
            <li>Dedicated Support: Our support team is here to assist with any questions or guidance you may need.</li>
        </ul>
        <p>We are excited to have you on board and can’t wait to see your business flourish with us! Should you have any questions, please feel free to reach out at support@pompalacecom.</p>
        <strong>Welcome to PomPalace Family!</strong>
        <hr>
        <div class="footer">
            <div>
                <h2 class="footerTitle">Pom<strong>Palace</strong></h2>
                <p>Contact: +977 9800000000</p>
                <p>Email: poms@pompalace.com</p>
                <p>Address: Awasnagar, Pokhara, 33700, Nepal</p>
            </div>
            
        </div>

    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/welcomemail.blade.php ENDPATH**/ ?>