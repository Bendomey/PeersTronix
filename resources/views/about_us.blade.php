@extends('layout.app')

@section('title','About Us')

@section('content')

    <section class="js-parallax u-promo-block" style="background-image: url(images/team.jpg); background-size: 100% 100%">

    </section>
		<div>
		  <nav aria-label="breadcrumb">
			  <ol class="breadcrumb breadcrumb-dot d-flex justify-content-center">
				<li class="breadcrumb-item"><a href="PeersTronix.html" class="text-dark">HOME</a></li>
				<li class="breadcrumb-item active" style="font-weight: 700; color: #800080" aria-current="page">ABOUT US</li>
			</ol>
		  </nav>
		</div>
<div class="container">
  <div class="row my-5">
    <div class="col-lg-3 mt-3">
    <h2 style="font-family: 'Montserrat',sans-serif;" class="mb-4 font-weight-bold text-sm-center">5+ YEARS OF EXPERIENCE</h2>
      <div class="nav flex-lg-column nav-pills mb-4" role="tablist">
        <a class="nav-link active pb-3 mb-3" id="about-tab" href="#about" style="border-bottom: 1px solid #eee" data-toggle="pill" role="tab" aria-controls="about" aria-selected="true">ABOUT US</a>
        <a class="nav-link pb-3 mb-3" id="mission-tab" href="#mission" style="border-bottom: 1px solid #eee" data-toggle="pill" role="tab" aria-controls="mission" aria-selected="false">OUR MISSION</a>
        <a class="nav-link pb-3 mb-3" id="goal-tab" href="#goal" style="border-bottom: 1px solid #eee" data-toggle="pill" role="tab" aria-controls="goal" aria-selected="false">OUR GOALS</a>
        <a class="nav-link pb-3 mb-3" id="value-tab" href="#value" style="border-bottom: 1px solid #eee" data-toggle="pill" role="tab" aria-controls="value" aria-selected="false">COMPANY VALUES</a>
        </div>
    <a href="contactUs.html"><button class="btn btn-outline-primary btn-lg text-uppercase py-3" >contact us </button></a>
        </div>
    <div class="col-lg-9 mt-3">
    <div class="tab-content" >
      <div id="about" class="tab-pane fade show active" role="tabpanel" aria-labelledby="about-tab">
      <h1 class="text-uppercase" style="font-family: 'Roboto Condensed',sans-serif">a few words about us</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae sapiente ut, libero molestias at tempora ullam inventore quas debitis, veniam obcaecati animi, commodi? Beatae ipsum omnis labore nihil, fuga, ut!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi error inventore cumque qui, quo quis unde pariatur! Distinctio quod iusto inventore aut officiis similique, aspernatur impedit, vitae voluptate. Illo perferendis odio saepe maiores deserunt veniam accusamus iusto a natus, porro iste ipsam, perspiciatis placeat, rerum est beatae. Nihil consectetur impedit mollitia! Nam eaque similique voluptatem eius consectetur, atque, nesciunt cumque deserunt maxime molestias ratione cum, laboriosam provident velit doloribus est perspiciatis minus quisquam. Nisi, molestiae repellat error, explicabo sit porro velit. Quae quod illo, minima eius velit. Harum laboriosam inventore itaque explicabo quasi facere sunt incidunt voluptate amet. Voluptate, dicta!</p>
      <img src="images/todether.jpg" class="w-100 rounded" height="300" alt="Placeholder image">
    </div>
    <div id="mission" class="tab-pane fade" role="tabpanel" aria-labelledby="mission-tab">
      <h1 class="text-uppercase" style="font-family: 'Roboto Condensed',sans-serif">providing quality repair services</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae sapiente ut, libero molestias at tempora ullam inventore quas debitis, veniam obcaecati animi, commodi? Beatae ipsum omnis labore nihil, fuga, ut!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis enim praesentium ad ea, id architecto minima deserunt. Obcaecati praesentium in facilis, delectus ea aliquam ducimus quam magnam dolorem sunt veniam a tempore commodi illo hic dolore eos blanditiis numquam doloribus pariatur nobis libero, soluta. Praesentium ullam, aliquam ut nulla officiis.</p>
      <img src="images/laptopRepair.jpg" class="w-100 rounded" height="300" alt="Placeholder image">
    </div>
    <div id="goal" class="tab-pane fade" role="tabpanel" aria-labelledby="goal-tab">
      <h1 class="text-uppercase" style="font-family: 'Roboto Condensed',sans-serif">offering the best customer service</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae sapiente ut, libero molestias at tempora ullam inventore quas debitis, veniam obcaecati animi, commodi? Beatae ipsum omnis labore nihil, fuga, ut!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis enim praesentium ad ea, id architecto minima deserunt. Obcaecati praesentium in facilis, delectus ea aliquam ducimus quam magnam dolorem sunt veniam a tempore commodi illo hic dolore eos blanditiis numquam doloribus pariatur nobis libero, soluta. Praesentium ullam, aliquam ut nulla officiis.</p>
      <img src="images/care.jpg" class="w-100 rounded" height="300" alt="Placeholder image">
    </div>
    <div id="value" class="tab-pane fade" role="tabpanel" aria-labelledby="value-tab">
      <h1 class="text-uppercase" style="font-family: 'Roboto Condensed',sans-serif">dedication, integrity and expertise</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae sapiente ut, libero molestias at tempora ullam inventore quas debitis, veniam obcaecati animi, commodi? Beatae ipsum omnis labore nihil, fuga, ut!</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis enim praesentium ad ea, id architecto minima deserunt. Obcaecati praesentium in facilis, delectus ea aliquam ducimus quam magnam dolorem sunt veniam a tempore commodi illo hic dolore eos blanditiis numquam doloribus pariatur nobis libero, soluta. Praesentium ullam, aliquam ut nulla officiis.</p>
      <img src="images/dedicate.jpg" class="w-100 rounded" height="300" alt="Placeholder image">
    </div>
    </div>
    </div>
  </div>
  </div>

<div class="jumbotron my-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="row">
          <div class="col-lg-4 col-md-4"><button class="btn text-white p-4" style="border-radius: 50%; background: #800080"><i class="fa fa-coins fa-2x"></i></button></div>
          <div class="col-lg-8 col-md-8">
        <h5 class="font-weight-bold text-capitalize">optimization</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
          </div>
            </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="row">
          <div class="col-lg-4 col-md-4"><button class="btn text-white p-4" style="border-radius: 50%; background: #800080"><i class="fa fa-dolly fa-2x"></i></button></div>
          <div class="col-lg-8 col-md-8">
          <h5 class="font-weight-bold text-capitalize">setup &amp; install</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="row">
          <div class="col-lg-4 col-md-4 "><button class="btn text-white p-4" style="border-radius: 50%; background: #800080"><i class="fa fa-cogs fa-2x"></i></button></div>
          <div class="col-lg-8 col-md-8">
        <h5 class="font-weight-bold text-capitalize">diagonistics &amp; repair</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
          </div>
      </div>
    </div>
      </div>
</div>

<div>
  <h1 class="text-center text-uppercase mb-5" style="font-family: 'Playfair Display',serif">our team</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4">
      <div class="row">
        <div class="col-sm-6">
        <div class="card shadow">
          <img class="card-img-top" height="200" src="images/adult-beard-blur-927022.jpg" alt="">
          <div class="card-body text-center">
          <h5 class="card-title">John Doe</h5>
          <p class="card-text font-weight-light">Founder</p>
<!--						<a href="#" class="btn btn-primary">Go somewhere</a>-->
          </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="card shadow">
          <img class="card-img-top" height="200" src="images/adult-asking-blur-630839.jpg" alt="">
          <div class="card-body text-center">
          <h5 class="card-title">Jane Doe</h5>
          <p class="card-text font-weight-light">General Manager</p>
<!--						<a href="#" class="btn btn-primary">Go somewhere</a>-->
          </div>
        </div>
        </div>
      </div>
      </div>
      <div class="col-lg-6">
      <div class="row">
        <div class="col-sm-6">
        <div class="card shadow">
          <img class="card-img-top" height="200" src="images/care.jpg" alt="">
          <div class="card-body text-center">
          <h5 class="card-title">Jonathan Doe</h5>
          <p class="card-text font-weight-light">Field Techinician</p>
<!--						<a href="#" class="btn btn-primary">Go somewhere</a>-->
          </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="card shadow">
          <img class="card-img-top" height="200" src="images/beautiful-blur-casual-935756.jpg" alt="">
          <div class="card-body text-center">
          <h5 class="card-title">Josephine Doe</h5>
          <p class="card-text font-weight-light">Customer Service </p>
<!--						<a href="#" class="btn btn-primary">Go somewhere</a>-->
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
      </div>

@stop
