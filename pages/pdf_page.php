<div id="content-page" class="content-page">
  <div class="container-fluid">
     <div class="row">
        <div class="col-sm-12 col-lg-6">

         <?php if ($invoice_sql) { 
            $total_amount = $invoice_sql[0]['invoice_rate']*$invoice_sql[0]['invoice_qty'];
            $discount_percent = $invoice_sql[0]['invoice_discount']/100;
            $discount = $total_amount*$discount_percent;
            $advance =  $invoice_sql[0]['invoice_advance'];
            $minus_value = $advance+$discount;
            $balance = $total_amount-$minus_value;
          ?>
            <div class="iq-card" id="pdf">
               <div class="iq-card-body">
                  
                  <img src="http://localhost/galaxy-lab/images/logo-galaxy.png" style="width: 125px;margin-bottom: 5px;">
                  <p>Offset, Screen & Digital Printings</p>
                  <div class="pdf" style="">
                    <h2 style="text-align:center;">INVOICE #<?php echo $invoice_sql[0]['invoice_id']; ?></h2>
                  </div>
                  <table id="tbldesc" style="margin-bottom: 15px;margin-top: 25px;">
                     <tbody>
                        <tr>
                          <td><b>NAME</b> &emsp;</td>
                          <td><?php echo $invoice_sql[0]['invoice_customer_name']; ?></td>
                          <td><b>&emsp;&emsp;JOB CARD</b> &emsp;</td>
                          <td><?php echo $invoice_sql[0]['invoice_job_card_id']; ?></td>
                        </tr>
                        <tr>
                          <td><b>INVOICE NUMBER</b> &emsp;</td>
                          <td><?php echo $invoice_sql[0]['invoice_id']; ?></td>
                          <td><b>&emsp;&emsp;DATE &amp; TIME</b> &emsp;</td>
                          <td><span id="dtime"></span></td>
                        </tr>
                        
                     </tbody>
                  </table>
                  <table class="table table-striped one" id="mytbl">
                     <thead>
                        <tr>
                           <!-- <th scope="col">Option</th> -->
                           <th scope="col">Description</th>
                           <th scope="col">Quantity</th>
                           <!-- <th scope="col">Cost</th>
                           <th scope="col">S/P</th> -->
                           <th scope="col">Rate</th>
                           <th scope="col">Rs.</th>
                        </tr>
                        
                     </thead>
                     <tbody>
                       
                        
                       
                     <tr class="second">
                        <td><?php echo $invoice_sql[0]['invoice_description']; ?></td>
                        <td><?php echo $invoice_sql[0]['invoice_qty']; ?></td>
                        <td><?php echo $invoice_sql[0]['invoice_rate']; ?></td>
                        <td id=""><?php echo number_format($total_amount); ?></td>
                     </tr>
                     <tr class="second">
                        <td><span id=""></span></td>
                        <td><span id="">-</span></td>
                        <td><span id="">-</span></td>
                        <td></td>
                     </tr>
                     <tr class="second">
                        <td>Total Value</td>
                        <td></td>
                        <td></td>
                        <td><?php echo number_format($total_amount); ?></td>
                     </tr>
                     <tr class="second">
                        <td>Discount (<?php echo $invoice_sql[0]['invoice_discount']; ?>%)</td>
                        <td></td>
                        <td></td>
                        <td><?php echo number_format($discount); ?></td>
                     </tr>
                     <tr class="second">
                        <td>Advance Paid</td>
                        <td></td>
                        <td></td>
                        <td><?php echo number_format($advance); ?></td>
                     </tr>
                     <tr class="second" style="background: #1c67a2;color: white;">
                        <td>Balance</td>
                        <td></td>
                        <td></td>
                        <td><?php echo number_format($balance); ?></td>
                     </tr>
                     </tbody>
                  </table>
                  <div class="row">
                     <div class="col-md-12">
                        <h6></h6>
                        
                        <h6>...................................................<br>Signature</h6>
                        
                     </div>
                     
                  </div>

               </div>
            </div>
         <?php } ?>
            <input type="button" value="Create PDF" id="btPrint" onclick="createPDF()" class="btn mb-3 btn-primary btn-js-add" />

         </div>
      </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         <script>
            
            function hideList(input) {
               var datalist = document.querySelector("datalist");
               if (input.value) {
                  datalist.class = "";          
               } else {
                  datalist.class = "none";
               }
            }
         </script>
         <script>
  
              $("#datatable tr").click(function() {
                var selected = $(this).hasClass("highlight");
                $("#datatable tr").removeClass("highlight");
                if(!selected)
                        $(this).addClass("highlight");
            });
            </script>

            <script>
               // function jcard() {

   // if ($('#jobid').val()) {
      
   //    window.jbid = $( "#jobid" ).val();
   //    document.getElementById('jobcard').value = window.jbid;
   // }}

 
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    
         
   <script>
    function createPDF() {
         var today = new Date();
         var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
         var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
         var dateTime = date+' '+time;
         document.getElementById('dtime').innerHTML = dateTime;

        var sTable = document.getElementById('pdf').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 13px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 3px 3px;text-align: right;}";
        style = style + ".gros {background: #b2d4ef;}";
        style = style + ".net {background: #b2d3ef;}";
        style = style + ".unit {background: #6089ab;color: #ffffff;}";
        style = style + ".removebtn {display:none;}";
        style = style + "</style>";

         
        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=500');

        win.document.write('<html><head>');
        win.document.write('<title></title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close();    // CLOSE THE CURRENT WINDOW.
        
        win.print();    // PRINT THE CONTENTS.
        // win.save("Test.pdf");
    }

// var inputBox = document.getElementById('name');



// inputBox.onkeyup = function(){
//     document.getElementById('displayname').innerHTML = inputBox.value;
// }



</script> 
