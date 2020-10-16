// BBristal board getting cost and selling price-------------------------------
function ncrboardchange()
{
   if ($('#ncr').val() && $('#brand').val()) {
      $('#qty').prop('disabled', false);
      $('#qty').val('');
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';

      
      if ($('#ncr').val() == "NCR_Top_white_(carbonized)" && $('#brand').val() == "Pindo 2000") {
         window.actual_costprice = 12.2;
         window.actual_sellingprice = 15.25;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_Middle_Blue_(carbonized)" && $('#brand').val() == "Pindo 2000") {
         window.actual_costprice = 12.55;
         window.actual_sellingprice = 15.6875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_middle_pink_(carbonized)" && $('#brand').val() == "Pindo 2000") {
         window.actual_costprice = 12.55;
         window.actual_sellingprice = 15.6875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_middle_green" && $('#brand').val() == "Pindo 2000") {
         window.actual_costprice = 12.55;
         window.actual_sellingprice = 15.6875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_Bottom_yellow" && $('#brand').val() == "Pindo 2000") {
         window.actual_costprice = 11.35;
         window.actual_sellingprice = 14.1875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_Bottom_pink" && $('#brand').val() == "adler") {
         window.actual_costprice = 11.8;
         window.actual_sellingprice = 14.75;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_Top_white_(carbonized)" && $('#brand').val() == "adler") {
         window.actual_costprice = 12.6;
         window.actual_sellingprice = 15.75;
         document.getElementById("btn-add-data").disabled = false;
      }
      else {
         window.actual_costprice = 0;
         window.actual_sellingprice = 0;
         document.getElementById("btn-add-data").disabled = true;
      }
      
   }
    
}
function ncrBtnOnclick() {
   if($("select option:selected").length < 0){
      $("js-form").addClass('was-validated');
    }
   if(!$('#ncr').val()) { $('.js-form').addClass('was-validated'); 
   }

   if(!$('#brand').val()) { $('.js-form').addClass('was-validated'); 
   }

   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { 

      $('#qty').removeClass('validate');
      if ($('table.one').find('tr.one').length < 5) { 
         boardqty = $('#qty').val();
         ncr = $('#ncr').val();

         boardbrand = $('#brand').val();
         var costprice = document.getElementById("costprice").value;
         var sellingprice = document.getElementById("sellingprice").value;
         $(".table.one > tbody").append("<tr class='one'><td>" + ncr + boardbrand + "</td><td>" + boardqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         $('#qty').val('');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         $("#ncr").val("0");
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