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
            lastname: {
                validators:{
                    notEmpty:{
                        message: 'Please Enter Last Name'
                    },
                    stringLength: {
                        min: 3,
                        max: 12,
                        message: 'Last name must be more than 3 characters long.'
                    },
                }
            },
            username: {
                validators:{
                    notEmpty:{
                        message: 'Please Enter User Name'
                    },
                    stringLength: {
                        min: 3,
                        max: 12,
                        message: 'User name must be more than 3 characters long.'
                    },
                }
            },
            email: {
                validators:{
                    notEmpty:{
                        message: 'Please Enter Email'
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
