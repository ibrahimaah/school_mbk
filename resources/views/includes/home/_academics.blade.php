<section class="academics container">
    <div class="row pt-5 justify-content-center align-items-center">
        <div class="col-sm-6 col-md-7 animate__animated animate__fadeInLeft">
            <h2 class="text-main-color text-center my-5 xs:text-2xl sm:text-3xl md:text-4xl lg:text-5xl">ACADEMICS</h2>
            <p class="text-main-color text-justify xs:text-xs sm:text-sm md:text-base lg:text-xl" style="line-height: 1.7rem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, facilis! Quod dignissimos possimus eligendi qui quo a quidem maiores suscipit, nisi incidunt odio tempora, aliquid, illum beatae minus in iusto dolore maxime sed cumque minima. Esse id quis laudantium ad. facilis! Quod dignissimos possimus eligendi qui quo a quidem maiores suscipit, nisi incidunt odio tempora, facilis! Quod dignissimos possimus eligendi qui quo a quidem maiores suscipit, nisi incidunt odio tempora, </p>
            <a href="" class="text-decoration-none text-main-color mt-5 font-weight-bold xs:text-base sm:text-lg md:text-xl lg:text-2xl">SHOW MORE</a>
        </div>
        <div class="col-sm-6 col-md-5 animate__animated animate__fadeInRight">
            <div class="img-academic m-auto">
                <img src="{{ asset('images/academic.jpeg') }}" class="rounded-circle d-block img-fluid w-100 h-100 m-auto" alt="academic image">
            </div>
        </div>
    </div>


<!------------------------------------------------------------------------------->
<div class="card-deck mt-5">
    <div class="card border-0 main-font-family animate__animated animate__fadeInLeft el-1">
      <img class="card-img-top" src="{{ asset('images/calender.png') }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-center text-main-color font-weight-bold xs:text-lg sm:text-lg md:text-xl lg:text-xl">School Calender</h5>
        <p class="card-text text-main-color xs:text-xs sm:text-sm md:text-base lg:text-xl">
            ADEK Approved school calender contains all events, schooling days and holidays for the academic year <?=Carbon\Carbon::now()->year?> - <?=Carbon\Carbon::now()->year+1?>
        </p>
        
      </div>
       <div class="card-footer">
        <a href="" class="text-decoration-none text-main-color text-center d-block font-weight-bold xs:text-lg sm:text-lg md:text-xl lg:text-xl">VIEW</a>
        </div>
    </div>
    <div class="card border-0 main-font-family animate__animated animate__fadeInDown el-2">
      <img class="card-img-top" src="{{ asset('images/news-letter.png') }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-center text-main-color font-weight-bold xs:text-lg sm:text-lg md:text-xl lg:text-xl">News Letters</h5>
        <p class="card-text text-main-color xs:text-xs sm:text-sm md:text-base lg:text-xl">
            Want to know what's happening in MBK school? read our monthly news letters to keep yourself updated with the school activites and events
          </p>
      </div>
       <div class="card-footer">
        <a href="" class="text-decoration-none text-main-color text-center d-block font-weight-bold xs:text-lg sm:text-lg md:text-xl lg:text-xl">VIEW</a>
        </div>
    </div>
    <div class="card border-0 main-font-family animate__animated animate__fadeInUp el-3">
      <img class="card-img-top" src="{{ asset('images/school-ms.png') }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-center text-main-color font-weight-bold xs:text-lg sm:text-lg md:text-xl lg:text-xl">School Management System</h5>
        <p class="card-text text-main-color xs:text-xs sm:text-sm md:text-base lg:text-xl">
            The online M.B.K School portal provides more enhanced and continues learning and effective communication between the parents and teachers and students
          </p>
      </div>
       <div class="card-footer">
           <a href="" class="text-decoration-none text-main-color text-center d-block font-weight-bold xs:text-lg sm:text-lg md:text-xl lg:text-xl">VIEW</a>
       </div>
    </div>
    <div class="card border-0 main-font-family animate__animated animate__fadeInRight el-4">
        <img class="card-img-top" src="{{ asset('images/student-protection.png') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center text-main-color font-weight-bold xs:text-lg sm:text-lg md:text-xl lg:text-xl">Student Protection Policy</h5>
            <p class="card-text text-main-color xs:text-xs sm:text-sm md:text-base lg:text-xl">
                M.B.K School creates and sustain a culture and an environment where children and young people feel secure , are encouraged to talk and are always listened to.	
              </p>
              
          
        </div>
         <div class="card-footer">
            <a href="" class="text-decoration-none text-main-color text-center d-block font-weight-bold xs:text-lg sm:text-lg md:text-xl lg:text-xl">VIEW</a>
        </div>
      </div>
  </div>
    
</section>