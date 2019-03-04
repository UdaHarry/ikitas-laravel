@extends('admin.layout')

@section('title','atas')

@section('content')

        <div class="breadcrumb">
        	<div class="breadcrumb-item">
        		<h5>Layout Atas</h5>
        	</div>
        </div>
        
        <div class="row">
          <!-- Area Landing-->
          <div class="col-lg-6 col-md-6">
            <form method="POST" enctype="multipart/form-data" action="/adm-bawah/1/update">
            <!-- <form id="form-update" method="POST" enctype="multipart/form-data"> -->
              @csrf
              <div class="card mb-3">


                <div class="alert alert-success alert-dismissible" style="display:none">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-check"></i>
                  Perubahan berhasil disimpan.
                </div>

                <div class="alert alert-danger alert-dismissible" style="display:none">
                  <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                  <i class="icon fa fa-check"></i>
                  Perubahan gagal disimpan.
                </div>

                <!-- card header -->
                <div class="card-header">
                  <i class="fas fa-address-book"></i>
                  Landing
                </div>
                <!-- card header -->

                <!-- card body -->
                <div class="card-body">
                  <h4>Location</h4>
                  <iframe id="prev-maps" src="" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                    </div>
                    <input id="maps" type="text" class="form-control" name="maps">
                  </div>
                  <!-- update text -->
                  
                  <h4>Contact</h4>
                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control" name="email">
                  </div>
                  <!-- update text -->
                  
                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input id="telepon" type="tel" class="form-control" name="telepon">
                  </div>
                  <!-- update text -->

                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input id="handphone" type="tel" class="form-control" name="handphone">
                  </div>
                  <!-- update text -->

                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                    </div>
                    <input id="whatsapp" type="tel" class="form-control" name="whatsapp">
                  </div>
                  <!-- update text -->

                  <div class="d-flex justify-content-end">
                      <button class="btn btn-primary" type="submit" >Update</button>
                  </div>

                </div>
                <!-- card body -->

                <!-- button submit -->
                <div class="card-footer small text-muted text-right"></div>
                <!-- button submit -->
              </div>
            </form>
          </div>

        </div>
@endsection

@section('script')
  <script type="text/javascript">
    $(function(){

      showData();
      $('#nav-bawah').addClass('active');

      // $('#form-update').on('submit', function(e){
      //        e.preventDefault();
      //        $.ajaxSetup({
      //             headers: {
      //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //             }
      //         });
      //        $.ajax({
      //          type : "POST",
      //          url : "/adm-bawah/1/update",
      //          data : $(this).serialize(),
      //          success : function(data){
      //            showData();
      //            $('.alert-success').css('display', 'block').delay(2000).fadeOut();
      //          },
      //          error : function(){
      //            $('.alert-danger').css('display', 'block').delay(2000).fadeOut();
      //          }   
      //        });
      //        return false;
      // });
    });

    function showData(){
      $.ajax({
        url : "adm-bawah/1/edit",
        type : "GET",
        dataType : "JSON",
        success : function(data){
          $('#prev-maps').attr('src',data.maps);
          $('#maps').val(data.maps);
          $('#email').val(data.email);
          $('#telepon').val(data.telepon);
          $('#handphone').val(data.hp);
          $('#whatsapp').val(data.whatsapp);
        },
        error : function(){
          alert("Tidak dapat menyimpan data!");
        }   
      });
    }
  </script>
@endsection

