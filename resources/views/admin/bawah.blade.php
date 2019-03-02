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
            <form method="POST" enctype="multipart/form-data" action="">
              @csrf
              <div class="card mb-3">
                <!-- card header -->
                <div class="card-header">
                  <i class="fas fa-address-book"></i>
                  Landing
                </div>
                <!-- card header -->

                <!-- card body -->
                <div class="card-body">
                  <h4>Location</h4>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.960448395582!2d110.38979251477349!3d-7.013934494933549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b08ecae27d3%3A0xbca7db646419b713!2sIKITAS+3+Menoreh!5e0!3m2!1sid!2sid!4v1551026062580" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                    </div>
                    <input type="text" class="form-control" name="maps">
                  </div>
                  <!-- update text -->
                  
                  <h4>Contact</h4>
                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <!-- update text -->
                  
                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="tel" class="form-control" name="telepon">
                  </div>
                  <!-- update text -->

                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="tel" class="form-control" name="handphone">
                  </div>
                  <!-- update text -->

                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                    </div>
                    <input type="tel" class="form-control" name="whatsapp">
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
    $(document).ready(function(){
      $('#nav-bawah').addClass('active');
    });
  </script>
  <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
@endsection

