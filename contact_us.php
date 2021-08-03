<?php
require 'header.php'
?>


<h2 class="text-center justify-center" style="margin-top:40px">Contact-Us Records</h2>


<br>
<br>

<div class="input-group rounded"style="width:30%; margin-left:65%" >
  <input id="contact-us-data" type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>

<br>
<br>

<table id="contact_us" class="table table-striped table-bordered" style="width:95%;margin-left: auto;
  margin-right: auto">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company Name</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="contact_us_table">           
    </table>








<?php
require 'footer.php'
?>



<script type="text/javascript">
$(document).ready(function(){
   
    // setInterval(() => {contact_table().fadeIn();}, 1000);

   function contact_table(){
    $.ajax({
    url:"contact_us_class.php",
    type:"POST",
    success: function(data){
        $("#contact_us_table").html(data).fadeIn();
    }
});
   }
contact_table();



$(document).on("click",".contact_del",function(){
var get_id =$(this).data("id");

var element = this;
$.ajax({
    url:"contact_delete.php",
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


$("#contact-us-data").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#contact_us_table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });



});
</script>