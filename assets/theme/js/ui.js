$(document).ready(function(){
    
    /*
     * Side Nav Collapse
     */
    $('body').on('click', '#nav-toggler', function(){
        var nav_toggler = $('.navbar-header.aside.bg-black');
        var sidebar = $('.hidden-xs.bg-black.dk.aside.hidden-print');
        if(nav_toggler.data("status") == "open"){
            nav_toggler.addClass('nav-xs');
            sidebar.addClass('nav-xs');
            nav_toggler.data("status", "close");
        }else{
            nav_toggler.removeClass('nav-xs');
            sidebar.removeClass('nav-xs');
            nav_toggler.data("status", "open");
        }
        
    });
    
    
    /*
     *  menu accordion-menu
     */
    $('body').on('click', 'ul.menu accordion-menu > li', function(){
//        $(this).siblings().removeClass('active');
//        $(this).addClass('active');
        alert("Oladapo");
    });
    
    
    /*
     * Node/Unnode nav items onClick
     */
    $('body').on('click', 'ul#menu-main li', function(){
        if($(this).data('status') === "close"){
            $(this).siblings().children('ul').css("display", "none");
            $(this).siblings().data("status", "close");
            $(this).siblings().find('a span i.text').removeClass('fa-angle-left fa-angle-down').addClass('fa-angle-left');
            $(this).children('ul').css("display", "block");
            $(this).find('a span i.text').removeClass('fa-angle-left').addClass('fa-angle-down');
            $(this).data('status', 'open');
        }else{
            $(this).children('ul').css("display", "none");
            $(this).find('a span i.text').removeClass('fa-angle-down').addClass('fa-angle-left');
            $(this).data('status', 'close');
        }
    });
    
    
    /*
     * Upper naviation menu colapse
     */
    $('body').on('click', 'ul.menu > li > a', function(){
        if($(this).parent('li').data('status') === 'close'){
            $(this).parent('li').siblings().children('ul.nav.sub-menu').css('display', 'none');
            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').siblings().data('status', 'close');
//            $(this).children('ul.nav.sub-menu').css('display', 'block');
            $(this).siblings('ul.nav.sub-menu').toggle(200);
            $(this).parent('li').addClass('active');
            $(this).parent('li').data('status', 'open');
        }else{
            $(this).siblings('ul.nav.sub-menu').css('display', 'none');
            $(this).parent('li').removeClass('active');
            $(this).parent('li').data('status', 'close');
        }
    });
    
    
    /** Modern Tab Layout script **/
    
    $('body').on('click', '.tabpanel > ul.nav-tabs > li > a', function(){
        var href = $(this).data('href');   
        var panes = $(this).closest('.tabpanel').find('.tab-content > div');
        panes.removeClass('active');
        panes.parent().find('#'+href).addClass('active');
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
    
    /** End Modern Tab Layout script **/
    
    
    
    /** jd Tab Layout script **/
    
    $('body').on('click', '.jd-tab-container >.jd-tab-title-block > ul > li > a', function(){
        var href = $(this).parent('li').data('href');
        var panes = $(this).closest('.jd-tab-container').find('.jd-tab-content-block > div');
        panes.removeClass('active');
        panes.parent().find('#'+href).addClass('active');
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
    
    /** End jd Tab Layout script **/
    
    /** jd hTab Layout script **/
    
    $('body').on('click', '.jd-h-tab-container >.jd-h-tab-title-block > ul > li > a', function(){
        var href = $(this).parent('li').data('href');
        var panes = $(this).closest('.jd-h-tab-container').find('.jd-h-tab-content-block > div');
        panes.removeClass('active');
        panes.parent().find('#'+href).addClass('active');
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
    
    /** End jd Tab Layout script **/
    
    /* sidebar list active toggler*/
    $('body').on('click', 'ul.class-level-list > li > a', function(){ 
        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');
    });
    
    
    /** init datepickers **/
    $('#start_time').datepicker();
    
    
});

function showHTab(container_id, tab_id){
    var container = $('.jd-h-tab-container#'+container_id);
    container.find('.jd-h-tab-pane').removeClass('active');
    //$('.jd-h-tab-container#'+container_id+' > .jd-h-tab-pane').removeClass('active');
    container.find('.jd-h-tab-pane#'+tab_id+':first').addClass('active');
    $('.jd-h-tab-container#'+container_id+' .jd-h-tab-title-block ul li').removeClass('active');
    $('.jd-h-tab-container#'+container_id+' .jd-h-tab-title-block ul li:first').addClass('active');
}


function toast(message){
    $('.toast').slideUp(150);
    $('.toast').html(message);
    $('.toast').slideDown(150);
    setTimeout(function(){
        $('.toast').slideUp(150);
    }, 3000);
    
}

function clear_form_fields(form_name){
    var form = document.forms[form_name];
    for(i = 0; i < form.length; i++){
        form[i].value = '';
    }
}

function show_loading_overlay(){
    $('#loading-overlay').css("display", "block");
}

function hide_loading_overlay(){
    $('#loading-overlay').fadeOut(500); //css("display", "none");
}


/** jD Card Layout Script **/
    
function showCard(id){
    var container = $('.jd-cards-container');
    container.children('.jd-card:first').removeClass('active');
    container.find('.jd-card#'+id+':first').addClass('active');
}

function showCard_(container_id, card_id){
    var container = $('.jd-cards-container#'+container_id);
    //container.children('.jd-card').removeClass('active');
    $('.jd-cards-container#'+container_id+' > .jd-card').removeClass('active');
    container.find('.jd-card#'+card_id+':first').addClass('active');
}

/** End jD Card Layout Script **/


/** jd slide card **/

function showSlideCard(container_id, card_id){
    var container = $('.jd-slide-cards#'+container_id);
    $('.jd-slide-cards#'+container_id+' > .card').slideUp(500);
    container.find('.card#'+card_id+':first').slideDown(500);
}

/** end jd slide card **/

/** hide form modal **/
function hide_form_modal(modal_id, obj = false){
    $('#'+modal_id).hide();
    obj = null;
}
/** end hide form modal **/

/** set default max exam score **/
function setExamMaxScores(val){
    $('#max_score').val(val);
}

function move_next(form_id, next_div){
    if($('#'+form_id).smkValidate()){ 
        $('#progressbar li#li-'+form_id).addClass('active');
        $('.form-div-container .form-div').slideUp(500);
        $('.form-div-container .form-div#'+next_div).slideDown(500);
    }
}

function move_previous(present, previous_div){
    $('#progressbar li#li-'+present).removeClass('active');
    $('#progressbar li#li-'+previous_div).removeClass('active');
    $('.form-div-container .form-div').slideUp(500);//('active');
    $('.form-div-container .form-div#'+previous_div).slideDown(500);//('active');
}

function registerDepositor(){
    if($('#form-others').smkValidate()){
        $('#progressbar li#li-form-others').addClass('active');
        show_loading_overlay();
        var form_data = new FormData($('#form-add-depositor')[0]);
        $.ajax({
            type: "POST",
            url: base_url+"api/add-depositor",
            data: form_data,
            success:function(result, status, xhr){ 
                result = JSON.parse(result);
                hide_loading_overlay();
                if(result.status){
                    toastr.success(result.message);
                    setTimeout(function(){ 
                        location.reload();
                    }, 3000);  
                }else{
                    toastr.error(result.message);
                }
            },
            complete: function(){
            },
            timeout: 50000,
            error: function(){
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
