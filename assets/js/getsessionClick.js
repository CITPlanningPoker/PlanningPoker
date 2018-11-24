$(document).ready(function(){

     $(document).on('click','.chkbox',function(){
      var id=this.value;

       $.ajax({
        type: "POST",
        context: "application/json",
        data: {id:id},
        url: "<?php echo site_url('/User/addPlayers'); ?>",
        success: function(msg) 
        {
            alert('result from controller');
        }
    })
   });

 });