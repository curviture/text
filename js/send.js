//jQuery(document).ready(function () {
//    jQuery('form').submit(function (e) {
//        e.preventDefault();
//        formpar = jQuery(this).parent();
//        form = jQuery(this);
//        jQuery.ajax({
//            url: 'mailsend.php',
//            type: 'GET',
//            encoding: "UTF-8",
//            data: form.serialize(),
//            dataType: 'json',
//            success: function (data) {
//                if (data.success != "error") {
//                    $(".close").click();
//                    $(".modalbot").click();
//                    /*yaCounter31848151.reachGoal('form1');*/
//                }
//            }
//        })
//    });
//});