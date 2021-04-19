@extends('admin.layouts.app')

@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add movies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Movies</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->





    <section class="content">
      <div class="row">

        <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Movies</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('admin.movie.add') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="movieName">Movie Name </label>
                    <input type="text" class="form-control" id="movieName" placeholder="Enter Movie Name" name="movie_name">
                  </div>
                  <div class="form-group">
                    <label for="MovieDescription">Description</label>
                    <textarea class="form-control" rows="3" placeholder="Enter movie description " name="movie_description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="MovieImage">Upload Images</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="movie_image" placeholder="Upload an image" >
                            <label class="custom-file-label" for="customFile"></label>
                        </div>
                     
                    </div>
                  </div>
                  <!--
                  <div class="form-group" data-select2-id="62">
                  <label>Multiple</label>
                  <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                    <option data-select2-id="29">Alabama</option>
                    <option data-select2-id="30">Alaska</option>
                    <option data-select2-id="31">California</option>
                    <option data-select2-id="32">Delaware</option>
                    <option data-select2-id="33">Tennessee</option>
                    <option data-select2-id="34">Texas</option>
                    <option data-select2-id="35">Washington</option>
                  </select>
                  <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="8" style="width: 100%;">
                    <span class="selection">
                        <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                            <ul class="select2-selection__rendered">
                                <li class="select2-search select2-search--inline">
                                    <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 538px;">
                                </li>
                            </ul>
                        </span>
                    </span>
                    
                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                
                  </span>
                </div>
                -->
     
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection

