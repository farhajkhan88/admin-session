<?php
require 'header.php'
?>

<h2 class="text-center justify-center" style="margin-top:40px">All Quotes</h2>


<br>
<br>
<div class="input-group rounded"style="width:30%; margin-left:65%" >
  <input id="admin-quote-data" type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>

<br>
<br>



<table id="quotedata" class="table table-striped table-bordered" style="width:95%;margin-left: auto;
  margin-right: auto">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Quote Name </th>
                <th>Height</th>
                <th>Width</th>
                <th>Color</th>
                <th>Requirement</th>
                <th>Fabric</th>
                <th>Placement</th>
                <th>Additional</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="quote_data_table">           
    </table>








<?php
require 'footer.php'
?>



<script type="text/javascript">
$(document).ready(function(){

    // setInterval(() => {load_Quote_table().fadeIn();}, 1000);

   function load_Quote_table(){
    $.ajax({
    url:"admin_quote_class.php",
    type:"POST",
    success: function(data){
        $("#quote_data_table").html(data).fadeIn();
    }
});
   }
   load_Quote_table();



$(document).on("click",".quote_del",function(){
var get_id =$(this).data("id");
var element = this;

$.ajax({
    url:"admin_quote_delete.php",
    type:"POST",
    data: {id : get_id},
    success: function(data){
        if(data == 1){
            $(element).closest("tr").fadeOut();
        }else{
            alert("Data Not Deleted");
        }

    }
})
});




$("#admin-quote-data").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#quote_data_table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });


});
</script>
