@extends('layouts.adminlayouts.admin_design')

@section('content')
    
    
     <div class="content mt-5 mb-5">
        <div class="row justify-content-center">
        <section class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="head">
						<img src="assets/img/logo.png" class="img-logo">
						<h4 class="logo-text">Sabaragamuwa University of Sri Lanka</h4>
						<h4 class="logo-text-4">Belihuloya Sri Lanka</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Requests</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                      ID
                      </th>
                      <th>
                        Request
                      </th>
                      <th>
                        View
                      </th>
                     
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  </body>

  @endsection