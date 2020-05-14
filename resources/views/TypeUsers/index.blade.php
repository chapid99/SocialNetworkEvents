<!DOCTYPE html>
<html>
@extends("Layouts.index")
@section("content")
<div class="content-page">
      <!-- ============================================================== -->
      <!-- Start Content here -->
      <!-- ============================================================== -->
            <div class="content">
                      <!-- Page Heading Start -->
                    <!-- Page Heading End-->       
           <div class="row">
           <div class="col-md-12">
            <div class="widget">
              <div class="widget-header">
                <h2><strong>Default</strong> DataTable</h2>
                <div class="additional-btn">
                  <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                  <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                  <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
              </div>
              <div class="widget-content">
              <br>          
                <div class="table-responsive">
                   <form class='form-horizontal' role='form' action="/TypeCustomers"  method="post">
                  <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th>id</th>
                                  <th>Name</th>
                                  <th>Update</th>
                              </tr>
                          </thead>
                   
                          <tfoot>
                              <tr>
                                  <th>id</th>
                                  <th>Name</th>
                                  <th>Update</th>
                                  
                              </tr>
                          </tfoot>
                   
                          <tbody>
                              @foreach ($test as $test)
                              <tr>
                                  <td ><h4 class="card-text">{{$test->id}}</h4></td>
                                  <td><h4 class="card-text"> {{$test->name}}</h4></td>
                                  <td><a href="TypeUsers/{{$test->id}}/edit">Editar </a></td>
                                  
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

                    <!-- Footer Start -->
            
            <!-- Footer End -->     
            </div>
      <!-- ============================================================== -->
      <!-- End content here -->
      <!-- ============================================================== -->

        </div>
@endsection  
</html>