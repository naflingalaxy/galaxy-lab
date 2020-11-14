
function coverchange()
{
   if ($('#cover').val()) {
      $('#qty').prop('disabled', false);
      // $('#qty').val('');
      document.getElementById('costprice').value = '';
      document.getElementById('sellingprice').value = '';
      document.getElementById('price').value = '';

      if ($('#cover').val() == "cover_paper_pink") {
         window.item_id = "CVRPPNK";
         
         if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }
          
         document.getElementById("btn-add-data").disabled = false;
         document.getElementById("add").disabled = false;
      }
      else if ($('#cover').val() == "cover_paper_green") {
         window.item_id = "CVRPGRN";
         
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

function coverBtnOnclick() {
   if(!$('#qty').val()) { $('#qty').addClass('validate');
   } else { 

      $('#qty').removeClass('validate');
      if ($('table.one').find('tr.one').length < 5) { 
         coverpaperdqty = $('#qty').val();
         var paper = "Cover_Paper";
         var costprice = document.getElementById("costprice").value;
         var sellingprice = document.getElementById("sellingprice").value;
         $(".table.one > tbody").append("<tr class='one'><td><input type='button' class='removebtn btn-danger' value='X'>" + paper + "</td><td>" + coverpaperdqty + "</td><td>" + costprice + "</td><td>" + sellingprice + "</td></tr>");
         $('#qty').val('');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
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