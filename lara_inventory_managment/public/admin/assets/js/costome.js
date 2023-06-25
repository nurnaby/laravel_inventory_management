$(document).on("click", ".open-model", function(e) {
    e.preventDefault();
    let modalTitle = $(this).attr('modal-title');
    let modalType = $(this).attr('modal_type');
    let medalUrl = $(this).attr('href');
    // console.log(medalUrl);
    let divId = $(this).attr('selector');

    $.ajax({
        url: medalUrl,
        type: "get",
        datatype: "html",
        success: function(response) {
            // console.log(response);


            bootbox.dialog({
                title: modalTitle,
                message: `<div id="${divId}"></div>`,
                size: 'large',

                // buttons: {
                //     close: {
                //         label: "Close",
                //         className: 'btn-cancel',
                //         callback: function() {


                //         }
                //     },


                //     success: {
                //         label: modalType,
                //         className: 'btn-submit',
                //         callback: function() {
                //             $('#' + divId + ' form').submit();
                //         }
                //     }
                // }
            });

            $('#' + divId).html(response);


        }
    });

    $(document).on('submit', '#creataEmployeForm', function(e) {
        e.preventDefault();
        let formData = new FormData($('#creataEmployeForm')[0]);
        $.ajax({
            type: "post",
            url: "/store-employe",
            data: formData,
            processdata: false,
            contentType: false,
            success: function(res) {
                console.log(res);
            }
        })
    })




})


// var dialog = bootbox.dialog({
//     title: 'A custom dialog with buttons and callbacks',
//     message: "<p>This dialog has buttons. Each button has it's own callback function.</p>",
//     size: 'large',
//     buttons: {
//         cancel: {
//             label: "I'm a cancel button!",
//             className: 'btn-danger',
//             callback: function() {
//                 console.log('Custom cancel clicked');
//             }
//         },
//         noclose: {
//             label: "I don't close the modal!",
//             className: 'btn-warning',
//             callback: function() {
//                 console.log('Custom button clicked');
//                 return false;
//             }
//         },
//         ok: {
//             label: "I'm an OK button!",
//             className: 'btn-info',
//             callback: function() {
//                 console.log('Custom OK clicked');
//             }
//         }
//     }
// });



// });