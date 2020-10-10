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
       $('#submitt').removeAttr('disabled');
        $('#setup').removeAttr('disabled');
        
    } else {
        $('#submitt').attr("disabled", 'disabled');
        $('#setup').attr("disabled", 'disabled');
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
    var mixTotalcost = 0;
    var mixTotalsell = 0;
$('#mytbl tbody tr').each(function () {
    mixTotalcost += parseFloat($(this).find('td:eq(2)').text());
    mixTotalsell += parseFloat($(this).find('td:eq(3)').text());
});

     $(".second tr").remove();
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
         var net_value_selling = (Number(artwork_cost)+Number(plate_cost)+Number(laminating_cost)+Number(die_cutter)+Number(die_cutting_charge_cost)+Number(perparization_cost)+Number(transport)+Number(other)+Number(impression_cost)+Number(mixTotalsell)).toFixed(2);
         var net_value_cost_mgn = (Number(net_value_cost)*Number(mgn_percent)).toFixed(2);
         var net_value_sell_mgn = (Number(net_value_selling)*Number(mgn_percent)).toFixed(2);
         var gros_amount_cost = (Number(net_value_cost)+Number(net_value_cost_mgn)).toFixed(2);
         var gros_amount_sell = (Number(net_value_selling)+Number(net_value_sell_mgn)).toFixed(2);
         var unit_price_cost = (Number(gros_amount_cost)/Number(qty_units)).toFixed(2);
         var unit_price_sell = (Number(gros_amount_sell)/Number(qty_units)).toFixed(2);
         $(".second > tbody").append("<tr><td>artwork</td><td> - </td><td>" + artwork_cost + "</td><td>" + artwork_cost + "</td></tr>");
         $(".second > tbody").append("<tr><td>plate</td><td> - </td><td>" + plate_cost + "</td><td>" + plate_cost + "</td></tr>");
         $(".second > tbody").append("<tr><td>laminating</td><td>" + laminating + "</td><td>" + laminating_cost + "</td><td>" + laminating_cost + "</td></tr>");
         $(".second > tbody").append("<tr><td>die_cutter</td><td> - </td><td>" + die_cutter + "</td><td>" + die_cutter + "</td></tr>");
         $(".second > tbody").append("<tr><td>die_cutting_charge</td><td>" + die_cutting_charge + "</td><td>" + die_cutting_charge_cost + "</td><td>" + die_cutting_charge_cost + "</td></tr>");
         $(".second > tbody").append("<tr><td>perparization</td><td>" + perparization + "</td><td>" + perparization_cost + "</td><td>" + perparization_cost + "</td></tr>");
         $(".second > tbody").append("<tr><td>transport</td><td> - </td><td>" + transport + "</td><td>" + transport + "</td></tr>");
         $(".second > tbody").append("<tr><td>other</td><td> - </td><td>" + other + "</td><td>" + other + "</td></tr>");
         $(".second > tbody").append("<tr><td>impression</td><td>" + impression + "</td><td>" + impression_cost + "</td><td>" + impression_cost + "</td></tr>");
         $(".second > tbody").append("<tr class='net'><td>Net Value</td><td></td><td>" + net_value_cost + "</td><td>" + net_value_selling + "</td></tr>");
         $(".second > tbody").append("<tr class='mgn'><td>MGN (" + mgn + "%)</td><td></td><td>" + net_value_cost_mgn + "</td><td>" + net_value_sell_mgn + "</td></tr>");
         $(".second > tbody").append("<tr class='gros'><td>Gross Amount</td><td></td><td>" + gros_amount_cost + "</td><td>" + gros_amount_sell + "</td></tr>");
         $(".second > tbody").append("<tr class='unit'><td>Unit Price (" + qty_units + ")</td><td></td><td>" + unit_price_cost + "</td><td>" + unit_price_sell + "</td></tr>");
         

}

