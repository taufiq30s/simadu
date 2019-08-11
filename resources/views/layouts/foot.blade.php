<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="{{asset('bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Morris.js charts -->
{{-- <script src="{{asset('bower_components/admin-lte/plugins/morris/raphael-min.js')}}"></script> --}}
{{-- <script src="{{asset('bower_components/admin-lte/plugins/morris/morris.min.js')}}"></script> --}}
<!-- Sparkline -->
{{-- <script src="{{asset('bower_components/admin-lte/plugins/sparkline/jquery.sparkline.min.js')}}"></script> --}}
<!-- jvectormap -->
{{-- <script src="{{asset('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script> --}}
{{-- <script src="{{asset('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="{{asset('bower_components/admin-lte/plugins/knob/jquery.knob.js')}}"></script> --}}
<!-- daterangepicker -->
<script src="{{asset('js/moment-with-locales.min.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('bower_components/admin-lte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}">
</script>
<!-- Slimscroll -->
<script src="{{asset('bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
{{-- <script src="{{asset('bower_components/admin-lte/plugins/fastclick/fastclick.js')}}"></script> --}}
<!-- AdminLTE App -->
<script src="{{asset('bower_components/admin-lte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset('bower_components/admin-lte/dist/js/pages/dashboard.js')}}"></script> --}}
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('bower_components/admin-lte/dist/js/demo.js')}}"></script> --}}
<!-- InputMask -->
<script src="{{asset('bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- Select2 (New Model Select Box) -->
<script src="{{('/bower_components/admin-lte/plugins/select2/select2.full.min.js')}}"></script>
<!-- iCheck 1.0.1 (New Model Check Box) -->
<script defer src="{{asset('bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- SweetAlert -->
<script src="{{asset('sweetalert/dist/sweetalert.min.js')}}"></script>
<!-- IdleTimer -->
<script src="{{asset('js/idle-timer.min.js')}}"></script>
<!-- SmartWizard -->
<script defer src="{{asset('smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>
<!-- jQuery Validator -->
<script defer src="{{asset('bower_components/admin-lte/plugins/validation/jquery.validate.min.js')}}"></script>
<!-- Instascan (QR Code Reader) -->
<script src="{{asset('instascan/instascan.min.js')}}"></script>
<!-- jQuery QR-Code Generator -->
<script src="{{asset('jquery-qrcode-generator/jquery.qrcode.min.js')}}"></script>
<script src="{{asset('jquery-qrcode-generator/qrcode.min.js')}}"></script>


<script async type="text/javascript">
  moment.locale('id');

  // Set Peringatan Jika Sudah Session Expired
  $( document ).ajaxError(function( event, jqxhr, settings, thrownError ) {
    swal("Sesi Program ini sudah habis.", 'Silahkan klik OK dan login kembali!', "information");
    window.location.href = "/";
  });

  // Test JS Function
  function next_input_tab() {
    $('#Input_Patient_Tab a[href="#Add_Information_Disease"]').tab('show')
  }
  function back_input_tab() {
    $('#Input_Patient_Tab a[href="#Add_Information_Patient"]').tab('show')
  }
  function validate_delete_rekam_medis() {
    confirm('Apakah data ini ingin di hapus?')
  }

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

    /*Pasien Area*/
    // === Get NoKK Based from No Map === //
    // == This function for Input Modal == //
    // Ketika Klik Tombol Get No KK
    $("#getNoKK").click(function() {
      getNoKK();
      $('#noKK').focus();
    });

    // Ketika User tekan Enter
    $('#noMap').keypress(function(event){
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if(keycode == '13'){
        getNoKK();
        $('#noKK').focus();
      }
    });

    // Function GET
    function getNoKK(){
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
            $("#noKK").prop("disabled", true);
            $("#getNoMap").prop("disabled", true);
            if(data.count == 1){
              $(".pakaiNamaKK").show();
            }
            else
              $(".pakaiNamaKK").hide();
              $("#pakeNamaKK").prop("checked", false);
              $('#namaPasien').val('');
              $('#namaPasien').prop("disabled", false);
          }
          else{
            $(".pakaiNamaKK").hide();
            $("#noKK").prop("disabled", false);
            $("#getNoMap").prop("disabled", false);
            const msg = document.createElement('div');
            msg.innerHTML = "Pastikan anda memasukkan Nomor Map dengan benar atau Nomor Map sudah terdaftar di <a href='/rekmed/map'>sini</a>!";
            swal({
              title: 'Nomor Map Tidak Ditemukan',
              content: msg,
              icon: 'error'
            });
            $('#noMap').focus();
          }
        }
      })
    }
    // == End of Function == //
    // == This function for Edit Modal == //
    $("#getNoKK_edit").click(function() {
      getNoKK_Edit();
      $('#noKK_edit').focus();
    });

    $('#noMap_edit').keypress(function(event){
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if(keycode == '13'){
        getNoKK_Edit();
        $('#noKK_edit').focus();
      }
    });

    function getNoKK_Edit(){
      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/rekmed/pasien/cekmap",
        type: 'GET',
        data: {
            noMap : $("#noMap_edit").val(),
            _token : $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        success: function(data){
          if(data.exists){
            $("#noKK_edit").val(data.noKK);
            $("#namaKK_edit").val(data.namaKK);
            $("#noKK_edit").prop("disabled", true);
            $("#getNoMap_edit").prop("disabled", true);
            if(data.count == 1){
              $(".pakaiNamaKK_edit").show();
            }
            else
              $(".pakaiNamaKK_edit").hide();
              $("#pakeNamaKK_edit").prop("checked", false);
          }
          else{
            $(".pakaiNamaKK_edit").hide();
            $("#noKK_edit").prop("disabled", false);
            $("#getNoMap_edit").prop("disabled", false);
            const msg = document.createElement('div');
            msg.innerHTML = "Pastikan anda memasukkan Nomor Map dengan benar atau Nomor Map sudah terdaftar di <a href='/rekmed/map'>sini</a>!";
            swal({
              title: 'Nomor Map Tidak Ditemukan',
              content: msg,
              icon: 'error'
            });
            $('#noMap_edit').focus();
          }
        }
      })
    }

    // === Get No Map based on No KK === //
    // Ketika User Tekan Tombol
    $('#getNoMap').click(function(){
      var noKK = $("#noKK").val();
      noKK = $.trim(((noKK.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      getNoMap(noKK);
      $('#noMap').focus();
    });

    // Ketikan User Tekan Tombol Enter
    $('#noKK').keypress(function(event){
      var keycode = (event.keyCode ? event.keyCode : event.which);
      var noKK = $("#noKK").val();
      noKK = $.trim(((noKK.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      if(keycode == '13'){
        getNoMap(noKK);
        $('#noMap').focus();
      }
    });

    // Function GET
    function getNoMap(noKK){
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/rekmed/pasien/cekkk",
        type: 'GET',
        data: {
          noKK: noKK,
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
            else
              $(".pakaiNamaKK").hide();
              $("#pakeNamaKK").prop("checked", false);
              $('#namaPasien').val('');
              $('#namaPasien').prop("disabled", false);
          }
          else{
            $(".pakaiNamaKK").hide();
            $("#noMap").prop("disabled", false);
            $("#getNoKK").prop("disabled", false);
            const msg = document.createElement('div');
            msg.innerHTML = "Pastikan anda memasukkan Nomor Kartu Keluarga dengan benar atau Nomor Kartu Keluarga sudah terdaftar di <a href='/rekmed/map'>sini</a>!";
            swal({
              title: 'Nomor Kartu Keluarga Tidak Ditemukan',
              content: msg,
              icon: 'error'
            });
            $('#noKK').focus();
          }
        }
      })
    };

    // === Reset Pasien Behaviour === //
    $('#resetPasien').click(function(){
      $("#noMap").prop("disabled", false);
      $("#getNoKK").prop("disabled", false);
      $("#noKK").prop("disabled", false);
      $("#getNoMap").prop("disabled", false);
      $(".pakaiNamaKK").hide();
      $('#namaPasien').val('');
      $('#namaPasien').prop("disabled", false);
    });

    // === Pakai Nama Kepala Keluarga Checked Behaviour === //
    $('#pakeNamaKK').click(function(){
      if($('#pakeNamaKK').is(':checked'))
      {
        $('#namaPasien').val($('#namaKK').val());
        $('#namaPasien').prop("disabled", true);
      }
      else
      {
        $('#namaPasien').val('');
        $('#namaPasien').prop("disabled", false);
      }
    });

    // === Pakai Nama Kepala Keluarga Checked Behaviour in Edit Form === //
    $('#pakeNamaKK_edit').click(function(){
      if($('#pakeNamaKK_edit').is(':checked'))
      {
        $('#namaPasien_edit').val($('#namaKK_edit').val());
        $('#namaPasien_edit').prop("disabled", true);
      }
      else
      {
        $('#namaPasien_edit').val('');
        $('#namaPasien_edit').prop("disabled", false);
      }
    });

    $('#kategoriPasien').click(function(){
      $('#caption').prop("disabled", true);
    })

    // === Insert === //
    $('#registPasien').click(function(e){
      e.preventDefault();
      var noKK = $("#noKK").val();
      var noNIK = $('#noNIK').val();
      var noBPJS = $('#noBPJS').val();
      var noHP = $('#noHP').val();
      var riwayatAlergi = $('#riwayatAlergi').val();
      noKK = $.trim(((noKK.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      noNIK = $.trim(((noNIK.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      noHP = $.trim(((noHP.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      if(noBPJS != '')
        noBPJS = $.trim(((noBPJS.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/rekmed/pasien",
        type: 'POST',
        data:{
          noKK : noKK,
          noNIK : noNIK,
          noBPJS : noBPJS,
          namaPasien : $("#namaPasien").val(),
          tempatLahir : $("#tempatLahir").val(),
          tglLahir : moment($('#tanggalLahir').val(), 'DD/MM/YYYY').format('YYYY-MM-DD'),
          jk : $('#jk:checked').val(),
          noHP : noHP,
          riwayatAlergi: riwayatAlergi,
          _token : $('meta[name="csrf-token"]').attr('content'),
        },
        dataType:'json',
        success: function(data){
          {{-- console.log(data.debug); --}}
          $("#print-error-msg").find("#error").html('');
          $("#print-error-msg").css('display','none');
          swal("Sukses", "Data Pasien berhasil disimpan!", "success");
          table.ajax.reload();
          $("#pasienRegist").trigger('reset');
          $('#Modal_Input_Pasien').modal('hide')
        },
        error: function(data){
          {{--  console.log('error');  --}}
          {{-- console.log(data.debug); --}}
          {{--  console.log(data.responseJSON);  --}}
          var errors = data.responseJSON.errors;
          $("#print-error-msg").find("#error").html('');
          $("#print-error-msg").css('display','block');
          if($('#noMap').val() == '')
            $("#print-error-msg").find("#error").append('<li>Nomor Map Harus diisi</li>');
          if($('#noKK').val() == '')
            $("#print-error-msg").find("#error").append('<li>Nomor KK Harus diisi</li>');
          $.each( errors, function( key, value ) {
            value = custErrorPasien(value);
            $("#print-error-msg").find("#error").append('<li>'+value+'</li>');
          });
        }
      })
    });

    // === Custom Error Message For Pasien === //
    function custErrorPasien(error)
    {
      if(error[0] == 'The no n i k has already been taken.')
        return 'NIK sudah terdaftar.';
      else if(error[0] == 'The jk field is required.')
        return 'Jenis Kelamin harus dipilih!';
      else if(error[0] == 'The tgl lahir field is required.')
        return 'Tanggal Lahir harus diisi!';
      else if(error[0] == 'The tempat lahir field is required.')
        return 'Tempat Lahir harus diisi!';
      else if(error[0] == 'The no n i k field is required.')
        return 'NIK harus diisi!';
      else if(error[0] == 'The nama pasien field is required.')
        return 'Nama Pasien harus diisi!';
      else if(error[0] == 'The no h p field is required.')
        return 'Nomor HP harus diisi!';
      else if(error[0] == 'The no b p j s has already been taken.')
        return 'Nomor BPJS sudah terdaftar.';
      else if(error[0] == 'The no h p must be at least 12 characters.')
        return 'Nomor HP minimal 12 digit.'
    }

    // === Fetch and Show into Pasien View Modal === //
    $(document).on('click', '#btn_view_pasien', function(){
      var NoPasien = ($(this).attr("data-id"));
      var token = $("meta[name='csrf-token']").attr("content");
      $.ajax(
        {
          url: "/rekmed/pasien/"+NoPasien+"/edit",
          type: 'GET',
          dataType:'json',
          success: function(data)
          {
            var tglSekarang = moment();
            var tglLahir = moment(data.data.TglLahir);
            var umur = tglSekarang.diff(tglLahir, 'year');
            var noBPJS, riwayatAlergi;
            if(data.data.NoBPJS == null) noBPJS = '-';
            else noBPJS = data.data.NoBPJS;
            if(data.data.RiwayatAlergi == null) riwayatAlergi = '-';
            else riwayatAlergi = data.data.RiwayatAlergi;
            $('#noMap_view').html(data.dataMap.NoMap);
            $('#noKK_view').html(data.data.NoKK);
            $('#namaKK_view').html(data.dataMap.NamaKepalaKeluarga);
            $('#noNIK_view').html(data.data.NoKTP);
            $('#noBPJS_view').html(noBPJS);
            $('#namaPasien_view').html(data.data.NamaPasien);
            $('#tempatTglLahir_view').html(data.data.TempatLahir+', '+moment(data.data.TglLahir).format('DD-MMMM-YYYY'));
            $('#usia_view').html(umur+' Tahun');
            $('#jk_view').html(data.data.JK);
            $('#noHP_view').html(data.data.NoHP);
            $('#riwayatAlergi_view').html(riwayatAlergi)
            $('#Modal_View_Pasien').modal('show');
          }
        }
      )
    });

    // === Fetch and Show into Pasien Edit Modal === //
    $(document).on('click', '#btn_edit_pasien', function(){
      var NoPasien = ($(this).attr("data-id"));
      var token = $("meta[name='csrf-token']").attr("content");
      // Reset Gender Radio Button
      $('input[name=jenisKelamin_edit][value=Laki-Laki]').prop('checked',false).parent().removeClass('checked').attr('aria-checked', false);
      $('input[name=jenisKelamin_edit][value=Perempuan]').prop('checked',false).parent().removeClass('checked').attr('aria-checked', false);
      $.ajax(
        {
          url: "/rekmed/pasien/"+NoPasien+"/edit",
          type: 'GET',
          dataType:'json',
          success: function(data)
          {
            $('#noMap_edit').val(data.dataMap.NoMap);
            $('#noKK_edit').val(data.data.NoKK);
            $('#namaKK_edit').val(data.dataMap.NamaKepalaKeluarga);
            if(data.data.NamaPasien == data.dataMap.NamaKepalaKeluarga)
            {
              $(".pakaiNamaKK_edit").show();
              $("#pakeNamaKK_edit").prop('checked', true);
              $("#namaPasien_edit").prop('disabled', true);
            }
            else
              $("#namaPasien_edit").prop('disabled', false);
            $('#noNIK_edit').val(data.data.NoKTP);
            $('#noBPJS_edit').val(data.data.NoBPJS);
            $('#namaPasien_edit').val(data.data.NamaPasien);
            $('#tempatLahir_edit').val(data.data.TempatLahir);
            $('#tanggalLahir_edit').val(moment(data.data.TglLahir).format('DD/MM/YYYY'));
            $('input[name=jenisKelamin_edit][value='+data.data.JK+']').prop('checked',true).parent().addClass('checked').attr('aria-checked', true);
            $('#noHP_edit').val(data.data.NoHP);
            $('#riwayatAlergi_edit').val(data.data.RiwayatAlergi)
            $('#noPasien').val(NoPasien);
            $('#Modal_Edit_Pasien').modal('show');
          }
        }
      )
    });

    // === Update Pasien === //
    $('#editPasien').click(function(e){
      e.preventDefault();
      var noKK = $("#noKK_edit").val();
      var noNIK = $('#noNIK_edit').val();
      var noBPJS = $('#noBPJS_edit').val();
      var noHP = $('#noHP_edit').val();
      var noPasien = $('#noPasien').val();
      var riwayatAlergi = $('#riwayatAlergi_edit').val();
      noKK = $.trim(((noKK.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      noNIK = $.trim(((noNIK.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      noHP = $.trim(((noHP.replace(/ /g,'')).replace(/-/g,'')).replace(/_/g,''));
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/rekmed/pasien/"+noPasien,
        type: 'PUT',
        data:{
          noPasien : noPasien,
          noKK : noKK,
          noNIK : noNIK,
          noBPJS : noBPJS,
          namaPasien : $("#namaPasien_edit").val(),
          tempatLahir : $("#tempatLahir_edit").val(),
          tglLahir : moment($('#tanggalLahir_edit').val(), 'DD/MM/YYYY').format('YYYY-MM-DD'),
          jk : $('#jk_edit:checked').val(),
          noHP : noHP,
          riwayatAlergi: riwayatAlergi,
          _token : $('meta[name="csrf-token"]').attr('content'),
        },
        dataType:'json',
        success: function(data){
          $("#print-error-msg-edit").find("#error").html('');
          $("#print-error-msg-edit").css('display','none');
          swal("Sukses", "Data berhasil diubah!", "success");
          table.ajax.reload();
          $("#pasienEdit").trigger('reset');
          $('#noPasien').val('');
          $('#Modal_Edit_Pasien').modal('hide')
        },
        error: function(data){
          var errors = data.responseJSON.errors;
          {{--  console.log(data.responseJSON);  --}}
          $("#print-error-msg-edit").find("#error").html('');
          $("#print-error-msg-edit").css('display','block');
          $.each( errors, function( key, value ) {
            value = custErrorPasien(value);
            $("#print-error-msg-edit").find("#error").append('<li>'+value+'</li>');
          });
        }
      })
    });

    // === Pasient Cancel Button Behaviour === //
    $('#cancelPasien').click(function(){
      $('#noPasien').val('');
      $("#print-error-msg-edit").find("#error").html('');
      $("#print-error-msg-edit").css('display','none');
      $('#Modal_Edit_Pasien').modal('toggle');
    });

    // === Delete Pasien === //
    $(document).on('click','#btn_delete_pasien',function(){
      var NoPasien = ($(this).attr("data-id"));
      var token = $("meta[name='csrf-token']").attr("content");
      swal({title : 'Anda yakin ingin menghapus data pasien ' + NoPasien + ' ini ?',
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
              url: "/rekmed/pasien/"+NoPasien,
              type: 'DELETE',
              data: {
                noPasien : NoPasien,
                _token : token,
              },
              dataType: "json",
              success: function(){
                swal("Sukses", "Data Pasien berhasil dihapus!", "success");
                table.ajax.reload();
              }
            }
          )
        }
      })
    });

    // === Print Kartu Pasien === //
    // TO-DO: Atur Sistem Pencetakan Kartu
    $(document).on('click', '#btn_print_pasien', function(){
      var NoPasien = ($(this).attr("data-id"));
      var token = $("meta[name='csrf-token']").attr("content");
      $.ajax(
        {
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: "/rekmed/pasien/cetak/"+NoPasien,
          type: 'GET',
          data: {
            noPasien : NoPasien,
            _token : token,
          },
          dataType: "json",
          success: function(){
            // $('#untukNoPasien').val(data.noPasien);
            // $('#untukNoMap').val(data.noMap);
            // $('#areaQRCode').qrcode({width: xx, height: yy, text : data.noPasien});

            // Tampilkan Print View & Operasionalnya
          }
        }
      )
    })


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
          statusDaerah : $("#statusDaerah").val(),
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
            $('#statusDaerah_edit').val(data.data.DalamDaerah);
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
          statusDaerah : $("#statusDaerah_edit").val(),
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
    });
    /*End of Map Area*/

    /*Rekam Medis Area*/
    let inisialized = 0;  // confirmTable's DataTable Inisalized Flag
    // == Smart Wizard Initialized ==
    $(document).on('click', '#addRekmed', function(){
      $('#rekmedWizard').smartWizard({
        selected: 0, // Initial selected step, 0 = first step
        autoAdjustHeight: false,
        keyNavigation: false, // enable/disable key navigation.
        lang : { // Language Variable
          next : 'Selanjutnya',
          previous : 'Sebelumnya'
        },
        useURLhash: false, // Enable selection of the step based on url hash
        showStepURLhash: false, // Show url hash based on step
        toolbarSettings: {
          toolbarPosition: 'bottom', // none, top, bottom, both
          toolbarButtonPosition: 'right', // left, right
          showNextButton: true, // show/hide a Next button
          showPreviousButton: true, // show/hide a Previous button
          toolbarExtraButtons: [
                          $('<button></button>').text('Finish')
                                    .addClass('btn btn-info sw-btn-fin')
                                    .on('click', function(){
                                      alert('Finsih button click');
                                    })
            ],
        },
        anchorSettings: {
          anchorClickable: true, // Enable/Disable anchor navigation
          enableAllAnchors: false, // Activates all anchors clickable all times
          markDoneStep: true, // add done css
          enableAnchorOnDoneStep: true, // Enable/Disable the done steps navigation
          removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
        },
        theme: 'arrow',
        transitionEffect: 'fade', // Effect on navigation, none/slide/fade
        transitionSpeed: '400'
      });
    });

    //== Pengaturan Tampilan Toolbar
    $('#rekmedWizard').on('showStep', function(e, anchorObject, stepNumber, stepDirection, stepPosition){
      $('.sw-btn-fin').hide(); // Finish Button Hidden
      if(stepNumber === 0)
      {
        $('.sw-btn-prev').hide();
        $('.sw-btn-next').hide();
      }
      else if(stepPosition != 'final')
      {
        $('.sw-btn-prev').show();
        $('.sw-btn-next').show();
        $('.sw-btn-fin').hide();
      }
      else
      {
        $('.sw-btn-next').hide();
        $('.sw-btn-fin').show(); // Show Finish Button
      }

      // Show Last Confirm
      if(stepNumber === 3)
      {
        getLastConfirm();
      }
    });

    //== Reset Form Wizard ==
    $('#closeKunjunganModal').click(function(){
      $('#rekmedWizard').smartWizard("reset");
      $('#cariData').val("");
      $('#searchFilter').val("pasien");
      $("#result-table").hide();
      $("#qrcodeScan").show();
      if(inisialized==1) confirmTable.clear().destroy(); // Reset confirmTable
      inisialized = 0;
    });

    //== Auto Set Table Header ==
    $(document).on('click','#searchFilter',function(){
      if(inisialized==1) // Reset confirmTable
      {
        confirmTable.clear().destroy();
        inisialized = 0;
      }
      var filter = this.value; // get select value
      var content; // HTML table markup
      $('#cariData').val("");
      if(filter == "pasien" || filter == "nik")
      {
        $("#result-table").hide();
        $("#qrcodeScan").show();
      }
      else
      {
        $("#result-table").show();
        $("#qrcodeScan").hide();
      }
      if(filter == "map" || filter == "kk")
      {
        content = "<th>No.Pasien</th><th>No.Map</th><th>No.KK</th><th>Nama Pasien</th>";
      }
      else if(filter == "nama")
      {
        content = "<th>No.Pasien</th><th>No.Map</th><th>No.KK</th><th>Nama Pasien</th><th>Alamat</th>";
      }
      else if(filter == "namakk")
      {
        content = "<th>No.Map</th><th>No.KK</th><th>Nama Kepala Keluarga</th><th>Alamat</th>";
      }
      $("#result-table").empty(); // Reset Table Header
      $("#result-table").append(content);

      // Reset DataMask of SearchBox


      // Set DataMask of SearchBox
      if(filter == "pasien")
      {
        $('#cariData').inputmask("P-99999999");
      }
      else if(filter == "nik" || filter == "kk")
      {
        $('#cariData').inputmask("9999999999999999");
      }
      else if(filter == "map")
      {
        $('#cariData').inputmask("M-999999");
      }

      else
        $('#cariData').inputmask("remove");
    });

    // Wizard Verification
    $('#rekmedWizard').on('leaveStep', function(e, anchor, stepNumber, stepDirection) {
      if(stepNumber === 2)
      {
        var verify = $('#verifyKeluhan');
        verify.validate();
        if(stepDirection === 'forward')
        {
          if(verify.valid()) return true;
          else return false;
        }
      }
      else return true;
    })

    //== Open QR Scanner ==
    $('#qrcodeScan').click(function(){
      // Munculkan Tag Video Pada Modal
      const video = document.createElement('div');
      video.innerHTML = '<video id="qrScan" style="width:300px"></video>'
      // Jalankan Modal pake Swal (SweetAlert)
      swal({
        title: "Scan QR Code Kartu Pasien", // Judulnya
        content: video, // Isi Content
        buttons: { // Setingan Tombol Cancel Saja
          cancel: {
            text: "Cancel",
            value: "close",
            visible: true,
            className: "btn btn-outline-danger waves-effect ml-auto",
            closeModal: true
          },
          confirm: false, // Hilangkan tombol ok
        },
        closeOnClickOutside: false, // Cegah biar swal tidak close saat klik diluarnya
      })
      // Jalankan jika user tekan close atau Swal ditutup
      .then((value) => {
        if(value == "close")
          scanner.stop(); // Matikan Kamera
      })
      // Deklarasi Scanner
      let scanner = new Instascan.Scanner({
          video: document.getElementById('qrScan')
      });
      // Trigger Fungsi ketika mendeteksi QR Code
      scanner.addListener('scan', function(content) {
        var res = getDataPasien(content,0); //Jalankan getDataPasien yang return nilai
        if(res == 0) // Jika Nilainya 0, tutup Swal
          swal.close();
      });
      // Scanner akses kamera
      Instascan.Camera.getCameras().then(cameras =>
      {
        if(cameras.length > 0){
          scanner.start(cameras[0]);
        } else {
          alert("Kamera Tidak ditemukan");
        }
      }).catch(function (e) {
        swal("Kamera Tidak Ditemukan", 'Pastikan kamera dalam keadaan menyala atau tersambung ke komputer!', "error");
      });
    })

    //== Search Data ==
    $('#searchData').click(function(){
      var filter = $('#searchFilter').val();
      if(filter == "pasien" || filter == "nik")
      {
        var req = (filter == "pasien") ? 0 : 1;
        getDataPasien(getCariDataVal(), req);
      }
      else if(filter == "namakk" || filter == "nama")
      {
        if(inisialized == 0) inisializeConfirmTable();
        else confirmTable.ajax.reload();
      }
      else
      {
        getDataMap();
      }
    });

    // == Search Data (Pressed Enter) ==
    $('#cariData').keypress(function(event){
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if(keycode == '13'){
        $('#searchData').click();
      }
    });

    // Fetch Value dari cariData
    function getCariDataVal()
    {
      return $('#cariData').val();
    }

    // Fetch Request Code
    function getRequestCode()
    {
      return ($('#searchFilter').val() == "map") ? 0 : ($('#searchFilter').val() == "kk") ? 1 : ($('#searchFilter').val() == 'namakk') ? 2 : 3;
    }

    // Fetch Last Confirmation
    function getLastConfirm()
    {
      let poli = $('#poliTujuan').val();
      $('#noPasien_lastConfirm').html($('#noPasien_confirm').text());
      $('#noMap_lastConfirm').html($('#noMap_confirm').text());
      $('#namaPasien_lastConfirm').html($('#namaPasien_confirm').text());
      $('#usia_lastConfirm').html($('#usia_confirm').text());
      $('#jk_lastConfirm').html($('#jk_confirm').text());
      $('#keluhan_lastConfirm').html($('#keluhan').val());
      $('#poli_lastConfirm').html((poli === 'R-001') ? 'Poli Pemeriksaan Umum' : (poli === 'R-002') ? 'Poli Gigi dan Mulut' : 'Poli Kesehatan Ibu dan Anak');
    }

    // Initialize DataTables
    function inisializeConfirmTable()
    {
      let columns = [
        {"data": (getRequestCode() != 2) ? "NoPasien" : "NoMap"},
        {"data": (getRequestCode() != 2) ? "map.NoMap" : "NoKK"},
        {"data": (getRequestCode() != 2) ? "NoKK" : "NamaKepalaKeluarga"},
        {"data": (getRequestCode() != 2) ? "NamaPasien" : "Alamat"}
      ];
      if(getRequestCode() > 2) columns.push({"data" :  "map.Alamat"});
      confirmTable = $('#dt_kunjungan_pencarian').DataTable({
        "processing" : true,
        "serverSide" : true,
        "ajax" : {
          url: (getRequestCode() < 2) ? "/rekmed/kunjungan/cekMap" : (getRequestCode() == 2) ? "/rekmed/kunjungan/cekNamaKK" : "/rekmed/kunjungan/cekNamaPasien",
          data: function(d) {
            d.searchVal = getCariDataVal();
            d.request = getRequestCode();
          }
        },
        "columns" : columns,
        searching: false
      });
      inisialized = 1;
    }

    // AJAX Fetch Data Pasien
    let prevPasienId = "";
    function getDataPasien(noPasien, req)
    {
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/rekmed/kunjungan/cekPasien",
        type: 'GET',
        data: {
          noPasien: noPasien,
          request : req,
          _token : $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        success: function(data){
          if(data.exists){
            $('#rekmedWizard').smartWizard("next");
            var tglSekarang = moment();
            var tglLahir = moment(data.dataPasien.TglLahir);
            var umur = tglSekarang.diff(tglLahir, 'year');
            var noBPJS, riwayatAlergi;
            if(data.dataPasien.NoBPJS == null) noBPJS = '-';
            else noBPJS = data.dataPasien.NoBPJS;
            if(data.dataPasien.RiwayatAlergi == null) riwayatAlergi = '-';
            else riwayatAlergi = data.dataPasien.RiwayatAlergi;
            $('#noPasien_confirm').html(data.dataPasien.NoPasien);
            $('#noMap_confirm').html(data.dataMap.NoMap);
            $('#noKK_confirm').html(data.dataPasien.NoKK);
            $('#namaKK_confirm').html(data.dataMap.NamaKepalaKeluarga);
            $('#alamat_confirm').html(data.dataMap.Alamat);
            $('#statusDaerah_confirm').html((data.dataMap.DalamDaerah == 1) ? 'Dalam Daerah' : 'Luar Daerah');
            $('#nik_confirm').html(data.dataPasien.NoKTP);
            $('#noBPJS_confirm').html(noBPJS);
            $('#namaPasien_confirm').html(data.dataPasien.NamaPasien);
            $('#tempatTglLahir_confirm').html(data.dataPasien.TempatLahir+', '+moment(data.dataPasien.TglLahir).format('DD-MMMM-YYYY'));
            $('#usia_confirm').html(umur+' Tahun');
            $('#jk_confirm').html(data.dataPasien.JK);
            $('#noHP_confirm').html(data.dataPasien.NoHP);
            $('#riwayatAlergi_confirm').html(riwayatAlergi);
          }
          else{
            swal("Nomor Pasien atau NIK Tidak Ditemukan", 'Silahkan periksa Nomor Pasien atau NIK yang anda masukkan!', "error");
            return 1;
          }
        }
      });
      if($('#noPasien_confirm').text() != prevPasienId)
      {
        prevPasienId = $('#noPasien_confirm').text();
        $('#keluhan').val('');
        $('#poliTujuan').val('R-001');
      }
      return 0;
    }

    // AJAX Fetch Data Map
    function getDataMap()
    {
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/rekmed/kunjungan/verifySearch",
        type: 'GET',
        data: {
          searchVal: getCariDataVal(),
          request : getRequestCode(),
          _token : $('meta[name="csrf-token"]').attr('content'),
        },
        dataType: 'json',
        success: function(confirmData){
          if(confirmData.exists){
            if(inisialized == 0)
            {
              inisializeConfirmTable();
            }
            else{
              confirmTable.ajax.reload();
            }
          }
          else{
            swal("Nomor Map atau Nomor KK Tidak Ditemukan", 'Silahkan periksa Nomor Map atau Nomor KK yang anda masukkan!', "error");
          }
        }
      });
    }

    // When User Click No.Pasien
    $(document).on('click', '#btn_select_pasien', function(){
      getDataPasien($(this).attr("data-id"),0);
    });

    // When User Click No.Map
    $(document).on('click', '#btn_select_map', function(){
      $('#cariData').val($(this).attr("data-id"));
      $('#searchFilter').val("map");
      confirmTable.clear().destroy();
      inisialized = 0;
      $('#searchData').trigger('click');
<<<<<<< Updated upstream
    });
=======
    });


    // Poli Area

    // SmartWizard for Poli
    $(document).on('show', '#Modal_Input_Poli', function(){
      $('#pengobatanWizard').smartWizard({
        selected: 0, // Initial selected step, 0 = first step
        autoAdjustHeight: false,
        keyNavigation: false, // enable/disable key navigation.
        lang : { // Language Variable
          next : 'Selanjutnya',
          previous : 'Sebelumnya'
        },
        useURLhash: false, // Enable selection of the step based on url hash
        showStepURLhash: false, // Show url hash based on step
        toolbarSettings: {
          toolbarPosition: 'bottom', // none, top, bottom, both
          toolbarButtonPosition: 'right', // left, right
          showNextButton: true, // show/hide a Next button
          showPreviousButton: true, // show/hide a Previous button
          toolbarExtraButtons: [
                          $('<button></button>').text('Finish')
                                    .addClass('btn btn-info sw-btn-fin')
                                    .on('click', function(){
                                      alert('Finsih button click');
                                    })
            ],
        },
        anchorSettings: {
          anchorClickable: true, // Enable/Disable anchor navigation
          enableAllAnchors: false, // Activates all anchors clickable all times
          markDoneStep: true, // add done css
          enableAnchorOnDoneStep: true, // Enable/Disable the done steps navigation
          removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
        },
        theme: 'arrow',
        transitionEffect: 'fade', // Effect on navigation, none/slide/fade
        transitionSpeed: '400'
      });
    });



    //Apotek Area

    // DataTables Inventory Obat
      $('#tblInventoryObat').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": false,
        "autoWidth": false,
        "pageLength" : 1
      });

      $('#addDataObatModals').on('shown.bs.modal', function () {
        $('#namaObat').focus()
      })
      $(function () {
        //Initialize Select2 Elements
        $('#expiredTambahObat').select2()
        $('#expiredTambahObat').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        $('[data-mask]').inputmask()

        $('#btnFinishAdd').on('click', function(){
          swal({
            title : "Tambah Data",
            text : "Data berhasil ditambah.",
            icon : "success"
          })
        });

        $('#btnFinishAddDataObat').on('click', function(){
          swal({
            title : "Tambah Data",
            text : "Data berhasil ditambah.",
            icon : "success"
          })
        });
      }

    // General Caller function
    // Edited by Richy
>>>>>>> Stashed changes
