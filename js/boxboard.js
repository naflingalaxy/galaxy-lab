// Box board getting cost and selling price-------------------------------
function boxboardchange()
{
   if ($('#gsm').val() && $('#brand').val()) {
      $('#qty').prop('disabled', false);
      $('#qty').val('');
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';

      
      if ($('#gsm').val() == "300" && $('#brand').val() == "sripathi") {
         window.actual_costprice = 32;
         window.actual_sellingprice = 40;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#gsm').val() == "350" && $('#brand').val() == "sripathi") {
         window.actual_costprice = 37.5;
         window.actual_sellingprice = 46.875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#gsm').val() == "400" && $('#brand').val() == "sripathi") {
         window.actual_costprice = 46;
         window.actual_sellingprice = 57.5;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#gsm').val() == "250" && $('#brand').val() == "unbrand") {
         window.actual_costprice = 28;
         window.actual_sellingprice = 35;
         document.getElementById("btn-add-data").disabled = false;
      }
      else {
         window.actual_costprice = 0;
         window.actual_sellingprice = 0;
         document.getElementById("btn-add-data").disabled = true;
      }
      
   }
    
}
function boxboardBtnOnclick() {
   if($("select option:selected").length < 0){
      $("js-form").addClass('was-validated');
    }
   if(!$('#gsm').val()) { $('.js-form').addClass('was-validated'); 
   }

   if(!$('#brand').val()) { $('.js-form').addClass('was-validated'); 
   }
   // if(!$('#qty').val()) { $('#qty').addClass('validate');
   // } else { $('#qty').removeClass('validate');}
   
   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { 

      $('#qty').removeClass('validate');
      if ($('table.one').find('tr.one').length < 5) { 
         boxboardqty = $('#qty').val();
         boxboardgsm = $('#gsm').val();

         boxboardbrand = $('#brand').val();
         var costprice = document.getElementById("costprice").value;
         var sellingprice = document.getElementById("sellingprice").value;
         $(".table.one > tbody").append("<tr class='one'><td>" + boxboardgsm + "_GSM_Box_Board_" + boxboardbrand + "</td><td>" + boxboardqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         $('#qty').val('');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         $("#gsm").val("0");
         $("#brand").val("0");
         $('#qty').val('');
         $('#qty').prop('disabled', true);
         if (global_variable == "global") {settotable();}

      }  else {
               // Get the snackbar DIV
              var x = document.getElementById("snackbar-item-limit");

              // Add the "show" class to DIV
              x.className = "show";

              // After 3 seconds, remove the show class from DIV
              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
      }
}

   
}