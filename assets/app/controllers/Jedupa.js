var app = angular.module("mainApp", ['ui.router', 'datatables']);



/** Factory **/
app.factory('Factory', function(){
    
    var data = {};
    
    var app_data = {};
    
    /** app data **/
    data.setAppData = function(dt){
        app_data = dt;
    }
    
    data.getAppData = function(){
        return app_data;
    }
    
    data.updateUser = function(dt){
        app_data.user = dt;
    }
    /** end app data **/
    
    data.setUserID = function(dt){
        data.user_id = dt;
    }
    
    data.getUserID = function(){
        return data.user_id;
    };
    
    data.getUserBalance = function(){
        return app_data.user.balance;
    }
    
    /** 
     *  UTILITIES
    **/
    
    /** 2016-06-17 14:35:32 to July 17. 2016 **/
    data.formatDate_1 = function(date){
        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        date = date.split(" ")[0].split("-");
        return months[date[1]-1]+" "+date[2]+", "+date[0];
    };
    
    /** 2016-06-17 14:35:32 to July 17. 2016 at 16:00 **/
    data.formatDate_2 = function(date){
        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        d = date.split(" ");
        date = d[0].split("-");
        return months[date[1]-1]+" "+date[2]+", "+date[0]+" at "+d[1];
    }
    
    /** Abbreviate weekday eg Monday = Mon **/
    data.abr_week_day = function(weekday){
        return weekday.substring(0, 3);
    }
    
    data.break_str = function(str){
        var d = "";
        var arr = str.split("");
        for(s of arr){
            d += s+"\n";
        }
        return d;
    }
    
    data.getState = function(status_code){
        var status = ["", "Ondo", "Osun", "Lagos"];
        return status[status_code];
    }
    
    return data;
    
});


/*
 * App Services
 */
app.service('Service', function($http){
    
    this.loadAppData = function(user_id){
        return $http.get(base_url+"api/init-app", {
            params : {'filter-field': 'user_id', 'filter-value': user_id}
        });
    }

    this.getUser = function(user_id){
        return $http.get(base_url+"api/get-user", {
            params : {'user-id': user_id}
        });
    };
    
    this.getDepositor = function(depositor_id){
        return $http.get(base_url+"api/get-depositor", {
            params : {'depositor-id': depositor_id }
        });
    };
    
    this.getUsers = function(){
        return $http.get(base_url+"api/get-users", {
            params : {'sort-field': 'depositor_id', 'sort-order-mode': 'DESC'}
        });
    };
    
    this.updateUser = function(data){
        return $http({
            method: "POST",
            url: base_url+"api/update-user",
            data: data
        });
    }
    
    this.updateAccountDetails = function(data){
        return $http({
            method: "POST",
            url: base_url+"api/update-account-details",
            data: data
        });
    }
    
    this.updatePassword = function(data){
        return $http({
            method: "POST",
            url: base_url+"api/update-password",
            data: data
        });
    }
   
    /** donation **/
    
    this.addDonation = function(data){
        return $http({
            method: "POST",
            url: base_url+"api/add-donation",
            data: data
        });
    }
    
    this.getUserDonations = function(user_id){
        return $http.get(base_url+"api/get-donations", {
            params : {'filter-field': 'user_id', 'filter-value': user_id, 'sort-field': 'date', 'sort-order-mode': 'DESC'}
        });
    };
    
    this.getReferralsDonations = function(user_id){
        return $http.get(base_url+"api/get-donations", {
            params : {'filter-field': 'ref_id', 'filter-value': user_id, 'sort-field': 'date', 'sort-order-mode': 'DESC'}
        });
    };
    
    this.getAllDonations = function(){
        return $http.get(base_url+"api/get-donations", {
            params : {'sort-field': 'date', 'sort-order-mode': 'DESC'}
        });
    };
    
    this.getDonation = function(id){
        return $http.get(base_url+"api/get-donation", {
            params : {'donation-id': id}
        });
    };
    
    /** end donation **/
    
    /** referrals **/
    
    this.getRefferals = function(user_id){
        return $http.get(base_url+"api/get-users", {
            params : {'filter-field': 'ref_id', 'filter-value': user_id}
        });
    }
    
    /** end referrals **/
    
    /** withdrawal **/
    
    this.addWithdrawal = function(data){
        return $http({
            method: "POST",
            url: base_url+"api/add-withdrawal",
            data: data
        });
    }
    
    this.getUserWithdrawals = function(user_id){
        return $http.get(base_url+"api/get-withdrawals", {
            params : {'filter-field': 'user_id', 'filter-value': user_id, 'sort-field': 'date', 'sort-order-mode': 'DESC'}
        });
    };
    
    this.getAllWithdrawals = function(){
        return $http.get(base_url+"api/get-withdrawals", {
            params : {'sort-field': 'date', 'sort-order-mode': 'DESC'}
        });
    };
    
    this.getWithdrawal = function(id){
        return $http.get(base_url+"api/get-withdrawal", {
            params : {'withdrawal-id': id}
        });
    };
    
    /** end withdrawal **/
    
});




/*
 * App Config
 */
app.config(function($stateProvider, $urlRouterProvider){
    
    $urlRouterProvider.otherwise("/dashboard");
    
    $stateProvider
    
        .state('dashboard', {
            url: "/dashboard",
            templateUrl: "assets/app/views/dashboard.html",
            controller: "UsersCtrl",
            resolve: {
                users: function(Service, Factory){
                    return Service.getUsers();
                }
            }
        })
        
        .state('all-users', {
            url: "/zjhdfjdhsgdfhs)jdsfhjgdfhH&hfhdfshWRsjfhQfddnjmkk@hjdgfhgdhsTEsnj09",
            templateUrl: "assets/app/views/user/all-users.html",
            controller: "UsersCtrl",
            resolve: {
                users: function(Service, Factory){
                    return Service.getUsers();
                }
            }
        })
        
        .state('view-user', {
            url: "/view-user/:id",
            templateUrl: "assets/app/views/user/view-user.html",
            controller: "ViewUserCtrl",
            resolve: {
                user: function(Service, $stateParams){
                    return Service.getDepositor($stateParams.id);
                }
            }
        })
        
        .state('account-details', {
            url: "/account-details",
            templateUrl: "assets/app/views/profile/account-details.html",
            controller: "UserCtrl",
            resolve: {
                user: function(Service, Factory){
                    return Service.getUser(Factory.getUserID());
                }
            }
        })
        
        .state('change-password', {
            url: "/change-password",
            templateUrl: "assets/app/views/profile/change-password.html",
            controller: "UserCtrl",
            resolve: {
                user: function(Service, Factory){
                    return Service.getUser(Factory.getUserID());
                }
            }
        })
        
        .state('manage-profile', {
            url: "/manage-profile",
            templateUrl: "assets/app/views/profile/manage-profile.html",
            controller: "UserCtrl",
            resolve: {
                user: function(Service, Factory){
                    return Service.getUser(Factory.getUserID());
                }
            }
        })
        
        .state('new-donation', {
            url: "/new-donation",
            templateUrl: "assets/app/views/donation/new-donation.html",
            controller: "NewDonationCtrl",
            resolve: {
                
            }
        })
        
        .state('my-donations', {
            url: "/my-donations",
            templateUrl: "assets/app/views/donation/my-donations.html",
            controller: "DonationCtrl",
            resolve: {
                donations: function(Service, Factory){
                    return Service.getUserDonations(Factory.getUserID());
                }
            }
        })
        
        .state('my-donation', {
            url: "/my-donations/donation/:id",
            templateUrl: "assets/app/views/donation/my-donation.html",
            controller: "MyDonationCtrl",
            resolve: {
                donation: function(Service, $stateParams){
                    return Service.getDonation($stateParams.id);
                }
            }
        })
        
        .state('all-donations', {
            url: "/all-donations",
            templateUrl: "assets/app/views/donation/all-donations.html",
            controller: "AllDonationsCtrl",
            resolve: {
                donations: function(Service, Factory){
                    return Service.getAllDonations();
                }
            }
        })
        
        .state('my-payments', {
            url: "/my-payments",
            templateUrl: "assets/app/views/donation/my-payments.html",
            controller: "PaymentCtrl",
            resolve: {
                payments: function(Service, Factory){
                    return [];
                }
            }
        })
        
        .state('my-referrals', {
            url: "/my-referrals",
            templateUrl: "assets/app/views/referral/my-referrals.html",
            controller: "ReferralCtrl",
            resolve: {
                referrals: function(Service, Factory){
                    return Service.getRefferals(Factory.getUserID());
                }
            }
        }) 
        
        .state('referral-bonus', {
            url: "/referral-bonus",
            templateUrl: "assets/app/views/referral/referral-bonus.html",
            controller: "ReferralBonusCtrl",
            resolve: {
                donations: function(Service, Factory){
                    return Service.getReferralsDonations(Factory.getUserID());
                }
            }
        })
        
        .state('new-withdrawal', {
            url: "/new-withdrawal",
            templateUrl: "assets/app/views/wallet/new-withdrawal.html",
            controller: "NewWithdrawalCtrl",
            resolve: {
                
            }
        })
        
        .state('my-withdrawals', {
            url: "/my-withdrawals",
            templateUrl: "assets/app/views/wallet/my-withdrawals.html",
            controller: "WithdrawalCtrl",
            resolve: {
                withdrawals: function(Service, Factory){
                    return Service.getUserWithdrawals(Factory.getUserID());
                }
            }
        })
        
        .state('all-withdrawals', {
            url: "/withdrawal/jdksfhGhjghjgFRhhjghjsgddfgdbfvghFWT67HGHJhghggh",
            templateUrl: "assets/app/views/wallet/all-withdrawals.html",
            controller: "AllWithdrawalsCtrl",
            resolve: {
                withdrawals: function(Service, Factory){
                    return Service.getAllWithdrawals();
                }
            }
        })
        
        .state('view-withdrawal', {
            url: "/view-withdrawal/:id",
            templateUrl: "assets/app/views/wallet/view-withdrawal.html",
            controller: "ViewWithdrawalCtrl",
            resolve: {
                withdrawal: function(Service, $stateParams){
                    return Service.getWithdrawal($stateParams.id);
                }
            }
        })
});


/*
 * App Controller
 */
app.controller('mainCtrl', function($rootScope, $state, Factory, Service){
    
    $rootScope.root_factory = Factory;
    
    $rootScope.app_data = {};
    
    Factory.setUserID(user_id);
    
    /** Init App Data **/
    Service.loadAppData(Factory.getUserID()).then(function(response){
        Factory.setAppData(response.data);
        $rootScope.app_data = Factory.getAppData();
    }, function(error){
        console.log(error);
    });
    
    
    
    
    
    $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams, options){ 
        show_loading_overlay();
    });
    
    
    $rootScope.$on('$stateChangeError', function(event, toState, toParams, fromState, fromParams, error){ 
        hide_loading_overlay();
        toast('No Internet Access');
    });
    
    
    $rootScope.$on('$stateChangeSuccess', function(event, toState, toParams, fromState, fromParams){ 
        hide_loading_overlay();
    });
    
    
    
    
});
