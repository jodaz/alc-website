/*Fuction disable button before sumit*/
$("#form").closest('form').on('submit', function(e) {
    e.preventDefault();
    $('#send').attr('disabled', true);
    $('#cancel').attr('disabled', true);
    this.submit();
});

/**
 * Toolbar Summernote
 */
$(document).ready(function() {
    $('#show-post').summernote('disable');

    $('#editor').summernote({
        lang: 'es-ES',
        height: 600,
        toolbar: [
            ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph', 'style']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['hr']],
            /*['help', ['help']]*/
          ]
    });
});
/**
 * Character counter
 */
function charaterCounter() {
    //Total characters
        var total = 90;
        var total2 = 155;

    setTimeout(function() {
        var value = document.getElementById('accountant');
        var value2 = document.getElementById('description');

        var response = document.getElementById('res');
        var response2 = document.getElementById('res2');

        var quantity = value.value.length;
        var quantity2 = value2.value.length;
        document.getElementById('res').innerHTML = quantity + ' caractere/s, te quedan ' + (total - quantity);
        document.getElementById('res2').innerHTML = quantity2 + ' caractere/s, te quedan ' + (total2 - quantity2);

        if(quantity > total){
            response.style.color = "red";
            response2.style.color = "red";
        }
        else {
            response.style.color = "black";
            response2.style.color = "black";
        }
    },10);
}
/*----------  Uppercase  ----------*/
function upperCase(e) {
    e.value = e.value.toUpperCase();
}

$(document).ready(function() {

    var base_url = $('#base_url').val();

    $('[data-mask]').inputmask()

    jQuery('#date').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"
    });

    jQuery('#date1').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd"
    });
    /*----------  Datatables users ----------*/
    $('#tUsers').DataTable({
        "order": [[0, "asc"]],
        "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Todos"]],
        "oLanguage": {
            "sUrl": base_url +"/assets/dashboard/js/spanish.json"
        },
        "serverSide": true,
        "ajax": base_url +"/list-users",
        "columns": [
            {data: 'name', name: 'name'},
            {data: 'surname', name: 'surname'},
            {data: 'email', name: 'email'},
            {
                data: "id",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='"+base_url +"/users/"+oData.id+"/edit' title='Editar' class='btn btn-sm btn-warning'><i class='flaticon-edit'></i></a>");
                }
            },
        ]
    });
    /*----------  Datatables tags  ----------*/
    $('#tNotifications').DataTable({
        "order": [[0, "asc"]],
        "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Todos"]],
        "oLanguage": {
            "sUrl": base_url +"/assets/dashboard/js/spanish.json"
        },
        "serverSide": true,
        "ajax": base_url +"/list-notifications",
        "columns": [
            {data: 'description', name: 'description'},
            {
                data: "id",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='"+base_url +"/notifications/"+oData.id+"/edit' title='Editar' class='btn btn-sm btn-warning'><i class='flaticon-edit'></i></a>");
                }
            }
        ]
    });
    /*----------  Datatables tags  ----------*/
    $('#tTags').DataTable({
        "order": [[0, "asc"]],
        "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Todos"]],
        "oLanguage": {
            "sUrl": base_url +"/assets/dashboard/js/spanish.json"
        },
        "serverSide": true,
        "ajax": base_url +"/list-tags",
        "columns": [
            {data: 'name', name: 'name'},
            {data: 'slug', name: 'slug'},
            {
                data: "id",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='"+base_url +"/tags/"+oData.id+"/edit' title='Editar' class='btn btn-sm btn-warning'><i class='flaticon-edit'></i></a>");
                }
            }
        ]
    });
    /*----------  Datatables videos  ----------*/
    $('#tVideos').DataTable({
        "order": [[0, "asc"]],
        "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Todos"]],
        "oLanguage": {
            "sUrl": base_url +"/assets/dashboard/js/spanish.json"
        },
        "serverSide": true,
        "ajax": base_url +"/list-videos",
        "columns": [
            {data: 'title', name: 'title'},
            {data: 'url', name: 'url'},
            {
                data: "id",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='"+base_url +"/videos/"+oData.id+"/edit' title='Editar' class='btn btn-sm btn-warning'><i class='flaticon-edit'></i></a>");
                }
            }
        ]
    });
    /*----------  Datatables galleries  ----------*/
    $('#tGalleries').DataTable({
        "order": [[0, "asc"]],
        "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Todos"]],
        "oLanguage": {
            "sUrl": base_url +"/assets/dashboard/js/spanish.json"
        },
        "serverSide": true,
        "ajax": base_url +"/list-galleries",
        "columns": [
            {data: 'title', name: 'title'},
            {data: 'slug', name: 'slug'},
            {
                data: "id",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='"+base_url +"/galleries/"+oData.id+"/edit' title='Editar' class='btn btn-sm btn-warning'><i class='flaticon-edit'></i></a>");
                }
            }
        ]
    });
    /**
     *  Datatables posts
     */
    $('#tPosts').DataTable({
        "order": [[0, "asc"]],
        "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Todos"]],
        "oLanguage": {
            "sUrl": base_url +"/assets/dashboard/js/spanish.json"
        },
        "serverSide": true,
        "ajax": base_url +"/list-posts",
        "columns": [
            {data: 'title', name: 'title'},
            {data: 'description', name: 'description'},
            {data: 'created_at', name: 'created_at'},
            {data: 'user.email', name: 'user.email'},
            {data: 'status', name: 'status'},
            {
                data: "id",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='"+base_url +"/posts/"+oData.id+"' title='Ver' class='btn btn-sm btn-info'><i class='flaticon-eye'></i></a>");
                }
            },
            {
                data: "id",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='"+base_url +"/posts/"+oData.id+"/edit' title='Editar' class='btn btn-sm btn-warning'><i class='flaticon-edit'></i></a>");
                }
            }
        ]
    });
    /**
     *  Datatables projects
     */
    $('#tServices').DataTable({
        "order": [[0, "asc"]],
        "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "Todos"]],
        "oLanguage": {
            "sUrl": base_url +"/assets/dashboard/js/spanish.json"
        },
        "serverSide": true,
        "ajax": base_url +"/list-services",
        "columns": [
            {data: 'name', name: 'name'},
            {data: 'slug', name: 'slug'},
            {
                data: "id",
                "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                    $(nTd).html("<a href='"+base_url +"/services/"+oData.id+"/edit' title='Editar' class='btn btn-sm btn-warning'><i class='flaticon-edit'></i></a>");
                }
            }
        ]
    });

});
