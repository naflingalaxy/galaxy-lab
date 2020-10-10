// Art board getting cost and selling price-------------------------------
function artchange()
{
   if ($('#artpaper').val()) {
      $('#qty').prop('disabled', false);
      $('#qty').val('');
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';

      if ($('#artpaper').val() == "Art_paper_100_GSM_(Chinese)") {
         window.actual_costprice = 12.4;
         window.actual_sellingprice = 15.5;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#artpaper').val() == "Art_paper_120_GSM_(Chinese)") {
         window.actual_costprice = 15.35;
         window.actual_sellingprice = 19.1875;
         document.getElementById("btn-add-data").disabled = false;
      }
      else if ($('#artpaper').val() == "Art_paper_150_GSM_(Nevia)") {
         window.actual_costprice = 16.7;
         window.actual_sellingprice = 20.875;
         document.getElementById("btn-add-data").disabled = false;
      }
      
      else {
         window.actual_costprice = 0;
         window.actual_sellingprice = 0;
         document.getElementById("btn-add-data").disabled = true;
      }
      
   }
    
}


function artBtnOnclick() {
   
  if($("select option:selected").length < 0){
      $("js-form").addClass('was-validated');
    }
   if(!$('#artpaper').val()) { $('.js-form').addClass('was-validated'); 
   }

   
   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { $('#qty').removeClass('validate');}
   
   

      if ($('table.one').find('tr').length < 6) {
         if ($('#artpaper').val() && $('#qty').val()) {
         main_cat = $("#maincat option:selected").text();
         artpaper = $('#artpaper').val();
         main_cat = main_cat.replace(/ /g,"_");
         
         
         artboardqty = $('#qty').val();
         var costprice = document.getElementById("costprice").value;
         var sellingprice = document.getElementById("sellingprice").value;
         $(".table.one > tbody").append("<tr><td>" + artpaper + "</td><td>" + artboardqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
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