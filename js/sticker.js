


function stickerBtnOnclick() {
  // $(".second tr").remove();

  if($("select option:selected").length < 0){
      $("js-form").addClass('was-validated');
    }
    if(!$('#pricing').val()) { $('.js-form').addClass('was-validated'); 
   }

   
   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { $('#qty').removeClass('validate');}
   
   

      if ($('table.one').find('tr.one').length < 5) {
         if ($('#qty').val()) {
         main_cat = $("#maincat option:selected").text();
         
         main_cat = main_cat.replace(/ /g,"_");
         
         
         stickerqty = $('#qty').val();
         var costprice = document.getElementById("costprice").value;
         var sellingprice = document.getElementById("sellingprice").value;
         $(".table.one > tbody").append("<tr class='one'><td><input type='button' class='removebtn btn-danger' value='X'>Sticker Paper</td><td>" + stickerqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         
         $('#qty').val('');
         $('#pricing').find('option').remove();
         // $('#qty').prop('disabled', true);
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
    if ($('#pricing').val()) {$('#qty').prop('disabled', false);} else { $('#qty').prop('disabled', true); }
  
    $('#qty').val('');
    window.actual_costprice = $( "#pricing" ).val();
   window.actual_sellingprice = Number(window.actual_costprice)+Number(window.actual_costprice*0.25);
   document.getElementById('costprice').value = '';
   document.getElementById('sellingprice').value = '';
}