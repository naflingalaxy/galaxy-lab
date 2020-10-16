// BBristal board getting cost and selling price-------------------------------
function demainchange()
{
   if ($('#demain').val()) {
      $('#qty').prop('disabled', false);
      $('#qty').val('');
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';

      
      if ($('#demain').val() == "Yellow_Demain_(Udawatta)") {
         window.actual_costprice = 7.2;
         window.actual_sellingprice = 9;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#demain').val() == "NP_48_White_Demain_(General)") {
         window.actual_costprice = 3.35;
         window.actual_sellingprice = 4.1875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#demain').val() == "NP_48_White_Demain_(Ranpath)") {
         window.actual_costprice = 3.05;
         window.actual_sellingprice = 3.8125;
         document.getElementById("btn-add-data").disabled = false;
      }
      else {
         window.actual_costprice = 0;
         window.actual_sellingprice = 0;
         document.getElementById("btn-add-data").disabled = true;
      }
      
   }
    
}
function demainBtnOnclick() {
   if($("select option:selected").length < 0){
      $("js-form").addClass('was-validated');
    }
   if(!$('#demain').val()) { $('.js-form').addClass('was-validated'); 
   }

   

   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { 

      $('#qty').removeClass('validate');
      if ($('table.one').find('tr.one').length < 5) { 
         boardqty = $('#qty').val();
         demain = $('#demain').val();

         
         var costprice = document.getElementById("costprice").value;
         var sellingprice = document.getElementById("sellingprice").value;
         $(".table.one > tbody").append("<tr class='one'><td>" + demain + "</td><td>" + boardqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         $('#qty').val('');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         $("#demain").val("0");
         
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