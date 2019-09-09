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
         
         
      </div>

    </div>
  </div>
</div>
</div>
</div>
@endsection