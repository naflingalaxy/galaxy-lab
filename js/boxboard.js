// Box board getting cost and selling price-------------------------------
function boxboardchange()
{
   if ($('#gsm').val() && $('#brand').val()) {
      // $('#qty').prop('disabled', false);
      $('#qty').val('');
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';
      document.getElementById('price').value = '';

      
      if ($('#gsm').val() == "300" && $('#brand').val() == "kerani") {
         window.item_id = "BXBKER300";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }

         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#gsm').val() == "350" && $('#brand').val() == "sripathi") {
         window.item_id = "BXBSRI350";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }

         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#gsm').val() == "400" && $('#brand').val() == "sripathi") {
         window.item_id = "BXBSRI400";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#gsm').val() == "250" && $('#brand').val() == "kerani") {
         window.item_id = "BXBKER250";
         
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
         $(".table.one > tbody").append("<tr class='one'><td><input type='button' class='removebtn btn-danger' value='X'>" + boxboardgsm + "_GSM_Box_Board_" + boxboardbrand + "</td><td>" + boxboardqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         $('#qty').val('');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         $("#gsm").val("0");
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