$(document).ready(function(){

   var base_url = document.getElementById("base_url").value;
	
    $("#update_profile").submit(function(){

        

    	var admin_name 		     = $("#admin_name").val().trim();  
        var admin_email 		 = $("#admin_email").val().trim();  
        var from_email 		     = $("#from_email").val().trim();  
        var admin_phone 		 = $("#admin_phone").val().trim();  
        var admin_address 		 = $("#admin_address").val().trim();  
        var admin_zip 		     = $("#admin_zip").val().trim();  
        var admin_city 		     = $("#admin_city").val().trim();  
        var admin_state 		 = $("#admin_state").val().trim();    
        var admin_country 		 = $("#admin_country").val().trim();  
        var site_name 		     = $("#site_name").val().trim();  
		//var pantry_path 		 = document.getElementById("pantry_path").files[0];

		var is_error = 0;


        if( !admin_name ){
            $("#admin_name").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#admin_name").parent().removeClass('has-error');
        }

        if( !admin_email ){
            $("#admin_email").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#admin_email").parent().removeClass('has-error');
        }

        if( !from_email ){
            $("#from_email").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#from_email").parent().removeClass('has-error');
        }

        if( !admin_phone ){
            $("#admin_phone").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#admin_phone").parent().removeClass('has-error');
        }

        if( !admin_address ){
            $("#admin_address").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#admin_address").parent().removeClass('has-error');
        }

        if( !admin_zip ){
            $("#admin_zip").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#admin_zip").parent().removeClass('has-error');
        }

        if( !admin_city ){
            $("#admin_city").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#admin_city").parent().removeClass('has-error');
        }

        if( !admin_state ){
            $("#admin_state").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#admin_state").parent().removeClass('has-error');
        }

        if( !admin_country ){
            $("#admin_country").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#admin_country").parent().removeClass('has-error');
        }

        if( !site_name ){
            $("#site_name").parent().addClass('has-error');
            is_error = 1;
        }else{
             $("#site_name").parent().removeClass('has-error');
        }

        if( is_error == 0 ){
        	return true;
        }

        
        return false;


	});
});   