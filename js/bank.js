// Art board getting cost and selling price-------------------------------
function bankchange()
{
   if ($('#bank').val() && $('#brand').val()) {
      $('#qty').prop('disabled', false);
      $('#qty').val('');
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';

      if ($('#bank').val() == "60(short)" && $('#brand').val() == "Unbrand") {
         window.actual_costprice = 6;
         window.actual_sellingprice = 7.5;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#bank').val() == "60(long)" && $('#brand').val() == "Built") {
         window.actual_costprice = 7.45;
         window.actual_sellingprice = 9.3125;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#bank').val() == "60(long)" && $('#brand').val() == "Unbrand") {
         window.actual_costprice = 7.5;
         window.actual_sellingprice = 9.375;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#bank').val() == "70" && $('#brand').val() == "Built") {
         window.actual_costprice = 7.15;
         window.actual_sellingprice = 8.9375;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#bank').val() == "80" && $('#brand').val() == "INDAHKIAT_BILT") {
         window.actual_costprice = 9;
         window.actual_sellingprice = 11.25;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#bank').val() == "100" && $('#brand').val() == "Unbrand") {
         window.actual_costprice = 12.2;
         window.actual_sellingprice = 15.25;
         document.getElementById("btn-add-data").disabled = false;
      }
      else {
         window.actual_costprice = 0;
         window.actual_sellingprice = 0;
         document.getElementById("btn-add-data").disabled = true;
      }
      
   }
    
}


function bankBtnOnclick() {
   
  if($("select option:selected").length < 0){
      $("js-form").addClass('was-validated');
    }
   if(!$('#bank').val()) { $('.js-form').addClass('was-validated'); 
   }

   if(!$('#brand').val()) { $('.js-form').addClass('was-validated'); 
   }
   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { $('#qty').removeClass('validate');}
   
   

      if ($('table.one').find('tr').length < 6) {
         if ($('#bank').val() && $('#brand').val() && $('#qty').val()) {
         main_cat = $("#maincat option:selected").text();
         bankpaper = $('#bank').val();
         main_cat = main_cat.replace(/ /g,"_");
         
         brand = $('#brand').val();
         artboardqty = $('#qty').val();
         var costprice = document.getElementById("costprice").value;
         var sellingprice = document.getElementById("sellingprice").value;
         $(".table.one > tbody").append("<tr><td>" + bankpaper + "_" + main_cat + "_" + brand + "</td><td>" + artboardqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         $("#bank").val("0");
         $("#brand").val("0");
         $('#qty').val('');
         $('#qty').prop('disabled', true);
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         }

      } else {
               // Get the snackbar DIV
              var x = document.getElementById("snackbar-item-limit");

              // Add the "show" class to DIV
              x.className = "show";

              // After 3 seconds, remove the show class from DIV
              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
      }
      
}