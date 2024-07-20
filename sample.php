make database name be vtb_db, Table auction_dates ( table auction_dates 

INSERT INTO auction_dates (auction_no, closing_date, auction_date, prompt_date) VALUES
(1, '2023-12-22', '2024-01-08', '2024-01-19'),
(2, '2023-12-29', '2024-01-15', '2024-01-26'),
(3, '2024-01-05', '2024-01-22', '2024-02-02'),
(4, '2024-01-12', '2024-01-29', '2024-02-09'),
(5, '2024-01-19', '2024-02-05', '2024-02-16'),
(6, '2024-01-26', '2024-02-12', '2024-02-23'),
(7, '2024-02-02', '2024-02-19', '2024-03-01'),
(8, '2024-02-09', '2024-02-26', '2024-03-08'),
(9, '2024-02-16', '2024-03-04', '2024-03-15'),
(10, '2024-02-23', '2024-03-11', '2024-03-22'),
(11, '2024-03-01', '2024-03-18', '2024-03-29'),
(12, '2024-03-08', '2024-03-25', '2024-04-05'),
(13, '2024-03-15', '2024-04-01', '2024-04-12'),
(14, '2024-03-22', '2024-04-08', '2024-04-19'),
(15, '2024-03-29', '2024-04-15', '2024-04-26'),
(16, '2024-04-05', '2024-04-22', '2024-05-03'),
(17, '2024-04-12', '2024-04-29', '2024-05-10'),
(18, '2024-04-19', '2024-05-06', '2024-05-17'),
(19, '2024-04-26', '2024-05-13', '2024-05-24'),
(20, '2024-05-03', '2024-05-20', '2024-05-31'),
(21, '2024-05-10', '2024-05-27', '2024-06-07'),
(22, '2024-05-17', '2024-06-03', '2024-06-14'),
(23, '2024-05-24', '2024-06-10', '2024-06-21'),
(24, '2024-05-31', '2024-06-17', '2024-06-28'),
(25, '2024-06-07', '2024-06-24', '2024-07-05'),
(26, '2024-06-14', '2024-07-01', '2024-07-12'),
(27, '2024-06-21', '2024-07-08', '2024-07-19'),
(28, '2024-06-28', '2024-07-15', '2024-07-26'),
(29, '2024-07-05', '2024-07-22', '2024-08-02'),
(30, '2024-07-12', '2024-07-29', '2024-08-09'),
(31, '2024-07-19', '2024-08-05', '2024-08-16'),
(32, '2024-07-26', '2024-08-12', '2024-08-23'),
(33, '2024-08-02', '2024-08-19', '2024-08-30'),
(34, '2024-08-09', '2024-08-26', '2024-09-06'),
(35, '2024-08-16', '2024-09-02', '2024-09-13'),
(36, '2024-08-23', '2024-09-09', '2024-09-20'),
(37, '2024-08-30', '2024-09-16', '2024-09-27'),
(38, '2024-09-06', '2024-09-23', '2024-10-04'),
(39, '2024-09-13', '2024-09-30', '2024-10-11'),
(40, '2024-09-20', '2024-10-07', '2024-10-18'),
(41, '2024-09-27', '2024-10-14', '2024-10-25'),
(42, '2024-10-04', '2024-10-21', '2024-11-01'),
(43, '2024-10-11', '2024-10-28', '2024-11-08'),
(44, '2024-10-18', '2024-11-04', '2024-11-15'),
(45, '2024-10-25', '2024-11-11', '2024-11-22'),
(46, '2024-11-01', '2024-11-18', '2024-11-29'),
(47, '2024-11-08', '2024-11-25', '2024-12-06'),
(48, '2024-11-15', '2024-12-02', '2024-12-13'),
(49, '2024-11-22', '2024-12-09', '2024-12-20'),
(50, '2024-11-29', '2024-12-16', '2024-12-27'),
(51, '2024-12-06', '2024-12-23', '2025-01-03');
) table user_inputs (  <th>Comments</th>
                <th>Warehouse</th>
                <th>Value</th>
                <th>Mark</th>
                <th>Lot No</th>
                <th>Grade</th>
                <th>Manf Date</th>
                <th>Certification</th>
                <th>Invoice</th>
                <th>No of Pkgs</th>
                <th>Type</th>
                <th>Net weight (kg)</th>
                <th>Kg</th>
                <th>Nature</th>
                <th>Sale Price</th>
                <th>Buyer & packages</th>), table Row_limi(Main Lot, Secondary Lot, Start Lot, Order of Sale). table auction_dates will be accessible when the user enter auction number in the input form while table user_inputs will store data inputed by the user, thKg will not be inputed rather its equal to (No of Pkgs/ Net Weight). table Row_limit Main Lot will limit the new added tr in #table1 while Secondary Lot will  limit tr in #table2. Order of sale will be display to their specif id, Start Lot will display in firstdLot No in #table1, the following tr will increment . generally all inputed dat should be display to their specific ids and classes. use this and index. php "<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include jsPDF library for PDF export -->


    <title>Catalogue - VISION TEA BROKERS LTD</title>
    <style>
 h2 {
            color: green;
            font-weight: lighter;
        }
        .CatalogParagraph ,h3{
            display: block;
            padding: 20px;
            background-color:gray ;
            border-radius: 5px;
            font-weight: bold;
            font-style: italic;
        }

        body {
            font-family: Arial, sans-serif; /* Example font */
        }

        .container {
            width: 100%; /* A4 width */
            margin: 0 auto; /* Center content horizontally */
            padding: 20px;
            border: 1px solid black; /* Border around A4-sized container */
            box-sizing: border-box; /* Include padding and border in the total width */
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            margin-bottom: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 5px;
        }

        .form-group label {
            margin-bottom: 5px;
            text-align: center;
            
        }

        .form-group input, .form-group select {
            width: 50px; /* Adjust the width as needed */
            font-size: 10px;
        }

        .form-container button {
            margin-top: 20px;
        }
 
/*style for reset-icons */
.reset-icon {
    color: black;
    font-weight: bold;
    font-size: 14px;
}
#reset1, #reset{
    border-radius: 50%;
    margin-left: 2px;
}
#reset1:hover, #reset:hover{
background-color: lightgray;

}

.reset-icon:active {
    transition: transform 0.3s, background 0.3s;
    transform: rotate(360deg) scale(1.1);
    color: red;
    background-color: white;

}



/*style for save icons */
.save-icon{
    font-weight: bolder;
    font-size: 16px;
    color: blue;
}

#save1, #save{
    border-radius: 50%;
}
#save1:hover, #save:hover{
    transition: transform 0.3s, background 0.3s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background: linear-gradient(135deg, #f7d94c, #ff6b6b);

}

.save-icon:active{
    transform: rotate(-30deg) scale(1.1);
}


/*style for add icons */
.add-icon{
    font-weight: bolder;
    font-size: 16px;
    color: green;
    
}

#add1, #add2{
    border-radius: 30%;
}
#add1:hover, #add2:hover{
   background-color: lightgray;

}

.add-icon:active{
    transition: transform 0.3s, background 0.3s;
    transform: translateY(-5px);
    
    background-color: white;
}





        /* Style for tables */
        .tableContainer {
            width: 100%; /* Ensure tables take full width */
            overflow-x: auto; /* Enable horizontal scrolling if needed */
        }

        #table1, #table2 {
            width: 100%; /* Take full width of its container */
            border-collapse: collapse;
            margin-top: 20px;
            display: none;
        }

       #table1 td,  #table2 td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            font-size: 12px; /* Adjust font size as needed */
        }

        #table1 th,  #table2 th {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            font-size: 12px; /* Adjust font size as needed */
            background-color: #f2f2f2;
        }
#Ttitle1, #Ttitle2{
    color: green;
    font-weight: bold;
}

@media print {
    @page {
        size: landscape;
        margin: 0;
    }
    .container {
            border: none; 
        }
    #cover1, #cover2, #table1, #table2 {
        page-break-after: always;
        width: 100%;
        overflow: hidden;
    }

    #cover1 {
        page-break-before: always;
    }

    .buttons {
        display: none; /* Hide buttons when printing */
    }
}

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.19/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pizzip/3.1.1/pizzip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/docxtemplater/3.26.1/docxtemplater.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="scripts.js" differ></script>

    <script>

    </script>
</head>
<body>
<div class="container">
    
    <section class="form-container">
    <h2>Auction Catalogue Details</h2>
    <form id="catalogueForm">
    <div class="form-row">
    <div class="form-group">
                    <label for="mainLot">Main Lot:</label>
                    <input type="number" id="mainLot" name="mainLot">
                </div>
                <div class="form-group">
                    <label for="secondaryLot">Secondary Lot:</label>
                    <input type="number" id="secondaryLot" name="secondaryLot">
                </div>
                <button id="save1" type="button"><i class="fas fa-check save-icon"></i>
                </button>
                <button  id="reset1" type="button"><i class="fas fa-redo reset-icon"></i>
                </button>
    </div>
    </form>
        <form id="catalogueForm1">
            <div class="form-row">
                <div class="form-group">
                    <label for="auctionNo">Auction No:</label>
                    <input type="number" id="auctionNo" name="auctionNo">
                </div>
                <div class="form-group">
                    <label for="closingDate">Closing Date:</label>
                    <input type="date" id="closingDate" name="closingDate">
                </div>
                
                <div class="form-group">
                    <label for="startLot">Start Lot:</label>
                    <input type="number" id="startLot" name="startLot">
                </div>
                <div class="form-group">
                    <label for="OrderOfSale">Order of sale:</label>
                    <select id="OrderOfSale" name="OrderOfSale" required>
                        <option value="VISION TEA BROKERS LTD" >VISION TEA BROKERS LTD</option>
                        <option value="COHERENT TEA BROKERS LTD" >COHERENT TEA BROKERS LTD</option>
                    </select>
                </div>
                <button onclick="updateOrderOfSale()" id="save" type="submit"><i class="fas fa-check save-icon"></i>
                </button>
                <button  id="reset" type="button"><i class="fas fa-redo reset-icon"></i>
                </button>
            </div>
        </form>

        <form>
            <div class="form-row">
                <div class="form-group">
                    <label for="warehouse">Warehouse:</label>
                    <select id="warehouse" name="warehouse" required>
                        <option value="Bravo">Bravo</option>
                        <option value="EUTECO">EUTECO</option>
                    </select>
                </div>

                <div class="form-group">
            <label for="mark">Mark:</label>
            <select class="mark" id="mark" name="mark" required>
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
                <option value="Kibwele">Kibwele</option>
                <option value="Lugoda">Lugoda</option>
                <option value="Kilima">Kilima</option>
                <option value="Lupembe">Lupembe</option>
                <option value="Luponde">Luponde</option>
                <option value="Katumba">Katumba</option>
                <option value="Mwakaleli">Mwakaleli</option>
                
            </select>
        </div>
                <div class="form-group">
                    <label for="grade">Grade:</label>
                    <select id="grade" name="grade" required>
                        <option value="BP1">BP1</option>
                        <option value="BP">BP</option>
                        <option value="PF1">PF1</option>
                        <option value="PF">PF</option>
                        <option value="PD">PD</option>
                        <option value="D1">D1</option>
                        <option value="FNGS">FNGS</option>
                        <option value="DUST">DUST</option>
                        <option value="D1">D2</option>
                        <option value="BMF">BMF</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="manfDate">Manf Date:</label>
                    <input type="date" id="manfDate" name="manfDate">
                </div>
                <div class="form-group">
                    <label for="invoice">Invoice:</label>
                    <input type="text" id="invoice" name="invoice" required>
                </div>
                <div class="form-group">
                    <label for="noOfPkgs">No of Pkgs:</label>
                    <input type="number" class="noOfPkgs" id="noOfPkgs" name="noOfPkgs" required>
                </div>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <select type="text" id="types" name="types" required>
                        <option value="TPP">TPP</option>
                        <option value="Poly">Poly</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="netWeight">Net weight (kg):</label>
                    <input type="number" class="netWeight" id="netWeight" name="netWeight" required>
                </div>
                <div class="form-group">
                    <label for="nature">Nature:</label>
                    <select class="nature" id="nature" name="nature" required>
                        <option value="Fresh">Fresh</option>
                        <option value="Reprint">Reprint</option>
                    </select>
                </div>
                <button class="add1c" id="add1" type="button"><i class='fas fa-plus add-icon'></i>
                </button>
                <button style="display:none;" class="add1c"  id="add2" type="button"><i class='fas fa-plus add-icon'></i>
                </button>
               
            </div>
        </form>
    </section>

    <section id="cover1" style="display:none;">
   <?php require 'coverpage.php'; ?>
    </section>
    <section id="cover2" style="display:none;">
   <?php require 'Coverpage2.php'; ?>
    </section>
    <hr>

    <h3 class="catalogueTitle" style="display:none; text-align:center; color: green; background-color:lightgray;">This is new catalogue for auction No. <span style="color: red; font-weight: bolder;"
    id="auctionNoValue-1"></span> </h3>
    <p class="CatalogParagraph">There is no  catalogue available. Please fill the details above to generate new.</p>
    <section class="tableContainer">
    <!-- Table 1 -->
    <table style="display:none;" id="table1">
        <thead>
            <tr id="Ttitle1">
                <th colspan="16">VISION TEA BROKERS LTD</th>
            </tr>
            <tr id="mainT1">
                <th colspan="16">Main Auction No <span id="auctionNoValue"></span> of <span id="auctionDateValue"></span></th>
            </tr>
            <tr>
                <th>Comments</th>
                <th>Warehouse</th>
                <th>Value</th>
                <th>Mark</th>
                <th>Lot No</th>
                <th>Grade</th>
                <th>Manf Date</th>
                <th>Certification</th>
                <th>Invoice</th>
                <th>No of Pkgs</th>
                <th>Type</th>
                <th>Net weight (kg)</th>
                <th>Kg</th>
                <th>Nature</th>
                <th>Sale Price</th>
                <th>Buyer & packages</th>
            </tr>
        </thead>
        <tbody>
            <!-- Content will be dynamically added via JavaScript -->
        </tbody>
        <button id="proceedButton1" style="display:none;">Proceed</button>
       
    </table>
    <!-- Table 2 -->
    <table id="table2">
        <thead>
            <tr id="Ttitle2">
                <th colspan="16">VISION TEA BROKERS LTD</th>
            </tr>
            <tr id="mainT2">
                <th colspan="16">Secondary Auction No <span id="auctionNoValue3"></span> of <span id="auctionDateValue3"></span></th>
            </tr>
            <tr>
                <th>Comments</th>
                <th>Warehouse</th>
                <th>Value</th>
                <th>Mark</th>
                <th>Lot No</th>
                <th>Grade</th>
                <th>Manf Date</th>
                <th>Certification</th>
                <th>Invoice</th>
                <th>No of Pkgs</th>
                <th>Type</th>
                <th>Net weight (kg)</th>
                <th>Kg</th>
                <th>Nature</th>
                <th>Sale Price</th>
                <th>Buyer & packages</th>
              
            </tr>
            
        </thead>
        <button id="proceedButton2" style="display:none;">Proceed</button>

        <tbody>
            
        </tbody>

    </table>
   

    </section>
    <section class="buttons" style="display:none;"> <button id="pdf">PDF</button><button id="excel">Excel</button><button id="word">Word</buttonb><button id="print">Print</button> <button id="back"> Back </button></section>

   </div> 
</body>
</html>
". dont use stmt or pdo. also use jquery