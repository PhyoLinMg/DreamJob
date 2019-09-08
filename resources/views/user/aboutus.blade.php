@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="wrapper row2">
        <div id="container" class="clear">
          <div id="about-us" class="clear">

            <section id="team">
              <ul class="clear">
                <li class="one_quarter first">
                  <h1>DreamJob</h1>
                  <p>The Passionate and Young Team who wants to change the lifestyle and future of Myanmar People</p>
                </li>
                <li class="one_quarter">
                  <figure><img src="{{ asset('image/bo.jpg') }}" style="width:225px; height: 225px;" alt="">
                    <figcaption>
                      <div class="fl_left">
                        <p class="team_name">Htun Pa Pa Bo</p>
                        <p class="team_title">Developer</p>
                      </div>
                      <ul>
                       <li><a href="https://www.facebook.com/hppboo"><i class="fab fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                       <li><a href="#"><i class="fab fa-github-square"></i></a></li>
                     </ul>
                     <p class="team_description">The Passionate and Young Team who wants to change the lifestyle and future of Myanmar People</p>
                   </figcaption>
                 </figure>
               </li>
               <li class="one_quarter">
                <figure><img src="{{ asset('image/senku.png') }}" alt="" style="width:225px; height: 225px;">
                  <figcaption>
                    <div class="fl_left">
                      <p class="team_name">Phyo Lin Mg</p>
                      <p class="team_title">Developer</p>
                    </div>
                    <ul>
                      <li><a href="https://www.facebook.com/gangsterplm"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href="https://github.com/PhyoLinMg"><i class="fab fa-github-square"></i></a></li>
                    </ul>
                    <p class="team_description">The Passionate and Young Team who wants to change the lifestyle and future of Myanmar People</p>
                  </figcaption>
                </figure>
              </li>
              <li class="one_quarter">
                <figure><img src="{{ asset('image/mmw.jpg') }}" alt="" style="width:225px; height: 225px;">
                  <figcaption>
                    <div class="fl_left">
                      <p class="team_name">Myo Min Wai</p>
                      <p class="team_title">Developer</p>
                    </div>
                    <ul>
                     <li><a href="https://www.facebook.com/myomin.wai.526"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                     <li><a href=""><i class="fab fa-github-square"></i></a></li>
                   </ul>
                   <p class="team_description">The Passionate and Young Team who wants to change the lifestyle and future of Myanmar People</p>
                 </figcaption>
               </figure>
             </li>
           </ul>
         </section>
         
         <section id="statements" class="clear">
          <img src="images/demo/960x340.gif" alt="">
          <h2>Vivamuslibero Auguer</h2>
          <p>In sed neque id libero pretium luctus. Vivamus faucibus. Ut vitae elit. In hac habitasse platea dictumst. Proin et nisl ac orci tempus luctus. Aenean lacinia justo at nisi. Vestibulum sed eros sit amet nisl lobortis commodo. Suspendisse nulla. Vivamus ac lorem. Aliquam pulvinar purus at felis. Quisque convallis nulla id ipsum. Praesent vitae urna. Fusce blandit nunc nec mi. Praesent vestibulum hendrerit ante.</p>
        </section>
      </div>

    </div>
  </div>
</div>
</div>
</div>
@endsection