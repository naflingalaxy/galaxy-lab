// $(document).ready(function(){

//     $('form > input').keyup(function() {

//         var empty = false;
//         $('form > input').each(function() {
//             if ($(this).val() == '') {
//                 empty = true;
//             }
//         });

//         if (empty) {
//             $('#submitt').attr('disabled', 'disabled');
//         } else {
//             $('#submitt').removeAttr('disabled');
//         }
//     });
// });
// $(document).ready(function(){
//     $('.details input:required').each(function() {
//   if ($(this).val() === '') {
//             $('#submitt').attr('disabled', 'disabled');
//       } else {
//             $('#submitt').removeAttr('disabled');
//         }
// });
// });
var global_variable;

document.addEventListener('keydown', function (event) {
  if (event.keyCode === 13 && event.target.nodeName === 'INPUT') {
    var form = event.target.form;
    var index = Array.prototype.indexOf.call(form, event.target);
    form.elements[index + 1].focus();
    event.preventDefault();
  }
});

jQuery(function($) {
    
  var $fields = $('#impression, #other, #transport, #margin, #perparization, #die_cutting_charge, #die_cutter, #laminating, #plate, #artwork, #qty_main, #desc, #name');
  
  $fields.on('keyup change', function() {
    if (allFilled($fields)) {
       // $('#submitt').removeAttr('disabled');
       //  $('#setup').removeAttr('disabled');
        
    } else {
        // $('#submitt').attr("disabled", 'disabled');
        // $('#setup').attr("disabled", 'disabled');
    }
  });

  function allFilled($fields) 
  {
    return $fields.filter(function() {
      return this.value === ''; 
    }).length == 0;
  }
});

function myadBtn() {
    
        document.getElementById('info').innerHTML = "";
        var myTab = document.getElementById('mytbl');

        // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
        for (i = 1; i < myTab.rows.length; i++) {

            // GET THE CELLS COLLECTION OF THE CURRENT ROW.
            var objCells = myTab.rows.item(i).cells;

            // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
            for (var j = 0; j < objCells.length; j++) {
               document.getElementById("btnClickedValue_0").value = info.innerHTML + objCells.item(j).innerHTML + ',' ;
                info.innerHTML = info.innerHTML + objCells.item(j).innerHTML + ',' ;
            }
            // info.innerHTML = info.innerHTML + '<br />';     // ADD A BREAK (TAG).
        }
    
}




function settotable() {
    
    global_variable = "global"; 
    var mixTotalcost = 0;
    var mixTotalsell = 0;
$('#mytbl tbody tr.one').each(function () {
    mixTotalcost += parseFloat($(this).find('td:eq(2)').text());
    mixTotalsell += parseFloat($(this).find('td:eq(3)').text());
});

     $(".one tr.second").remove();
     console.log(mixTotalcost);
     console.log(mixTotalsell); 
         var artwork = document.getElementById("artwork").value;
         var artwork_cost = (artwork*500).toFixed(2);
         var plate = document.getElementById("plate").value;
         var plate_cost = (plate*600).toFixed(2);
         var laminating = document.getElementById("laminating").value;
         var laminating_cost = (laminating*2).toFixed(2);
         var die_cutter_value = document.getElementById("die_cutter").value;
         var die_cutter = (die_cutter_value*1).toFixed(2);
         var die_cutting_charge = document.getElementById("die_cutting_charge").value;
         var die_cutting_charge_cost = (die_cutting_charge*800).toFixed(2);
         var perparization = document.getElementById("perparization").value;
         var perparization_cost = (perparization*45).toFixed(2);
         var transport_value = document.getElementById("transport").value;
         var transport = (transport_value*1).toFixed(2);
         var other_value = document.getElementById("other").value;
         var other = (other_value*1).toFixed(2);
         var impression = document.getElementById("impression").value;
         var qty_units = document.getElementById("qty_main").value;
         var mgn = document.getElementById("margin").value;
         var mgn_percent = mgn/100;
         var impression_cost = (impression*500).toFixed(2);
         var net_value_cost = (Number(artwork_cost)+Number(plate_cost)+Number(laminating_cost)+Number(die_cutter)+Number(die_cutting_charge_cost)+Number(perparization_cost)+Number(transport)+Number(other)+Number(impression_cost)+Number(mixTotalcost)).toFixed(2);
         // net_value_cost = addThousandsSeparator(net_value_cost);
         var net_value_selling = (Number(artwork_cost)+Number(plate_cost)+Number(laminating_cost)+Number(die_cutter)+Number(die_cutting_charge_cost)+Number(perparization_cost)+Number(transport)+Number(other)+Number(impression_cost)+Number(mixTotalsell)).toFixed(2);
         var net_value_cost_mgn = (Number(net_value_cost)*Number(mgn_percent)).toFixed(2);
         var net_value_sell_mgn = (Number(net_value_selling)*Number(mgn_percent)).toFixed(2);
         var gros_amount_cost = (Number(net_value_cost)+Number(net_value_cost_mgn)).toFixed(2);
         var gros_amount_sell = (Number(net_value_selling)+Number(net_value_sell_mgn)).toFixed(2);
         var unit_price_cost = (Number(gros_amount_cost)/Number(qty_units)).toFixed(2);
         var unit_price_sell = (Number(gros_amount_sell)/Number(qty_units)).toFixed(2);
         $(".one > tbody").append("<tr class='second'><td>artwork</td><td> - </td><td>" + addThousandsSeparator(artwork_cost) + "</td><td>" + addThousandsSeparator(artwork_cost) + "</td></tr>");
         $(".one > tbody").append("<tr class='second'><td>plate</td><td>" + plate + "</td><td>" + addThousandsSeparator(plate_cost) + "</td><td>" + addThousandsSeparator(plate_cost) + "</td></tr>");
         $(".one > tbody").append("<tr class='second'><td>laminating</td><td>" + laminating + "</td><td>" + addThousandsSeparator(laminating_cost) + "</td><td>" + addThousandsSeparator(laminating_cost) + "</td></tr>");
         $(".one > tbody").append("<tr class='second'><td>die_cutter</td><td> - </td><td>" + addThousandsSeparator(die_cutter) + "</td><td>" + addThousandsSeparator(die_cutter) + "</td></tr>");
         $(".one > tbody").append("<tr class='second'><td>die_cutting_charge</td><td>" + addThousandsSeparator(die_cutting_charge) + "</td><td>" + addThousandsSeparator(die_cutting_charge_cost) + "</td><td>" + addThousandsSeparator(die_cutting_charge_cost) + "</td></tr>");
         $(".one > tbody").append("<tr class='second'><td>perparization</td><td>" + perparization + "</td><td>" + addThousandsSeparator(perparization_cost) + "</td><td>" + addThousandsSeparator(perparization_cost) + "</td></tr>");
         $(".one > tbody").append("<tr class='second'><td>transport</td><td> - </td><td>" + addThousandsSeparator(transport) + "</td><td>" + addThousandsSeparator(transport) + "</td></tr>");
         $(".one > tbody").append("<tr class='second'><td>other</td><td> - </td><td>" + addThousandsSeparator(other) + "</td><td>" + addThousandsSeparator(other) + "</td></tr>");
         $(".one > tbody").append("<tr class='second'><td>impression</td><td>" + impression + "</td><td>" + addThousandsSeparator(impression_cost) + "</td><td>" + addThousandsSeparator(impression_cost) + "</td></tr>");
         $(".one > tbody").append("<tr class='net second'><td>Net Value</td><td></td><td>" + addThousandsSeparator(net_value_cost) + "</td><td>" + addThousandsSeparator(net_value_selling) + "</td></tr>");
         $(".one > tbody").append("<tr class='mgn second'><td>MGN (" + mgn + "%)</td><td></td><td>" + addThousandsSeparator(net_value_cost_mgn) + "</td><td>" + addThousandsSeparator(net_value_sell_mgn)+ "</td></tr>");
         $(".one > tbody").append("<tr class='gros second'><td>Gross Amount</td><td></td><td>" + addThousandsSeparator(gros_amount_cost) + "</td><td>" + addThousandsSeparator(gros_amount_sell) + "</td></tr>");
         $(".one > tbody").append("<tr class='unit second'><td>Unit Price (" + qty_units + ")</td><td></td><td>" + addThousandsSeparator(unit_price_cost) + "</td><td>" + addThousandsSeparator(unit_price_sell) + "</td></tr>");
         $(".one > tbody").append("<tr class='second'><td>Quarter Price</td><td></td></tr>");
         

}
function generate() {

  var doc = new jsPDF('l', 'pt', 'a4');
  doc.setFontSize(12);

  var res = doc.autoTableHtmlToJson(document.getElementById("basic-table"));
  doc.autoTable(res.columns, res.data, {margin: {top: 80}});

  var header = function(data) {
    doc.setFontSize(18);
    doc.setTextColor(40);
    doc.setFontStyle('normal');
    //doc.addImage(headerImgData, 'JPEG', data.settings.margin.left, 20, 50, 50);
    doc.text("Country List", data.settings.margin.left, 50);
  };

  var options = {
    beforePageContent: header,
    margin: {
      top: 80
    },

    startY: doc.autoTableEndPosY() + 20
  };

  doc.autoTable(res.columns, res.data, options);

  doc.save("Test.pdf");
}

function addThousandsSeparator(input) {
    var output = input
    if (parseFloat(input)) {
        input = new String(input); // so you can perform string operations
        var parts = input.split("."); // remove the decimal part
        parts[0] = parts[0].split("").reverse().join("").replace(/(\d{3})(?!$)/g, "$1,").split("").reverse().join("");
        output = parts.join(".");
    }

    return output;
}
// var doc = new jsPDF();

//  function saveDiv(divId, title) {
//  doc.fromHTML(`<html><head><title>${title}</title></head><body>` + document.getElementById(divId).innerHTML + `</body></html>`);
//  doc.save('div.pdf');
// }

// function printDiv(divId,
//   title) {

//   let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

//   mywindow.document.write(`<html><head><title>${title}</title>`);
//   mywindow.document.write('</head><body >');
//   mywindow.document.write(document.getElementById(divId).innerHTML);
//   mywindow.document.write('</body></html>');

//   mywindow.document.close(); // necessary for IE >= 10
//   mywindow.focus(); // necessary for IE >= 10*/

//   mywindow.print();
//   mywindow.close();

//   return true;
// }
// $('#cmd').click(function() {
//   var options = {};
//   var pdf = new jsPDF('p', 'pt', 'a5');
//   pdf.addHTML($("#pdf"), 0, 0, options, function() {
//     // pdf.print();
//     pdf.save('pageContent.pdf');
//     // document.getElementById("pdf").contentWindow.print();
//   });
// });

function demoFromHTML() {
    var pdf = new jsPDF('p', 'pt', 'a5');

    
    source = $('#pdf')[0];

    
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"
            return true
        }
    };
    margins = {
        top: 80,
        bottom: 60,
        left: 40,
        width: 522
    };
    
    // all coords and widths are in jsPDF instance's declared units
    // 'inches' in this case
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        // dispose: object with X, Y of the last line add to the PDF 
        //          this allow the insertion of new lines after html
        pdf.save('Test.pdf');
    }, margins);
}


function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("mytbl").deleteRow(i);
}

$("#margin").keyup(function() {
    $("#margin").val(this.value.match(/[0-9]*/));
});

// Format Money

function formatMoney(amount, decimalCount = 2, decimal = ".", thousands = ",") {
  try {
    decimalCount = Math.abs(decimalCount);
    decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

    const negativeSign = amount < 0 ? "-" : "";

    let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
    let j = (i.length > 3) ? i.length % 3 : 0;

    return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
  } catch (e) {
    console.log(e)
  }
};


// Table to Exel
function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('mytbl'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}

// Adjustments
// Remove Button TR JS
$('table').on('click', 'input[type="button"]', function(e){
   $(this).closest('tr').remove();
  if (global_variable == "global") {settotable();}
         
})


