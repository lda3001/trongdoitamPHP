function changepagesize(a) {
    var pagesize = a.value;
    // var $productajax = $('#bd-panel');
    // var url = $(a).data("url");
    // $.ajax({
    //     url: "/Product/ChangePageSize",
    //     data: "{ page: " + pagesize + " }",
    //     contentType: "application/json; charset=utf-8",
    //     dataType: 'json',
    //     type: "POST",
    //     success: function(res) {
    //         if (res.status == !0) {
    //             $.get(url, {
    //                 isAjax: 1
    //             }, function(data) {
    //                 ResetProduct()
    //             })
    //         }
    //     }
    // })
    var selectElement = document.getElementById('sapxep');


    var selectedValue = selectElement.options[selectElement.selectedIndex].value;
   

    $.post("/Product/ChangeOrderWay", {
        orderway: selectedValue,
       
    }, function(by) {
       
            ResetProduct(by , pagesize)
            
       
        
    })

    
    
}
$(document).on("click", ".changepage", function (e) {
    var isajax = $(this).data("isajax");
    if (isajax == 1)
    {
        e.preventDefault();
        var page = $(this).data("page");
        var url = $(this).attr("href");
        window.scrollTo(0, $('#bd-panel').offset().top);
        ResetProduct(url);
    }
})
;function changesapxep(a) {
    var sapxep = a.value;
    var $productajax = $('#bd-panel');
    var url = $(a).data("url");
    // $.ajax({
    //     url: "/Product/ChangeOrderWay",
    //     data: "{ orderway: '" + sapxep + "' }",
    //     contentType: "application/json; charset=utf-8",
    //     dataType: 'json',
    //     type: "POST",
    //     success: function(res) {
    //         if (res.status == !0) {
    //             $.get(url, {
    //                 isAjax: 1
    //             }, function(data) {
    //                 ResetProduct()
    //             })
    //         }
    //     }
    // })
    var selectElement = document.getElementById('pagesize');


    var selectedValue = selectElement.options[selectElement.selectedIndex].value;
    $.post("/Product/ChangeOrderWay", {
        orderway: sapxep,
        size: selectedValue
    }, function(n) {
        ResetProduct(n , selectedValue)
        
    })
}
;function changelist(a) {
    var $productajax = $('#bd-panel');
    var url = $(a).data("url");
    $.ajax({
        url: "/Product/ChangeDisplay",
        data: "{ display: 'false' }",
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        type: "POST",
        success: function(res) {
            if (res.status == !0) {
                $.get(url, {
                    isAjax: 1
                }, function(data) {
                    ResetProduct()
                })
            }
        }
    })
}
;function changetable(a) {
    var $productajax = $('#bd-panel');
    var url = $(a).data("url");
    $.ajax({
        url: "/Product/ChangeDisplay",
        data: "{ display: 'true' }",
        contentType: "application/json; charset=utf-8",
        dataType: 'json',
        type: "POST",
        success: function(res) {
            if (res.status == !0) {
                $.get(url, {
                    isAjax: 1
                }, function(data) {
                    ResetProduct()
                })
            }
        }
    })
}
;
// function ResetProduct() {
//     $.get(window.location.pathname, {
//         isAjax: 1
//     }, function(data) {
//         $('#bd-panel').replaceWith(data)
//     })
// }