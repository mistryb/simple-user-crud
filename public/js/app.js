$(document).ready(function(){
    
    // Global Variables
    var deleteUser;
    
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); // END OF ajaxSetup
    
    // Function to handle the call to and from the server
    
    deleteUser = function(id, handleData){
        return $.ajax({
                url: '/users/' + id,
                type: 'DELETE',
                success: handleData,
            });
    } // END OF deleteUser
    
    // When a delete user element is pressed, raise a Sweet Alert to prompt the user.
   $('.delete-user').click(function() {
       
       var id, username; 
       
       // Set the user id
       id = $(this).data('id');
       username = $(this).data('username');
      
        swal({
            title: "Are you sure?",text: "You will not be able to recover this user later!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false,
            showLoaderOnConfirm : true,
            },
            function(isConfirm){
                if(isConfirm){
                    deleteUser(id, function(output){
                        swal({ title:"Your User has been deleted!" }, function(){
                            location.reload();
                        });
                    });
                }
            }
        );
   }); // END OF $('delete-user').click()
   
}); // END OF document
