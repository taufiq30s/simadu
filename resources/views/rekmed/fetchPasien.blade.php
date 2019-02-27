        $.extend( $.fn.dataTable.defaults, {
            language: {
                "processing": "Mohon Menunggu..."
            },
         
        });
        
        $().ready(function(){
            table = $('#dt_pasien_dashboard').DataTable({
                "processing" : true,
                "serverSide" : true,
                "ajax" : {
                    url : '{{route('pasien.fetch')}}',
                    data: function(d) {
                        d.kategori = $('#kategoriPasien').val();
                    }
                },
                "columns" : [
                    {"data": "NoPasien"},
                    {"data": "map.NoMap"},
                    {"data": "NoKTP"},
                    {"data": "NoKK"},
                    {"data": "NamaPasien"},
                    {"data" : "BPJS", orderable: false, searchable: false},
                    {"data" : "action", orderable: false, searchable: false}
                ],
                "dom":' <"search"fl><"top">rt<"bottom"ip><"clear">',
                searching: true                
            });
            $('#txt_search').on('keyup change', function (){
                table.search(this.value).draw();
            });
            $('#kategoriPasien').on('change', function(){
                table.ajax.reload();
            });
        });
</script>
