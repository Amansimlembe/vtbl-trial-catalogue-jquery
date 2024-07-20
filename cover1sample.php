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
        $(document).ready(function() {
            let southCount = 0;
    let tangaCount = 0;
    let westCount = 0;
    let southPkgs = 0;
    let tangaPkgs = 0;
    let westPkgs = 0;
    let southReprintPkgs = 0;
    let tangaReprintPkgs = 0;
    let westReprintPkgs = 0;
    let southKgs = 0;
    let tangaKgs = 0;
    let westKgs = 0;
    let southReprintKgs = 0;
    let tangaReprintKgs = 0;
    let westReprintKgs = 0;

    function updateTotalCount() {
        const totalCount = southCount + tangaCount + westCount;
        const totalPkgs = southPkgs + tangaPkgs + westPkgs;
        const totalKgs = southKgs + tangaKgs + westKgs;
        const totalReprintPkgs = southReprintPkgs + tangaReprintPkgs + westReprintPkgs;
        const totalReprintKgs = southReprintKgs + tangaReprintKgs + westReprintKgs;
        const totalPackages = totalPkgs + totalReprintPkgs;
        const totalKgsAll = totalKgs + totalReprintKgs;

        $('#total').closest('tr').find('td').eq(0).text(totalCount).css({"font-weight": "bold", "border-color": "deepblack"});
        $('#total').closest('tr').find('td').eq(1).text(totalPkgs).css({"font-weight": "bold", "border-color": "deepblack"});
        $('#total').closest('tr').find('td').eq(2).text(totalKgs).css({"font-weight": "bold", "border-color": "deepblack"});
        $('#total').closest('tr').find('td').eq(3).text(totalReprintPkgs).css({"font-weight": "bold", "border-color": "deepblack"});
        $('#total').closest('tr').find('td').eq(4).text(totalReprintKgs).css({"font-weight": "bold", "border-color": "deepblack"});
        $('#total').closest('tr').find('td').eq(5).text(totalPackages).css({"font-weight": "bold", "border-color": "deepblack"});
        $('#total').closest('tr').find('td').eq(6).text(totalKgsAll).css({"font-weight": "bold", "border-color": "deepblack"});
    }

    function clearInputs() {
        $('#mark').val('');
        $('#noOfPkgs').val('');
        $('#netWeight').val('');
        $('#nature').val('');
    }

    $('#add1').click(function() {
        const mark = $('.mark').val();
        const noOfPkgs = parseInt($('.noOfPkgs').val());
        const netWeight = parseInt($('.netWeight').val());
        const nature = $('.nature').val();

       

        let region;
        switch (mark) {
            case 'Chivanjee':
            case 'Kibena':
            case 'Itona':
            case 'Ikanga':
            case 'kisigo':
            case 'Livingstonia':
                region = '#south';
                southCount++;
                if (nature === "Fresh") {
                    southPkgs += noOfPkgs;
                    southKgs += netWeight;
                } else if (nature === "Reprint") {
                    southReprintPkgs += noOfPkgs;
                    southReprintKgs += netWeight;
                }
                break;
            case 'Arc Mountain':
            case 'Dindira':
            case 'Kwamkoro':
            case 'Mponde':
            case 'Bulwa':
                region = '#tanga';
                tangaCount++;
                if (nature === "Fresh") {
                    tangaPkgs += noOfPkgs;
                    tangaKgs += netWeight;
                } else if (nature === "Reprint") {
                    tangaReprintPkgs += noOfPkgs;
                    tangaReprintKgs += netWeight;
                }
                break;
            case 'Kagera':
                region = '#west';
                westCount++;
                if (nature === "Fresh") {
                    westPkgs += noOfPkgs;
                    westKgs += netWeight;
                } else if (nature === "Reprint") {
                    westReprintPkgs += noOfPkgs;
                    westReprintKgs += netWeight;
                }
                break;
            default:
                alert('Unknown region');
                clearInputs();
                return;
        }

        const $regionRow = $(region).closest('tr');
        let count, pkgs, reprintPkgs, kgs, reprintKgs;
        if (region === '#south') {
            count = southCount;
            pkgs = southPkgs;
            reprintPkgs = southReprintPkgs;
            kgs = southKgs;
            reprintKgs = southReprintKgs;
        } else if (region === '#tanga') {
            count = tangaCount;
            pkgs = tangaPkgs;
            reprintPkgs = tangaReprintPkgs;
            kgs = tangaKgs;
            reprintKgs = tangaReprintKgs;
        } else if (region === '#west') {
            count = westCount;
            pkgs = westPkgs;
            reprintPkgs = westReprintPkgs;
            kgs = westKgs;
            reprintKgs = westReprintKgs;
        }

        $regionRow.find('td').eq(0).text(count);
        $regionRow.find('td').eq(1).text(pkgs);
        $regionRow.find('td').eq(2).text(kgs);
        $regionRow.find('td').eq(3).text(reprintPkgs);
        $regionRow.find('td').eq(4).text(reprintKgs);
        $regionRow.find('td').eq(5).text(pkgs + reprintPkgs);
        $regionRow.find('td').eq(6).text(kgs + reprintKgs);

        updateTotalCount();

        // Clear the input fields
        clearInputs();
    });

});

    </script>
</head>
<body>
<form>
    <div class="form-group">
        <label for="mark">Mark:</label>
        <select class="mark" name="mark" required>
            <option value="Arc Mountain">Arc Mountain</option>
            <option value="Dindira">Dindira</option>
            <option value="Kibena">Kibena</option>
            <option value="Ikanga">Ikanga</option>
            <option value="Itona">Itona</option>
            <option value="Livingstonia">Livingstonia</option>
            <option value="Bulwa">Bulwa</option>
            <option value="Kwamkoro">Kwamkoro</option>
            <option value="Mponde">Mponde</option>
            <option value="kisigo">kisigo</option>
            <option value="Kagera">Kagera</option>
        </select>
    </div>
    <div class="form-group">
        <label for="noOfPkgs">No of Pkgs:</label>
        <input type="number" class="noOfPkgs" name="noOfPkgs" required>
    </div>
    <div class="form-group">
        <label for="netWeight">Net weight (kg):</label>
        <input type="number" class="netWeight" name="netWeight" required>
    </div>
    <div class="form-group">
        <label for="nature">Nature:</label>
        <select class="nature" name="nature" required>
            <option value="Fresh">Fresh</option>
            <option value="Reprint">Reprint</option>
        </select>
    </div>
    <button id="add1" type="button">add1</button>
    <button style="display:none;" id="add2" type="button">add2</button>
</form>

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
                        <tr id="south">
                            <th>SOUTHERN HIGHLANDS</th>
                            <td>0</td>
                            <td>0</td>
                            <td>0.0</td>
                            <td>0</td>
                            <td>0.0</td>
                            <td>0</td>
                            <td>0.0</td>
                        </tr>
                        <tr id="tanga">
                            <th>TANGA REGION</th>
                            <td>0</td>
                            <td>0</td>
                            <td>0.0</td>
                            <td>0</td>
                            <td>0.0</td>
                            <td>0</td>
                            <td>0.0</td>
                        </tr>
                        <tr id="west">
                            <th>NORTH WEST ZONE</th>
                            <td>0</td>
                            <td>0</td>
                            <td>0.0</td>
                            <td>0</td>
                            <td>0.0</td>
                            <td>0</td>
                            <td>0.0</td>
                        </tr>
                        <tr id="total">
                            <th>TOTALS:</th>
                            <td>0</td>
                            <td>0</td>
                            <td>0.0</td>
                            <td>0</td>
                            <td>0.0</td>
                            <td>0</td>
                            <td>0.0</td>
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
