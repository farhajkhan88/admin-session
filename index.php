<?php 
require 'header.php';
?>
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title  -->
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="mb-0" >Dashboard</h3>
                            <p>Dashboard/Royal Punch</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-12">
                    <div class="white_card  mb_30">
                        <div class="white_card_body anlite_table p-0">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Total Income</h4>
                                        <h3>$ <span class="counter">14,025</span> </h3>
                                        <div class="d-flex">
                                            <!-- <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This year</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Orders</h4>
                                        <h3><span class="counter">2025</span> </h3>
                                        <div class="d-flex">
                                            <!-- <div>3.78<i class="fa fa-caret-up"></i></div>
                                            <span>This month</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Quotes</h4>
                                        <h3><span id="quote_counter" class="counter"></span> </h3>
                                        <div class="d-flex">
                                            <!-- <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Number of Clients</h4>
                                        <h3><span id="user_counter"  class="counter"></span> </h3>
                                        <div class="d-flex">
                                            <!-- <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
               
         
            </div>
        </div>
    </div>

    <?php 
    require 'footer.php';
    ?>
    <script>
 // Quotes Counter 
 function all_quote(){
    $.ajax({
    url:"quote_counter.php",
    type:"POST",
    success: function(counter){
        $("#quote_counter").text(counter);
        var count= $('#quote_counter');
        if(count.length){
        count.counterUp({
            delay: 100,
            time: 5000
        });
    }
    }
});
   }
   all_quote();

   // user Counter
   function all_user(){
    $.ajax({
    url:"user_counter.php",
    type:"POST",
    success: function(counter){
        $("#user_counter").text(counter);
        var count= $('#user_counter');
        if(count.length){
        count.counterUp({
            delay: 100,
            time: 5000
        });
    }
    }
});
   }
   all_user();

       </script>