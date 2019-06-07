        $.extend( $.fn.dataTable.defaults, {
            language: {
                "processing": "Mohon Menunggu..."
            },
         
        });
        $().ready(function(){
            table = $('#dt_map_dashboard').DataTable({
                "processing" : true,
                "serverSide" : true,
                "ajax" : '{{route('map.fetch')}}',
                "columns" : [
                    {"data": "NoMap"},
                    {"data": "NoKK"},
                    {"data": "NamaKepalaKeluarga"},
                    {"data": "Alamat"},
                    {"data" : "DalamDaerah", orderable: false, searchable: false},
                    {"data" : "action", orderable: false, searchable: false}
                ],                
            })
        })
</script>
