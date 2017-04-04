app.controller('UserCtrl', function($scope, $state, Factory, Service, user){
    
    $scope.factory = Factory;
    
    $scope.user = user.data;
    
    $scope.state = $state;
    
    $scope.updateUser = function(){
        if($('#form-profile').smkValidate()){
            show_loading_overlay();
            Service.updateUser($scope.user).then(function(response){
                $scope.factory.updateUser($scope.user);
                hide_loading_overlay();
                toastr.success('Profile updated successfully.');
            }, function(error){});
        }
    }
    
    $scope.updateProfilePicture = function(){
        if($('#form-profile-picture').smkValidate()){
            show_loading_overlay();
            var form_data = new FormData($('#form-profile-picture')[0]);
            $.ajax({
                type: "POST",
                url: base_url+"api/update-profile-picture",
                data: form_data,
                success:function(result, status, xhr){ 
                    result = JSON.parse(result);
                    hide_loading_overlay();
                    if(result.status){
                        $scope.factory.updateUser(result.data);
                        toastr.success(result.message);
                    }else{
                        toastr.error(result.message);
                    }
                },
                complete: function(){
                },
                timeout: 50000,
                error: function(){
                    hide_loading_overlay();
                    toastr.error("An error occurred. Try again");
                },
                //Options to tell jQuery not to process data or worry about content-type.
                cache: false,
                contentType: false,
                processData: false
            });
        }
        return false;
    }
    
    $scope.showUpdateAccountDetailsModal = function(){
        if($('#form-account-details').smkValidate()){
            $('#modal-update-account').modal('show');
        }
        return false;
    }
    
    $scope.updateAccountDetails = function(){
        if($('#form-account-details').smkValidate()){
            show_loading_overlay();
            $('#modal-update-account').modal('hide');
            Service.updateAccountDetails($scope.user).then(function(response){
                var res = response.data;
                hide_loading_overlay();
                if(res.status)
                    toastr.success(res.message);
                else
                    toastr.error(res.message);
                
            }, function(error){});
        }
        return false;
    }
    
    $scope.password = {};
    $scope.updatePassword = function(){
        if($('#form-update-password').smkValidate()){
            if($scope.password.new_password != $scope.password.retype_password){
                toastr.error('Passwords do not match');
            }else{
                show_loading_overlay();
                Service.updatePassword($scope.password).then(function(response){
                    var res = response.data;
                    hide_loading_overlay();
                    if(res.status){
                        clear_form_fields('form-update-password');
                        toastr.success(res.message);
                    }else
                        toastr.error(res.message);
                }, function(error){});
            }
        }
        return false;
    }
    
});


app.controller('UsersCtrl', function($scope, $state, Factory, Service, users){
    
    $scope.factory = Factory;
    
    $scope.users = users.data;
    
    $scope.state = $state;
    
    
});


app.controller('ViewUserCtrl', function($scope, Factory, Service, user){
    
    $scope.factory = Factory;
    
    $scope.user = user.data;
    
});