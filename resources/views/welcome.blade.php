 @extends('wlc-main')

 @section('title','Home')


 @section('content') 

 <div class="d-flex justify-content-center m-5">
   <div class="row">
     <div class="col-md-4 ">
         <img src="{{ asset('img/RD.jpg')}}" class="mx-auto d-block rounded-circle m-3" width="140" height="140" alt=""/>
         <h2 class="fw-normal text-center">Context-Aware </h2>
         <p class="text-center p-3">A responsive layout is no longer sufficient; dynamic adaptation of content and layout based on location, context, and connection speed must be prioritized.</p>
     </div>
     <div class="col-md-4">
       <img src="{{ asset('img/SEO.jpg')}}" class="mx-auto d-block rounded-circle m-3" width="140" height="140" alt=""/>
       <h2 class="fw-normal text-center">SEO Optimization </h2>
       <p class="text-center p-3">Implements strategies to improve rankings on search engines and AI-driven resources, boosting organic traffic and visibility.</p>
     </div>
     <div class="col-md-4">
       <img src="{{ asset('img/CC1.jpg')}}" class="mx-auto d-block rounded-circle m-3" width="140" height="140" alt=""/>
       <h2 class="fw-normal text-center"> Balanced Design</h2>
       <p class="text-center p-3 mb-0">Web and software designs should be interactive yet simple, ensuring that neither aspect is compromised for the sake of the other.</p>
     </div>
   </div>
 </div>
 <div class="container-fluid mh-100 bg-dark d-flex justify-content-around" style="height: 280px;">
      <div class="col-sm-4 mt-5 d-grid gap-2">
        <h3 class="text-light text-center m-0">No Need To Subscribe</h3>
        <div class="text-light text-center">Newsletters are out dated. Lets get engage in more interactive ways</div>
        <button type="button" class="btn btn-light m-0" style="height:50px;">I Want To Know More</button>
      </div>
      <div class="col-sm-4">
        <img src="{{ asset('img/newsletter.png')}}" style="margin-top: -75px;" width="500" height="380" alt=""/>
      </div>
 </div>
 <div class="container">
    <div class="p-5 mb-4 bg-light rounded-3">
              <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Why AI is the new solution?</h1>
                <p class="col-md-8 fs-4">This is my first blog using Laravel version 8. Hope you find it intresting! please check my most popular posts!</p>
                <button class="btn btn-dark btn-lg" type="button">Read More</button>
              </div>
        </div>
    </div>   
</div>
@endsection
  
     

 