<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>خرید سکه نیوچت</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #D4D4D4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #00BFFF;
            width: 100%;
            max-width: 330px;
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
            max-width: 750px;
        }

        .important-text {
            background-color: #ffcc00;
            color: red;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            font-size: 20px;
            text-align: center;
            animation: pulse 1s infinite;
            width: 70%;
            max-width: 400px;
            margin: 20px 0;
        }
        .numm {
            display: inline;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        button {
            padding: 10px;
            font-size: 1em;
            width: 100%;
            max-width: 200px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
        #ziad {
            background-color: #00FF00;
        }
        #kam {
            background-color: red;
        }
        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 1, 0.1);
            text-align: center;
            margin-top: 20px;
        }
        .container p {
            font-size: 1.2em;
            color: #FF5733;
        }

        .creator-info {
            width: 90%;
            max-width: 300px;
            background-color: white;
            padding: 5px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #00BFFF;
            color: white;
            width: 100%;
            margin-top: 40px;
        }

        @media (max-width: 600px) {
            header {
                padding: 20px;
            }

            .important-text {
                font-size: 16px;
            }

            button {
                font-size: 1em; 
            }

            .creator-info {
                width: 95%;
            }
        }

        .rotate {
            animation: rotate 0.5s ease-in-out forwards;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
<header>
    <h1>خرید سکه نیوچت (ارزون)</h1>
    <h4>!شما میتوانید حتی با شارژ همراه اول سکه نیوچت بخرید</h4>
</header>

<div class="content">
    <div class="important-text">
        <h6>لطفاً اول روش پرداخت را نگاه کنید(دکمه زیر رو بزنید)</h6>
    </div>

    <button id="paymentButton">روش پرداخت</button>

    <div class="container">
        <p>تعداد</p>
        <h1 id="number">0</h1>
        </br>
        <p>مبلغ</p>
        <h1 id="number2" style="display: inline;">0</h1><span class="numm" style="display: inline;">,000</span>
        </br>
        </br>
        <button id="ziad">افزودن +15</button>
        <button id="kam">کم کردن -15</button>
    </div>

    <div class="creator-info">
        <h2>اطلاعات مسئول سکه</h2>
        <p>ایدی تلگرام: <a href="https://t.me/soheil_ss_soheil" target="_blank">@soheil_ss_soheil</a></p>
        <p>ایدی روبیکا: <a href="https://rubika.ir/soheil_ss_soheil" target="_blank">@soheil_ss_soheil</a></p>
        <p>ایمیل: <a href="mailto:3soheil3.3ss3@gmail.com">3soheil3.3ss3@gmail.com</a></p>
        <h5>برای درخواست سکه ویا پیشنهاد یا انتقاد به ادرس های بالا مراجعه کنید</h5>
    </div>
</div>

<footer>
    <p>تمامی حقوق محفوظ است © 2023</p>
</footer>

<script>
    let n=0
    let currentNumber = 0;
    const numberDisplay = document.getElementById('number');
    const numd = document.getElementById('number2')
    const increaseButton = document.getElementById('ziad');
    const decreaseButton = document.getElementById('kam');
    const paymentButton = document.getElementById('paymentButton');

    increaseButton.addEventListener('click', function() {
        currentNumber+=15;
        n+=3 ;
        numd.textContent = n;
        numberDisplay.textContent = currentNumber;
        this.classList.add('rotate');
        setTimeout(() => this.classList.remove('rotate'), 1000);
    });

    decreaseButton.addEventListener('click', function() {
        if (currentNumber > 0) {
            n-=3;
            currentNumber-=15;
            numd.textContent =n;
            numberDisplay.textContent = currentNumber;
            this.classList.add('rotate');
            setTimeout(() => this.classList.remove('rotate'), 1000);
        }
    });

    paymentButton.addEventListener('click', function() {
        this.classList.add('rotate');
        setTimeout(() => {
            this.classList.remove('rotate');
            window.location.href = 'http://hshshdbdi.iapp.ir/pardakht.php';
        }, 500); // مدت زمان انیمیشن
    });
</script>

</body>
</html>
