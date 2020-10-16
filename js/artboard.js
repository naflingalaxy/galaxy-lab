// Art board getting cost and selling price-------------------------------
function artboardchange() {

   if ($('#gsm').val() && $('#brand').val()) {
      $('#qty').prop('disabled', false);
      $('#qty').val('');

      
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';

      if ($('#gsm').val() == "230" && $('#brand').val() == "gc") {
         window.actual_costprice = 32.5;
         window.actual_sellingprice = 40.625;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#gsm').val() == "260" && $('#brand').val() == "gc") {
         window.actual_costprice = 39.9;
         window.actual_sellingprice = 49.875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#gsm').val() == "310" && $('#brand').val() == "gc") {
         window.actual_costprice = 42.25;
         window.actual_sellingprice = 56.5625;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#gsm').val() == "230" && $('#brand').val() == "bohui") {
         window.actual_costprice = 32.5;
         window.actual_sellingprice = 40.625;
         document.getElementById("btn-add-data").disabled = false;
      }
      else {
         window.actual_costprice = 0;
         window.actual_sellingprice = 0;
         document.getElementById("btn-add-data").disabled = true;
      }
      
   }
    
}


function artboardBtnOnclick() {
  // $(".second tr").remove();

  if($("select option:selected").length < 0){
      $("js-form").addClass('was-validated');
    }
   if(!$('#gsm').val()) { $('.js-form').addClass('was-validated'); 
   }

   if(!$('#brand').val()) { $('.js-form').addClass('was-validated'); 
   }
   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { $('#qty').removeClass('validate');}
   
   

      if ($('table.one').find('tr.one').length < 5) {
         if ($('#gsm').val() && $('#brand').val() && $('#qty').val()) {
         main_cat = $("#maincat option:selected").text();
         artboardgsm = $('#gsm').val();
         main_cat = main_cat.replace(/ /g,"_");
         
         artboardbrand = $('#brand').val();
         artboardqty = $('#qty').val();
         var costprice = document.getElementById("costprice").value;
         var sellingprice = document.getElementById("sellingprice").value;
         $(".table.one > tbody").append("<tr class='one'><td><input type='button' class='removebtn btn-danger' value='X'>" + artboardgsm + "_GSM_" + "Art_Board" + "_" + artboardbrand + "</td><td>" + artboardqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         $("#gsm").val("0");
         $("#brand").val("0");
         $('#qty').val('');
         $('#qty').prop('disabled', true);
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         // Set table values for one time and call it again and again
         if (global_variable == "global") {settotable();}
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