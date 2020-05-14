<!DOCTYPE html>
<html>
@extends("Layouts.create")
@section("content")
 <div class="content-page">

			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content "  >
								<!-- Page Heading Start -->
				
            	<!-- Page Heading End-->	
								
				<!-- Your awesome content goes here -->
				<div class="row">
					
					
					<div class="col-sm-5 portlets" >
						
						<div class="widget">
							<div class="widget-header transparent" >
								<h2 align="center"><strong>Create TypeUser</strong></h2>
								<div class="additional-btn" >
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">						
								<div id="horizontal-form">
									<form class="form-horizontal" role="form" action="/TypeUsers" method="post">
									  <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">NAME</label>
										<div class="col-sm-10">
										  <input type="text" name="name" class="form-control" placeholder="name">
										</div>
									  </div>
									   <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" value="save" class="btn btn-primary">save</button>
										</div>
									  </div>
									  <input type="hidden" name="_token" value="{{ csrf_token() }}">
									</form>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				<!-- End of your awesome content -->
			
				            <!-- Footer Start -->
           
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
@endsection
</html>