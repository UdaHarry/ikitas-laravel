@extends('admin.layout')

@section('title','Tengah')

@section('content')

  <div class="breadcrumb">
    <div class="breadcrumb-item">
        <h5>Layout Tengah</h5>
    </div>
  </div>

  <!-- Area Chart Example-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-question-circle"></i>
      About
    </div>
    <div class="card-body">

    <form method="POST" enctype="multipart/form-data" action="">
      @csrf
      <div class="row">
        <!-- kiri -->
        <div class="col-md-6">
          <!-- preview image -->
          <div class="row">
            <div class="mx-auto">
              <img src="{{ asset('/img/workingspace.png')}}" alt="" class="img-fluid" >
            </div>
          </div>
          <!-- preview image -->

          <!-- upload gambar -->
          <div class="d-flex justify-content-center">
            <div class="form-group">
              <div class="custom-file mt-2">
                <input type="file" class="custom-file-input" id="about-img" name="about-img">
                <label class="custom-file-label" for="about-img">Choose file</label>
              </div>
            </div>
          </div>
          <!-- upload gambar -->
        </div>
        <!-- kiri -->

        <!-- kanan -->
        <div class="col-md-6">

          <!-- update text -->
          <div class="form-group">
            <label for="about-head">Headline</label>
            <input id="about-head" class="form-control" type="text" name="about-head" maxlength="50" placeholder="50 Character Maksimal ">
          </div>
          <!-- update text -->
                  
          <!-- inner Text -->
          <div class="form-group">
            <label for="about-text">Example textarea</label>
            <textarea class="form-control" id="about-text" rows="3" name="about-text"></textarea>
          </div>
          <!-- inner Text -->

          <div class="d-flex justify-content-end">
            <div class="form-group mt-4">
              <button class="btn btn-primary" type="submit" >Update</button>
            </div>
          </div>

        </div>
        <!-- kanan -->
      </div>
    </form>

    </div>
    
    <div class="card-footer small text-muted text-right"></div>
  </div>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-users"></i>
      Team
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Mulai Bekerja</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td>Ria Richies</td>
              <td>Content Creator</td>
              <td>2011/04/25</td>
              <td>
                <a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></a>&nbsp;
                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>&nbsp;
              </td>
            </tr>
                  
            <tr>
              <td>2</td>
              <td>Atta Halilintar</td>
              <td>Content Creator</td>
              <td>2011/07/25</td>
              <td>
                <a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></a>&nbsp;
                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>&nbsp;
              </td>
            </tr>
                  
            <tr>
              <td>3</td>
              <td>Lucinta luna</td>
              <td>Marketing</td>
              <td>2009/01/12</td>
              <td>
                <a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></a>&nbsp;
                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>&nbsp;
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
          
    <div class="card-footer small text-muted text-right"></div>
  </div>

@endsection

@section('tinymce')
  <script src="{{ asset('scAdmin/tinymce/js/tinymce/tinymce.min.js') }}"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: 'textarea#about-text',  // change this value according to your HTML
      menubar: false,
      plugins: [
      'advlist autolink link lists charmap preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
      ],
      content_css: 'css/content.css',
      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
  });
  </script>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $('#nav-tengah').addClass('active');
    });
  </script>

  <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
  </script>
@endsection
