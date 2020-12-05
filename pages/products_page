 <style>
  #btn-add-data {
    display: none;
    visibility: hidden;
  }
 </style>              <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-8">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Price List</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form method="post">
                              <select id="pricing" style="visibility: hidden;">
                               <option selected disabled value="">Choose...</option>
                                <option value="1">hiii</option>
                              </select>
                              
                              <div class="form-row">
                                 <div class="col-md-6 mb-6 seperate">
                                    <label for="validationTooltip04">Paper/Board</label>
                                          <select class="custom-select cost-main-menu" id="maincat" name="size" required>
                                             <option selected disabled value="">Choose...</option>
                                             <?php if ($dropdown_data) {
                                                for ($c=0; $c < count($dropdown_data); $c++) { ?>
                                             <option value="<?php echo $dropdown_data[$c]['item_id']; ?>"><?php echo $dropdown_data[$c]['item_name']; ?></option>
                                             <?php }} ?>
                                             <!-- <option value="44">Default</option> -->
                                       </select>
                                       <div id="check" class="red box form-my">You have selected <strong>red option</strong> so i am here</div>
  
                                 </div>
                                 <div class="col-md-3 mb-3">
                                     
                                    <input type="hidden" name="cost" id="costprice" class="form-control result" disabled>
                                 </div>
                                 <div class="col-md-3 mb-3">
                                    
                                    <input type="hidden" name="sell" id="sellingprice" class="form-control result" disabled>
                                 </div>
                              </div>
                              <div class="form-row" id="loadd">
                                 <div class="" id="artboard">
                                    
                                 </div>
                              </div>
                                 <div class="line"></div>
                                 
                              <div class="form-row">
                                 <!-- <div class="col-md-2 mb-3">
                                 <input type="hidden" value="hii" id="btnClickedValue_0" name="valuee" style="width: 100%;" value="" /> -->

                              <!-- <div class="form-group" style="padding: 15px 0 0 0; margin: 0;"> -->
                                 
                                 <!-- <button name="btn-add" class="btn btn-primary" onclick="myadBtn()" id="submitt" type="submit">Add</button> --><!-- <input type="submit" value="Join"> -->

                              <!-- </div> -->
                              <!-- </div>  -->
                              <div class="col-md-4 mb-3">
                                <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <!-- <input type="submit" class="btn mb-3 btn-primary btn-js-add" id="sub-btn" name="btn-submit"> -->
                                 <button type="submit" name="add" id="add" class="btn mb-3 btn-primary btn-js-add">Submit</button>
                              </div>
                             <!--  <div class="form-group" style="padding: 15px 0 0 0; margin: 0;">
                                 <button type="button" name="view-result" onclick="settotable()" id="setup" class="btn mb-3 btn-primary btn-js-add"><i class="ri-bill-fill"></i>View Result</button>
                              </div> -->
                                
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
                     <div id="clz">
                          <button id="mtbt">erger</button>
                            <?php include 'price-table.php'; ?>
                     </div>
                     
                  
                    

                  </div>
                  
                  <div class="col-sm-12 col-md-3 col-lg-4">
                  
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">SHORT CODES</h4>
                           </div>
                           
                        </div>
                        <div class="iq-card-body">
                           <ul class="iq-timeline">
                              <li>
                                 <div class="timeline-dots"></div>
                                 <h4 class="float-left mb-1">ART BOARD</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>ABGC230 -------------- ART BOARD GC 230 GSM</h5>
                                    <h5>ABUN260 -------------- ART BOARD UNBRAND 260 GSM</h5>
                                    <h5>ABGC310 -------------- ART BOARD GC 310 GSM</h5>
                                    <h5>ABBH230 -------------- ART BOARD Bohui 230 GSM</h5>
                                    <h5>ABUN270 -------------- ART BOARD UNBRAND 270 GSM</h5>

                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-success"></div>
                                 <h4 class="float-left mb-1">IVERY BOARD</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>IVERY -------------- IVERY BOARD</h5>
                                    
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-danger"></div>
                                 <h4 class="float-left mb-1">ICE GOLD</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>ICEG -------------- ICE GOLD</h5>
                                    
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-primary"></div>
                                 <h4 class="float-left mb-1">BOX BOARD</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>BXBKER300 -------------- BOX BOARD KERANI 300 GSM</h5>
                                    <h5>BXBSRI350 -------------- BOX BOARD SRIPATHI 350 GSM</h5>
                                    <h5>BXBSRI400 -------------- BOX BOARD SRIPATHI 400 GSM</h5>
                                    <h5>BXBKER250 -------------- BOX BOARD KERANI 250 GSM</h5>

                                    
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-warning"></div>
                                 <h4 class="float-left mb-1">BRISTAL BOARD</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>BRSTLBUNBLU -------------- BRISTAL BOARD UNBRAND BLUE</h5>
                                    <h5>BRSTLBUNWHT -------------- BRISTAL BOARD UNBRAND WHITE</h5>
                                    <h5>BRSTLBSPBPNK -------------- BRISTAL BOARD SPB PINK</h5>
                                    <h5>BRSTLBSPBYLW -------------- BRISTAL BOARD SPB YELLOW</h5>
                                    <h5>BRSTLBSPBGRN -------------- BRISTAL BOARD SPB GREEN</h5>
                                    
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots"></div>
                                 <h4 class="float-left mb-1">NCR</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>NCRTWCP2000 -------------- NCR TOP WHITE CARBONIZED PINDO 2000</h5>
                                    <h5>NCRMBCP2000 -------------- NCR MIDDLE BLUE CARBONIZED PINDO 2000</h5>
                                    <h5>NCRMPCP2000 -------------- NCR MIDDLE PINK CARBONIZED PINDO 2000</h5>
                                    <h5>NCRMGP2000 -------------- NCR MIDDLE GREEN CARBONIZED PINDO 2000</h5>
                                    <h5>NCRBYP2000 -------------- NCR BOTTOM YELLOW PINDO 2000</h5>
                                    <h5>NCRBPADLR -------------- NCR BOTTOM PINK ADLER</h5>
                                    <h5>NCRTWCADLR -------------- NCR TOP WHITE CARBONIZED ADLER</h5>

                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-primary"></div>
                                 <h4 class="float-left mb-1">DEMAIN</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>DMNYUDA -------------- DEMAIN YELLOW UDAWATTA</h5>
                                    <h5>DMNWNP48GE -------------- DEMAIN WHITE NP 48 GENERAL</h5>
                                    <h5>DMNWNP48RAN -------------- DEMAIN WHITE NP 48 RANPATH</h5>
                                    

                                    
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-success"></div>
                                 <h4 class="float-left mb-1">COVER PAPER</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>CVRP -------------- COVER PAPER</h5>
                                   

                                    
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-danger"></div>
                                 <h4 class="float-left mb-1">BANK PAPER</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>BNKUN60SH -------------- BANK PAPER UNBRAND 60 SHORT</h5>
                                    <h5>BNKB60 -------------- BANK PAPER BUILT 60</h5>
                                    <h5>BNKUN60LG -------------- BANK PAPER UNBRAND 60 LONG</h5>
                                    <h5>BNKB70 -------------- BANK PAPER BUILT 70</h5>
                                    <h5>BNKIB80 -------------- BANK PAPER INDAH KIAT-BLIT 80</h5>
                                    <h5>BNKUN100 -------------- BANK PAPER UNBRAND 100</h5>


                                    
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-warning"></div>
                                 <h4 class="float-left mb-1">ART PAPER</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>ARTP100CH -------------- ART PAPER 100 CHINESE</h5>
                                    <h5>ARTP120CH -------------- ART PAPER 120 CHINESE</h5>
                                    <h5>ARTP150N -------------- ART PAPER 150 NEVIA</h5>
                                    
                                    
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-primary"></div>
                                 <h4 class="float-left mb-1">STICKER PAPER</h4>
                                 
                                 <div class="d-inline-block w-100">
                                    <h5>STCKR -------------- STICKER PAPER</h5>
                                    
                                    
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>

                  </div>
                  <!-- <button type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit" aria-hidden="true"></i></button> -->
               </div>
               <!-- <input type="radio" class="timespan" name="timespan" value="ongoing">On-going
<input type="radio" class="timespan" name="timespan" value="history">Historical
    <div class="end_date">End Date</div> -->

<!-- <h1>"The value for number is: " <span id="myText"></span></h1> -->
              <div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-sm-12">
                              

                        </div>
                     </div>
                     
                  </div>
               </div>
               
            </div>

         </div>
         

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         <script>
          window.globalvar = "pricelist";


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
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">GSM</label><select class="custom-select gsm" name="gsm" onChange="artboardchange();" id="gsm" required><option selected disabled value="">Choose...</option><option value="230">230</option><option value="260">260</option><option value="270">270</option><option value="310">310</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" onChange="artboardchange();" name="brand" id="brand" required><option selected disabled value="">Choose...</option><option value="gc">GC</option><option value="bohui">Bohui</option><option value="unbrand">Unbrand</option></select></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" required></div><input type="hidden" name="item_id" value="" id="item_id"><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" autocomplete="off" class="form-control js-form" value="" id="price" disabled required></div><button type="hidden" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button>';
         // Art board getting cost and selling price-------------------------------
            
               $(document).ready(function(){
                   $("#qty").on("input", function(){

                    $('#price').prop('disabled', false); 
        
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       document.getElementById('item_id').value = item_id;
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
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="iveryBtnOnclick()" class="btn mb-3 btn-primary btn-add-ivery" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';
        // Art board getting cost and selling price-------------------------------
         
         $(document).ready(function(){
                   $("#qty").on("input", function(){

                     $('#price').prop('disabled', false);
                  //creates a listener for when you press a key-------------------------------
                     window.onkeyup = keyup;

                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       window.item_id = "IVERY";
                       document.getElementById('item_id').value = item_id;
                       document.getElementById('costprice').value = (inputTextValue*48.5).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*60.625).toFixed(2);
                     }
                   });
               });
         //-----------------------------------------------------------------------------
         
      } else {

      }

       // Ice Gold Board------------------------------
      if (optionValue == "6") {
         $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();

        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="icegoldBtnOnclick()" class="btn mb-3 btn-primary btn-add-ivery" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';
        // Art board getting cost and selling price-------------------------------
         
        $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                    $('#price').prop('disabled', false);
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       window.item_id = "ICEG";
                       document.getElementById('item_id').value = item_id;
                       document.getElementById('costprice').value = (inputTextValue*50).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*62.5).toFixed(2);
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
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">GSM</label><select class="custom-select" onChange="boxboardchange();" id="gsm" name="gsm" required><option selected disabled value="">Choose...</option><option value="250">250</option><option value="300">300</option><option value="350">350</option><option value="400">400</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" onChange="boxboardchange();" id="brand" name="brand" required><option selected disabled value="">Choose...</option><option value="sripathi">Sripathi</option><option value="kerani">Kerani</option></select></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="boxboardBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';
           
           $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     $('#price').prop('disabled', false);
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       
                       document.getElementById('item_id').value = item_id;
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
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Color</label><select class="custom-select" id="clr" onChange="bristalboardchange();" name="color" required><option selected disabled value="">Choose...</option><option value="white">White</option><option value="green">Green</option><option value="blue">Blue</option><option value="pink">Pink</option><option value="yellow">Yellow</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" onChange="bristalboardchange();" name="brand" id="brand" required><option selected disabled value="">Choose...</option><option value="spb">SPB</option><option value="unbrand">Unbrand</option></select></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="bristalboardBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';

        
               $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                     $('#price').prop('disabled', false);
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       
                       document.getElementById('item_id').value = item_id;
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
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">NCR</label><select class="custom-select gsm" name="ncr" onChange="ncrboardchange();" id="ncr" required><option selected disabled value="">Choose...</option><option value="NCR_Top_white_(carbonized)">NCR Top white (carbonized)</option><option value="NCR_Middle_Blue_(carbonized)">NCR Middle Blue (carbonized)</option><option value="NCR_middle_pink_(carbonized)">NCR middle pink (carbonized)</option><option value="NCR_middle_green">NCR middle green</option><option value="NCR_Bottom_yellow">NCR Bottom yellow</option><option value="NCR_Bottom_pink">NCR Bottom pink</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" onChange="ncrboardchange();" name="brand" id="brand" required><option selected disabled value="">Choose...</option><option value="Pindo 2000">Pindo 2000</option><option value="adler">Adler</option></select></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="ncrBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';

              $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                    $('#price').prop('disabled', false);
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       
                       document.getElementById('item_id').value = item_id;
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
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Demain</label><select class="custom-select gsm" name="demain" onChange="demainchange();" id="demain" required><option selected disabled value="">Choose...</option><option value="Yellow_Demain_(Udawatta)">Yellow Demain (Udawatta)</option><option value="pink_demain">Pink Demain</option><option value="NP_48_White_Demain_(Ranpath)">N/P 48 White Demain (Ranpath)</option></select></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off"  required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="demainBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';
            
            $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                  $('#price').prop('disabled', false);
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       
                       document.getElementById('item_id').value = item_id;
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
         $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

        $('.artboard').show();
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Cover Paper</label><select class="custom-select gsm" name="cover" onChange="coverchange();" id="cover" required><option selected disabled value="">Choose...</option><option value="cover_paper_pink">Cover Paper (Pink)</option><option value="cover_paper_green">Cover Paper (Green)</option></select></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="coverBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';

             $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                  $('#price').prop('disabled', false);
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       
                       document.getElementById('item_id').value = item_id;
                       document.getElementById('costprice').value = (inputTextValue*9).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*11.25).toFixed(2);
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
        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">GSM</label><select class="custom-select" name="bank" id="bank" onChange="bankchange();"   id="validationTooltip04" required><option selected disabled value="">Choose...</option><option value="60(short)">60 (Short)</option><option value="60(long)">60 (Long)</option><option value="70">70</option><option value="80">80</option><option value="100">100</option></select></div><div class="col-md-3 mb-3 js-form"><label for="validationTooltip04">Brand</label><select class="custom-select" id="brand" onChange="bankchange();" required><option selected disabled value="">Choose...</option><option value="INDAHKIAT_BILT">INDAH KIAT-BILT</option><option value="Built">Built<option value="Unbrand">Unbrand</option></select></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="bankBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';
      
               $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                  $('#price').prop('disabled', false);
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       
                       document.getElementById('item_id').value = item_id;
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
        document.getElementById("artboard").innerHTML = '<div class="col-md-4 mb-3 js-form"><label for="validationTooltip04">Art paper</label><select class="custom-select" name="artpaper" onChange="artchange();" id="artpaper" required><option selected disabled value="">Choose...</option><option value="Art_paper_100_GSM_(Chinese)">Art paper 100 GSM (Chinese)</option><option value="Art_paper_120_GSM_(Chinese)">Art paper 120 GSM (Chinese)</option><option value="Art_paper_150_GSM_(Nevia)">Art paper 150 GSM (Nevia)</option></select></div></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off"  required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="artBtnOnclick()" class="btn mb-3 btn-primary btn-add" id="btn-add-data" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';
         
        $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                  $('#price').prop('disabled', false);
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       
                       document.getElementById('item_id').value = item_id;
                       document.getElementById('costprice').value = (inputTextValue*actual_costprice).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*actual_sellingprice).toFixed(2);
                     }
                   });
               });
          } else {

      }
      // End Art Paper-------------------------------------------------------------------------------
      if (optionValue == "43") {
        $('#loadd').addClass('cost-seperate');
         document.getElementById('costprice').value = '';
         document.getElementById('sellingprice').value = '';

         $('.artboard').show();

        document.getElementById("artboard").innerHTML = '<div class="col-md-3 mb-3"><label for="validationTooltip04">Qty<code>(qty)</code></label><input type="number" class="form-control js-form qty" name="qty" id="qty" autocomplete="off" required></div><div class="col-md-3 mb-3"><label for="validationTooltip04">Price</label><input type="number" pattern="^\d+(?:\.\d{1,2})?$" step="0.01" name="price" class="form-control js-form" value="" id="price" autocomplete="off" disabled required></div><div class="col-md-3 mb-3"><button type="button" onclick="stickerBtnOnclick()" class="btn mb-3 btn-primary btn-add-ivery" id="btn-add-data"><i class="ri-bill-fill"></i>Add</button></div><input type="hidden" name="item_id" value="" id="item_id">';
        // Art board getting cost and selling price-------------------------------
         
        $(document).ready(function(){
                   $("#qty").on("input", function(){
                  //creates a listener for when you press a key-------------------------------
                  $('#price').prop('disabled', false);
                     window.onkeyup = keyup;
                     //creates a global Javascript variable
                     var inputTextValue;

                     function keyup(e) {
                       //setting your input text to the global Javascript Variable for every key press
                       inputTextValue = $("#qty").val();
                       $('#qty').text(inputTextValue);
                       $('#qty').removeClass('validate');
                       if ($("#qty").val() == "") {
                          document.getElementById('price').value = '';
                       }
                       window.item_id = "STCKR";
                       document.getElementById('item_id').value = item_id;
                       document.getElementById('costprice').value = (inputTextValue*40).toFixed(2);
                       document.getElementById('sellingprice').value = (inputTextValue*50).toFixed(2);
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script> -->
<script src="<?php echo HTTP_PATH; ?>js/valueconvert.js"></script>

    <script> 
       $('#price').keyup(function(){
     if($(this).val() == '0'){
      $(this).val('');  
    }
     if (this.value.match(/[^0-9]/g)) {
         this.value = this.value.replace(/[^0-9]/g, '');
 }
 });  
      

      // function showUser(str) {}  
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
 

// function showUser(str) {
  
//   var xmlhttp=new XMLHttpRequest();
//   xmlhttp.onreadystatechange=function() {
//     if (this.readyState==4 && this.status==200) {
//       document.getElementById("txtHint").innerHTML=this.responseText;
//     }
//   }
//   xmlhttp.open("GET","price-table.php?s="+str,true);
//   xmlhttp.send();
// }

function jsupdate(txtHint) {
 xmlhttp=new XMLHttpRequest();
 xmlhttp.onreadystatechange=function()  {
 if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    // document.getElementById(txtHint).innerHTML=xmlhttp.responseText;
 }
}
xmlhttp.open("GET","price-table.php,true");
xmlhttp.send();
}
</script>

<script>

$(".tbrw").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".prize").text(); // Find the text
    var $qty = $row.find(".qtyz").text();
    var $unq_id = $row.find(".unq_id").text();
    document.getElementById('modalcostprice').value = $text;
    document.getElementById('modalqty').value = $qty;
    document.getElementById('idz').value = $unq_id;
    // Let's test it out
    // alert($text);
});

$(document).ready(function(){
 $("#mtbt").click(function(){
  $("#clz").load("price-table.php");
 });
});
</script>
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script> -->
    
         
  