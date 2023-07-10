<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Order</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #ffdda3;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			border-radius: 25px;
        }
        h1 {
            color: #555;
            text-align: center;
        }
        .message {
            margin-top: 30px;
            text-align: center;
        }
        .transaction-details {
            margin: 50px;
        }
        .transaction-details table {
            width: 100%;
			margin: auto;
        }
        .transaction-details table th {
            text-align: left;
        }
        .transaction-details table td {
            padding: 5px 10px;
        }
        .logo {
            display: block;
            margin: 0 auto;
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
		<img src="https://drive.google.com/uc?id=1e1mbOUtyfNTmmeb7wuK3fPt7uCEYsygc" alt="Logo" class="logo">
        <h1>Thank You for Your Order, {{$nama}}!</h1>

        <div class="message">
            <p>Your order has been successfully placed with the following details:</p>
        </div>

        <div class="transaction-details">
            <table>
                <tr>
                    <th>Transaction Code</th>
                    <td>: {{$transactionCode}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>: {{ucwords($status)}}</td>
                </tr>
                <tr>
                    <th>Payment Method</th>
                    <td>: {{ucwords(str_replace('_', ' ', $payment))}}</td>
                </tr>
            </table>
        </div>

        <div class="message">
            <p>Thank you for choosing our products.</p>
        </div>
    </div>
</body>
</html>
