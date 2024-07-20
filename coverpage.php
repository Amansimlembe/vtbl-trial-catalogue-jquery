
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea Catalogue Cover Page</title>
    <style>
        body {
            font-family: Century Gothic;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .cover-page1 {
            text-align: center;
            margin: 0 auto;
            border: 1px solid black;
            padding: 8px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .outertable, #cover1table {
            width: 100%;
            border-collapse: collapse;
        }
        .bordered-div {
            border: 2px solid #000;
            padding: 5px;
            margin-bottom: 8px;
            text-align: center;
        }
        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            color: green;
            font-weight: bolder;
        }
        .logo img {
            max-height: 40px;
            vertical-align: middle;
        }
        h1, h2 {
            margin: 5px 0;
        }
        h4 {
            margin: 3px 0;
        }
        .order-of-sale {
            margin: 10px 0;
            text-align: center;
        }
        .order-of-sale h1 {
            text-decoration: underline;
            text-decoration-thickness: 2px;
        }
        .contact-info {
            text-align: left;
        }
        #cover1table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
            border: 2px solid #000;
        }
        #cover1table th, #cover1table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }
        hr {
            margin: 10px 0;
            font-weight: bold;
        }
        .prompt {
            border-top: 2px dashed black;
            border-bottom: 2px dashed black;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .prompt-date {
            font-weight: bold;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
     
    </script>
</head>
<body>
<section class="cover-page1">
        <table class="outertable">
            <tr>
                <td colspan="2" class="bordered-div logo">
                    <h1>VISION TEA BROKERS LTD</h1>
                    <img src="Vision.logo1.png">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="bordered-div">
                    <h1>AUCTION Sale No. <span id="auctionNoValue1"></span> of <span id="auctionDateValue1"></span></h1>
                    <h1>TANZANIA TEAS</h1>
                    <h1>FOR SALE BY ONLINE AUCTION</h1>
                    <h4>Subject to the DAR ES SALAAM TEA AUCTION RULES AND CONDITIONS of sale exhibited in the TMX Online Platform.</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="table-container1">
                    <table id="cover1table">
                        <thead>
                            <tr>
                                <th>Region</th>
                                <th>Lots</th>
                                <th>Packages</th>
                                <th>Kgs</th>
                                <th>Reprint Pkgs</th>
                                <th>Reprint Kgs</th>
                                <th>TOTAL PKGS</th>
                                <th>TOTAL KGS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th id="south">SOUTHERN HIGHLANDS</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th id="tanga">TANGA REGION</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th id="west">NORTH WEST ZONE</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th id="total">TOTALS:</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="order-of-sale">
                    <h1>ORDER OF SALE</h1>
                    <div>
                        <h5 id="order1">1. VISION TEA BROKERS LTD</h5>
                        <h5 id="order2">2. COHERENT TEA BROKERS LTD</h5>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="prompt">
                    PROMPT DATE: <span id="prompt-date" class="prompt-date"></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h1 style="color: green; text-align: center;">VISION TEA BROKERS LTD</h1>
                    <p style="text-align: center;">
                        Head Office, IPS Building 5th & 10th Floor Samora Avenue/Azikiwe Street,<br>
                        P.O. Box 8680, Dar es Salaam, Tanzania.<br>
                        Tel: +255 22 2127537 Mobile: 0754 276123, 0764 674761<br>
                        Email: info@visionteabrokers.co.tz<br>
                        <a href="http://www.visionteabrokers.co.tz" target="_blank">www.visionteabrokers.co.tz</a>
                    </p>
                    <hr>
                </td>
            </tr>
        </table>
    </section>
</body>
</html>




