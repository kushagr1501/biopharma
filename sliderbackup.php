<style>
  #hetero-story-slider{
  @media (max-width:759px){
    .owl-dots{
     display: block !important; 
     margin-top: 10px;
    }
    .owl-dots .owl-dot span {
      background:@yellow-text !important;
  }
  .owl-dots .owl-dot.active span,.owl-dots .owl-dot:hover span
  {
    background:@button-bgcolor !important;
  } 
  .owl-nav{
    display: none;
  } 
  }
  .item{
    // padding: 50px 0px;
    @media (max-width:759px){
      margin: 0px 20px;
    }
  }
  .border{
    background: white;
    color: black;
    padding: 20px 0px;
  }
  .line-positon{
    z-index: -99999999999999;
    bottom: 150px;
    @media screen and (min-width:991px) and (max-width:1200px){
      bottom: 110px;
    }
    @media screen and (min-width:765px) and (max-width:990px){
      bottom: 100px;
    }
    @media (max-width:759px){
      display: none;
    }
    }
  :where(.owl-nav .owl-prev,.owl-nav .owl-next){
    position: absolute;
    top: 25%;
    transform: translateY(-50%);
    font-size: 30px;
   width: 60px;
   height: 60px;
   line-height: 20px;
   border-radius: 100%;
  color:black;
  border: 1px solid black;
  @media (max-width:760px){
    bottom:0%;
    top: auto;
  }
     }
.owl-nav .owl-prev{
    left: 300px;
    @media screen and (min-width:1200px) and (max-width:1500px){
      left: 250px;
    }
    @media screen and (min-width:991px) and (max-width:1190px){
      left: 150px;
    }
    @media screen and (min-width:760px) and (max-width:990px){
      left: 100px;
    }
    @media (max-width:760px){
        left: 100px;
    }
    @media (max-width:370px){
        left: 70px;
    }
}
.owl-nav .owl-next{
    right: 300px;
    @media screen and (min-width:1200px) and (max-width:1500px){
      right: 250px;
    }
    @media screen and (min-width:991px) and (max-width:1190px){
      right: 150px;
    }
    @media screen and (min-width:760px) and (max-width:990px){
      right: 100px;
    }
    @media (max-width:760px){
      right: 100px;
  }
  @media (max-width:370px){
      right: 70px;
  }
}
:where(.owl-nav .owl-prev span,.owl-nav .owl-next span){
    height: 34px;
    min-height: 0;
    display: inline-block;
}
.owl-nav [class*=owl-]:hover {
  background: transparent !important;
  color: @button-bgcolor !important;
  text-decoration: none;
}
.timeline-leftsidecontent{
  @media (max-width:759px){
    display: none;
  }
  @media (max-width:1200px){
    .responsive-pe{
      padding-right: 8px !important;
    }
  }
    .timelineyear{
      bottom:100px;
      left:100px;
      color: @button-bgcolor;
      @media screen and (min-width:760px) and (max-width:1200px) {
        bottom:50px;
        left: 10px;
      }
    }
    .timelinetext{
      bottom:150px;
      left:115px;
      @media screen and (min-width:991px) and (max-width:1200px) {
        bottom:110px;
      }
      @media screen and (min-width:760px) and (max-width:990px) {
        bottom:100px;
      }
      @media screen and (min-width:760px) and (max-width:990px) {
        left:100px;
      }
    }
    .timelinetext1{
      @media screen and (min-width:760px) and (max-width:1200px) {
        left:20px;
      }
    }
    .timelinetext2{
      @media screen and (min-width:760px) and (max-width:1200px) {
        left:20px;
      }
    }
    .timelinetext3{
      @media screen and (min-width:760px) and (max-width:1200px) {
        left:20px;
      }
    }
    .timelinetext4{
      @media screen and (min-width:760px) and (max-width:1200px) {
        left:20px;
      }
    }
    .timelinetext5{
      @media screen and (min-width:760px) and (max-width:1200px) {
        left:10px;
      }
    }
    .timelinetext6{
      @media screen and (min-width:760px) and (max-width:1200px) {
        left:22px;
      }
    }
    .timelinetext7{
      @media screen and (min-width:760px) and (max-width:1200px) {
        left:22px;
      }
    }
}
.timeline-rightsidecontent{
  @media (max-width:759px){
    display: none;
  }
  .timelineyear{
    bottom:100px;
    right:320px;
    color: #848484;
    @media screen and (min-width:760px) and (max-width:1200px) {
      bottom:50px;
    }
    @media screen and (min-width:1200px) and (max-width:1490px) {
      right:315px;
    }
    @media screen and (min-width:991px) and (max-width:1190px) {
      right:220px;
    }
    @media screen and (min-width:760px) and (max-width:990px) {
      right:170px;
    }
  }
  .timelinetext{
    bottom:150px;
    @media screen and (min-width:991px) and (max-width:1200px) {
      bottom:110px;
    }
    @media screen and (min-width:760px) and (max-width:990px) {
      bottom:100px;
    }
  }
  .timelinetext1{
    right:157px;
    @media screen and (min-width:760px) and (max-width:1190px) {
      right:44px;
    }
  }
  .timelinetext2{
    right:110px;
    @media screen and (min-width:760px) and (max-width:1190px) {
      right:9px;
    }
  }
  .timelinetext3{
    right:103px;
    @media screen and (min-width:760px) and (max-width:1190px) {
      right:8px;
    }
  }
  .timelinetext4{
    right:80px;
    @media screen and (min-width:760px) and (max-width:1190px) {
      right:-6px;
    }
  }
  .timelinetext5{
    right:130px;
    @media screen and (min-width:760px) and (max-width:1190px) {
      right:18px;
    }
  }
  .timelinetext6{
    right:100px;
    @media screen and (min-width:760px) and (max-width:1190px) {
      right:7px;
    }
  }
  .timelinetext7{
    right:158px;
    @media screen and (min-width:760px) and (max-width:1190px) {
      right:44px;
    }
  }
}
.line-img{
  width: auto !important;
}
}
</style>
<?php
$title = "Hetero Website";
$metadesc = "";
$keywords = "";
include 'assets/includes/header.php';?>

<section class="hetero-story-section margin-top">
                   <h2 class="text-center pb-4">Hetero Biopharma <span class="span-color">Story</span></h2>
                    <div id="hetero-story-slider" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="container">
                            <div class="row justify-content-center">
                              <p class="d-block d-md-none span-color fw-bold text-center">2009</p>
                            <h4 class="d-block d-md-none text-center"> Our Humble  Beginnings</h4>
                                <div class="col-md-6 border">
                                    <img  src="assets/images/2009.png" alt="">
                                    <p class="text-center pt-4">The birth of Hetero Biopharma in 2009 marked a new era in the field of pharmaceuticals. A research and development unit was built and put into operation. Soon the company became a producer of affordable medicines that is accessible to people all over the world.
</p>
                                </div>
                            </div>
                       </div>
                       <div class="timeline-leftsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2009</p>
                         <div class="d-flex position-absolute timelinetext timelinetext1">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class=""> Our Humble <br> Beginnings</h4>
                         </div>
                       </div>
                       <div class="timeline-rightsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2011</p>
                         <div class="d-flex position-absolute timelinetext timelinetext1">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Sets up an R&D <br> and a biologics <br> manufacturing facility </h4>
                         </div>
                       </div>
                       <img class="line-positon position-absolute start-0 end-0" src="assets/images/slider-line.png" alt="">
                        </div>
                    <div class="item">
                    <div class="container">
                            <div class="row justify-content-center">
                              <p class="d-block d-md-none span-color fw-bold text-center">2011</p>
                            <h4 class="d-block d-md-none text-center">Sets up an R&D and a biologics  manufacturing facility</h4>
                                <div class="col-md-6 border">
                                <img src="assets/images/2011.png" alt="">
                                    <p class="text-center pt-4">The state-of-the-art manufacturing facility that was built in 2011 was equipped with the latest technology and equipment, ensuring that the highest quality medicines were produced. 

</p>
                                </div>
                            </div>
                       </div>
                       <div class="timeline-leftsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2011</p>
                         <div class="d-flex position-absolute timelinetext timelinetext2">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Sets up an R&D <br> and a biologics <br> manufacturing facility </h4>                         </div>
                       </div>
                       <div class="timeline-rightsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2014</p>
                         <div class="d-flex align-items-end position-absolute timelinetext timelinetext2">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Launches first biosimilar <br> product,  Darbepoetin Alfa, <br> and becomes the  second <br> company  globally to  launch <br> the drug. <h4>
                         </div>
                       </div>
                       <img class="line-positon position-absolute start-0 end-0" src="assets/images/slider-line.png" alt="">
                    </div>
                    <div class="item">
                    <div class="container">
                            <div class="row justify-content-center">
                              <p class="d-block d-md-none text-center fw-bold span-color">2014</p>
                            <h4 class="d-block d-md-none text-center">Launches first biosimilar  product,  Darbepoetin Alfa,  and becomes the  second  company  globally to  launch  the drug.</h4>
                                <div class="col-md-6 border">
                                <img src="assets/images/2014.png" alt="">
                                    <p class="text-center pt-4">In 2014, Hetero Biopharma launched its first biosimilar product – Darbepoetin alfa solution for injection (as a biosimilar to Aranesp). It is also the second Company in the world to launch Biosimilar Darbepoetin. 
</p>
                                </div>
                            </div>
                       </div>
                       <div class="timeline-leftsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2014</p>
                         <div class="d-flex position-absolute align-items-end timelinetext timelinetext3">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Launches first biosimilar <br> product,  Darbepoetin Alfa, <br> and becomes the  second <br> company  globally to  launch <br> the drug. <h4>
                                                  </div>
                       </div>
                       <div class="timeline-rightsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2015</p>
                         <div class="d-flex position-absolute align-items-end timelinetext timelinetext3">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Launches Rituximab solution <br> for injection and scales up <br> manufacturing to meet <br> global demands</h4>
                         </div>
                       </div>
                       <img class="line-positon position-absolute start-0 end-0" src="assets/images/slider-line.png" alt="">
                    </div>
                    <div class="item">
                    <div class="container">
                            <div class="row justify-content-center">
                              <p class="d-block d-md-none span-color fw-bold text-center">2015</p>
                            <h4 class="d-block d-md-none text-center">Launches Rituximab solution  for injection and scales up  manufacturing to meet  global demands</h4>

                                <div class="col-md-6 border">
                                <img src="assets/images/2015.png" alt="">
                                    <p class="text-center pt-4">Rituximab solution for injection was launched in vials as a biosimilar to MabThera and within a few months, additional manufacturing units were commissioned to meet global market demands. 
</p>
                                </div>
                            </div>
                       </div>
                       <div class="timeline-leftsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2015</p>
                         <div class="d-flex position-absolute align-items-end timelinetext timelinetext4">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Launches Rituximab solution <br> for injection and scales up <br> manufacturing to meet <br> global demands</h4>
                                                 </div>
                       </div>
                       <div class="timeline-rightsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2016</p>
                         <div class="d-flex position-absolute align-items-end timelinetext timelinetext4">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Launches third biosimilar <br> product Bevacizumab Injection. <br> Receives GMP accreditation by <br> PIC/s member country and  <br> forays into global market.</h4>
                         </div>
                       </div>
                       <img class="line-positon position-absolute start-0 end-0" src="assets/images/slider-line.png" alt="">
                    </div>
                    <div class="item">
                    <div class="container">
                            <div class="row justify-content-center">
                              <p class="d-block d-md-none span-color fw-bold text-center">2016</p>
                            <h4 class="d-block d-md-none text-center">Launches third biosimilar  product Bevacizumab Injection.  Receives GMP accreditation by  PIC/s member country and   forays into global market.</h4>
                                <div class="col-md-6 border">
                                <img src="assets/images/2016.png" alt="">
                                    <p class="text-center pt-4">Hetero Biopharma enters the global market. Bevacizumab solution for injection was launched in vials as a biosimilar to Avastin and quickly gained PIC/S member country approval for the manufacturing unit.
</p>
                                </div>
                            </div>
                       </div>
                       <div class="timeline-leftsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2016</p>
                         <div class="d-flex position-absolute align-items-end timelinetext timelinetext5">
                         <img  src="assets/images/timeline-line.png" class="pe-3 responsive-pe line-img" alt="">
                         <h4 class="">Launches third biosimilar <br> product Bevacizumab Injection. <br> Receives GMP accreditation by <br> PIC/s member country and  <br> forays into global market.</h4>
                                                 </div>
                       </div>
                       <div class="timeline-rightsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2017</p>
                         <div class="d-flex position-absolute align-items-end timelinetext timelinetext5">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Launches Adalimumab <br> solution for injection and <br> commissions new <br> manufacturing unit.  
 </h4>
                         </div>
                       </div>
                       <img class="line-positon position-absolute start-0 end-0" src="assets/images/slider-line.png" alt="">
                    </div>
                    <div class="item">
                    <div class="container">
                            <div class="row justify-content-center">
                              <p class="d-block d-md-none span-color fw-bold text-center">2017</p>
                            <h4 class="d-block d-md-none text-center">Launches Adalimumab  solution for injection and commissions new  manufacturing unit. </h4>
                                <div class="col-md-6 border">
                                <img src="assets/images/2017.png" alt="">
                                    <p class="text-center pt-4">Adalimumab solution for injection was launched in PFS as a biosimilar to Humira. The commissioning of an additional manufacturing unit has been completed
</p>
                                </div>
                            </div>
                       </div>
                       <div class="timeline-leftsidecontent">
                         <p class="position-absolute align-items-end timelineyear fw-bold">2017</p>
                         <div class="d-flex position-absolute align-items-end timelinetext timelinetext6">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Launches Adalimumab <br> solution for injection and <br> commissions new <br> manufacturing unit.  
 </h4>
                         </div>
                       </div>
                       <div class="timeline-rightsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2018</p>
                         <div class="d-flex position-absolute align-items-end timelinetext timelinetext6">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Starts clinical evaluation <br> of anti-HER-2 mAb as well as<br>  begins filing of biosimilars <br>  in a regulated market</h4> 
                         </div>
                       </div>
                       <img class="line-positon position-absolute start-0 end-0" src="assets/images/slider-line.png" alt="">
                    </div>
                    <div class="item">
                    <div class="container">
                            <div class="row justify-content-center">
                              <p class="d-block d-md-none fw-bold span-color text-center">2018</p>
                            <h4 class="d-block d-md-none text-center">Starts clinical evaluation  of anti-HER-2 mAb as well as  begins filing of biosimilars   in a regulated market</h4>
                                <div class="col-md-6 border">
                                <img src="assets/images/2018.png" alt="">
<ul class="pt-5">
    <li>Clinical evaluation of anti-HER-2 mAb is in progress.</li>
<li>Filing of biosimilars in a regulated market in progress</li>
</ul>
                                </div>
                            </div>
                       </div>
                       <div class="timeline-leftsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2018</p>
                         <div class="d-flex position-absolute align-items-end timelinetext timelinetext7">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Starts clinical evaluation <br> of anti-HER-2 mAb as well as<br>  begins filing of biosimilars <br>  in a regulated market</h4>                         </div>
                       </div>
                       <div class="timeline-rightsidecontent">
                         <p class="position-absolute timelineyear fw-bold">2009</p>
                         <div class="d-flex position-absolute timelinetext timelinetext7">
                         <img  src="assets/images/timeline-line.png" class="pe-3 line-img" alt="">
                         <h4 class="">Sets up an R&D <br> and a biologics <br> manufacturing facility
                         </div>
                       </div>
                       <img class="line-positon position-absolute start-0 end-0" src="assets/images/slider-line.png" alt="">
                    </div>
                    </div>
                   </section>
                  
                   <?php
$title = "Hetero Website";
$metadesc = "";
$keywords = "";
include 'assets/includes/footer.php';?>