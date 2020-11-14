               <!-- Page Content  -->
         <script>
   function showUser(str) {
            if (str == "") {
              document.getElementById("pricing").innerHTML = "";
              return;
            } else {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("pricing").innerHTML = this.responseText;

                }
              };
              xmlhttp.open("GET","pricedata.php?q="+str,true);
              xmlhttp.send();
               
            }
           
             
          }
</script>
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-7">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Costing</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <!-- <form>
                           <select name="users" onchange="">
                             <option value="">Select a person:</option>
                             <option value="ARTP100CH">Peter Griffin</option>
                             <option value="ARTP100CK">jilll</option>
                             
                             </select>
                           </form>
                           <div id="txtHint"><b>Person info will be listed here.</b></div> -->
                           <form method="post">
                              <div class="form-row details">
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">Name</label>
                                    
                                    <input type="text" class="form-control" name="name" id="name" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">Description</label>
                                    
                                    <input type="text" class="form-control" name="desc" id="desc" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">Qty</label>
                                    
                                    <input type="number" class="form-control" name="qty_main" id="qty_main" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                 </div>
                              </div>
                              <div class="line"></div>
                              <div class="form-row">
                                 <div class="col-md-6 mb-6 seperate">
                                    <label for="validationTooltip04">Paper/Board</label>
                                          <select class="custom-select cost-main-menu" id="maincat" name="size" required>
                                             <option selected disabled value="">Choose...</option>
                                             <?php if ($dropdown_data) {
                                                for ($c=0; $c < count($dropdown_data); $c++) { ?>
                                             <option value="<?php echo $dropdown_data[$c]['item_id']; ?>"><?php echo $dropdown_data[$c]['item_name']; ?></option>
                                             <?php }} ?>
                                             <option value="44">Default</option>
                                       </select>
                                       <div id="check" class="red box form-my">You have selected <strong>red option</strong> so i am here</div>
  
                                 </div>
                                 <div class="col-md-3 mb-3">
                                     <label for="exampleInputDisabled1"><code>Cost price</code></label>
                                    <input type="text" name="cost" id="costprice" class="form-control result" disabled>
                                 </div>
                                 <div class="col-md-3 mb-3">
                                    <label for="exampleInputDisabled1"><code>Selling Price</code></label>
                                    <input type="text" name="sell" id="sellingprice" class="form-control result" disabled>
                                 </div>
                              </div>
                              <div class="form-row" id="loadd">
                                 <div class="" id="artboard">
                                    
                                 </div>
                              </div>
                                 <div class="line"></div>
                                 <div class="form-row" id="ld">
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">artwork<code>(qty)</code></label>
                                    
                                    <input type="number" class="form-control" name="artwork" id="artwork" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Name.
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">plate<code>(qty)</code></label>
                                    
                                    <input type="number" class="form-control" name="plate" id="plate" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Item.
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">laminating<code>(qty)</code></label>
                                    
                                    <input type="number" class="form-control" name="laminating" id="laminating" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">die cutter<code>(cost)</code></label>
                                    
                                    <input type="number" class="form-control" name="die_cutter" id="die_cutter" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">die cutting charge<code>(qty)</code></label>
                                    
                                    <input type="number" class="form-control" name="die_cutting_charge" id="die_cutting_charge" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">perparization<code>(qty)</code></label>
                                    
                                    <input type="number" class="form-control" name="perparization" id="perparization" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>

                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">transport<code>(cost)</code></label>
                                    
                                    <input type="number" class="form-control" name="transport" id="transport" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">other<code>(cost)</code></label>
                                    
                                    <input type="number" class="form-control" name="other" id="other" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">impression<code>(qty)</code></label>
                                    
                                    <input type="number" class="form-control" name="impression" id="impression" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">Margin<code>(Percentage)</code></label>
                                    
                                    <input type="text" class="form-control" maxlength="2" pattern="([0-9]|[0-9]|[0-9])" name="margin" id="margin" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 
                                 
                                 
                              </div>
                              <div class="line"></div>
                                 <div class="row">
                                   <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">Quoted Price<code>(cost)</code></label>
                                    
                                    <input type="number" class="form-control" name="qprice" id="qprice" autocomplete="off" required>
                                    <div class="invalid-tooltip">
                                       Please add a Address.
                                    </div>
                                 </div>
                                 </div>
                              <div class="form-row">
                                 <!-- <div class="col-md-2 mb-3">
                                 <input type="hidden" value="hii" id="btnClickedValue_0" name="valuee" style="width: 100%;" value="" /> -->

                              <!-- <div class="form-group" style="padding: 15px 0 0 0; margin: 0;"> -->
                                 
                                 <!-- <button name="btn-add" class="btn btn-primary" onclick="myadBtn()" id="submitt" type="submit">Add</button> --><!-- <input type="submit" value="Join"> -->

                              <!-- </div> -->
                              <!-- </div>  -->
                              <div class="col-md-4 mb-3">
                              <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <button type="button" name="view-result" onclick="settotable()" id="setup" class="btn mb-3 btn-primary btn-js-add"><i class="ri-bill-fill"></i>View Result</button>
                              </div>
                                
                              </div>
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
                  
                  <div class="col-sm-12 col-md-6 col-lg-5">
                  
                     <!-- Table start -->
                        <div class="iq-card" id="pdf">
                           <!-- <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Details</h4>
                              </div>
                           </div> -->
                           <div class="iq-card-body">
                              <img src="<?php echo HTTP_PATH; ?>images/logo-galaxy.png" style="width: 125px;margin-bottom: 30px;">
                              <table id="tbldesc" style="margin-bottom: 15px;">
                                 <tr>
                                   <td><b>NAME</b> &emsp;</td>
                                   <td><span id="displayname"></span></td>
                                   <td><b>&emsp;&emsp;DESCRIPTION</b> &emsp;</td>
                                   <td><span id="displaydesc"></span></td>
                                 </tr>
                                 <tr>
                                   <td><b>QTY</b> &emsp;</td>
                                   <td><span id="displayqty"></span></td>
                                   <td><b>&emsp;&emsp;DATE &amp; TIME</b> &emsp;</td>
                                   <td><span id="dtime"></span></td>
                                 </tr>
                                 
                              </table>
                              <table class="table table-striped one" id="mytbl">
                                 <div class="row">
                                    
                                 
                                
                                 </div>
                                 
                                 <!-- <div class="col-md-3 mb-3"><h5>METERIALS : </h5></div> -->
                                 
                                 
                                 

                                 <thead>
                                    <tr>
                                       <!-- <th scope="col">Option</th> -->
                                       <th scope="col">Description</th>
                                       <th scope="col">Quantity</th>
                                       <!-- <th scope="col">Cost</th>
                                       <th scope="col">S/P</th> -->
                                       <th scope="col">Actual Price</th>
                                       <th scope="col">Selling Price</th>
                                    </tr>
                                    
                                 </thead>
                                 <tbody>
                                   
                                    
                                   
                                 </tbody>
                                 <div class="totals"></div>
                                 
                                 
                              </table>
                              <div class="row">
                                    <div class="col-md-12">
                                       <h6>Remarks :- ......................................................................................................................................................</h6>
                                       
                                       <h6>......................&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;......................&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;......................<br>Prepared by&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Checked By&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Approved by</h6>
                                       
                                    </div>
                                    
                                 </div>
                              <!-- <table class="table table-striped second" onclick="" id="">
                                 
                                 <tbody>
                                   
                                    
                                   
                                 </tbody>
                              </table> -->
                           </div>
                           </div>
                           <iframe id="txtArea1" style="display:none"></iframe>
                           <button id="btnExport" onclick="fnExcelReport();"> EXEL </button>
                           <!-- <button id="btnpdf">PDF</button>
                               <button onclick="javascript:demoFromHTML();">generate PDF</button> -->
                               <input type="button" value="Create PDF" 
            id="btPrint" onclick="createPDF()" />
                           <!-- Table end -->
                           <!-- Use a button to open the snackbar -->
                           <form method="post">
   <p><input type="button" id="bt"  style="visibility: hidden;" value="Show Table Data"/></p>
       <p id="info" style="visibility: hidden;"></p>


   <input type="submit" name="btn-add-final" onclick="" value="subbb"  style="visibility: hidden;">
   </form>
<!-- The actual snackbar -->
                     <div id="snackbar-item-limit"><i class="fa fa-exclamation-triangle"></i>You Can Only ad 5 Items</div>
                  </div>
               </div>
               <!-- <input type="radio" class="timespan" name="timespan" value="ongoing">On-going
<input type="radio" class="timespan" name="timespan" value="history">Historical
    <div class="end_date">End Date</div> -->

<!-- <h1>"The value for number is: " <span id="myText"></span></h1> -->

               
            </div>
         </div>
         <input type="hidden" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled>
         <button type="hidden" name="add" id="add" class="btn mb-3 btn-primary btn-js-add"></button>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         <script>
            window.globalvar = "costpage";

            $(document).ready(function() {
  $("select").change(function() {
    $(this).find("option:selected").each(function() {
      var optionValue = $(this).attr("value");

      // Art Board------------------------------
      if (optionValue == "1") {   
         var main_cat;
         $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         
         
         $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">GSM</label><select class="custom-select gsm" name="gsm" onChange="artboardchange();" id="gsm" required><option selected disabled value="">Choose...</option><option value="230">230</option><option value="260">260</option><option value="270">270</option><option value="310">310</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" onChange="artboardchange();" name="brand" id="brand" required><option selected disabled value="">Choose...</option><option value="gc">GC</option><option value="bohui">Bohui</option><option value="unbrand">Unbrand</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="artboardBtnOnclick()" class="btn mb-2 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';
         // Art board getting cost and selling price-------------------------------
            
               $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*actual_sellingprice).toFixed(2);
                     }
                   });
               });
      
 
            //-----------------------------------------------------------------------------
        
      } else {
         
          document.getElementById("artboard").innerHTML = '';
          
      }

      // Ivery Board------------------------------
      if (optionValue == "5") {
         var main_cat;
         $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';
         
         
         $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required></div><div class="col-md-3 mb-3"><button type="button" onclick="iveryBtnOnclick()" class="btn mb-3 btn-primary btn-add-ivery" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';
        // IVERY Board getting cost and selling price-------------------------------
      
      // IVERY Board
         $(document).ready(function(){
            window.item_id = "IVERY";
            if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }

                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*window.actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*window.actual_sellingprice).toFixed(2);
                     }
                   });
               });
         //-----------------------------------------------------------------------------
         
      } else {

      }

       // Ice Gold Board------------------------------
      if (optionValue == "6") {
         $('#loadd').removeClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();

        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required disabled></div><div class="col-md-3 mb-3"><button type="button" onclick="icegoldBtnOnclick()" class="btn mb-3 btn-primary btn-add-ivery" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';

        // ICE GOLD getting cost and selling price-------------------------------
         
        $(document).ready(function(){
            window.item_id = "ICEG";
            if (window.globalvar == "costpage") {
              showUser(window.item_id);
              $('#pricing').append($(window.test));
              pricechange();
          }

                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*window.actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*window.actual_sellingprice).toFixed(2);
                     }
                   });
               });
         //-----------------------------------------------------------------------------
      }else {

      }

      // Box Board-------------------------------------------------------------------
      if (optionValue == "10") {
         $('#loadd').addClass('cost-seperate')
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">GSM</label><select class="custom-select" onChange="boxboardchange();" id="gsm" name="gsm" required><option selected disabled value="">Choose...</option><option value="250">250</option><option value="300">300</option><option value="350">350</option><option value="400">400</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" onChange="boxboardchange();" id="brand" name="brand" required><option selected disabled value="">Choose...</option><option value="sripathi">Sripathi</option><option value="sripathi">Sripathi</option><option value="kerani">Kerani</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" disabled required></div><div class="col-md-2 mb-2  js-form"><button type="button" onclick="boxboardBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';
           
           $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*actual_sellingprice).toFixed(2);
                     }
                   });
               });

      } else {

      }
      // end Box Board-------------------------------------------------------------------

      // Bristal Board--------------------------------------------------------------------------------
      if (optionValue == "11") {
         $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Color</label><select class="custom-select" id="clr" onChange="bristalboardchange();" name="color" required><option selected disabled value="">Choose...</option><option value="white">White</option><option value="green">Green</option><option value="blue">Blue</option><option value="pink">Pink</option><option value="yellow">Yellow</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" onChange="bristalboardchange();" name="brand" id="brand" required><option selected disabled value="">Choose...</option><option value="spb">SPB</option><option value="unbrand">Unbrand</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" disabled required></div><div class="col-md-2 mb-2 js-form"><button type="button" onclick="bristalboardBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';

        
               $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*actual_sellingprice).toFixed(2);
                     }
                   });
               });
          } else {

      }
      // End Bristal Board--------------------------------------------------------------------------------
      // NCR Paper-------------------------------------------------------------------
      if (optionValue == "13") {
         $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">NCR</label><select class="custom-select gsm" name="ncr" onChange="ncrboardchange();" id="ncr" required><option selected disabled value="">Choose...</option><option value="NCR_Top_white_(carbonized)">NCR Top white (carbonized)</option><option value="NCR_Middle_Blue_(carbonized)">NCR Middle Blue (carbonized)</option><option value="NCR_middle_pink_(carbonized)">NCR middle pink (carbonized)</option><option value="NCR_middle_green">NCR middle green</option><option value="NCR_Bottom_yellow">NCR Bottom yellow</option><option value="NCR_Bottom_pink">NCR Bottom pink</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" onChange="ncrboardchange();" name="brand" id="brand" required><option selected disabled value="">Choose...</option><option value="Pindo 2000">Pindo 2000</option><option value="adler">Adler</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-2 mb-2  js-form"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" disabled required></div><div class="col-md-2 mb-2 js-form"><button type="button" onclick="ncrBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';

              $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*actual_sellingprice).toFixed(2);
                     }
                   });
               });
         } else {

      }
      // NCR Paper End---------------------------------------------------------------
      // Demain Paper-----------------------------------------------------------------
      if (optionValue == "19") {
         $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Demain</label><select class="custom-select gsm" name="demain" onChange="demainchange();" id="demain" required><option selected disabled value="">Choose...</option><option value="Yellow_Demain_(Udawatta)">Yellow Demain (Udawatta)</option><option value="pink_demain">Pink Demain</option><option value="NP_48_White_Demain_(Ranpath)">N/P 48 White Demain (Ranpath)</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" disabled required></div><div class="col-md-3 mb-3 js-form"><button type="button" onclick="demainBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';
            
            $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*actual_sellingprice).toFixed(2);
                     }
                   });
               });
         } else {

      }

      // End Demain Paper-----------------------------------------------------------------
      // Cover Paper-----------------------------------------------------------------
      if (optionValue == "21") {
         $('#loadd').removeClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

        $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Cover Paper</label><select class="custom-select gsm" name="cover" onChange="coverchange();" id="cover" required><option selected disabled value="">Choose...</option><option value="cover_paper_pink">Cover Paper (Pink)</option><option value="cover_paper_green">Cover Paper (Green)</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required  disabled></div><div class="col-md-3 mb-3 js-form"><button type="button" onclick="coverBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';

             $(document).ready(function(){
               
               $('#pricing').append($(window.test));

                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*window.actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*window.actual_sellingprice).toFixed(2);
                     }
                   });
               });
   } else {

      }
      // End Cover Paper-----------------------------------------------------------------
      // Bank Paper-------------------------------------------------------------------------
      if (optionValue == "23") {
         $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">GSM</label><select class="custom-select" name="bank" id="bank" onChange="bankchange();" id="validationTooltip04" required><option selected disabled value="">Choose...</option><option value="60(short)">60 (Short)</option><option value="60(long)">60 (Long)</option><option value="70">70</option><option value="80">80</option><option value="100">100</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" id="brand" onChange="bankchange();" required><option selected disabled value="">Choose...</option><option value="INDAHKIAT_BILT">INDAH KIAT-BILT</option><option value="Built">Built<option value="Unbrand">Unbrand</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-2 mb-2 js-form"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" disabled required></div><div class="col-md-2 mb-2 js-form"><button type="button" onclick="bankBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';
      
               $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*actual_sellingprice).toFixed(2);
                     }
                   });
               });
          } else {

      }
      // End Bank Paper-------------------------------------------------------------------------
      // Art Paper-------------------------------------------------------------------------------
      if (optionValue == "27") {
         $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Art paper</label><select class="custom-select" name="artpaper" onChange="artchange();" id="artpaper" required><option selected disabled value="">Choose...</option><option value="Art_paper_100_GSM_(Chinese)">Art paper 100 GSM (Chinese)</option><option value="Art_paper_120_GSM_(Chinese)">Art paper 120 GSM (Chinese)</option><option value="Art_paper_150_GSM_(Nevia)">Art paper 150 GSM (Nevia)</option></select></div></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" disabled required></div><div class="col-md-3 mb-3 js-form"><button type="button" onclick="artBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';
         
        $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*actual_sellingprice).toFixed(2);
                     }
                   });
               });
          } else {

      }
      // End Art Paper-------------------------------------------------------------------------------
      if (optionValue == "43") {
        $('#loadd').removeClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();

        document.getElementById("artboard").innerHTML = '<div class="col-md-4 mb-4 js-form"><label for="validationTooltip04">Price</label><select class="custom-select" name="pricing" onChange="pricechange()" id="pricing" required><option selected disabled value="">Choose...</option></select></div><div class="col-md-4 mb-4 js-form"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required disabled></div><div class="col-md-4 mb-4 js-form"><button type="button" onclick="stickerBtnOnclick()" class="btn mb-3 btn-primary btn-add-ivery" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div>';
        // Art board getting cost and selling price-------------------------------
         
        $(document).ready(function(){
         window.item_id = "STCKR";
               if (window.globalvar == "costpage") {
                    showUser(window.item_id);
                    $('#pricing').append($(window.test));
                    pricechange();
                }
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       document.getElementById('costprice').value = (inputTextValue*actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*actual_sellingprice).toFixed(2);
                     }
                   });
               });
         //-----------------------------------------------------------------------------
      }else {

      }
      if (optionValue == "44") {
        //  $('#loadd').removeClass('cost-seperate');
        // $('.artboard').show();
      }
    });
  }).change();
});


</script>


<script src="<?php echo HTTP_PATH; ?>js/bristalboard.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/boxboard.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/icegold.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/ivery.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/artboard.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/ncr.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/demain.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/cover.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/bank.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/artpaper.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/sticker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="<?php echo HTTP_PATH; ?>js/valueconvert.js"></script>

    <script> 
         
        var button = document.getElementById("setup"); 
        var textBox = document.getElementById("margin"); 
  
        // This event is fired when button is clicked 
       
  
        textBox.addEventListener("keydown", function (event) { 
  
            // Checking if key pressed is ENTER or not 
            // if the key pressed is ENTER 
            // click listener on button is called 
            if (event.keyCode == 13) { 
                button.click(); 
            } 
        }); 
    </script> 

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnpdf", function () {
            html2canvas($('#second')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("cutomer-details.pdf");
                }
            });
        });
    </script>
         
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
        style = style + "padding: 2px 3px;text-align: right;}";
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

var inputBox = document.getElementById('name');
var inputdesc = document.getElementById('desc');
var inputqty = document.getElementById('qty_main');

inputBox.onkeyup = function(){
    document.getElementById('displayname').innerHTML = inputBox.value;
}
inputdesc.onkeyup = function(){
    document.getElementById('displaydesc').innerHTML = inputdesc.value;
}
inputqty.onkeyup = function(){
    document.getElementById('displayqty').innerHTML = inputqty.value;
}

</script>  
