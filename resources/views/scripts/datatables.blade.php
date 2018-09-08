{{-- FYI: Datatables do not support colspan or rowpan --}}

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.data-table').dataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "dom": 'T<"clear">lfrtip',
            "sPaginationType": "full_numbers",
            'aoColumnDefs': [{
                'bSortable': false,
                'searchable': false,
                'aTargets': ['no-search'],
                'bTargets': ['no-sort']
            }]
        });
    });
</script>

<script>
    var dTable;
    $(function () {
        var tableSelector = '.datatable';
        var dataFetchUrl = $(tableSelector).data('ajax-fetch-url');
        var tableAjaxUrl = dataFetchUrl ? dataFetchUrl : "data";
        // You can have table class on a table and exclude it by giving no-datatable class to it
        dTable = $(tableSelector).DataTable({
            'sDom': "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
            'sPaginationType': 'first_last_numbers',
            'responsive': true,
            'processing': true,
            'responsive': true,
            'serverSide': true,
            'ajax': {
                url: tableAjaxUrl,
                data: function (d) {
                    $('.datatable-data-form').find('input, select').each(function(){
                        d[$(this).attr('name')] = $(this).val();
                    });
                }
            },
            'fnDrawCallback': function (oSettings) {
                if (typeof(tableFnDrawCallback) === 'function') {
                    tableFnDrawCallback();
                }
            },
            "columnDefs": (typeof(tableColumnsDefs) !== 'undefined' && Array.isArray(tableColumnsDefs)) ? tableColumnsDefs : [],
        });
    });
</script>