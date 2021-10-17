$(document).ready(function(){

        $("#user_profile_form").bootstrapValidator({
        fields: {
            
            firstname: {
                validators:{
                    notEmpty:{
                        message: 'Please Enter First Name'
                    },
                    stringLength: {
                        min: 3,
                        max: 12,
                        message: 'first name must be more than 3 characters long.'
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a password'
                    },
                    identical: {
                        field: 'password_confirm',
                        message: 'Password does not match'
                    }
                }
            },
            password_confirm: {
                validators: {
                    notEmpty: {
                        message: ' Please enter Confirm password'
                    },
                    identical: {
                        field: 'password',
                        message: 'Confirm Password does not match'
                    }
                }
            }
        }
    });
});
