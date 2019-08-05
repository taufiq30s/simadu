<div class="modal fade bd-example-modal-lg" style="margin-left: 20%;" id="Modal_View_Pasien" tabindex="-1" role="dialog"
  aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Informasi Detail Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <table class="table table-striped table-bordered" id="view">
          <tbody>
            <tr>
              <td><b>Nomor Map</b></td>
              <td id="noMap_view">@mdo</td>
            </tr>
            <tr>
              <td><b>Nomor Kartu Keluarga</b></td>
              <td id="noKK_view"></td>
            </tr>
            <tr>
              <td><b>Nama Kepala Keluarga</b></td>
              <td id="namaKK_view"></td>
            </tr>
            <tr>
              <td><b>Nomor NIK</b></td>
              <td id="noNIK_view"></td>
            </tr>
            <tr>
              <td><b>Nomor BPJS</b></td>
              <td id="noBPJS_view"></td>
            </tr>
            <tr>
              <td><b>Nama Lengkap Pasien</b></td>
              <td id="namaPasien_view"></td>
            </tr>
            <tr>
              <td><b>Tempat Tanggal Lahir</b></td>
              <td id="tempatTglLahir_view"></td>
            </tr>
            <tr>
              <td><b>Usia Pasien</b></td>
              <td id="usia_view"></td>
            </tr>
            <tr>
              <td><b>Jenis Kelamin</b></td>
              <td id="jk_view"></td>
            </tr>
            <tr>
              <td><b>Nomor Handphone</b></td>
              <td id="noHP_view"></td>
            </tr>
            <tr>
              <td><b>Riwayat Alergi</b></td>
              <td id="riwayatAlergi_view">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, doloremque. Esse odio itaque soluta laboriosam, omnis natus. Doloribus eius dignissimos officia expedita ipsum deserunt aut dolores tenetur, dicta magni assumenda.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary waves-effect ml-auto">Print</button>
        <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!--/.Panel 7-->
  </div>
</div>
