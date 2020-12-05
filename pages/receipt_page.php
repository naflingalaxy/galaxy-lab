               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Receipt #<?php echo $receipt_max_id[0]['MAX(receipt_id)']; ?></h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
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
                           <form method="post">
                               <h4 class="card-title" style="padding-bottom: 15px;">CASH PAYMENT</h4>
                               <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="customRadio6" name="timespan" value="invoiceoption" class="custom-control-input" required> 
                                       <label class="timespan custom-control-label" for="customRadio6"> Invoice</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="customRadio2" name="timespan" value="useroption" class="timespan custom-control-input">
                                       <label class="custom-control-label" for="customRadio2"> Customer Name</label>
                                    </div>
                              <div class="form-row" style="margin-top: 10px;">
                                
                                 <div class="col-md-6 mb-3 invoiceid">
                                    

                                    <label for="validationTooltip04">Invoice No</label>
                                       <select class="custom-select cost-main-menu" id="invoiceid" name="invoiceid">
                                             <option selected="" disabled="" value="">Choose...</option>
                                             <?php if ($invoice_table_data) {
                                                      for ($z=0; $z < count($invoice_table_data); $z++) { ?>

                                             <option value="<?php echo $invoice_table_data[$z]['invoice_id']; ?>"><?php echo $invoice_table_data[$z]['invoice_id']." (".$invoice_table_data[$z]['invoice_customer_name'].")"; ?></option>

                                             <?php }} ?>
                                             <!-- <option value="5">Advance Payment</option> -->                                             
                                       </select>
                                    
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                    
                                 </div>
                                 <div class="col-md-6 mb-3 customer">
                                    <label for="validationTooltip04">Customer</label>
                                       <input type="text" id="customer" class="form-control" name="customer" list="numbers" autocomplete="off" oninput="hideList(this)">

                                       <datalist id="numbers" class="none">
                                          <?php if ($data_list) {
                                            for ($x=0; $x < count($data_list); $x++) {?>
                                          <option value="<?php echo $data_list[$x]['customer_name']; ?>"><?php echo $data_list[$x]['customer_name']; ?></option>
                                          <?php }} ?>
                                       </datalist>
                                    
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                    
                                 </div>
                                 <div class="col-md-6 mb-3 address">
                                    <label for="validationTooltip04">Address</label>
                                    
                                    <input type="text" class="form-control word" name="address" id="address" autocomplete="off">
                                    <div style="visibility: hidden;" id="word"></div>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3 number">
                                    <label for="validationTooltip04">Number</label>
                                    
                                    <input type="text" class="form-control word" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" name="number" id="number" autocomplete="off">
                                    <div style="visibility: hidden;" id="word"></div>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Amount</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="cash_amount" id="cash_amount" autocomplete="off" onkeyup="word.innerHTML=convertNumberToWords(this.value)" required>

                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Amount In Letters</label>
                                    
                                    <input type="text" class="form-control word" name="amount_description" id="amount_description" autocomplete="off" readonly required>
                                    <div style="visibility: hidden;" id="word"></div>
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
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="cheque_number" id="cheque_number" autocomplete="off" value="0">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Cheque Amount</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="cheque_amount" id="cheque_amount" autocomplete="off" value="0">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Bank Name</label>
                                    
                                    <input type="text" class="form-control" name="cheque_bank" id="cheque_bank" autocomplete="off" value="0">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Date</label>
                                    
                                    <input type="date" class="form-control" id="cheque_date" name="cheque_date" value="0000-00-00">
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
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="direct_ref" id="direct_ref" autocomplete="off" value="0">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Amount</label>
                                    
                                    <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="direct_amount" id="direct_amount" autocomplete="off" value="0">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Bank Name</label>
                                    
                                    <input type="text" class="form-control" name="direct_bank" id="direct_bank" autocomplete="off" value="0">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Date</label>
                                    
                                    <input type="date" class="form-control" id="direct_date" name="direct_date" value="0000-00-00">
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <button name="btn-add-receipt" class="btn btn-primary" type="submit">ADD RECEIPT &emsp;#<?php echo $receipt_max_id[0]['MAX(receipt_id)']; ?></button>
                              </div>

                           </form>
                           
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
                                             <th scope="col">Receipt Num</th>
                                             <th scope="col">Receipt JC Number</th>
                                             <th scope="col">Cus Name</th>
                                             <th scope="col" style="background: #ace0ae;color: #000000;text-align: right;font-weight: bold;">Amount</th>
                                             <th scope="col">Cheque Number</th>
                                             <th scope="col" style="background: #acd4e0;color: #000000;text-align: right;font-weight: bold;">Cheque Amount</th>
                                             <th scope="col">Direct Deposit Ref Num</th>
                                             <th scope="col" style="background: #c0ace0;color: #000000;text-align: right;font-weight: bold;">Direct Deposit Amount</th>
                                             <th scope="col">Date & Time</th>
                                             <th scope="col">Added User</th>
                                             <th scope="col">Status</th>
                                             <th scope="col">Confirm / Delete</th>
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
                                             <td><?php if ($receipt_table_data[$x]['receipt_cus_id'] == "0") {echo getcusname(getcusidbyjcid($receipt_table_data[$x]['receipt_jobcard_id']));} else {echo getcusname($receipt_table_data[$x]['receipt_cus_id']);} ?></td>
                                             <td style="background: #ace0ae;color: #000000;text-align: right;font-weight: bold;"><?php echo number_format($receipt_table_data[$x]['receipt_amount'], 2); ?></td>
                                             <td><?php echo $receipt_table_data[$x]['receipt_cheque_number']; ?></td>
                                             <td style="background: #acd4e0;color: #000000;text-align: right;font-weight: bold;"><?php echo number_format($receipt_table_data[$x]['receipt_cheque_amount'], 2); ?></td>
                                             <td><?php echo $receipt_table_data[$x]['receipt_direct_deposit_ref_number']; ?></td>
                                             <td style="background: #c0ace0;color: #000000;text-align: right;font-weight: bold;"><?php echo number_format($receipt_table_data[$x]['receipt_direct_deposit_amount'], 2); ?></td>
                                             
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

                                                <a href="<?php echo HTTP_PATH; ?>receipt?confirmid=<?php echo $receipt_table_data[$x]['receipt_uniq_id'];?>" class="badge edit-btn btn-primary" onclick="return confirm('Are you sure you want to confirm Receipt #<?php echo $receipt_table_data[$x]['receipt_id']; ?> ?')"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a href="<?php echo HTTP_PATH; ?>receipt?deleteid=<?php echo $receipt_table_data[$x]['receipt_uniq_id'];?>" class="badge edit-btn badge-danger" onclick="return confirm('Are you sure you want to delete Receipt #<?php echo $receipt_table_data[$x]['receipt_id']; ?> ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                
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
<script>
   function convertNumberToWords(amount) {
    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
        
    }
    document.getElementById('amount_description').value = words_string;
    return words_string;
    
}
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
            $(document).ready(function() {
             
             $('.invoiceid').hide().prop('required',false);
             $('.customer').hide().prop('required',false);
                 $('.timespan').click(function () {
                  var selected = $(this).val();  
                     if(selected == 'useroption') {
                      $('.customer').show().prop('required',true);
                      $('#address').show().prop('required',true);
                      $('#number').show().prop('required',true);
                      $('.invoiceid').hide().prop('required',false);
                      $('#customer').show().prop('required',true);
                      $('#invoiceid').hide().prop('required',false);
                      $('.address').show();
                         $('.number').show();
                   } else {
                     document.getElementById('customer').value = "";
                     $('.address').hide();
                         $('.number').hide();
                      $('.invoiceid').show().prop('required',true);
                      $('.customer').hide().prop('required',false);
                      $('#invoiceid').show().prop('required',true);
                      $('#customer').hide().prop('required',false);
                      $('#address').hide().prop('required',false);
                      $('#number').hide().prop('required',false);
                    }
                   //  if(selected == 'ongoing') {
                   //    $('.single').show();
                      
                   // } else {
                   //    $('.single').hide();
                      
                   //  }
             });       
           });
         </script>
         <script>
              $(document).on('change', '#customer', function(){
                var options = $('datalist')[0].options;
                $datalistval= $('#customer').val();
                
                   if ($('option[value="'+$datalistval+'"]').length != 0) 
                     {
                        $('.address').hide();
                         $('.number').hide();
                        $('#address').hide().prop('required',false);
                         $('#number').hide().prop('required',false);
                     } else {
                        $('.address').show();
                         $('.number').show();
                        $('#address').show().prop('required',true);
                         $('#number').show().prop('required',true);
                     }

                
            });
            </script>
         
        