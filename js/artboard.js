// Art board getting cost and selling price-------------------------------


function artboardchange() {

   if ($('#gsm').val() && $('#brand').val()) {
      $('#qty').prop('disabled', false);
      // $('#qty').val('');
      $('#pricing').find('option').remove();

      
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';
      document.getElementById('price').value = '';

      if ($('#gsm').val() == "230" && $('#brand').val() == "gc") {
         window.item_id = "ABGC230";
         // var simple = '<?php echo json_encode($data); ?>';
         // document.getElementById('sellingprice').value = simple;

         // window.test = "<option>23</option><option>33</option><option>12</option><option>90</option><option>3</option><option>12.5</option>";
    // document.getElementById("data1").value = test;
    // var test = document.getElementById("data1").value;
          if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }

         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#gsm').val() == "260" && $('#brand').val() == "unbrand") {
        window.item_id = "ABUN260";
         showUser(window.item_id);
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#gsm').val() == "310" && $('#brand').val() == "gc") {
        window.item_id = "ABGC310";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }

         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#gsm').val() == "230" && $('#brand').val() == "bohui") {
        window.item_id = "ABBH230";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }

         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#gsm').val() == "270" && $('#brand').val() == "unbrand") {
        window.item_id = "ABUN270";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }

         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else {
         window.item_id = "0000";
         
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


function artboardBtnOnclick() {
  // $(".second tr").remove();

  if($("select option:selected").length < 0){
      $("js-form").addClass('was-validated');
    }
   if(!$('#gsm').val()) { $('.js-form').addClass('was-validated'); 
   }

   if(!$('#brand').val()) { $('.js-form').addClass('was-validated'); 
   }
   if(!$('#pricing').val()) { $('.js-form').addClass('was-validated'); 
   }
   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { $('#qty').removeClass('validate');}
   
   

      if ($('table.one').find('tr.one').length < 5) {
         if ($('#gsm').val() && $('#brand').val() && $('#qty').val() && $('#pricing').val()) {
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
         $('#pricing').find('option').remove();
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

function pricechange() {

  if ($('#pricing').val()) {$('#qty').prop('disabled', false);} else { $('#qty').prop('disabled', false); }
  
    $('#qty').val('');
    window.actual_costprice = $( "#pricing" ).val();
   window.actual_sellingprice = Number(window.actual_costprice)+Number(window.actual_costprice*0.25);
   document.getElementById('costprice').value = '';
   document.getElementById('sellingprice').value = '';
}