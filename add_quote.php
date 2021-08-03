<?php require 'header.php'?>
    
<div class="main_content_iner ">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row justify-content-center">
 
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Form row</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                               <form action="add_quote_class.php" method="POST"  enctype="multipart/form-data">
                                    <div class="form-row ">
                                        <div class="form-group mx-sm-4 col-5 -md-4">
                                            <label >Quote Name</label>
                                            <input type="text" name="quote_name" class="form-control" id="" placeholder="Quotes Name" required>
                                        </div>
                                        <div class="form-group mx-sm-4 col-5 -md-4">
                                          
                                            <label >Requirement Format</label>
                                            <select id=""name="requirement" class="form-control" required>
                                                <option selected="">Choose...</option>
                                                <option>SOme Thing</option>
                                                <option>Any Thing Else</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group mx-sm-4 col-5 -md-4">
                                        <label >Height (Inch)</label>
                                            <input type="text" name="height" class="form-control" id="" placeholder="Height" required>
                                        </div>
                                        <div class="form-group mx-sm-4 col-5 -md-4">
                                        <label >Placement</label>
                                        <select id="" name="placement" class="form-control" required>
                                                <option selected="">Choose...</option>
                                                <option>Cap</option>
                                                <option>Bag</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group mx-sm-4 col-5 -md-4">
                                       <label >Width (Inch)</label>
                                        <input type="text" name="width"class="form-control" id="" placeholder="Width" required>
                                        </div>
                                        <div class="form-group mx-sm-4 col-5 -md-4">
                                            <label >Fabric</label>
                                           <select id=""name="fabric"class="form-control" required>
                                                <option selected="">Choose...</option>
                                                <option>Silk</option>
                                                <option>Blanket</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row ">
                                        <div class="form-group mx-sm-4 col-5 -md-4">
                                        <label >Number Of Color</label>
                                            <input type="text" name="color" min="0" class="form-control" id="" placeholder="Number Of Color" required>
                                       
                                        </div>
                                        <div class="form-group mx-sm-4 col-5 -md-4">
                                            <label >Additional Instructions</label>
                                            <input type="text" name="addition" class="form-control" id="" placeholder="Additional Instructions">
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group mx-sm-4 col-5 -md-4">
                                        <label >Upload File</label>
                                            <input type="file" name="file[]" multiple  class="form-control" id="" placeholder="Choose" required>
                                        </div>
                                    </div>




                                    </div>
                                    <div class="text-right mx-sm-4" style="margin-right:-100px">
                                        
                                        <button type="qoute_taped" value="upload" name="submit_quote" class="btn btn-primary" style="width:20%">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  
 <?php require 'footer.php'?>