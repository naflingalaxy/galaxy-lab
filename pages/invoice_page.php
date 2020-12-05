<script>
   function showAdvance(str) {
            if (str == "") {
              document.getElementById("ajax").innerHTML = "";

              return;
            } else {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("ajax").innerHTML = this.responseText;
                  
                  
                }
              };
              xmlhttp.open("GET","advancepayment.php?q="+str,true);
              
              xmlhttp.send();
              
            }
           
           
             
          }
</script> 
         
               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Invoice #<?php if ($invoice_max_id) { echo $invoice_max_id[0]['MAX(invoice_id)'];} ?></h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                              <div class="form-row" id="">
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Job Card No (Closed)</label>
                                       <select class="custom-select cost-main-menu" id="jobid" name="jobid" onChange="jobcardchange();" required>
                                             <option selected="" disabled="" value="">Choose...</option>
                                             <?php if ($job_table_data) {
                                                      for ($z=0; $z < count($job_table_data); $z++) { 
                                                         $job_card_id_check = $job_table_data[$z]['job_card_id'];
                                                         $jb_array = array('chkid' => $job_card_id_check);
                                                         $jb_sql = $db->query("SELECT invoice_job_card_id FROM tbl_galaxy_invoice WHERE invoice_job_card_id = :chkid", $jb_array);
                                                         if (!$jb_sql) {
                                                         ?>

                                             <option value="<?php echo $job_table_data[$z]['job_card_id']; ?>"><?php echo $job_table_data[$z]['job_card_id']." (".getcusname($job_table_data[$z]['job_card_customer_id']).")"; ?></option>

                                             <?php } }} ?>                                             
                                       </select>
                                    
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                    
                                 </div>
                                 <div id="ajax"></div>
                                 
                                 
                                 
                              </div>
                              

                              <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <button name="btn-add" class="btn btn-primary" type="submit">ADD INVOICE &emsp;#<?php if ($invoice_max_id) { echo $invoice_max_id[0]['MAX(invoice_id)'];} ?></button>
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
                     
                     <div class="iq-card" id="pdf" style="visibility: hidden;">
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
                                    <td>Discount</td>
                                    <td></td>
                                    <td></td>
                                    <td><span id="tblediscount"></span></td>
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
                                    <h4 class="card-title">INVOICES
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
                                 <div class="table-responsive" style="<?php if ($invoice_table_data) {echo "height: 60vh;";} ?>">
                                    <table id="datatable" class="table table-striped table-bordered">
                                       <thead>
                                          <tr>
                                             <th scope="col" style="display:none;">Ref No</th>
                                             <th scope="col">Invoice Number</th>
                                             <th scope="col">Invoice Job Card ID</th>
                                             <th scope="col">Customer Name</th>
                                             <th scope="col">Customer Description</th>
                                             <th scope="col">QTY</th>
                                             <th scope="col">Rate</th>
                                             <th scope="col" style="background: #ace0ae;color: #000000;text-align: right;font-weight: bold;">Total</th>
                                             <th scope="col">Discount</th>
                                             <th scope="col">Advance Paid</th>
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
                                          <?php if ($invoice_table_data) {
                                                      for ($x=0; $x < count($invoice_table_data); $x++) { ?>
                                          <tr>
                                             <td style="display:none;">#<?php echo $invoice_table_data[$x]['invoice_uniq_id']; ?></td>
                                             <td><?php echo $invoice_table_data[$x]['invoice_id']; ?></td>
                                             <td><?php echo $invoice_table_data[$x]['invoice_job_card_id']; ?></td>
                                             <td><?php echo $invoice_table_data[$x]['invoice_customer_name']; ?></td>
                                             <td><?php echo $invoice_table_data[$x]['invoice_description']; ?></td>
                                             <td><?php echo $invoice_table_data[$x]['invoice_qty']; ?></td>
                                             <td style="text-align: right;"><?php echo number_format($invoice_table_data[$x]['invoice_rate'], 2); ?></td>
                                             <td style="background: #ace0ae;color: #000000;text-align: right;font-weight: bold;"><?php echo number_format($invoice_table_data[$x]['invoice_rate']*$invoice_table_data[$x]['invoice_qty'], 2); ?></td>
                                             <td style="text-align: right;"><?php echo number_format($invoice_table_data[$x]['invoice_discount'], 2); ?></td>
                                             <td style="text-align: right;"><?php echo number_format($invoice_table_data[$x]['invoice_advance'], 2); ?></td>
                                             
                                             <td><?php echo $invoice_table_data[$x]['invoice_date_time']; ?></td>
                                             <td><?php echo $invoice_table_data[$x]['invoice_added_user']; ?></td>
                                             <td>
                                                <?php if ($invoice_table_data[$x]['invoice_status'] == "0") { ?>
                                                <div class="badge badge-pill badge-warning text-white">pending</div></td>
                                             <?php } else { ?>
                                                <div class="badge badge-pill badge-success">active</div>
                                             <?php } ?>
                                             <td>
                                                <div class="d-inline-block">
                                                <?php if ($invoice_table_data[$x]['invoice_status'] != "1") { ?>

                                                <a href="<?php echo HTTP_PATH; ?>edit-invoice?editid=<?php echo $invoice_table_data[$x]['invoice_uniq_id'];?>" class="badge edit-btn approve" style="display:none;"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="<?php echo HTTP_PATH; ?>invoice?confirmid=<?php echo $invoice_table_data[$x]['invoice_uniq_id'];?>" class="badge edit-btn btn-primary" onclick="return confirm('Are you sure you want to confirm Invoice #<?php echo $invoice_table_data[$x]['invoice_id']; ?> ?')"><i class="fa fa-check" aria-hidden="true"></i></a>
                                             <?php } ?>
                                             
                                                 </div>
                                             </td>
                                             <td>
                                                <?php if ($invoice_table_data[$x]['invoice_status'] != "0") { ?>
                                                <a href="<?php echo HTTP_PATH; ?>pdf-view?invoiceid=<?php echo $invoice_table_data[$x]['invoice_uniq_id']; ?>" target="_blank"><i class="fa fa-print fa-2x" aria-hidden="true"></i></a>
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

function advancechange() {
  var advance = $("#advance option:selected").text();
    
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
   var discount = discountmargin*1;
   var advance = window.advance.value*1;
   var blnce = (total-discount)-advance;
   document.getElementById('tbletotal').innerHTML = addThousandsSeparator(total.toFixed(2));
   document.getElementById('tbletotalmain').innerHTML = addThousandsSeparator(total.toFixed(2));
   document.getElementById('tblediscount').innerHTML = addThousandsSeparator(discount.toFixed(2));
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
   function jobcardchange() {
      
         
         window.jobid = $('#jobid').val();

         showAdvance(window.jobid);

         $.getJSON('details.php',function(data){
        $(".qty").html(data.name);
        
    });
   }
</script>        
