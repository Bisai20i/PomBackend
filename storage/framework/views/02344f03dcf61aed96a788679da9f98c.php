<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation for Buying the Dog</title>
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
        <p>We are thrilled to inform you that your order has been received.</p>
        <p>If you want to cancel the order please inform us via contact or email within 24 hours, Or the order will be automatically confirmed. In case of any confusion please do not hesitate to contact us.</p>
        <strong>Thank you for your understanding.</strong>
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
</html><?php /**PATH C:\xampp\htdocs\laravel\pompalace\resources\views/mail/confirmMail.blade.php ENDPATH**/ ?>