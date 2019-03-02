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
            <i class="fas fa-image"></i>
            Landing
          </div>
          <!-- card header -->

          <!-- card body -->
          <div class="card-body">
            <!-- preview image -->
            <img src="{{ asset('/img/jumbotron-bg.jpg')}}" alt="" class="img-fluid">

            <!-- upload gambar -->
            <div class="form-group">
              <div class="custom-file">
                  <label for="up-image">Landing Image</label>
                  <input id="up-image" class="form-control" type="file" name="landing_img">
              </div>
            </div>
            <!-- upload gambar -->

            <!-- update text -->
            <div class="form-group">
              <label for="up-text">Text Image, <b><span style="font-size: 10px;">agar text bold/tebal gunakan < b >{Tex_Bold}< / b > seperti tag html biasa</span></b> </label>
              <input id="up-text" class="form-control" type="text" name="text_img" maxlength="50" placeholder="50 Character Maksimal ">
            </div>
            <!-- update text -->
            
            <!-- button submit -->
            <div class="d-flex justify-content-end">
              <button class="btn btn-primary" type="submit" >Update</button>
            </div>
            <!-- button submit -->
          </div>
          <!-- card body -->

          <!-- button submit -->
          <div class="card-footer small text-muted text-right"></div>
          <!-- button submit -->
        </div>
      </form>
    </div>

    <!-- Area Feature -->
    <div class="col-lg-6 col-md-6">
      <form method="POST" enctype="multipart/form-data" action="">
        @csrf
          <div class="card mb-3">
            <!-- card header -->
            <div class="card-header">
              <i class="fas fa-hand-paper"></i>
              Fitur
            </div>
            <!-- card header -->

            <!-- card body -->
            <div class="card-body">

              <div class="row">
                  
                <div class="col-md-5 col-sm-4 border p-2 m-1">
                  <!-- preview image -->
                  <img src="{{ asset('/img/employee.png')}}" alt="" class="img-fluid">
                  
                  <!-- upload gambar -->
                  
                  <div class="form-group">
                    <div class="custom-file">
                      <label for="f1-img">Feature 1</label>
                      <input id="f1-img" class="form-control" type="file" name="f1-img">
                    </div>
                  </div>
                  <!-- upload gambar -->

                  <!-- text 1 -->
                  <div class="form-group">
                    <label for="f1-tx1">Text Image</label>
                    <input id="f1-tx1" class="form-control" type="text" name="f1-tx1" maxlength="50" placeholder="50 Character Maksimal ">
                  </div>
                  <!-- text 1 -->

                  <!-- text 2 -->
                  <div class="form-group">
                    <label for="f1-tx2">Text Image</label>
                    <input id="f1-tx2" class="form-control" type="text" name="f1-tx2" maxlength="50" placeholder="50 Character Maksimal ">
                  </div>
                      <!-- text 2 -->
                </div>
                      
                <div class="col-md-5 col-sm-4 border p-2 m-1">
                  <!-- preview image -->
                  <img src="{{ asset('/img/hires.png')}}" alt="" class="img-fluid">
                  
                  <!-- upload gambar -->
                  <div class="form-group">
                    <div class="custom-file">
                      <label for="f2-img">Feature 2</label>
                      <input id="f2-img" class="form-control" type="file" name="f2-img">
                    </div>
                  </div>
                  <!-- upload gambar -->

                  <!-- text 1 -->
                  <div class="form-group">
                    <label for="f2-tx1">Text Image</label>
                    <input id="f2-tx1" class="form-control" type="text" name="f2-tx1" maxlength="50" placeholder="50 Character Maksimal ">
                  </div>
                  <!-- text 1 -->

                  <!-- text 2 -->
                  <div class="form-group">
                    <label for="f2-tx2">Text Image</label>
                    <input id="f2-tx2" class="form-control" type="text" name="f2-tx2" maxlength="50" placeholder="50 Character Maksimal ">
                  </div>
                  <!-- text 2 -->

                </div>
                      
                <div class="col-md-5 col-sm-4 border p-2 m-1">
                  <!-- preview image -->
                  <img src="{{ asset('/img/security.png')}}" alt="" class="img-fluid">
                  
                  <!-- upload gambar -->
                  <div class="form-group">
                    <div class="custom-file">
                      <label for="f3-img">Feature 3</label>
                      <input id="f3-img" class="form-control" type="file" name="f3-img">
                    </div>
                  </div>
                  <!-- upload gambar -->

                  <!-- text 1 -->
                  <div class="form-group">
                    <label for="f3-tx1">Text Image</label>
                    <input id="f3-tx1" class="form-control" type="text" name="f3-tx1" maxlength="50" placeholder="50 Character Maksimal ">
                  </div>
                  <!-- text 1 -->

                  <!-- text 2 -->
                  <div class="form-group">
                    <label for="f3-tx2">Text Image</label>
                    <input id="f3-tx2" class="form-control" type="text" name="f3-tx2" maxlength="50" placeholder="50 Character Maksimal ">
                  </div>
                  <!-- text 2 -->

                </div>

              </div>

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
    <!-- Area Feature -->
    
  </div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $('#nav-atas').addClass('active');
    });
  </script>
@endsection