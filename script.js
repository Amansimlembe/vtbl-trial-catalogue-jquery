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
        const totalKgs = (southKgs + tangaKgs + westKgs).toFixed(1);
        const totalReprintPkgs = southReprintPkgs + tangaReprintPkgs + westReprintPkgs;
        const totalReprintKgs = (southReprintKgs + tangaReprintKgs + westReprintKgs).toFixed(1);
        const totalPackages = southPkgs + southReprintPkgs + tangaPkgs + tangaReprintPkgs + westPkgs + westReprintPkgs;

        $('#total').closest('tr').find('td').eq(0).text(totalCount);
        $('#total').closest('tr').find('td').eq(1).text(totalPkgs);
        $('#total').closest('tr').find('td').eq(2).text(totalKgs);
        $('#total').closest('tr').find('td').eq(3).text(totalReprintPkgs);
        $('#total').closest('tr').find('td').eq(4).text(totalReprintKgs);
        $('#total').closest('tr').find('td').eq(5).text(totalPackages); // Update TOTAL PKGS in eq(5)
        
        // Update TOTAL KGS in eq(6)
        const totalKgsSum = (southKgs + southReprintKgs + tangaKgs + tangaReprintKgs + westKgs + westReprintKgs).toFixed(1);
        $('#total').closest('tr').find('td').eq(6).text(totalKgsSum);
    }

    $('#add1').click(function() {
        const mark = $('#mark').val();
        const noOfPkgs = parseInt($('#noOfPkgs').val());
        const netWeight = parseFloat($('#netWeight').val());
        const nature = $('#nature').val();

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
                    southKgs += (netWeight / noOfPkgs);
                } else if (nature === "Reprint") {
                    southReprintPkgs += noOfPkgs;
                    southReprintKgs += (netWeight / noOfPkgs);
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
                    tangaKgs += (netWeight / noOfPkgs);
                } else if (nature === "Reprint") {
                    tangaReprintPkgs += noOfPkgs;
                    tangaReprintKgs += (netWeight / noOfPkgs);
                }
                break;
            case 'Kagera':
                region = '#west';
                westCount++;
                if (nature === "Fresh") {
                    westPkgs += noOfPkgs;
                    westKgs += (netWeight / noOfPkgs);
                } else if (nature === "Reprint") {
                    westReprintPkgs += noOfPkgs;
                    westReprintKgs += (netWeight / noOfPkgs);
                }
                break;
            default:
                alert('Unknown region');
                return;
        }

        const $regionRow = $(region).closest('tr');
        let count;
        let pkgs;
        let reprintPkgs;
        let kgs;
        let reprintKgs;
        if (region === '#south') {
            count = southCount;
            pkgs = southPkgs;
            reprintPkgs = southReprintPkgs;
            kgs = southKgs.toFixed(1);
            reprintKgs = southReprintKgs.toFixed(1);
        } else if (region === '#tanga') {
            count = tangaCount;
            pkgs = tangaPkgs;
            reprintPkgs = tangaReprintPkgs;
            kgs = tangaKgs.toFixed(1);
            reprintKgs = tangaReprintKgs.toFixed(1);
        } else if (region === '#west') {
            count = westCount;
            pkgs = westPkgs;
            reprintPkgs = westReprintPkgs;
            kgs = westKgs.toFixed(1);
            reprintKgs = westReprintKgs.toFixed(1);
        }

        $regionRow.find('td').eq(0).text(count);
        $regionRow.find('td').eq(1).text(pkgs);
        $regionRow.find('td').eq(2).text(kgs);
        $regionRow.find('td').eq(3).text(reprintPkgs);
        $regionRow.find('td').eq(4).text(reprintKgs);
        $regionRow.find('td').eq(5).text(pkgs + reprintPkgs); // Update TOTAL PKGS in eq(5)
        
        // Update TOTAL KGS in eq(6)
        const totalKgsSum = (southKgs + southReprintKgs + tangaKgs + tangaReprintKgs + westKgs + westReprintKgs).toFixed(1);
        $regionRow.find('td').eq(6).text(totalKgsSum);
        
        updateTotalCount();
    });
});
