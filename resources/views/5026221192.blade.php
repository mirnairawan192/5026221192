<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ced3ec;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        p {
            color: #080202;
            margin-bottom: 40px;
        }

        .pricing-tables {
            display: flex;
            justify-content: space-between;
            gap: 20px; /* Adds gap between boxes */
        }

        .pricing-table {
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 30px;
            width: 22%; /* Reduced width to 22% */
            height: 500px; /* Extends the height */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .plan-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #0D47A1; /* Dark blue text */
        }

        .plan-price {
            font-size: 18px;
            color: #0D47A1; /* Lighter blue for price */
            margin-bottom: 20px;
        }

        .plan-button {
            background-color: #0D47A1; /* Light blue background */
            color: #0D47A1; /* Dark blue text */
            padding: 12px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: not-allowed;
            margin-bottom: 30px;
            width: 100%;
        }

        .plan-button.upgrade {
            background-color: #0D47A1; 
            color: rgb(14, 1, 1);
            cursor: pointer;
        }

        .plan-button.upgrade:hover {
            background-color: #dedfe0; 
        }

        .plan-features {
            list-style-type: none;
            padding: 0;
            text-align: left;
        }

        .plan-features li {
            margin-bottom: 10px;
            color: #050110;
        }

        /* Adjustments for mobile */
        @media (max-width: 768px) {
            .pricing-tables {
                flex-direction: column;
            }

            .pricing-table {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>SELECT A PLAN</h1>
        <p>Choose Your Choice</p>
        <div class="pricing-tables">
            <div class="pricing-table">
                <div class="plan-name">PERSONAL</div>
                <div class="plan-price">$9/Month</div>
                <button class="plan-button" disabled>YOUR PLAN</button>
                <ul class="plan-features">
                    <li><strong>Free</strong> feature one</li>
                    <li><strong>Unlimited</strong> feature two</li>
                    <li><strong>Unlimited</strong> feature three</li>
                    <li><strong>2x</strong> feature four</li>
                    <li><strong>100x</strong> feature five</li>
                </ul>
            </div>

            <div class="pricing-table">
                <div class="plan-name">PROFESSIONAL</div>
                <div class="plan-price">$16/Month</div>
                <button class="plan-button upgrade">UPGRADE</button>
                <ul class="plan-features">
                    <li><strong>Free</strong> feature one</li>
                    <li><strong>Unlimited</strong> feature two</li>
                    <li><strong>Unlimited</strong> feature three</li>
                    <li><strong>2x</strong> feature four</li>
                    <li><strong>100x</strong> feature five</li>
                </ul>
            </div>

            <div class="pricing-table">
                <div class="plan-name">BUSINESS</div>
                <div class="plan-price">$24/Month</div>
                <button class="plan-button upgrade">UPGRADE</button>
                <ul class="plan-features">
                    <li><strong>Free</strong> feature one</li>
                    <li><strong>Unlimited</strong> feature two</li>
                    <li><strong>Unlimited</strong> feature three</li>
                    <li><strong>2x</strong> feature four</li>
                    <li><strong>100x</strong> feature five</li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>
