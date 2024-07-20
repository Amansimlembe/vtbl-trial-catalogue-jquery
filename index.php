



<!DOCTYPE html>
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
$(document).ready(function() {
    

  
 // Initial setup
 var existingInvoices = new Set();
    $("#add1").hide(); // Show add1 button initially
    $("#add2").hide(); // Hide add2 button initially
    $("#proceedButton1").hide(); // Hide proceedButton1 initially
    $("#proceedButton2").hide(); // Hide proceedButton2 initially

    $("#save1").click(function() {
        var mainLot = $("#mainLot").val();
        var secondaryLot = $("#secondaryLot").val();
        $('#reset1').prop("disabled", false);
        $(".catalogueTitle").show();
        
        if (!mainLot && secondaryLot) {
            // Display only table2
            $("#table1").hide();
            $("#table2").show();
            $("#mainLot, #secondaryLot, #save1").prop("disabled", true);
            $(".CatalogParagraph").hide();
            $("#proceedButton1").hide();
            $("#proceedButton2").hide();
            $("#add1").hide(); // Show add1 button initially
            $("#add2").show(); // Hide add2 button
        } else if (mainLot && !secondaryLot) {
            // Display only table1
            $("#table1").show();
            $("#table2").hide();
            $("#mainLot, #secondaryLot, #save1").prop("disabled", true);
            $(".CatalogParagraph").hide();
            $(".catalogueTitle").show();
            $("#proceedButton1").hide();
            $("#proceedButton2").hide();
            $("#add1").show(); // Show add1 button initially
            $("#add2").hide(); // Hide add2 button
        } else if (mainLot && secondaryLot) {
            // Display both table1 and table2
            $("#table1").show();
            $("#table2").show();
            $("#mainLot, #secondaryLot, #save1").prop("disabled", true);
            $("#reset").prop("disabled", false);
            $(".CatalogParagraph").hide();
            $(".catalogueTitle").show();
            $("#proceedButton1").hide();
            $("#proceedButton2").hide();
            $("#add1").show(); // Show add1 button initially
            $("#add2").hide(); // Hide add2 button initially
        } else {
            alert("Please fill at least one of Main Lot or Secondary Lot");
            $(".CatalogParagraph").show();
            $("h3.catalogueTitle").hide();
            $("#proceedButton1").hide();
            $("#proceedButton2").hide();
        }
    });

    // Reset button for all forms
    $("#reset1").click(function() {
        var mainLot = $("#mainLot").val();
        var secondaryLot = $("#secondaryLot").val();

        if (!mainLot && !secondaryLot) {
            alert("Please fill at least one of Main Lot or Secondary Lot");
            $('#reset1').prop("disabled", false);
        } else {
            $("#mainLot, #secondaryLot, #save1").prop("disabled", false);
            $("#table1").hide();
            $("#table2").hide();
            $('#reset1').prop("disabled", true);
            $(".CatalogParagraph").show();
            $(".catalogueTitle").hide();
            $("#proceedButton1").hide();
            $("#proceedButton2").hide();
            $("#add1").show(); // Show add1 button initially on reset
            $("#add2").hide(); // Hide add2 button on reset
            // Clear all rows in both tables
            $("#table1 tbody").empty();
            $("#table2 tbody").empty();
            // Clear the existing invoices set
            existingInvoices.clear();
        }
    });

    // Save Auction Date and Number
    $("#save").click(function(event) {
        event.preventDefault();
        
        const auctionNo = $('#auctionNo').val();
        const auctionNo1 = $('#auctionNo').val();
        const auctionNo2 = $('#auctionNo').val();
        const auctionNo3 = $('#auctionNo').val();
        const OrderOfSale = $("#OrderOfSale").val();

        // Calculate Auction Date and Prompt Date
        const closingDate = new Date($('#closingDate').val());
        const auctionDate = new Date(closingDate);
        auctionDate.setDate(closingDate.getDate() + 17);

        const promptDate = new Date(auctionDate);
        promptDate.setDate(auctionDate.getDate() + 11);

        if (auctionNo && closingDate && startLot && OrderOfSale) {
            // Do something with the form data
           
            $("#catalogueForm1 input, #catalogueForm1 select").prop("disabled", true);
            $("#reset").prop("disabled", false);
        } else {
            alert("Please! fill all required fields.");
        }

        
        // Set Auction Numbers
        $('#auctionNoValue-1').text(auctionNo);
        $('#auctionNoValue').text(auctionNo);
        $('#auctionNoValue1').text(auctionNo1);
        $('#auctionNoValue2').text(auctionNo2);
        $('#auctionNoValue3').text(auctionNo3);

        // Set Auction Dates
        $('#auctionDateValue-1').text(auctionDate.toISOString().slice(0, 10));
        $('#auctionDateValue').text(auctionDate.toISOString().slice(0, 10));
        $('#auctionDateValue1').text(auctionDate.toISOString().slice(0, 10));
        $('#auctionDateValue2').text(auctionDate.toISOString().slice(0, 10));
        $('#auctionDateValue3').text(auctionDate.toISOString().slice(0, 10));
        $('#prompt-date').text(promptDate.toISOString().slice(0, 10));
        $('#catalogueForm1 :input').prop('disabled', true);
        $('#reset').prop('disabled', false);
    });

    // Reset Auction Form Button
    $("#reset").click(function() {
        const auctionNo = $('#auctionNo').val();
        const OrderOfSale = $("#OrderOfSale").val();
        const closingDate = new Date($('#closingDate').val());
        if (auctionNo && closingDate && startLot && OrderOfSale) {
            // Do something with the form data
           
            $("#catalogueForm1 input, #catalogueForm1 select").prop("disabled", false);
        } else {
            alert("Please! fill all required fields.");
        }
       
    });


    // Validate and format date to dd/mm/yyyy
    function formatDate(dateString) {
        var date = new Date(dateString);
        var day = date
        var day = date.getDate();
        var month = date.getMonth() + 1; // Month is zero-indexed, so we add 1
        var year = date.getFullYear();

        // Pad day and month with leading zeros if necessary
        if (day < 10) {
            day = '0' + day;
        }
        if (month < 10) {
            month = '0' + month;
        }

        return day + '/' + month + '/' + year;
    }

    
    // Add Lot button for Table1
$("#add1").click(function() {
    var startLot = $("#startLot").val();
    var mainLot = $("#mainLot").val();
    var netWeight = parseFloat($("#netWeight").val());
    var noOfPkgs = parseFloat($("#noOfPkgs").val());
    var invoice = $("#invoice").val();
    var warehouse = $("#warehouse").val();
    var mark = $("#mark").val();
    var grade = $("#grade").val();
    var manfDate = formatDate($("#manfDate").val());
    var types = $("#types").val();
    var nature = $("#nature").val();

    // Check for duplicate invoice
    if (existingInvoices.has(invoice)) {
        alert("Invoice number " + invoice + " already exists. Please use a unique invoice number.");
        return;
    }
// Check for valid netWeight
/*if (netWeight < 1000) {
            alert("Net weight must be at least 1000.");
            return;
        }*/
        
        // Check for valid netWeight
if (noOfPkgs < 21) {
            alert("Number of packages must be above 20.");
            return;
        }
    if (startLot && mainLot && warehouse && mark && grade && invoice && manfDate && types && nature && !isNaN(netWeight) && !isNaN(noOfPkgs) && noOfPkgs !== 0) {
        var currentLot = $("#table1 tbody tr").length + 1;
       
        if (currentLot <= parseInt(mainLot)) {
            var tdKg = Math.floor(netWeight / noOfPkgs);
            var newRow = "<tr>" +
                "<td></td>" +
                "<td contenteditable='true'>" + warehouse + "</td>" +
                "<td></td>" +
                "<td contenteditable='true'>" + mark + "</td>" +
                "<td contenteditable='true'>" + startLot + "</td>" +
                "<td contenteditable='true'>" + grade + "</td>" +
                "<td contenteditable='true'>" + manfDate + "</td>" +
                "<td contenteditable='true'>Non-RA certified</td>" +
                "<td contenteditable='true'>" + invoice + "</td>" +
                "<td contenteditable='true'>" + noOfPkgs + "</td>" +
                "<td contenteditable='true'>" + types + "</td>" +
                "<td contenteditable='true'>" + netWeight + "</td>" +
                "<td contenteditable='true'>" + tdKg + "</td>" +
                "<td contenteditable='true'>" + nature + "</td>" +
                "<td></td>" +
                "<td>" +
                "<button class='editBtn' style='font-size: 16px; color:green; font-weight:bolder;'><i class='fas fa-pencil-alt'></i></button>" +
                "<button class='saveBtn' style='display:none; font-size: 16px; color:blue; font-weight:bolder;'><i class='fas fa-check'></i></button>" +
                "<button class='addNewRowBtn' style='font-size: 16px; color: black; font-weight:bolder;'><i class='fas fa-plus'></i></button>" +
                "<button class='deleteBtn' style='font-size: 16px;color:red; font-weight:bolder;'><i class='fas fa-minus'></i></button>" +
                "</td>" +
                "</tr>";
            $("#table1 tbody").append(newRow);
            $("#startLot").val(parseInt(startLot) + 1);

            // Add invoice to the existingInvoices set
            existingInvoices.add(invoice);

            if (currentLot === parseInt(mainLot)) {
                // Clear input values
    //$("#warehouse, #mark, #grade, #manfDate, #invoice, #noOfPkgs, #types, #netWeight, #nature").val('');
                $('#add1').hide();
                $('#add2').show();
                $('#proceedButton1').show();
                alert("Bravo! Your main catalogue is complete. Click OK then Proceed.");
            } else {
                $('#add1').show();
                $('#proceedButton1').hide();
            }
        }
    } else {
        alert("Please! fill all required fields correctly.");
    }

    // Clear input values
   // $("#warehouse, #mark, #grade, #manfDate, #invoice, #noOfPkgs, #types, #netWeight, #nature").val('');
});

// Add Secondary Lot button for Table2
$("#add2").click(function() {
    var lastLotNo;
    if ($("#table1 tbody tr").length > 0) {
        lastLotNo = parseInt($("#table1 tbody tr:last td:nth-child(5)").text());
    } else {
        lastLotNo = parseInt($("#startLot").val()) - 1;
    }
    var secondaryLot = $("#secondaryLot").val();
    var netWeight = parseFloat($("#netWeight").val());
    var noOfPkgs = parseFloat($("#noOfPkgs").val());
    var invoice = $("#invoice").val();
    var warehouse = $("#warehouse").val();
    var mark = $("#mark").val();
    var grade = $("#grade").val();
    var manfDate = formatDate($("#manfDate").val());
    var types = $("#types").val();
    var nature = $("#nature").val();

    // Check for duplicate invoice
    if (existingInvoices.has(invoice)) {
        alert("Invoice number " + invoice + " already exists. Please use a unique invoice number.");
        return;
    }
          // Check for valid netWeight
/*if (noOfPkgs > 60) {
            alert("Number of packages must not be more than 60.");
            return;
}*/

    if (secondaryLot && warehouse && mark && grade && invoice && manfDate && types && nature && !isNaN(netWeight) && !isNaN(noOfPkgs) && noOfPkgs !== 0) {
        var currentLot2 = $("#table2 tbody tr").length + 1;
        var startingLotNo = lastLotNo + 1;

        if (currentLot2 <= parseInt(secondaryLot)) {
            var tdKg = Math.floor(netWeight / noOfPkgs);
            var newRow = "<tr>" +
                "<td></td>" +
                "<td contenteditable='true'>" + warehouse + "</td>" +
                "<td></td>" +
                "<td contenteditable='true'>" + mark + "</td>" +
                "<td contenteditable='true'>" + startingLotNo + "</td>" +
                "<td contenteditable='true'>" + grade + "</td>" +
                "<td contenteditable='true'>" + manfDate + "</td>" +
                "<td contenteditable='true'>Non-RA certified</td>" +
                "<td contenteditable='true'>" + invoice + "</td>" +
                "<td contenteditable='true'>" + noOfPkgs + "</td>" +
                "<td contenteditable='true'>" + types + "</td>" +
                "<td contenteditable='true'>" + netWeight + "</td>" +
                "<td contenteditable='true'>" + tdKg + "</td>" +
                "<td contenteditable='true'>" + nature + "</td>" +
                "<td></td>" +
                "<td>" +
                "<button class='editBtn' style='font-size: 16px; color:green; font-weight:bolder;'><i class='fas fa-pencil-alt'></i></button>" +
                "<button class='saveBtn' style='display:none; font-size: 16px; color:blue; font-weight:bolder;'><i class='fas fa-check'></i></button>" +
                "<button class='addNewRowBtn' style='font-size: 16px; color: black; font-weight:bolder;'><i class='fas fa-plus'></i></button>" +
                "<button class='deleteBtn' style='font-size: 16px;color:red; font-weight:bolder;'><i class='fas fa-minus'></i></button>" +
                "</td>" +
                "</tr>";

            $("#table2 tbody").append(newRow);
            lastLotNo++; // Increment the last lot number for the next row
            $("#startLot").val(lastLotNo + 1);
            existingInvoices.add(invoice);

            // Increment lot number for subsequent rows
            $("#table2 tbody tr").each(function(index) {
                if (index > 0) {
                    $(this).find('td:nth-child(5)').text(parseInt($("#table2 tbody tr").eq(index - 1).find('td:nth-child(5)').text()) + 1);
                }
            });

            if (currentLot2 === parseInt(secondaryLot)) {
                // Clear input values
    //$("#warehouse, #mark, #grade, #manfDate, #invoice, #noOfPkgs, #types, #netWeight, #nature").val('');
                $('#add2').hide();
                $('#proceedButton1').show();
                alert("Bravo! Your secondary catalogue is complete. Click Proceed.");
            }
        }
    } else {
        alert("Please fill all required fields correctly.");
    }

    // Clear input values
   // $("#warehouse, #mark, #grade, #manfDate, #invoice, #noOfPkgs, #types, #netWeight, #nature").val('');
});

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
        $("#warehouse, #mark, #grade, #manfDate, #invoice, #noOfPkgs, #types, #netWeight, #nature").val('');
        $('.mark').val('');
        $('.noOfPkgs').val('');
        $('.netWeight').val('');
        $('.nature').val('');

    }
     

$('.add1c').click(function() {
        const mark1 = $('.mark').val();
        const noOfPkgs1 = parseInt($('.noOfPkgs').val());
        const netWeight1 = parseInt($('.netWeight').val());
        const nature1 = $('.nature').val();
        var invoice1 = $("#invoice").val();
        var mainLot = $("#mainLot").val();
        

        if (!mark1 || isNaN(noOfPkgs1) || isNaN(netWeight1) || !nature1) {
            alert('Please fill all the inputs correctly.');
            return;
        }
        if (mainLot && !secondaryLot && (netWeight1 < 1000)) {
            alert("Net weight must be at least 1000.");
            return;
        }
        
        if (noOfPkgs1 > 60) {
            alert("Number of packages must not be more than 60.");
            return;
        }
        let region;
        switch (mark1) {
            case 'Chivanjee':
            case 'Kibena':
            case 'Itona':
            case 'Ikanga':
            case 'kisigo':
            case 'Livingstonia':
            case 'Kibwele':
            case 'kilima':
            case 'katumba':
            case 'Luponde':
            case 'Lupembe':
            case 'Mwakaleli':
            
                region = '#south';
                southCount++;
                if (nature1 === "Fresh") {
                    southPkgs += noOfPkgs1;
                    southKgs += netWeight1;
                } else if (nature === "Reprint") {
                    southReprintPkgs += noOfPkgs1;
                    southReprintKgs += netWeight1;
                }
                break;
            case 'Arc Mountain':
            case 'Dindira':
            case 'Kwamkoro':
            case 'Mponde':
            case 'Bulwa':
                region = '#tanga';
                tangaCount++;
                if (nature1 === "Fresh") {
                    tangaPkgs += noOfPkgs1;
                    tangaKgs += netWeight1;
                } else if (nature1 === "Reprint") {
                    tangaReprintPkgs += noOfPkgs1;
                    tangaReprintKgs += netWeight1;
                }
                break;
            case 'Kagera':
                region = '#west';
                westCount++;
                if (nature1 === "Fresh") {
                    westPkgs += noOfPkgs1;
                    westKgs += netWeight1;
                } else if (nature1 === "Reprint") {
                    westReprintPkgs += noOfPkgs1;
                    westReprintKgs += netWeight1;
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



// Reassign lot numbers when adding or deleting a row
$(document).on('click', '.addNewRowBtn, .deleteBtn', function() {
    reassignLotNumbers();
});

function reassignLotNumbers() {
    var startLot = parseInt($("#startLot").val());
    var lotNo = startLot;

    // Reassign lot numbers in Table1
    $("#table1 tbody tr").each(function(index) {
        $(this).find('td:nth-child(5)').text(lotNo + index);
    });

    var lastLotNo = startLot + $("#table1 tbody tr").length;

    // Reassign lot numbers in Table2
    $("#table2 tbody tr").each(function(index) {
        $(this).find('td:nth-child(5)').text(lastLotNo + index);
    });
}

    // Edit button functionality
    $(document).on("click", ".editBtn", function() {
        var $row = $(this).closest("tr");
        $row.find("td").attr("contenteditable", "true");
        $row.find(".editBtn").hide();
        $row.find(".saveBtn").show();
    });

    // Save button functionality
    $(document).on("click", ".saveBtn", function() {
        var $row = $(this).closest("tr");
        $row.find("td").attr("contenteditable", "false");
        $row.find(".editBtn").show();
        $row.find(".saveBtn").hide();
    });

    // Delete button functionality
    $(document).on("click", ".deleteBtn", function() {
        var $row = $(this).closest("tr");
        var invoice = $row.find("td:eq(8)").text();

        if (confirm("Are you sure you want to delete this row?")) {
            $row.remove();
            existingInvoices.delete(invoice);
        }
         // Reassign lot numbers after deleting row
    reassignLotNumbers();
    });

    // Add new row inline button functionality
$(document).on('click', '.addNewRowBtn', function() {
    // Prompt the user for their choice
    var choice = confirm(" Hello! Mr MISHECK! Click OK to add next to the current row, or Cancel to add at the end of the table.");

    var newRow = "<tr>" +
        "<td></td>" +
        "<td contenteditable='true'></td>" +
        "<td></td>" +
        "<td contenteditable='true'></td>" +
        "<td contenteditable='true'></td>" +
        "<td contenteditable='true'></td>" +
        "<td contenteditable='true'></td>" +
        "<td contenteditable='true'>Non-RA certified</td>" +
        "<td contenteditable='true'></td>" +
        "<td contenteditable='true'></td>" +
        "<td contenteditable='true'></td>" +
        "<td contenteditable='true'></td>" +
        "<td contenteditable='true'></td>" +
        "<td contenteditable='true'></td>" +
        "<td></td>" +
        "<td>" +
        "<button class='editBtn' style='font-size: 16px; color:green; font-weight:bolder;'><i class='fas fa-pencil-alt'></i></button>" +
                "<button class='saveBtn' style='display:none; font-size: 16px; color:blue; font-weight:bolder;'><i class='fas fa-check'></i></button>" +
                "<button class='addNewRowBtn' style='font-size: 16px; color: black; font-weight:bolder;'><i class='fas fa-plus'></i></button>" +
                "<button class='deleteBtn' style='font-size: 16px;color:red; font-weight:bolder;'><i class='fas fa-minus'></i></button>" +
        "</td>" +
        "</tr>";

    if (choice) {
        // Add adjacent row
        $(this).closest('tr').after(newRow);
    } else {
        // Add at the end of the table
        $(this).closest('table').find('tbody').append(newRow);
    }

    reassignLotNumbers();
});


     // Proceed Button for Table1
     $("#proceedButton1").click(function() {
        // Hide all Form sections, h3.catalogueTitle, .Catalogueparagraph
        $(" .form-container, h3.catalogueTitle, .CatalogParagraph").hide();
        // Display block #cover1 and #cover2
        $("#proceedButton1").hide();
        $("#cover1, #cover2, .buttons").show();
        $(".container").css("width", "300mm");
        $(".editBtn, .deleteBtn, .addNewRowBtn").hide();
       
    });
   
    $('#excel').on('click', function() {

        let workbook = XLSX.utils.book_new();
        let worksheet1 = XLSX.utils.table_to_sheet(document.getElementById('cover1'));
        let worksheet2 = XLSX.utils.table_to_sheet(document.getElementById('cover2'));
        let worksheet3 = XLSX.utils.table_to_sheet(document.getElementById('table1'));
        let worksheet4 = XLSX.utils.table_to_sheet(document.getElementById('table2'));

        XLSX.utils.book_append_sheet(workbook, worksheet1, 'Cover1');
        XLSX.utils.book_append_sheet(workbook, worksheet2, 'Cover2');
        XLSX.utils.book_append_sheet(workbook, worksheet3, 'Table1');
        XLSX.utils.book_append_sheet(workbook, worksheet4, 'Table2');

        XLSX.writeFile(workbook, 'Catalogue.xlsx');
    });

    $('#pdf').on('click', function() {
        const { jsPDF } = window.jspdf;

        let pdf = new jsPDF();
        pdf.html(document.getElementById('cover1'), {
            callback: function(pdf) {
                pdf.addPage();
                pdf.html(document.getElementById('cover2'), {
                    callback: function(pdf) {
                        pdf.addPage();
                        pdf.html(document.getElementById('table1'), {
                            callback: function(pdf) {
                                pdf.addPage();
                                pdf.html(document.getElementById('table2'), {
                                    callback: function(pdf) {
                                        pdf.save('Catalogue.pdf');
                                    }
                                });
                            }
                        });
                    }
                });
            }
        });
    });

    $('#word').on('click', function() {
        let content1 = document.getElementById('cover1').outerHTML;
        let content2 = document.getElementById('cover2').outerHTML;
        let content3 = document.getElementById('table1').outerHTML;
        let content4 = document.getElementById('table2').outerHTML;

        let blob = new Blob([content1, '<br><br>', content2, '<br><br>', content3, '<br><br>', content4], {
            type: "application/msword;charset=utf-8"
        });

        saveAs(blob, 'Catalogue.doc');
    });

    $(document).on('click', '.editBtn', function() {
        $(this).closest('tr').find('input').prop('disabled', false);
    });

    $(document).on("click", ".deleteBtn", function() {
    var $row = $(this).closest("tr");
    
    if (confirm("Are you sure you want to delete this row?")) {
        $row.remove();
    } else {
        // Do nothing, row remains
    }
});
    // Print the catalogue
    $("#print").click(function() {
        $(".buttons").hide()
        window.print();
    });

    $("#back").click(function() {
    location.reload(); // Refresh the page
});

});
function updateOrderOfSale() {
            const selectedBroker = $('#OrderOfSale').val();
            const otherBroker = selectedBroker === 'VISION TEA BROKERS LTD' ? 'COHERENT TEA BROKERS LTD' : 'VISION TEA BROKERS LTD';

            $('#order1').text('1. ' + selectedBroker);
            $('#order2').text('2. ' + otherBroker);
        }

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
