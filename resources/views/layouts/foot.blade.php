<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="{{asset('bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('bower_components/admin-lte/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('bower_components/admin-lte/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('bower_components/admin-lte/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('bower_components/admin-lte/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('bower_components/admin-lte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/admin-lte/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('bower_components/admin-lte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('bower_components/admin-lte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('bower_components/admin-lte/dist/js/demo.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- Select2 -->
<script src="{{('/bower_components/admin-lte/plugins/select2/select2.full.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- SweetAlert -->
<script src="{{asset('sweetalert/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript">
  function next_input_tab() {
    $('#Input_Patient_Tab a[href="#Add_Information_Disease"]').tab('show')
  }
  function back_input_tab() {
    $('#Input_Patient_Tab a[href="#Add_Information_Patient"]').tab('show')
  }
  function validate_delete_rekam_medis() {
  	confirm('Apakah data ini ingin di hapus?')
  }

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    $('.S2_nik_irm').select2()
    $('.S2_kode_map_irm').select2()

    //Datemask dd/mm/yyyy
    $('#patient_birth_date').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    $('#date_diagnosis').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

    //Data Mask
    $('[data-mask]').inputmask()

    //Checkbox and RadioBox
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-green',
      radioClass   : 'iradio_minimal-green'
    })

    $('#dt_patient_dashboard').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });

    $('#btn_add_rekam_medis').popover({
    	trigger: 'hover',
    	content: 'Tambah Rekam Medis',
    	container: 'body',
    	placement: 'top'
    })
    $('#btn_detail_patient').popover({
    	trigger: 'hover',
    	content: 'Lihat Detail Pasien',
    	container: 'body',
    	placement: 'top'
    })
    $('#btn_edit_patient').popover({
    	trigger: 'hover',
    	content: 'Edit Data Pasien',
    	container: 'body',
    	placement: 'top'
    })
    $('#btn_delete_patient').popover({
    	trigger: 'hover',
    	content: 'Hapus Data Pasien',
    	container: 'body',
    	placement: 'top'
    })
    $('#btn_detail_rekam_medis').popover({
    	trigger: 'hover',
    	content: 'Detail Rekam Medis',
    	container: 'body',
    	placement: 'top'
    })
    $('#btn_delete_rekam_medis').popover({
    	trigger: 'hover',
    	content: 'Hapus Data Rekam Medis',
    	container: 'body',
    	placement: 'top'
    })
    $('#btn_edit_rekam_medis').popover({
    	trigger: 'hover',
    	content: 'Edit Data Rekam Medis',
    	container: 'body',
    	placement: 'top'
    })
    $("#getNoKK").click(function() {
      $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: "/rekmed/pasien/cekmap",
          type: 'GET',
          data: {
              noMap : $("#noMap").val(),
              _token : $('meta[name="csrf-token"]').attr('content'), 
          },
          dataType: 'json',
          success: function(data){
              if(data.exists){
                $("#noKK").val(data.noKK);
                $("#namaKK").val(data.namaKK);
                $("noKK").prop("disabled", true);
                $("getNoMap").prop("disabled", true);
                if(data.count == 1){
                  $(".pakaiNamaKK").show();
                }
              }
              else{
                $(".pakaiNamaKK").hide();
                $("noKK").prop("disabled", true);
                $("getNoMap").prop("disabled", true);
                alert("Nomor Map Tidak Ditemukan.")
              }
          }
      })
    });
    $('#getNoMap').click(function(){
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/rekmed/pasien/cekkk",
        type: 'GET',
        data: {
          noKK: $("#noKK").val(),
          _token : $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        success: function(data){
          if(data.exists){
            $("#noMap").val(data.noMap);
            $("#namaKK").val(data.namaKK);
            $("#noMap").prop("disabled", true);
            $("#getNoKK").prop("disabled", true);
            if(data.count == 1){
              $(".pakaiNamaKK").show();
            }
          }
          else{
            $(".pakaiNamaKK").hide();
            $("#noMap").prop("disabled", false);
            $("#getNoKK").prop("disabled", false);
            alert("Nomor KK Tidak Ditemukan.");
          }
        }
      })
    });
    /*Map Area*/
    // === Insert === //
    $('#registMap').click(function(e){
      e.preventDefault();
      var noKK = $("#noKK").val();
      noKK = $.trim(((noKK.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/rekmed/map",
        type: 'POST',
        data:{
          noKK : noKK,
          namaKK : $("#namaKK").val(),
          alamat : $("#alamat").val(),
          _token : $('meta[name="csrf-token"]').attr('content'),
        },
        dataType:'json',
        success: function(data){
          $("#print-error-msg").find("#error").html('');
          $("#print-error-msg").css('display','none');
          swal("Sukses", "Data berhasil disimpan!", "success");
          table.ajax.reload();
          $("#mapRegist").trigger('reset');
          $('#Modal_Input_Map').modal('hide')
        },
        error: function(data){
          var errors = data.responseJSON.errors;
          $("#print-error-msg").find("#error").html('');
          $("#print-error-msg").css('display','block');
          $.each( errors, function( key, value ) {
            value = custErrorMap(value);
            $("#print-error-msg").find("#error").append('<li>'+value+'</li>');
          });
        }
      })
    });

    // === Custom Error Message === //
    function custErrorMap(error)
    {
      if((error[0] == "The no k k may not be greater than 16 characters.")|| error[0] == "The no k k must be at least 16 characters.")
        return ("Nomor KK harus 16 digit.");
      else if(error[0] == "The no k k field is required.")
        return ("Nomor KK harus diisi");
      else if(error[0] == "The no k k has already been taken.")
        return ("Nomor KK sudah terdaftar.");
      else if(error[0] == "The nama k k field is required.")
        return ("Nama Kepala Keluarga harus diisi.");
      else if(error[0] == "The alamat field is required.")
        return ("Alamat harus diisi.");
      else if(error[0] == "The nama k k may not be greater than 50 characters.")
        return ("Nama Kepala Keluarga tidak boleh melebihi 50 karakter");
      else if(error[0] == "The alamat may not be greater than 200 characters.")
        return ("Alamat tidak boleh melebihi 200 karakter");
    }

    // === Reset Buttom Behaviour === //
    $(":reset").click(function(){
      $("#print-error-msg").find("#error").html('');
      $("#print-error-msg").css('display','none');
    })

    // === Fetch and Show into Edit Modal === //
    $(document).on('click', '#btn_edit_map', function(){
      var NoMap = ($(this).attr("data-id"));
      var token = $("meta[name='csrf-token']").attr("content");
      $.ajax(
        {
          url: "/rekmed/map/"+NoMap+"/edit",
          type: 'GET',
          dataType:'json',
          success: function(data)
          {
            
            $('#noMap_edit').val(data.data.NoMap);
            $('#noKK_edit').val(data.data.NoKK);
            $('#namaKK_edit').val(data.data.NamaKepalaKeluarga);
            $('#alamat_edit').val(data.data.Alamat);
            $('#noMap').val(NoMap);
            $('#Modal_Edit_Map').modal('show');
          }
        }
      )
    });

    // === Cancel Button Behaviour === //
    $('#cancel').click(function(){
      $('#noMap').val('');
      $("#print-error-msg-edit").find("#error").html('');
      $("#print-error-msg-edit").css('display','none');
      $('#Modal_Edit_Map').modal('toggle');
    });

    // === Update Map === //
    $('#editMap').click(function(e){
      e.preventDefault();
      var noKK = $("#noKK_edit").val();
      var noMap = $("#noMap").val();
      noKK = $.trim(((noKK.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/rekmed/map/"+noMap,
        type: 'PUT',
        data:{
          noKK : noKK,
          namaKK : $("#namaKK_edit").val(),
          alamat : $("#alamat_edit").val(),
          _token : $('meta[name="csrf-token"]').attr('content'),
        },
        dataType:'json',
        success: function(data){
          $("#print-error-msg-edit").find("#error").html('');
          $("#print-error-msg-edit").css('display','none');
          swal("Sukses", "Data berhasil diubah!", "success");
          table.ajax.reload();
          $("#mapRegist").trigger('reset');
          $('#noMap').val('');
          $('#Modal_Edit_Map').modal('hide')
        },
        error: function(data){
          var errors = data.responseJSON.errors;
          $("#print-error-msg-edit").find("#error").html('');
          $("#print-error-msg-edit").css('display','block');
          $.each( errors, function( key, value ) {
            value = custErrorMap(value);
            $("#print-error-msg-edit").find("#error").append('<li>'+value+'</li>');
          });
        }
      })
    });
    
    // === Delete Map === //
    $(document).on('click','#btn_delete_map',function(){
      var NoMap = ($(this).attr("data-id"));
      var token = $("meta[name='csrf-token']").attr("content");
      swal({title : 'Anda yakin ingin menghapus data map ' + NoMap + ' ?',
      text: "Anda tidak dapat mengembalikan data ini setelah dihapus!",
      icon : "warning",
      buttons: ["Tidak", "Ya"],
      dangerMode: true,})
      .then((willDelete) => {
        if(willDelete){
          $.ajax(
            {
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: "/rekmed/map/"+NoMap,
              type: 'DELETE',
              data: {
                noMap : NoMap,
                _token : token,
              },
              dataType: "json",
              success: function(){
                console.log("sukses");
                swal("Sukses", "Data berhasil dihapus!", "success");
                table.ajax.reload();
              }
            }
            
          )
        }
      })
    })

    
  })
