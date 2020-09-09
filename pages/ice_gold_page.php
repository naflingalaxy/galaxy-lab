               <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-8">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Ice Gold </h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form>
                              <div class="form-row">
                                 
                                <!--  <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">GSM</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                       <option selected disabled value="">Choose...</option>

                                       <option value="230">230</option>
                                       <option value="260">260</option>
                                       <option value="310">310</option>
                                       <option value="N/A">N/A</option>
                                       
                                    </select>
                                    <div class="invalid-tooltip">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Brand</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option value="gc">GC</option>
                                       <option value="bohui">Bohui</option>
                                       <option value="None">N/A</option>
                                      
                                    </select>
                                    <div class="invalid-tooltip">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="validationTooltip04">Color</label>
                                    <select class="custom-select" id="validationTooltip04" required>
                                       <option selected disabled value="">Choose...</option>
                                       
                                       <option value="White">White</option>
                                       <option value="Green">Green</option>
                                       <option value="Blue">Blue</option>
                                       <option value="Pink">Pink</option>
                                       <option value="Yellow">Yellow</option>
                                       <option value="None">N/A</option>
                                       
                                    </select>
                                    <div class="invalid-tooltip">
                                       Please select a valid state.
                                    </div>
                                    
                                 </div> -->
                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">Price <code>(per unit)</code></label>
                                          <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="validationDefault03" maxlength="6" required>
                                 </div>

                                 <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">QTY  <code>(unit)</code></label>
                                          <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="validationDefault03" maxlength="6" required>

                                          
                                 </div>
                                 
                                 
                                 
                              </div>
                              

                              <div class="form-group">
                                 <button name="btn-add" class="btn btn-primary" type="submit">Add</button>
                              </div>

                           </form>
                        </div>
                     </div>
                     
                  </div>
                  <div class="col-lg-4 col-md-12 mb-5 mb-xl-0">
                     <div class="iq-card wow fadeInUp" data-wow-delay="0.8s">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Stock Level</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton4" data-toggle="dropdown">
                                 <i class="ri-more-2-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                         
                           <div class="row">
                              <div class="col-md-6">
                                 <div id="chart-15"></div>
                              </div>
                              <div class="col-md-6 align-self-center">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <h5 class="text-dark mb-0">Stock Item Quantity</h5>
                                       <h2 class="text-primary">85%<small class="ml-3">Traffic</small></h2>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <h6 class="d-inline-block w-100 mb-2">Previous scores</h6>
                                       <h5>August<span class="ml-3 font-size-22 text-success">69%</span></h5>
                                       <h5>September<span class="ml-3 font-size-22 text-danger">40%</span></h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                       <div class="col-lg-12">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Recent Activity (<?php echo preg_replace("/[^a-zA-Z]/", " ", $current_page); ?>)</h4>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                       <i class="ri-more-2-fill"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                          <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                       <thead>
                                          <tr>
                                             <th scope="col">Server ID</th>
                                             <th scope="col">Up Since</th>
                                             <th scope="col">Last Reboot</th>
                                             <th scope="col">Status</th>
                                             <th scope="col">Host</th>
                                             <th scope="col">Utilization</th>
                                             <th scope="col">Edit</th>

                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>#0879985</td>
                                             <td>26/12/2019</td>
                                             <td>30/12/2019</td>
                                             <td>
                                                <div class="badge badge-pill badge-success">Running</div>
                                             </td>
                                             <td>Victoria 8007 Australia</td>
                                             <td>
                                                <div class="iq-progress-bar">
                                                   <span class="bg-success" data-percent="45"></span>
                                                </div>
                                             </td>
                                             <td class="edit-record">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle edit text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                                   <i class="ri-equalizer-line"></i>
                                                   </span>
                                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                      <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                      <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                      
                                                      
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>#0879984</td>
                                             <td>23/12/2019</td>
                                             <td>27/12/2019</td>
                                             <td>
                                                <div class="badge badge-pill badge-warning text-white">Starting</div>
                                             </td>
                                             <td>Athens 2745 Greece</td>
                                             <td>
                                                <div class="iq-progress-bar">
                                                   <span class="bg-warning" data-percent="70"></span>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>#0879983</td>
                                             <td>18/12/2019</td>
                                             <td>21/12/2019</td>
                                             <td>
                                                <div class="badge badge-pill badge-danger">Stopped</div>
                                             </td>
                                             <td>Victoria 8007 Australia</td>
                                             <td>
                                                <div class="iq-progress-bar">
                                                   <span class="bg-danger" data-percent="48"></span>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>#0879982</td>
                                             <td>14/12/2019</td>
                                             <td>20/12/2019</td>
                                             <td>
                                                <div class="badge badge-pill badge-info">Maintenance</div>
                                             </td>
                                             <td>Delhi 0014 India</td>
                                             <td>
                                                <div class="iq-progress-bar">
                                                   <span class="bg-info" data-percent="90"></span>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>#0879981</td>
                                             <td>10/12/2019</td>
                                             <td>18/12/2019</td>
                                             <td>
                                                <div class="badge badge-pill badge-success">Running</div>
                                             </td>
                                             <td>Alabama 2741 USA</td>
                                             <td>
                                                <div class="iq-progress-bar">
                                                   <span class="bg-success" data-percent="45"></span>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
            </div>
         </div>