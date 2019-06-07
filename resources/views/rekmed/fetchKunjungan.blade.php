$.extend( $.fn.dataTable.defaults, {
    language: {
        "processing": "Mohon Menunggu..."
    },
 
});

{{--  $().ready(function(){
    table = $('#dt_kunjungan_dashboard').DataTable({
        "processing" : true,
        "serverSide" : true,
        "ajax" : {
            url : '{{route('kunjungan.fetch')}}'
        },
        "columns" : [
            {"data": "NoPasien"},
            {"data": "map.NoMap"},
            {"data": "antrian.NoAntrian"},
            {"data": "NoKTP"},
            {"data": "NamaPasien"},
            {"data": "Keluhan"},
            {"data": "tujuan.poli"},
            {"data" : "action", orderable: false, searchable: false}
        ],
        "dom":' <"search"fl><"top">rt<"bottom"ip><"clear">',
        searching: true                
    });
    $('#txt_search').on('keyup change', function (){
        table.search(this.value).draw();
    });
});  --}}
</script>