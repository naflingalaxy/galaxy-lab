// BBristal board getting cost and selling price-------------------------------
function ncrboardchange()
{
   if ($('#ncr').val() && $('#brand').val()) {
      $('#qty').prop('disabled', false);
      $('#qty').val('');
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';
       document.getElementById('price').value = '';

      
      if ($('#ncr').val() == "NCR_Top_white_(carbonized)" && $('#brand').val() == "Pindo 2000") {
         window.item_id = "NCRTWCP2000";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_Middle_Blue_(carbonized)" && $('#brand').val() == "Pindo 2000") {
         window.item_id = "NCRMBCP2000";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_middle_pink_(carbonized)" && $('#brand').val() == "Pindo 2000") {
         window.item_id = "NCRMPCP2000";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_middle_green" && $('#brand').val() == "Pindo 2000") {
         window.item_id = "NCRMGP2000";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_Bottom_yellow" && $('#brand').val() == "Pindo 2000") {
         window.item_id = "NCRBYP2000";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_Bottom_pink" && $('#brand').val() == "adler") {
         window.item_id = "NCRBPADLR";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#ncr').val() == "NCR_Top_white_(carbonized)" && $('#brand').val() == "adler") {
         window.item_id = "NCRTWCADLR";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else {
         window.item_id = "";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = true;
         document.getElementById("add").disabled = true;
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
   if(!$('#pricing').val()) { $('.js-form').addClass('was-validated'); 
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
         $(".table.one > tbody").append("<tr class='one'><td><input type='button' class='removebtn btn-danger' value='X'>" + ncr + boardbrand + "</td><td>" + boardqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         $('#qty').val('');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         $("#ncr").val("0");
         $("#brand").val("0");
         $('#qty').val('');
         $('#pricing').find('option').remove();
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

function pricechange() {

  if ($('#pricing').val()) {$('#qty').prop('disabled', false);} else { $('#qty').prop('disabled', true); }
  
    $('#qty').val('');
    window.actual_costprice = $( "#pricing" ).val();
   window.actual_sellingprice = Number(window.actual_costprice)+Number(window.actual_costprice*0.25);
   document.getElementById('costprice').value = '';
   document.getElementById('sellingprice').value = '';
}