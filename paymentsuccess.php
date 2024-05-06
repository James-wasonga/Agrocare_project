<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .message-card {
            text-align: center;
        }
        .paysuccess {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .ok-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .ok-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="message-card">
    <p class="paysuccess"> Your Payment Is being Processed, Thank You <?php echo $_SESSION['uname'] ?>.</p>
    <button class="ok-button" onclick="goBack()">OK</button>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>
