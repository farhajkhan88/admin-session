<?php
require 'header.php'
?>

<h2 class="text-center justify-center" style="margin-top:40px">Users</h2>


<br>
<br>
<div class="input-group rounded"style="width:30%; margin-left:65%" >
  <input id="user-data" type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>

<br>
<br>
<table id="userdata" class="table table-striped table-bordered" style="width:95%;margin-left: auto;
  margin-right: auto">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company Name</th>
                <th>Company Type</th>
                <th>Phone</th>
                <th>Country</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="data_table">           
    </table>








<?php
require 'footer.php'
?>



<script type="text/javascript">
$(document).ready(function(){
   
    // setInterval(() => {load_table().fadeIn();}, 1000);

   function load_table(){
    $.ajax({
    url:"user_class.php",
    type:"POST",
    success: function(data){
        $("#data_table").html(data).fadeIn();
    }
});
   }
load_table();



$(document).on("click",".del",function(){
var get_id =$(this).data("id");

var element = this;
$.ajax({
    url:"user_delete.php",
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




  $("#user-data").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#data_table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });




});
</script>