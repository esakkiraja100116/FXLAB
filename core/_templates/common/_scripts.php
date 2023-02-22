</div>

</div>
<?=Load::common("footer")?>
</div>
<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="https://<?= $domain ?>/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="https://<?= $domain ?>/bootstrap/js/popper.min.js"></script>
<script src="https://<?= $domain ?>/bootstrap/js/bootstrap.min.js"></script>

<script src="https://<?=$domain?>/plugins/select2/select2.min.js"></script>
    <script src="https://<?=$domain?>/plugins/select2/custom-select2.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="https://<?= $domain ?>/assets/js/authentication/form-2.js"></script>

<script src="https://<?= $domain ?>/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="https://<?= $domain ?>/assets/js/app.js"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="https://<?= $domain ?>/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="https://<?= $domain ?>/plugins/apex/apexcharts.min.js"></script>
<script src="https://<?= $domain ?>/assets/js/dashboard/dash_1.js"></script>
<script src="https://<?= $domain ?>/plugins/table/datatable/datatables.js"></script>
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
        function update_delete(id,type) {
        $("#current_user").val(id);
        $("#current_type").val(type);
        
    }
    function del() {
        console.log("function calling");
        var id = $("#current_user").val();
        var type = $("#current_type").val();
        $.ajax({
            type: "POST",
            url: "../api/delete.php",
            data: {
                "id": id,
                "type": type
            },
            dataType: "json",
            encode: true,
        }).done(function(data) {
            if (data.success == true) {
                window.location.href = "manage.php?deleted=success";
            } else if (data.success == false) {
                alert("Error in database");
            }
        });
    }

    $('.alert-success').delay(2000).fadeOut('medium');
    $('.alert-danger').delay(2000).fadeOut('medium');
    $('.alert-primary').delay(2000).fadeOut('medium');



    </script>

<script type="text/javascript">
function getmember1() {
    // var member_one = document.querySelector('#select1').value;
    var member_one = $('#member1').val();
    console.log(member_one);
    // output =member_one;

    $.ajax({
        type: "POST",
        url: "https://nattu.me/FX-LABS/test.php",
        dataType: "json",
        data: {
            "id": member_one,
        },
        success: function(data) {
            // var sub_cat_name = data[0].name;
            // var sub_cat_id = data[0].id;

           console.log(data)
           var i = 0;
           var $el = $("#member2");
           $el.empty(); // remove old options
                $.each(data, function(key, value) {
                    // console.log("available s-category :",data[i].name);
                    $el.append($("<option></option>").attr("value", data[i].id).text(data[i].name));
                    i++;
                });
        },
        error: function(xhr, status, error) {}
    });
  
}

</script>



</body>

</html>