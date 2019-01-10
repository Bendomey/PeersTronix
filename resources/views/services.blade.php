@extends('layout.app')

@section('title','Services')

@section('content')

<section class="js-parallax u-promo-block" style="background-image: url(images/2.jpg); background-size: 100% 100%">
      <div class="container text-white u-ver-center u-content-space">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="text-center">
              <h1 class="text-light" style="font-weight: 900">SERVICES</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="mb-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-dot d-flex justify-content-center">
        <li class="breadcrumb-item"><a href="PeersTronix.html" class="text-dark">HOME</a></li>
        <li class="breadcrumb-item active" style="font-weight: 700; color: #800080" aria-current="page">SERVICES</li>
      </ol>
    </nav>
  </section>

  <div class="container">
	<div class="row my-5">
		<div class="col-lg-3 col-md-6 mt-3 justify-content-center">
			<h3 style="font-family: 'Montserrat',sans-serif;" class="mb-4 font-weight-bold text-sm-center text-uppercase">solutions for your business</h3>
			<div class="nav flex-lg-column flex-md-column nav-pills mb-4" role="tablist">
				<a class="nav-link active pb-3 mb-3" id="all-service-tab" href="#all-service" style="border-bottom: 1px solid #eee" data-toggle="pill" role="tab" aria-controls="all-service" aria-selected="true">ALL SERVICES</a>
				<a class="nav-link pb-3 mb-3" id="laptop-repair-tab" href="#laptop-repair" style="border-bottom: 1px solid #eee" data-toggle="pill" role="tab" aria-controls="laptop-repair" aria-selected="false">LAPTOP REPAIR</a>
				<a class="nav-link pb-3 mb-3" id="network-support-tab" href="#network-support" style="border-bottom: 1px solid #eee" data-toggle="pill" role="tab" aria-controls="network-support" aria-selected="false">NETWORK SUPPORT</a>
				<a class="nav-link pb-3 mb-3" id="virus-removal-tab" href="#virus-removal" style="border-bottom: 1px solid #eee" data-toggle="pill" role="tab" aria-controls="virus-removal" aria-selected="false">VIRUS REMOVAL</a>
				<a class="nav-link pb-3 mb-3" id="data-recovery-tab" href="#data-recovery" style="border-bottom: 1px solid #eee" data-toggle="pill" role="tab" aria-controls="data-recovery" aria-selected="false">DATA RECOVERY</a>
			</div>
			<div >
				<h3 class="text-center font-weight-normal mb-5" >OUR CONTACTS</h3>
				<p class="text-center mb-5">
					<span class="font-weight-light">CUSTOMER CARE</span><br>
					<span style="color: #800080;"><i class="fa fa-phone mr-3"></span></i><b>+233 547 968 5647</b>
				</p>
				<p class="text-center mb-5">
					<span class="font-weight-light">Our Office</span><br>
					<span style="color: #800080;"><i class="fa fa-map-marker-alt mr-3"></span></i><b>Ashongman, Accra</b>
				</p>
				<p class="text-center mb-5">
					<span class="font-weight-light">EMAIL</span><br>
					<span style="color: #800080;"><i class="fa fa-envelope mr-3"></span></i><b>eben@gmail.com</b>
				</p>
			</div>
			<div class="text-center">
				<a href="contactUs.html"><button class="btn btn-outline-primary btn-lg text-uppercase py-3 mb-5" >contact us </button></a>
			</div>

		</div>
		<div class="col-lg-9 col-md-6 mt-3">
		<div class="tab-content" >
			<!-- for all Services -->
			<div id="all-service" class="tab-pane fade show active" role="tabpanel" aria-labelledby="all-service-tab">
				<div class="row mb-5">
					<div class="col-lg-6">
						<div class="card shadow mb-md-5 mb-sm-5">
							<img src="images/laptopRepair.jpg" height="290" alt="first" class="card-img-top">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-4">
										<i class="fa fa-3x fa-laptop"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-8">
										<h4 class="card-title">Laptop Repair</h4>
										<p class="card-text">We work even with old laptops</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card shadow">
							<img src="images/networkRepair.jpg" height="290" alt="first" class="card-img-top">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-4">
										<i class="fa fa-3x fa-network-wired my-1"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-8">
										<h4 class="card-title">Network Support</h4>
										<p class="card-text">We provide 24/7 support via web</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="card shadow mb-md-5 mb-sm-5">
							<img src="images/laptopRepair.jpg" height="290" alt="first" class="card-img-top">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-4">
										<i class="fa fa-3x fa-bug"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-8">
										<h4 class="card-title">Virus removal</h4>
										<p class="card-text">Remove any virus with our help</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card shadow">
							<img src="images/networkRepair.jpg" height="290" alt="first" class="card-img-top">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-4">
										<i class="fa fa-3x fa-database my-1"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-8">
										<h4 class="card-title">Data Recovery</h4>
										<p class="card-text">Helping you restore your data</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- for laptop repair -->
			<div id="laptop-repair" class="tab-pane fade" role="tabpanel" aria-labelledby="laptop-repair-tab">
				<img src="images/laptopRepair.jpg" height="400" alt="first" class="w-100 rounded mb-5">
				<h1 class="mb-3" style="font-family: arial">LAPTOP REPAIR</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="container-fluid">
					<div class="row my-4">
						<div class="col-lg-6">
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="card-header"><h5 class="colap">High Quality Guarantee</h5> </button>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light rounded-0 btn-link text-dark text-decoration-none colapping" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="card-header"><h5 class="colap">Qualified Team</h5> </button>
								<div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="card-header"><h5 class="colap">24/7 Support</h5> </button>
								<div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" class="card-header"><h5 class="colap">Latest Equipment</h5> </button>
								<div id="collapseFour" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
						</div>
						<div class="col-lg-6 mt-5">
							<div class="card d-flex justify-content-center">
								<img src="images/adult-beard-blur-927022.jpg" alt="" class="card-img-top w-70 ">
								<p class="card-body font-italic">Feel free to contact us, we are ready to help you <br>
								<b>EBEN HMM</b>, <b style="color: #800080">Manager</b></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- for network support -->
			<div id="network-support" class="tab-pane fade" role="tabpanel" aria-labelledby="network-support-tab">
				<img src="images/networkRepair.jpg" height="400" alt="first" class="w-100 rounded mb-5">
				<h1 class="mb-3" style="font-family: arial">NETWORK SUPPORT</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="container-fluid">
					<div class="row my-4">
						<div class="col-lg-6">
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen" class="card-header"><h5 class="colap">High Quality Guarantee</h5> </button>
								<div id="collapseThirteen" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light rounded-0 btn-link text-dark text-decoration-none colapping" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen" class="card-header"><h5 class="colap">Qualified Team</h5> </button>
								<div id="collapseFourteen" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen" class="card-header"><h5 class="colap">24/7 Support</h5> </button>
								<div id="collapseFifteen" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen" class="card-header"><h5 class="colap">Latest Equipment</h5> </button>
								<div id="collapseSixteen" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
						</div>
						<div class="col-lg-6 mt-5">
							<div class="card d-flex justify-content-center">
								<img src="images/adult-beard-blur-927022.jpg" alt="" class="card-img-top w-70 ">
								<p class="card-body font-italic">Feel free to contact us, we are ready to help you <br>
								<b>EBEN HMM</b>, <b style="color: #800080">Manager</b></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- for virus removal -->
			<div id="virus-removal" class="tab-pane fade" role="tabpanel" aria-labelledby="virus-removal-tab">
				<img src="images/laptopRepair.jpg" height="400" alt="first" class="w-100 rounded mb-5">
				<h1 class="mb-3" style="font-family: arial">VIRUS REMOVAL</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="container-fluid">
					<div class="row my-4">
						<div class="col-lg-6">
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" class="card-header"><h5 class="colap">High Quality Guarantee</h5> </button>
								<div id="collapseFive" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light rounded-0 btn-link text-dark text-decoration-none colapping" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" class="card-header"><h5 class="colap">Qualified Team</h5> </button>
								<div id="collapseSix" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven" class="card-header"><h5 class="colap">24/7 Support</h5> </button>
								<div id="collapseSeven" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight" class="card-header"><h5 class="colap">Latest Equipment</h5> </button>
								<div id="collapseEight" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
						</div>
						<div class="col-lg-6 mt-5">
							<div class="card d-flex justify-content-center">
								<img src="images/adult-beard-blur-927022.jpg" alt="" class="card-img-top w-70 ">
								<p class="card-body font-italic">Feel free to contact us, we are ready to help you <br>
								<b>EBEN HMM</b>, <b style="color: #800080">Manager</b></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- for data recoveryy -->
			<div id="data-recovery" class="tab-pane fade" role="tabpanel" aria-labelledby="data-recovery-removal-tab">
				<img src="images/networkRepair.jpg" height="400" alt="first" class="w-100 rounded mb-5">
				<h1 class="mb-3" style="font-family: arial">DATA RECOVERY</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="container-fluid">
					<div class="row my-4">
						<div class="col-lg-6">
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine" class="card-header"><h5 class="colap">High Quality Guarantee</h5> </button>
								<div id="collapseNine" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light card-header rounded-0 btn-link text-dark text-decoration-none colapping" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen"><h5 class="colap">Qualified Team</h5> </button>
								<div id="collapseTen" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven" class="card-header"><h5 class="colap">24/7 Support</h5> </button>
								<div id="collapseEleven" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
							<div class="card mb-2">
								<button class="btn btn-light btn-link rounded-0 text-dark text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve" class="card-header"><h5 class="colap">Latest Equipment</h5> </button>
								<div id="collapseTwelve" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body shadow">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
    						</div>
							</div>
						</div>
						<div class="col-lg-6 mt-5">
							<div class="card d-flex justify-content-center">
								<img src="images/adult-beard-blur-927022.jpg" alt="" class="card-img-top w-70 ">
								<p class="card-body font-italic">Feel free to contact us, we are ready to help you <br>
								<b>EBEN HMM</b>, <b style="color: #800080">Manager</b></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div>
<!-- endmain -->

@stop
