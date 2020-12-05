               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Edit Receipt #<?php echo $edit_sql[0]['receipt_id']; ?></h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                               <h4 class="card-title" style="padding-bottom: 15px;">CASH PAYMENT</h4>
                              <div class="form-row">
                                
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Job Card No</label>
                                       <select class="custom-select cost-main-menu" id="jobid" name="jobid" required>
                                             <option selected="" disabled="" value="">Choose...</option>
                                             <?php if ($job_table_data) {
                                                      for ($z=0; $z < count($job_table_data); $z++) { ?>

                                             <option <?php if ($job_table_data[$z]['job_card_id'] == $edit_sql[0]['receipt_job_card_id']) { echo 'selected="selected"';} ?> value="<?php echo $job_table_data[$z]['job_card_id']; ?>"><?php echo $job_table_data[$z]['job_card_id']." (".$job_table_data[$z]['job_card_customer_name'].")"; ?></option>

                                             <?php }} ?>                                             
                                       </select>
                                    
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                    
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Customer Name</label>
                                    
                                    <input type="text" class="form-control" name="name" id="name" value="<?php if (isset($edit_sql[0]['receipt_cus_name'])) { echo $edit_sql[0]['receipt_cus_name'];} ?>" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Item.
                                    </div>
                                 </div>
                                 
                                  <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Amount</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="cash_amount" id="cash_amount" autocomplete="off" value="<?php if (isset($edit_sql[0]['receipt_amount'])) { echo $edit_sql[0]['receipt_amount'];} ?>" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Amount In Letters</label>
                                    
                                    <input type="text" class="form-control" name="amount_description" id="amount_description" value="<?php if (isset($edit_sql[0]['receipt_amount_letters'])) { echo $edit_sql[0]['receipt_amount_letters'];} ?>" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                              </div>
                              <div class="line"></div>
                              <h4 class="card-title" style="padding-bottom: 15px;">CHEQUE PAYMENT</h4>
                              
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Cheque Number</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="cheque_number" id="cheque_number" value="<?php if (isset($edit_sql[0]['receipt_cheque_number'])) { echo $edit_sql[0]['receipt_cheque_number'];} ?>" autocomplete="off">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Cheque Amount</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="cheque_amount" id="cheque_amount" value="<?php if (isset($edit_sql[0]['receipt_cheque_amount'])) { echo $edit_sql[0]['receipt_cheque_amount'];} ?>" autocomplete="off">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Bank Name</label>
                                    
                                    <input type="text" class="form-control" name="cheque_bank" id="cheque_bank" value="<?php if (isset($edit_sql[0]['receipt_cheque_bank'])) { echo $edit_sql[0]['receipt_cheque_bank'];} ?>" autocomplete="off">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Date</label>
                                    
                                    <input type="date" class="form-control" id="cheque_date" name="cheque_date" value="<?php if (isset($edit_sql[0]['receipt_cheque_date'])) { echo $edit_sql[0]['receipt_cheque_date'];} ?>" value="">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                              </div>
                              <div class="line"></div>
                              <h4 class="card-title" style="padding-bottom: 15px;">DIRECT DEPOSIT</h4>
                              
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Ref Number</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="direct_ref" id="direct_ref"  value="<?php if (isset($edit_sql[0]['receipt_direct_deposit_ref_number'])) { echo $edit_sql[0]['receipt_direct_deposit_ref_number'];} ?>" autocomplete="off">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Amount</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="direct_amount" id="direct_amount"  value="<?php if (isset($edit_sql[0]['receipt_direct_deposit_amount'])) { echo $edit_sql[0]['receipt_direct_deposit_amount'];} ?>" autocomplete="off">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Bank Name</label>
                                    
                                    <input type="text" class="form-control" name="direct_bank" id="direct_bank" value="<?php if (isset($edit_sql[0]['receipt_direct_deposit_bank'])) { echo $edit_sql[0]['receipt_direct_deposit_bank'];} ?>" autocomplete="off">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Date</label>
                                    
                                    <input type="date" class="form-control" id="direct_date" name="direct_date" value="<?php if (isset($edit_sql[0]['receipt_direct_deposit_date_time'])) { echo $edit_sql[0]['receipt_direct_deposit_date_time'];} ?>">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <button name="btn-add-receipt-update" class="btn btn-primary" type="submit">UPDATE RECEIPT &emsp;#<?php echo $edit_sql[0]['receipt_id']; ?></button>
                              </div>

                           </form>
                           <?php if (isset($_COOKIE['errorMessage'])) {?>
                              <div class="alert text-white bg-danger" role="alert">
                              <div class="iq-alert-text"><?php echo $_COOKIE['errorMessage']; ?></div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           
                           <?php } if (isset($_COOKIE['successMessage'])) {?>
                              <div class="alert text-white bg-success" role="alert">
                              <div class="iq-alert-text"><?php echo $_COOKIE['successMessage']; ?></div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                     
                  </div>
                 <div class="col-sm-12 col-lg-6">
                     
                     <div class="iq-card" id="pdf" style="display:none;">
                           <!-- <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Details</h4>
                              </div>
                           </div> -->
                           <div class="iq-card-body">
                              
                              <table id="tbldesc" style="margin-bottom: 15px;margin-top: 25px;">
                                 <tbody><tr>
                                   <td><b>NAME</b> &emsp;</td>
                                   <td><span id="displayname"></span></td>
                                   <td><b>&emsp;&emsp;JOB CARD</b> &emsp;</td>
                                   <td><span id="jobcard"></span></td>
                                 </tr>
                                 <tr>
                                   <td><b>INVOICE NUMBER</b> &emsp;</td>
                                   <td>#<?php if ($invoice_max_id) { echo $invoice_max_id[0]['MAX(invoice_id)'];} ?></td>
                                   <td><b>&emsp;&emsp;DATE &amp; TIME</b> &emsp;</td>
                                   <td><span id="dtime"></span></td>
                                 </tr>
                                 
                              </tbody></table>
                              <div class="row">
                                    
                                 
                                
                                 </div><div class="totals"></div><table class="table table-striped one" id="mytbl">
                                 
                                 
                                 <!-- <div class="col-md-3 mb-3"><h5>METERIALS : </h5></div> -->
                                 
                                 
                                 

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
                                    <td><span id="tbledescrip"></span></td>
                                    <td><span id="tbleqty"></span></td>
                                    <td><span id="tblerate"></span></td>
                                    <td id="tbletotalmain"></td>
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
                                    <td><span id="tbletotal"></span></td>
                                 </tr>
                                 <tr class="second">
                                    <td>Discount (<span id="tblediscount"></span>%)</td>
                                    <td></td>
                                    <td></td>
                                    <td><span id="tblediscountamount"></span></td>
                                 </tr>
                                 <tr class="second">
                                    <td>Advance Paid</td>
                                    <td></td>
                                    <td></td>
                                    <td><span id="tbleadvance"></span></td>
                                 </tr>
                                 <tr class="second" style="background: #1c67a2;color: white;">
                                    <td>Balance</td>
                                    <td></td>
                                    <td></td>
                                    <td><span id="tblebalance"></span></td>
                                 </tr>
                                 </tbody>
                                 
                                 
                                 
                              </table>
                              <div class="row">
                                    <div class="col-md-12">
                                       <h6></h6>
                                       
                                       
                                       
                                    </div>
                                    
                                 </div>
                              <!-- <table class="table table-striped second" onclick="" id="">
                                 
                                 <tbody>
                                   
                                    
                                   
                                 </tbody>
                              </table> -->
                              
                           </div>
                      </div>
                      <!-- <input type="button" value="Create PDF" id="btPrint" onclick="createPDF()" class="btn mb-3 btn-primary btn-js-add" /> -->
                  </div> 

               </div>

               <!-- <input type="radio" class="timespan" name="timespan" value="ongoing">On-going
<input type="radio" class="timespan" name="timespan" value="history">Historical
    <div class="end_date">End Date</div> -->



               <div class="row" style="margin-top: 30px;">
                       <div class="col-lg-12">
                           <div class="iq-card">
                              
                              <div class="iq-card-body">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">RECEIPTS
                                    </h4>
                                 </div>
                                 <?php if (isset($_COOKIE['delerrorMessage'])) {?>
                                    <div class="alert text-white bg-danger" role="alert">
                                    <div class="iq-alert-text"><?php echo $_COOKIE['delerrorMessage']; ?></div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="ri-close-line"></i>
                                    </button>
                                 </div>
                                 
                                 <?php } if (isset($_COOKIE['delsuccessMessage'])) {?>
                                    <div class="alert text-white bg-success" role="alert">
                                    <div class="iq-alert-text"><?php echo $_COOKIE['delsuccessMessage']; ?></div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="ri-close-line"></i>
                                    </button>
                                 </div>
                                 <?php } ?>
                                 <div class="table-responsive" style="height: 60vh;">
                                    <table id="datatable" class="table table-striped table-bordered">
                                       <thead>
                                          <tr>
                                             <th scope="col" style="display:none;">Ref No</th>
                                             <th scope="col">Receipt Number</th>
                                             <th scope="col">Receipt Job Card Number</th>
                                             <th scope="col">Customer Name</th>
                                             <th scope="col">Amount</th>
                                             <th scope="col">Cheque Number</th>
                                             <th scope="col">Cheque Amount</th>
                                             <th scope="col">Direct Deposit Ref Number</th>
                                             <th scope="col">Direct Deposit Amount</th>
                                             <th scope="col">Date & Time</th>
                                             <th scope="col">Added User</th>
                                             <th scope="col">Status</th>
                                             <th scope="col">Edit / Confirm</th>
                                             <th scope="col">PDF PRINT</th>
                                             <!-- <th scope="col">Status</th>
                                             <th scope="col">Edit / Confirm</th> -->

                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php if ($receipt_table_data) {
                                                      for ($x=0; $x < count($receipt_table_data); $x++) { ?>
                                          <tr>
                                             <td style="display:none;">#<?php echo $receipt_table_data[$x]['receipt_uniq_id']; ?></td>
                                             <td><?php echo $receipt_table_data[$x]['receipt_id']; ?></td>
                                             <td><?php if ($receipt_table_data[$x]['receipt_jobcard_id'] == "0") { echo "Advance";} else {echo $receipt_table_data[$x]['receipt_jobcard_id'];} ?></td>
                                             <td><?php echo getcusname($receipt_table_data[$x]['receipt_cus_id']); ?></td>
                                             <td><?php echo $receipt_table_data[$x]['receipt_amount']; ?></td>
                                             <td><?php echo $receipt_table_data[$x]['receipt_cheque_number']; ?></td>
                                             <td><?php echo $receipt_table_data[$x]['receipt_cheque_amount']; ?></td>
                                             <td><?php echo $receipt_table_data[$x]['receipt_direct_deposit_ref_number']; ?></td>
                                             <td><?php echo $receipt_table_data[$x]['receipt_direct_deposit_amount']; ?></td>
                                             
                                             <td><?php echo $receipt_table_data[$x]['receipt_date_time']; ?></td>
                                             <td><?php echo $receipt_table_data[$x]['receipt_added_user']; ?></td>
                                             <td>
                                                <?php if ($receipt_table_data[$x]['receipt_status'] == "0") { ?>
                                                <div class="badge badge-pill badge-warning text-white">pending</div></td>
                                             <?php } else { ?>
                                                <div class="badge badge-pill badge-success">active</div>
                                             <?php } ?>
                                             <td>
                                                <div class="d-inline-block">
                                                <?php if ($receipt_table_data[$x]['receipt_status'] != "1") { ?>

                                                <a href="<?php echo HTTP_PATH; ?>edit-receipt?editid=<?php echo $receipt_table_data[$x]['receipt_uniq_id'];?>" class="badge edit-btn approve"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="<?php echo HTTP_PATH; ?>receipt?confirmid=<?php echo $receipt_table_data[$x]['receipt_uniq_id'];?>" class="badge edit-btn btn-primary" onclick="return confirm('Are you sure you want to confirm Receipt #<?php echo $receipt_table_data[$x]['receipt_id']; ?> ?')"><i class="fa fa-check" aria-hidden="true"></i></a>
                                             <?php } ?>
                                             
                                                 </div>
                                             </td>
                                             <td>
                                                <?php if ($receipt_table_data[$x]['receipt_status'] != "0") { ?>
                                                <a href="<?php echo HTTP_PATH; ?>pdf-view?receiptid=<?php echo $receipt_table_data[$x]['receipt_id']; ?>" target="_blank"><i class="fa fa-print fa-2x" aria-hidden="true"></i></a>
                                             <?php } ?>

                                             </td>
                                          </tr>
                                          <?php }} ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
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

   $('#jobid').on('change', function() {
   window.my = this.value;
   window.cname = $("#jobid option:selected").html();
  document.getElementById('jobcard').innerHTML = window.my;
  window.cnameremoved = window.cname.replace(/[^A-Za-z]+/g, ' ');
  document.getElementById("name").value = window.cnameremoved.replace(/\s*$/,"");
  cusname.onkeyup();
  
});
var cusname = document.getElementById('name');
   cusname.onkeyup = function(){
    document.getElementById('displayname').innerHTML = cusname.value;
}
var desc = document.getElementById('description');
   desc.onkeyup = function(){
    document.getElementById('tbledescrip').innerHTML = desc.value;
}
var qty = document.getElementById('qty');
   qty.onkeyup = function(){
    document.getElementById('tbleqty').innerHTML = window.qty.value;
   sumlist();
}
var rate = document.getElementById('rate');
   rate.onkeyup = function(){
    document.getElementById('tblerate').innerHTML = window.rate.value;
    sumlist();
}
var advance = document.getElementById('advance');
   advance.onkeyup = function(){
    document.getElementById('tbleadvance').innerHTML = window.advance.value;
    sumlist();
}
var discount = document.getElementById('discount');
   discount.onkeyup = function(){
    document.getElementById('tblediscount').innerHTML = window.discount.value;
    sumlist();
}

function sumlist() {
   var total = qty.value*rate.value;
   var discountmargin = window.discount.value;
   var discount = total*(discountmargin/100);
   var advance = window.advance.value*1;
   var blnce = (total-discount)-advance;
   document.getElementById('tbletotal').innerHTML = addThousandsSeparator(total.toFixed(2));
   document.getElementById('tbletotalmain').innerHTML = addThousandsSeparator(total.toFixed(2));
   document.getElementById('tblediscountamount').innerHTML = addThousandsSeparator(discount.toFixed(2));
   document.getElementById('tbleadvance').innerHTML = addThousandsSeparator(advance.toFixed(2));
   document.getElementById('tblebalance').innerHTML = addThousandsSeparator(blnce.toFixed(2));
     
}

function addThousandsSeparator(input) {
    var output = input
    if (parseFloat(input)) {
        input = new String(input); // so you can perform string operations
        var parts = input.split("."); // remove the decimal part
        parts[0] = parts[0].split("").reverse().join("").replace(/(\d{3})(?!$)/g, "$1,").split("").reverse().join("");
        output = parts.join(".");
    }

    return output;
}
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
         
        