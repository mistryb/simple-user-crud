$(document).ready(function(){
    
    // Global Variables
    var deleteUser;
    
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); // END OF ajaxSetup
    
    
    
    /**
     * 
     * @function
     * @name deleteUser
     * @desc calls the server requesting to delete the user
     * 
     * @param id the id of the user to be deleted
     * @param handleData a callback function
     * 
     **/ 
    deleteUser = function(id, handleData){
        return $.ajax({
                url: '/users/' + id,
                type: 'DELETE',
                success: handleData,
            });
    } // END OF deleteUser
    
    
    /**
     * Attach a behaviour to the delete-user class
     * 
     **/
     
     $('.delete-user').click(function() {
         
         // Define Variables
         var id, username; 
         
         // Set variables
         id = $(this).data('id');
         username = $(this).data('username');
        
        // Raise a SweetAlert
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
                // If the user pressed the confirm button              
                if(isConfirm){
                    deleteUser(id, function(output){
                        swal({ title:"Your User has been deleted!" }, function(){
                            // Reload the page.
                            location.reload();
                        });
                    });
                }
            }
        );
   }); // END OF $('delete-user').click()
   
}); // END OF document
