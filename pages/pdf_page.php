<style>
  .table td, .table th {
    
    text-align: left;
}
</style>
<div id="content-page" class="content-page">
  <div class="container-fluid">
     <div class="row">
      <?php if (isset($_GET['invoiceid'])) { ?>
        <div class="col-sm-12 col-lg-6">

         <?php if ($invoice_sql) { 
            $total_amount = $invoice_sql[0]['invoice_rate']*$invoice_sql[0]['invoice_qty'];
            // $discount_percent = $invoice_sql[0]['invoice_discount']/100;
            $discount = $invoice_sql[0]['invoice_discount'];
            $advance =  $invoice_sql[0]['invoice_advance'];
            $minus_value = $advance+$discount;
            $balance = $total_amount-$minus_value;
          ?>
            <div class="iq-card" id="pdf">
               <div class="iq-card-body">
                  
                  <div class="row" style="">
                    <div class="col-md-7">
                      <img src="http://system.galaxyprinterslk.com/images/logo-galaxy.png" style="width: 125px;margin-bottom: 0px;margin-top: 2px">
                      <p style="margin:0;">Offset, Screen & Digital Printings</p>
                    </div>
                    <div class="col-md-5">
                      <h2 style="text-align:right;margin: 0;">INVOICE<span style="color:#ffffff;">-</span><?php echo $invoice_sql[0]['invoice_id']; ?></h2>
                      

                    </div>
                  <p style="margin:0px 0 25px 0;text-align: center;color: #ffffff;">---------------------------------------------</p>
                  </div>
                  
                 
                  <div class="row" style="">
                     <div class="linebottom" style="margin-bottom: 20px;"></div>
                    <div class="col-md-6">
                      
                      <ul style="padding: 0;margin: 0;">
                        <li style="list-style: none;"><b>NAME<span style="color:#ffffff;">--------------</span>:</b> <?php echo strtoupper(substr($invoice_sql[0]['invoice_customer_name'], 0, 19)); ?></li>
                        <li style="list-style: none;"><b>JOB CARD<span style="color:#ffffff;">--------</span>:</b> <?php echo strtoupper($invoice_sql[0]['invoice_job_card_id']); ?></li>
                        <li style="list-style: none;"><b>INVOICE NUM<span style="color:#ffffff;">--</span>:</b> <?php echo strtoupper($invoice_sql[0]['invoice_id']); ?></li>
                        <li style="list-style: none;"><b>DATE & TIME&emsp;:</b> <?php echo strtoupper($invoice_sql[0]['invoice_date_time']); ?></li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul style="padding: 0;float: right;margin: 0;">
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/1.png" style="width:10px;margin-top: 2px">&emsp;5, Noel Senavirathna Mawatha,<br>&emsp;&emsp;Kadurugas Jn, Kurunegala</li>
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/2.png" style="width:10px;margin-top: 2px" />&emsp;076 148 3360</li>
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/3.png" style="width:10px;margin-top: 2px" />&emsp;037 222 2502</li>
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/4.png" style="width:10px;margin-top: 2px" />&emsp;info@galaxyprinterslk.com</li>
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/5.png" style="width:10px;margin-top: 2px" />&emsp;www.galaxyprinterslk.com</li>
                      </ul>
                      
                    </div>
                   <p style="margin:0;text-align: center;color: #ffffff;">---------------------------------------------</p>
                  </div>
                  
                  
                  
                  <table class="table table-striped one mytab" id="mytbl" style="border-top: 1px solid #d8d8d8;">
                    
                     <thead>
                        <tr>
                           <!-- <th scope="col">Option</th> -->
                           <th style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;" scope="col">Description</th>
                           <th style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;" scope="col">Quantity</th>
                           <!-- <th scope="col">Cost</th>
                           <th scope="col">S/P</th> -->
                           <th style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;width:23%" scope="col">Rate</th>
                           <th style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;width:20%" scope="col">Rs.</th>
                        </tr>
                        
                     </thead>
                     <!-- <div class="linebottom" style="margin-bottom: 10px;"></div> -->
                     <tbody>
                       
                        
                       
                     <tr class="second">
                        <td style="padding: 5px 10px;border:0;font-size: 12.6px;border-top: solid 1px #DDD !important;"><?php echo $invoice_sql[0]['invoice_description']; ?></td>
                        <td style="padding: 5px 10px;border:0;font-size: 12.6px;border-top: solid 1px #DDD !important;"><?php echo $invoice_sql[0]['invoice_qty']; ?></td>
                        <td style="padding: 5px 10px;border:0;font-size: 12.6px;border-top: solid 1px #DDD !important;"><?php echo $invoice_sql[0]['invoice_rate']; ?></td>
                        <td id="" style="padding: 5px 10px;border:0;font-size: 12.6px;border-top: solid 1px #DDD !important;"><?php echo number_format($total_amount, 2); ?></td>
                     </tr>
                     <tr class="second">
                        <td style="padding: 5px;border:0;font-size: 12.6px;"></td>
                        <td style="padding: 5px;border:0;font-size: 12.6px;"></td>
                        <td style="padding: 5px;border:0;font-size: 12.6px;"></td>
                        <td style="padding: 5px;border:0;font-size: 12.6px;color:#ffffff;">-</td>
                     </tr>
                     <tr class="second">
                        <td style="padding: 5px;border:0;font-size: 12.6px;"></td>
                        <td style="padding: 5px;border:0;font-size: 12.6px;"></td>
                        <td style="padding: 5px;border:0;font-size: 12.6px;"></td>
                        <td style="padding: 5px;border:0;font-size: 12.6px;color:#ffffff;">-</td>
                     </tr>
                     <tr class="second">
                        <td style="padding: 5px;border:0;font-size: 12.6px;"></td>
                        <td style="padding: 5px;border:0;font-size: 12.6px;"></td>
                        <td style="padding: 5px;border:0;font-size: 12.6px;"></td>
                        <td style="padding: 5px;border:0;font-size: 12.6px;color:#ffffff;">-</td>
                     </tr>
                     <tr class="second">
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;"></td>
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;"></td>
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;">Total Value</td>
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;">Rs. <?php echo number_format($total_amount, 2); ?></td>
                     </tr>
                     <tr class="second">
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;"></td>
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;"></td>
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;">Discount</td>
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;">Rs. <?php echo number_format($discount, 2); ?></td>
                     </tr>
                     <tr class="second">
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;"></td>
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;"></td>
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;">Advance Paid</td>
                        <td style="background: #f7f7f7;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;">Rs. <?php echo number_format($advance, 2); ?></td>
                     </tr>
                     <tr class="second">
                        <td  style="background: #e6e6e6;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;"></td>
                        <td  style="background: #e6e6e6;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;"></td>
                        <td  style="background: #e6e6e6;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;">Balance</td>
                        <td style="background: #e6e6e6;color: #000000;padding: 5px 10px;border:0;font-size: 12.6px;">Rs. <?php echo number_format($balance, 2); ?></td>
                     </tr>
                     </tbody>
                  </table>

                  <div class="row">

                     <div class="col-md-6">
                        
                        <br><br><br><br>
                        <h4>...................................................<br>Customer Signature</h4>
                        
                     </div>
                     <div class="col-md-6">
                      <br><br><br><br>
                       <h4 style="float: right;">...................................................<br>Sales Representative Signature</h4>
                     </div>
                  </div>
                  <div class="row">

                     <div class="col-md-12">
                      <br/>
                       <ul style="margin: 0;padding-left: 10px;">
                         <li style="list-style: square;">All payment should be done by cash/cheque.</li>
                         <li style="list-style: square;">Cheque should be named as Galaxy Printers Pvt (Ltd) & crossed "Account payee only".</li>
                         <li style="list-style: square;">Bank deposit can be made A/C No <b>103010010493</b> - HNB bank.</li>
                         <li style="list-style: square;"><b>Cash payment (Please request official reciept).<br/>(ඔබ මුදල් ගෙවන විට අපගේ ආයතනික රිසිට්පතක් ඉල්ලා සිටින්න.)</b></li>

                       </ul>
                     </div>
                  </div>
               </div>
            </div>
         <?php } ?>
            <input type="button" value="Create PDF" id="btPrint" onclick="createPDF()" class="btn mb-3 btn-primary btn-js-add" />

         </div>
          <?php } ?>


        <?php if (isset($_GET['receiptid'])) { ?>
        <div class="col-sm-12 col-lg-6">

         <?php if ($receipt_sql) { 
            $receipt_customer_id = $receipt_sql[0]['receipt_cus_id'];
            
            $cash = $receipt_sql[0]['receipt_amount'];
            $cheque = $receipt_sql[0]['receipt_cheque_amount'];
            $dir_deposit = $receipt_sql[0]['receipt_direct_deposit_amount'];
            $total = $cash+$cheque+$dir_deposit;
          ?>
            <div class="iq-card" id="pdf">
               <div class="iq-card-body">
                  
                  <div class="row" style="">
                    <p style="margin:0;text-align: center;color: #ffffff;visibility: hidden;">---------------------------------------------</p>
                    <div class="col-md-6">
                      <img src="http://system.galaxyprinterslk.com/images/logo-galaxy.png" style="width: 125px;margin-bottom: 0px;margin-top: 2px">
                      <p style="margin:0;">Offset, Screen & Digital Printings</p>
                    </div>
                    <div class="col-md-6">
                      <ul style="padding: 0;float: right;margin: 0;">
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/1.png" style="width:10px;margin-top: 2px">&emsp;5, Noel Senavirathna Mawatha,<br>&emsp;&emsp;Kadurugas Jn, Kurunegala</li>
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/2.png" style="width:10px;margin-top: 2px" />&emsp;076 148 3360</li>
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/3.png" style="width:10px;margin-top: 2px" />&emsp;037 222 2502</li>
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/4.png" style="width:10px;margin-top: 2px" />&emsp;info@galaxyprinterslk.com</li>
                        <li style="list-style: none;"><img src="http://system.galaxyprinterslk.com/images/5.png" style="width:10px;margin-top: 2px" />&emsp;www.galaxyprinterslk.com</li>
                      </ul>
                    </div>
                   
                  <p style="margin:0;text-align: center;color: #ffffff;visibility: hidden;">---------------------------------------------</p>
                  </div>
                  <div class="row" style="border-top: 1px solid #9c9c9c;padding: 10px 0;">

                    

                    <div class="col-md-12" style="width:100%;">
                      <h2 style="text-align:right;margin: 0 0 5px 0;">RECEIPT NO :-<span style="color:#ffffff;visibility: hidden;">-</span><?php echo $receipt_sql[0]['receipt_id']; ?></h2>
                      
                      

                    </div>
                    <p style="margin:0;text-align: center;color: #ffffff;visibility: hidden;">---------------------------------------------</p>
                     <!-- <div class="linebottom" style=""></div> -->
                  </div>
                  
                  <div class="row" style="border-top: 1px solid #9c9c9c;margin-top: -23px;padding: 20px 0 0px 0;">
                    
                    <div class="col-md-6" style="width:52%">
                      
                      
                      <ul style="padding: 0;margin: 0;">
                        <li class="myname" style="list-style: none;text-transform: uppercase;"><b>NAME<span style="color:#ffffff;visibility: hidden;">--------------</span>:</b> <?php if ($receipt_sql[0]['receipt_cus_id'] != "0") { echo strtoupper(substr(getcusname($receipt_sql[0]['receipt_cus_id']), 0, 19)); } else { $namer = strtoupper(getcusname(getcusidbyjcid($receipt_sql[0]['receipt_jobcard_id']))); echo substr($namer, 0, 19); } ?></li>
                        <li style="list-style: none;"><b>INVOICE NUM<span style="color:#ffffff;visibility: hidden;">--</span>:</b> <?php if (!$check_invoice_id_sql) { echo "ADVANCE";} else { echo strtoupper($check_invoice_id_sql[0]['invoice_id']);} ?></li>
                        
                        <li style="list-style: none;"><b>DATE & TIME&emsp;:</b> <?php echo strtoupper($receipt_sql[0]['receipt_date_time']); ?></li>
                      </ul>
                    </div>
                    <div class="col-md-6" style="width:43%;">
                      <h1 style="text-align:right;margin: 15px 0 0 0;"><span style="color:#ffffff;visibility: hidden;">----</span><?php echo "Rs. ".number_format($total, 2); ?></h1>
                      
                    </div>
                   <p style="margin:0px 0 5px 0;text-align: center;color: #ffffff;margin-top: -10px;visibility: hidden;">---------------------------------------------</p>
                  </div>
                  
                  
                  
                  

                  <div class="row">
                    <div class="linebottom" style="margin-bottom: 20px;"></div>
                    <div class="col-md-12">
                      
                      <ul style="padding: 15px 0 0 0;margin: 0;">
                        <li style="list-style: none;line-height: 23px;"><b>CASH RECEIVED FROM :- MR/MS&emsp;<span style="color:#000000;">....................................................................................&emsp;OF Rs.&emsp;.........................................................................................................................................&emsp;FOR&emsp;<span style="color:#000000;">.............................................................................................................................................</span></span></b></li>
                        <br/><br/>
                        
                      </ul>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-7">
                        <ul style="padding: 0;margin: 0;">
                        
                        
                        <li style="list-style: none;line-height: 23px;"><b>INVOICE VALUE<span style="color:#ffffff;visibility: hidden;">----------</span>:<span style="color:#000000;">&emsp;...........................</span></b></li>
                        <li style="list-style: none;line-height: 23px;"><b>AMOUNT RECEIVED<span style="color:#ffffff;visibility: hidden;">- --</span>:<span style="color:#000000;">&emsp;...........................</span></b></li>
                        <li style="list-style: none;line-height: 23px;"><b>BALANCE DUE<span style="color:#ffffff;visibility: hidden;">------ -----</span>:<span style="color:#000000;">&emsp;............................</span></b></li>
                      </ul>
                      </div>
                      <div class="col-md-5">
                      <table>
                        <tbody>
                          <tr>
                            <td style="text-align: center;"><?php if ($receipt_sql[0]['receipt_amount'] != "0") { ?>X <?php } ?></td>
                            <td style="text-align: left;">CASH</td>
                            <td><?php if ($receipt_sql[0]['receipt_amount'] != "0") { echo number_format($receipt_sql[0]['receipt_amount'], 2);} else {echo "   -   ";} ?></td>
                            
                          </tr>
                          <tr>
                            <td style="text-align: center;"><?php if ($receipt_sql[0]['receipt_cheque_amount'] != "0") { ?>X <?php } ?></td>
                            <td style="text-align: left;">CHEQUE</td>
                            <td><?php if ($receipt_sql[0]['receipt_cheque_amount'] != "0") { echo number_format($receipt_sql[0]['receipt_cheque_amount'], 2);} else {echo "   -   ";} ?></td>
                            
                          </tr>
                          <tr>
                            <td style="text-align: center;"><?php if ($receipt_sql[0]['receipt_direct_deposit_amount'] != "0") { ?>X <?php } ?></td>
                            <td style="text-align: left;">DEPOSIT</td>
                            <td><?php if ($receipt_sql[0]['receipt_direct_deposit_amount'] != "0") { echo number_format($receipt_sql[0]['receipt_direct_deposit_amount'], 2);} else {echo "   -   ";} ?></td>
                          
                          </tr>
                          
                        </tbody>

                        
                      </table>
                      <table style="margin-top: 20px;">
                        <tbody>
                           <?php if ($receipt_sql[0]['receipt_cheque_amount'] != "0") { ?>
                          <tr>
                            <td colspan="2" style="text-align: left;">CHEQUE NO</td>
                            <td style="text-align: left;"><?php echo $receipt_sql[0]['receipt_cheque_number']; ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" style="text-align: left;">CHEQUE DATED</td>
                            <td style="text-align: left;"><?php echo $receipt_sql[0]['receipt_cheque_date']; ?></td>
                          </tr>
                          <tr>
                            <td colspan="2" style="text-align: left;">BANK</td>
                            <td style="text-align: left;"><?php echo $receipt_sql[0]['receipt_cheque_bank']; ?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12" style="width: 100%;">
                      
                      <br/>
                      <br/>
                      <br/>
                      <br/>
                      <h4 style="text-align: left;">...................................................<br>Cashier Signature</h4>
                    </div>
                    
                    </div>
                    
                     
                  </div>
                  
               </div>
            </div>
         <?php } ?>
            <input type="button" value="Create PDF" id="btPrint" onclick="createPDF()" class="btn mb-3 btn-primary btn-js-add" />

         </div>
          
          <?php } ?>

          <?php if (isset($_GET['jobcardid'])) { ?>
        <div class="col-sm-12 col-lg-8">

         <?php if ($jobcard_sql) { 
            $customer_id = $jobcard_sql[0]['job_card_customer_id'];
            $array = array('cid' => $customer_id);
            $c_sql = $db->query("SELECT * FROM tbl_galaxy_customer WHERE customer_id = :cid", $array);
          ?>
            <div class="iq-card" id="pdf">
               <div class="iq-card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <img src="http://system.galaxyprinterslk.com/images/logo-galaxy.png" style="width: 125px;margin-bottom: 5px;margin-top: 2px">
                      <p>Offset, Screen & Digital Printings</p>
                    </div>
                    <div class="col-md-4">
                      <p style="margin:0;font-size: 10px;"><img src="http://system.galaxyprinterslk.com/images/1.png" style="width:10px;margin-top: 2px">&emsp;5, Noel Senavirathna Mawatha, &emsp;&emsp;Kadurugas Jn, Kurunegala</p>
                      <p style="margin:0;font-size: 10px;"><img src="http://system.galaxyprinterslk.com/images/2.png" style="width:10px;margin-top: 2px" />&emsp;076 148 3360</p>
                      <p style="margin:0;font-size: 10px;"><img src="http://system.galaxyprinterslk.com/images/3.png" style="width:10px;margin-top: 2px" />&emsp;037 222 2502</p>
                      <p style="margin:0;font-size: 10px;"><img src="http://system.galaxyprinterslk.com/images/4.png" style="width:10px;margin-top: 2px" />&emsp;info@galaxyprinterslk.com</p>
                      <p style="margin:0;font-size: 10px;"><img src="http://system.galaxyprinterslk.com/images/5.png" style="width:10px;margin-top: 2px" />&emsp;www.galaxyprinterslk.com</p>

                    </div>
                  </div>
                  
                  <div class="pdf" style="text-align: center;">
                    <h1 style="text-align:center;padding-top:20px;font-weight: bolder;font-size: 3.152em;">JOB CARD <?php echo $jobcard_sql[0]['job_card_id']; ?></h1>
                  </div>
                  <table id="tbldesc" style="margin-bottom: 15px;margin-top: 25px;border:0;" class="mytab table table-striped">
                     <tbody>
                      <!-- <h3>1</h3> -->
                        <tr>
                          <td><b>NAME :</b> &emsp;</td>
                          <td style="text-align: left;"><?php echo $c_sql[0]['customer_name']; ?></td>
                          <td><b>&emsp;&emsp;JOB CARD NO :</b> &emsp;</td>
                          <td style="text-align: left;"><?php echo $jobcard_sql[0]['job_card_id']; ?></td>
                        </tr>
                        <tr>
                          <td><b>ADDRESS :</b> &emsp;</td>
                          <td style="text-align: left;"><?php echo substr($c_sql[0]['customer_address'], 0,32); ?></td>
                          <td><b>&emsp;&emsp;DATE &amp; TIME :</b> &emsp;</td>
                          <td style="text-align: left;"><?php echo $jobcard_sql[0]['job_card_date_time']; ?></td>
                        </tr>
                        <tr>
                          <td><b>CONTACT NO :</b> &emsp;</td>
                          <td style="text-align: left;"><?php echo $c_sql[0]['customer_number']; ?></td>
                          <td><b>QTY :</b> &emsp;</td>
                          <td style="text-align: left;"><?php echo $jobcard_sql[0]['job_card_qty']; ?></td>
                        </tr>
                        <tr>
                          <td><b>ITEM :</b> &emsp;</td>
                          <td style="text-align: left;"><?php echo substr($jobcard_sql[0]['job_card_job_type'], 0,32); ?></td>
                          <td><b>SALES MAN :</b> &emsp;</td>
                          <td style="text-align: left;"><?php echo $jobcard_sql[0]['job_card_salesman']; ?></td>
                        </tr>
                     </tbody>
                  </table>
                  <div class="line"></div>
                  <div class="row">
                  <div class="col-md-7" style="">
                    <br>
                    <label style="font-weight: bolder">PAPER</label>
                    <table id="datatable" class="table table-striped table-bordered">
                       
                       <tbody>
                           <tr>
                               <td style="font-weight: bolder">BANK</td>
                               <td>60</td>
                               <td>70</td>
                               <td>80</td>
                               <td>100</td>
                               <td style="color:#ffffff;">----</td>
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">ART PAPER</td>
                               <td>100</td>
                               <td>120</td>
                               <td>150</td>
                               <td></td>
                               <td></td>
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">NCR</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">DEMAIN</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">STICKER</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                           </tr>
                      </tbody>
                       
                   </table>
                   
                   <br>
                   <label style="font-weight: bolder">OTHER</label>
                    <table id="datatable" class="table table-striped table-bordered" style="text-align:left;">
                       
                       <tbody>
                           <tr>
                               <td style="font-weight: bolder">PAGES</td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">LAMINATING</td>
                               <td>MATE</td>
                               <td>GLOSS</td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">ORIENTATION</td>
                               <td>LANDSCAPE</td>
                               <td>PORTRAIT</td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">SAMPLE</td>
                               <td>YES</td>
                               <td>NO</td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">DUPLICATE</td>
                               <td>1</td>
                               <td>2</td>
                               <td>3</td>
                               <td>4</td>
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">PERPARATE</td>
                               <td>YES</td>
                               <td>NO</td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">NUMBERING</td>
                               <td>YES</td>
                               <td>FROM&emsp;&emsp;&emsp;&emsp;</td>
                               <td>TO&emsp;&emsp;&emsp;&emsp;</td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">BOOK NUM</td>
                               <td>YES</td>
                               <td>FROM&emsp;&emsp;&emsp;&emsp;</td>
                               <td>TO&emsp;&emsp;&emsp;&emsp;</td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">BINDING</td>
                               <td>TOP</td>
                               <td>SIDE</td>
                               <td>PERFECT</td>
                               <td>C.WIRED</td>
                           </tr>
                           
                           
                           
                      </tbody>
                       
                   </table>
                  
                  </div>
                  <div class="col-md-5" style=""><br>
                    <label style="font-weight: bolder">BOARD</label>
                    <table id="datatable" class="table table-striped table-bordered">
                       
                       <tbody>
                           <tr>
                               <td style="font-weight: bolder">IVERY BOARD</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">ICE BOARD</td>
                               <td>SILVER</td>
                               <td>GOLD</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">ART BOARD</td>
                               <td>230</td>
                               <td>260</td>
                               <td>310</td>
                               <td></td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">BOX BOARD</td>
                               <td>250</td>
                               <td>300</td>
                               <td>350</td>
                               <td>400</td>
                               <td>450</td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">BRIS BOARD</td>
                               <td>WHITE</td>
                               <td>BLUE</td>
                               <td>GREEN</td>
                               <td>PINK</td>
                               <td>YELLOW</td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">OTHER</td>
                               <td colspan="5"></td>
                               
                               
                           </tr>
                           
                      </tbody>
                       
                   </table>
                   <br>
                   <label style="font-weight: bolder">SIZE</label>
                    <table id="datatable" class="table table-striped table-bordered">
                       
                       <tbody>
                           <tr>
                               <td>A6</td>
                               <td>A2</td>
                               <td>Legal</td>
                               <td style="color:#ffffff;">----</td>
                               
                           </tr>
                           <tr>
                               <td>A5</td>
                               <td>B5</td>
                               <td>Letter</td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td>A4</td>
                               <td>B4</td>
                               <td>3 into A4</td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td>A3</td>
                               <td>B3</td>
                               <td>3 into A3</td>
                               <td></td>
                               
                           </tr>
                           
                      </tbody>
                       
                   </table>
                   
                   <br>
                   <label style="font-weight: bolder">SIDES & COLORS</label>
                    <table id="datatable" class="table table-striped table-bordered">
                       
                       <tbody>
                           <tr>
                              <td style="width: 25%;">SINGLE</td>
                               <td>1</td>
                               <td>2</td>
                               <td>3</td>
                               <td>4</td>
                               
                               
                           </tr>
                            <tr>
                              <td rowspan="2">DOUBLE</td>
                               <td>1</td>
                               <td>2</td>
                               <td>3</td>
                               <td>4</td>
                               
                               
                           </tr>
                            <tr>
                              
                               <td>1</td>
                               <td>2</td>
                               <td>3</td>
                               <td>4</td>
                               
                               
                           </tr>
                            <tr>
                              
                               <td style="color:#ffffff;">-</td>
                               <td colspan="2" style="color:#ffffff;">-</td>
                               <td colspan="2"></td>
                               <!-- <td></td>
                                <td></td> --> 
                               
                               
                           </tr>
                           
                           
                      </tbody>
                       
                   </table>

                  </div>
                  
                  </div>
                  <div class="line"></div>
                  <div class="row">
                    <div class="col-md-12 stat" style="margin-top: 15px;">
                       <label style="font-weight: bolder">JOB STATUS</label>
                    <table id="datatable" class="table table-striped table-bordered" style="text-align:left;">
                       
                       <tbody>
                           <tr>
                               <th style="text-align: center;font-weight: bolder">TITLE</th>
                               <th style="text-align: center;font-weight: bolder">DATE</th>
                               <th style="text-align: center;font-weight: bolder">START (TIME)</th>
                               <th style="text-align: center;font-weight: bolder">END (TIME)</th>
                               <th style="text-align: center;font-weight: bolder">SIGN</th>
                               <th style="text-align: center;font-weight: bolder">REMARKS</th>
                               
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">PRODUCTION INCHARGE</td>
                               <td style="color:#ffffff;">------------</td>
                               <td style="color:#ffffff;">------------</td>
                               <td style="color:#ffffff;">------------</td>
                               <td style="color:#ffffff;">------------</td>
                               <td style="color:#ffffff;">---------------------------------------------</td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">DESIGNING</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">METERIALS ISSUED</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">PRINTING</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">QUALITY CHECK</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               
                           </tr>
                           <tr>
                               <td style="font-weight: bolder">PACKING</td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               
                           </tr>
                           
                           
                           
                           
                      </tbody>
                       
                   </table>
                   <p><br>Remarks :- ...........................................................................................................................................................................................................</p>
                    </div>
                    <div class="col-md-4 stat" style="">
                       <label style="font-weight: bolder"></label>
                    <table id="datatable" class="table table-striped table-bordered" style="text-align:left;">
                       
                       <tbody>
                           <tr>
                               <td></td>
                               <td style="text-align: center;font-weight: bolder">SIGN</td>
                               <td style="text-align: center;font-weight: bolder">DATE</td>
                               
                            </tr>
                           <tr>
                               <td style="font-weight: bolder">INVOICING</td>
                               <td style="color:#ffffff;">---------------</td>
                               <td style="color:#ffffff;">---------------</td>
                               
                            </tr>
                            <tr>
                               <td style="font-weight: bolder">DELIVERY</td>
                               <td></td>
                               <td></td>
                               
                            </tr>
                            <tr>
                               <td style="font-weight: bolder">GATE PASS</td>
                               <td></td>
                               <td></td>
                               
                            </tr>
                           
                           
                           
                           
                           
                      </tbody>
                       
                   </table>
                    </div>
                    <div class="col-md-5 stat" style="">
                      <label style="font-weight: bolder"></label>
                    <table id="datatable" class="table table-striped table-bordered" style="text-align:left;">
                       
                       <tbody>
                           <tr>
                               
                               <td style="font-weight: bolder">DESIGNER NAME</td>
                               <td style="color:#ffffff;">------------------------</td>
                               
                            </tr>
                           <tr>
                               <td style="font-weight: bolder">CHECKED BY</td>
                               <td style="color:#ffffff;">------------------------</td>
                             
                               
                            </tr>
                            <tr>
                               <td style="font-weight: bolder">APPROVED BY</td>
                              <td style="color:#ffffff;">------------------------</td>
                               
                               
                            </tr>
                            <tr>
                               <td style="font-weight: bolder">DELIVERY DATE</td>
                               <td style="color:#ffffff;">------------------------</td>
                               
                               
                            </tr>
                          
                           
                           
                           
                           
                      </tbody>
                       
                   </table>
                    </div>
                    <div class="col-md-3 stat" style="">
                        <table id="datatable" class="table table-striped table-bordered" style="text-align:left;">
                       
                       <tbody>
                           <tr>
                               <td style="color:#ffffff;">------------------------</td>
                               <td style="font-weight: bolder">SALESMAN SIGNATURE</td>
                               
                               
                            </tr>
                           <tr>
                              <td style="color:#ffffff;">------------------------</td>
                               <td style="font-weight: bolder">REG SIGNATURE</td>
                              
                             
                               
                            </tr>
                            
                          
                           
                           
                           
                           
                      </tbody>
                       
                   </table>
                    </div>
                  </div>
                  <!-- <div class="row">
                     <div class="col-md-12">
                        <h6></h6>
                        
                        <h6>...................................................<br>Signature</h6>
                        
                     </div>
                     
                  </div> -->
               
               </div>
            </div>
         <?php } ?>
            <input type="button" value="Create PDF" id="btPrint" onclick="createPDF()" class="btn mb-3 btn-primary btn-js-add" />

         </div>
          <?php } ?>

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
         

        var sTable = document.getElementById('pdf').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 13px Calibri;}";
        style = style + "table, th, td {border: solid 1px #908f8f; border-collapse: collapse;text-transform:uppercase;";
        style = style + "padding: 3px 3px;text-align: right;} .mytab th, .mytab td {border: solid 0px #DDD !important;}";
        style = style + ".gros {background: #b2d4ef;}";
        style = style + "td {text-transform:uppercase !important;} .myname {text-transform: capitalize;}";
        style = style + ".unit {background: #6089ab;color: #ffffff;}";
        style = style + ".removebtn {display:none;}";
        style = style + ".col-md-3 {width:23%;float:left;padding-right:5px;}";
        style = style + ".col-md-2 {width:13%;float:left;padding-right:5px;}";
        style = style + ".col-md-6 {width:47%;float:left;padding-right:5px;}";
        style = style + ".col-md-7 {width:53%;float:left;padding-right:5px;}";
        style = style + ".col-md-5 {width:43%;float:left;padding-right:5px;}";
        style = style + ".col-md-4 {width:23%;float:left;padding-right:5px;padding-bottom:15px;}";
        style = style + ".col-md-8 {width:73%;float:left;padding-right:5px;}";
        style = style + ".col-md-12 {width:99%;float:left;padding-right:5px;padding-top15px;}";
        style = style + ".td {width:15% !important;}";
        style = style + ".stat {margin-top:10px;}";
         style = style + ".tag {border-bottom: 1px solid #bdbdbd;margin-bottom: 15px;}";
        style = style + "body {font-size:11.8px;color:#000000;}";
        style = style + ".line {border-top: 0.5px solid #000000;}";
        style = style + ".linebottom {border-bottom: 0.5px solid #9c9c9c;}";
        style = style + ".my-table, .my-table td, .my-table th {border: 0px solid #d8d8d8 !important;text-align:left;padding:5px;}";
        style = style + ".table-bordered td, .table-bordered th {border: 1px solid #000000 !important;}";
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
