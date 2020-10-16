// BBristal board getting cost and selling price-------------------------------
function bristalboardchange()
{
   if ($('#clr').val() && $('#brand').val()) {
      $('#qty').prop('disabled', false);
      $('#qty').val('');
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';

      
      if ($('#clr').val() == "blue" && $('#brand').val() == "unbrand") {
         window.actual_costprice = 15.75;
         window.actual_sellingprice = 19.6875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#clr').val() == "white" && $('#brand').val() == "unbrand") {
         window.actual_costprice = 13.5;
         window.actual_sellingprice = 16.875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#clr').val() == "pink" && $('#brand').val() == "spb") {
         window.actual_costprice = 16;
         window.actual_sellingprice = 20;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#clr').val() == "yellow" && $('#brand').val() == "spb") {
         window.actual_costprice = 16;
         window.actual_sellingprice = 20;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#clr').val() == "green" && $('#brand').val() == "spb") {
         window.actual_costprice = 16;
         window.actual_sellingprice = 20;
         document.getElementById("btn-add-data").disabled = false;
      }
      else {
         window.actual_costprice = 0;
         window.actual_sellingprice = 0;
         document.getElementById("btn-add-data").disabled = true;
      }
      
   }
    
}
function bristalboardBtnOnclick() {
   if($("select option:selected").length < 0){
      $("js-form").addClass('was-validated');
    }
   if(!$('#clr').val()) { $('.js-form').addClass('was-validated'); 
   }

   if(!$('#brand').val()) { $('.js-form').addClass('was-validated'); 
   }

   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { 

      $('#qty').removeClass('validate');
      if ($('table.one').find('tr.one').length < 5) { 
         boardqty = $('#qty').val();
         boardclr = $('#clr').val();

         boardbrand = $('#brand').val();
         var costprice = document.getElementById("costprice").value;
         var sellingprice = document.getElementById("sellingprice").value;
         $(".table.one > tbody").append("<tr class='one'><td>" + boardclr + "_Bristal_Board_" + boardbrand + "</td><td>" + boardqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         $('#qty').val('');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         $("#clr").val("0");
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