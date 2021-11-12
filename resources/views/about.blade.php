<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Yungco Music Academy</title>
   <link rel="stylesheet"  href="/css/app.css">
   <script src="/js/app.js" defer></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link  rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/lightgallery-bundle.css" />
</head>
    <header class="border-b  dark:bg-gray-800 border-gray-100 ">  
        <nav class="bg-white dark:bg-gray-800 pb-5 border-b-2 ">

            
               
       
    
            <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between pl-10 ">
            <div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="flex items-center py-3 px-3"><img src="/img/logo.png" alt="Logo" class="h-30 w-52 pb-1 pt-2"></a></div>

            <div class="hidden md:flex flex items-center space-x-2 pl-72">
                    
                    <a href="/" class=" hover:text-red-300  rounded-md text-lg font-medium" style="color:#d7c9a1;">Home</a>
                    <a href="/enroll" class=" hover:text-red-300   rounded-md text-lg font-medium"style="color:#d7c9a1;">Enroll Online</a>                    
                    <a href="#" class="  hover:text-red-300  rounded-md text-lg font-medium"style="color:#d7c9a1;">YMA Books</a>
                    <div class="flex flex-wrap">
  <div class="w-full sm:w-6/12 md:w-4/12 px-4">
    <div class="relative inline-flex align-middle w-full">
      <button
 
        class="  hover:text-red-300 rounded-md text-lg font-medium" style="color:#d7c9a1;"
        
        type="button"
        onclick="openDropdown(event,'dropdown-example-1')"
      >
        More
        </button>
      <div
        class="
          hidden
          bg-white
          text-base
          z-50
          float-left
          py-2
          list-none
          text-left
          rounded
          shadow-lg
          mt-1
        "
        style="min-width: 12rem"
        id="dropdown-example-1"
      >
        <a
          href="/musicprogram"
          class="
            text-sm
            py-2
            px-4
            font-normal
            block
            w-full
            whitespace-nowrap
            bg-transparent
          
            hover:bg-gray-100
          "
          style="color:#d7c9a1;"
        >
          Music Program
        </a>
        <a
          href="/about"
          class="
            text-sm
            py-2
            px-4
            font-normal
            block
            w-full
            whitespace-nowrap
            bg-transparent
          
            hover:bg-gray-100
          "
          style="color:#d7c9a1;"
        >
          About Us
        </a>
        <a
          href="/news"
          class="
            text-sm
            py-2
            px-4
            font-normal
            block
            w-full
            whitespace-nowrap
            bg-transparent
           
            hover:bg-gray-100
          "
          style="color:#d7c9a1;"
        >
          News
        </a>
        <a
          href="/gallery"
          class="
            text-sm
            py-2
            px-4
            font-normal
            block
            w-full
            whitespace-nowrap
            bg-transparent
           
            hover:bg-gray-100
          "
          style="color:#d7c9a1;"
        >
          Gallery
        </a>
        <a
          href="#"
          class="
            text-sm
            py-2
            px-4
            font-normal
            block
            w-full
            whitespace-nowrap
            bg-transparent
           
            hover:bg-gray-100
          "
          style="color:#d7c9a1;"
        >
          Events
        </a>
        <a
          href=/contact"
          class="
            text-sm
            py-2
            px-4
            font-normal
            block
            w-full
            whitespace-nowrap
            bg-transparent
           
            hover:bg-gray-100
          "
          style="color:#d7c9a1;"
        >
          Contact Us
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Required popper.js -->
<script
  src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js"
  charset="utf-8"
></script>
<script>
  function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "BUTTON") {
      element = element.parentNode;
    }
    var popper = Popper.createPopper(
      element,
      document.getElementById(dropdownID),
      {
        placement: "bottom-start",
      }
    );
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
  }
</script>
                    <a href="#" class="text-lg"><i class="fa fa-facebook"></i></a> 
                    <a href="#" class="text-lg"><i class="fa fa-instagram"></i></a> 
                 
                            </div>
                       
                     </div>
                  
                       <div class="md:hidden flex items-center">
                       <button class="mobile-menu-button border-none">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    
                       </svg>
                       </button>
                       </div>
<div>        
</div> 
</div>
</div>
                     <div class="mobile-menu hidden">
                          
                    <a href="/" class="block hover:text-blue font-serif text-lg font-bold py-5">Home</a>
                    <a href="/enroll"class="hover:text-blue font-serif text-lg font-bold py-5">Enroll Online</a>
                    <a href="#" class=" block hover:text-blue font-serif text-lg font-bold py-5">YMA Books</a>

                    <a href="#" class=" block hover:text-blue font-serif text-lg font-bold py-5">More</a>
                   
                       </div>
        
    </nav>
 
    <script>
    const btn = document.querySelector('button.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');
    btn.addEventListener("click", ()=> {
            menu.classList.toggle("hidden");
    });
    </script>
<body class="text-gray-900  text-sm" style="background-color:#ffffff;"> 


<section class="h-screen w-full bg-white"> 
    <div class="pr-30 pt-30"> 
    <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class=" w-full h-80"><img src="/img/bg_enroll1.png" alt="Lesson"></div>
           </div>
           <div class=" flex pt-8">
           <div class="box-content"  style="background-color:#c0543f;">
           <h1 class=" font-semibold text-7xl pt-32 pl-16 text-white">About</h1>
           <h1 class=" font-semibold text-7xl pt-3 pl-16 text-white">Yupangco</h1>
           <h1 class=" font-semibold text-7xl pt-3 pl-16 text-white">Music</h1>
           <h1 class=" font-semibold text-7xl pt-3 pl-16 text-white">Academy</h1>
           <div class="px-2 pb-20">
           <h1 class="text-2xl pl-5 pt-10  text-white">Yupangco Music Academy offers music</h1>
           <h1 class="text-2xl pl-5  text-white">lessons for a community of students to</h1>
           <h1 class="text-2xl pl-5  text-white">enhance their ability and talents in expressing</h1>
           <h1 class="text-2xl pl-5  text-white">and creating music through their voice and</h1>
           <h1 class="text-2xl pl-5  text-white">instruments. We aim to deliver musical</h1>
           <h1 class="text-2xl pl-5  text-white">excellence in society with the expertise of</h1>
           <h1 class="text-2xl pl-5  text-white">certified teachers in various fields of music.</h1>
          </div>
           
 
</div>
       </div>
       </div>
  </div>
      
    </div> 
 
  </section>
  
  <section class="bg-white"> 

    <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class="box-content bg-gray-200">
           <h1 class=" font-bold text-7xl pt-32 pl-16 " style="color:#c0543f;">Our Mission</h1>
        
           <div class="px-3 pb-4 ">
           <h1 class="text-2xl pl-5 pt-10"style="color:#c0543f;">To teach, inspire, and produce talented &</h1>
           <h1 class="text-2xl pl-5 " style="color:#c0543f;" ">passionate musicians to sing and play musical</h1>
           <h1 class="text-2xl pl-5   " style="color:#c0543f;">instruments beyond limits.</h1>
           <h1 class="text-2xl pl-5   " style="color:#c0543f;">guitar, acoustic drums, electric drums, violin,</h1>
    
   
           </div>
           </div>
           
           
        
           </div>





           <div class=" flex pt-8">
           <div class=""><a href="/"><img src="/img/bg_studio8.png" alt="Lesson"></a></div>
           </div>
    </div>
  
  </section>
  <section class="h-screen w-full bg-white"> 
  
  <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class=""><a href="/"><img src="/img/bg_studio7.png" alt="Lesson"></a></div>
           </div>
           <div class=" flex pt-8">
           <div class="box-content bg-gray-200">
           <h1 class=" font-bold text-7xl pt-32 pl-16" style="color:#c0543f;">Our Vission</h1>
           <div class="px-3 pb-56 ">
           <h1 class="text-2xl pl-5 pt-10" style="color:#c0543f;">We envision the world with excellent musicians</h1>
           <h1 class="text-2xl pl-5 " style="color:#c0543f;">who express and create music out of goodwill</h1>
           <h1 class="text-2xl pl-5  " style="color:#c0543f;">and utmost passion that will spark inspiration</h1>
           <h1 class="text-2xl pl-5  " style="color:#c0543f;">to people.</h1>
         
    
   
          </div>
           
 
</div>
</div>
       </div>
       </div>
  </div>
  
  <section class="w-full h-48"> 
<h1 class="font-semibold text-7xl pt-20" style="text-align:center; color:#c0543f;">Teachers</h1>  
</section>





<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
        <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Roxanne Germaine</h1>
        <h1 class="font-semibold text-6xl pt-3 pl-32 text-red-500" >C. Taylo</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Classical, Bass, Electric Guitar</h1>
        <h1 class="font-semibold text-3xl pt-2 pl-44" style="color:#ccb18e;" >Teacher</h1>
        <p class="text-2xl  leading-none  pt-6 py-8" style="color:#d3aea8;">
        After years of travelling the world and gaining <br>
        valuable experience, Jules Bell returned to<br>
        Yupangco Music Academy as an educator<br>
        determined to pass on valuable knowledge<br>
        and skills to our lucky students.<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
        <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28 pl-10" style="color:#c35a3a;" >Mila Cleofe O.</h1>
        <h1 class="font-semibold text-6xl pt-2 pl-28" style="color:#c35a3a;" >Yanuario.</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-32" style="color:#ccb18e;" >Piano Teacher</h1>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Mila Cleofe O. Yanuario is a<br>
        professional music teacher that is a Bachelor<br>
        of Music in Piano at UST, Bachelor of Music<br>
        Education Major in Pia, and a Bachelor of<br>
        Commerce Major in Banking of Finance. She<br>
        taught at Yamaha School of Music wayback<br>
        1981 to 1973 and still teaches piano lessons to<br>
        students starting 2006 up to now.<br>
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Mary Joyce Cabasal</h1>
        <h1 class="font-semibold text-3xl pt-6 pl-44" style="color:#ccb18e;" >Piano Teacher</h1>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Mary Joyce Labrador-Cabasal is the<br>
        current Piano and Electone Teacher at<br>
        Yupangco Music Academy since 2000. She<br>
        graduated at St. Paul University Manila and<br>
        took up Bachelor of Music Major in Music<br>
        Education-Piano. She was a GS Music Teacher<br>
        at St. Paul College Pasig, HS Music Teacher at<br>
        Magsaysay Memorial College, and a College<br>
        Music Instructor at Magsaysay Memorial<br>
        College<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Darwin Yder Donque</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Voice Teacher</h1>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Darwin Yder Donque is a graduate of<br>
        the University of San Agustin Conservatory<br>
        majoring in Music Education and currently<br>
        taking up Masters in Voice Performance at the<br>
        University of Santo Tomas. He is a former<br>
        member of USA Choir and Troubadours for<br>
        2013 to 2015, and Coro Liturgico Agustino for<br>
        2015 to 2018.  He is also a former faculty<br>
        member of Yamaha School of Music Iloilo for 2<br>
        years, and NLJ School of music for 1 year. His<br>
        objective is to help the student hone and<br>
        improve their talent in music.<br>
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Josie Santos</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Piano Teacher</h1>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Josie Santos is a skilled Music<br>
        Teacher offering  24 years of experience  as an<br>
        educator. She is passionate about exposing<br>
        kids to diverse musical styles  and expressions.<br>
        She studied BS Education at New Era<br>
        University (1990), and Music Integrated Course<br>
        Major in Electone, Minor in Piano at Yamaha<br>
        School of Music (1995). With her knowledge,<br>
        she developed her key skills on Electone and<br>
        Piano playing, and Voice and Choral<br>
        Conducting.<br>
        improve their talent in music.<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Elena Liza Balagtas</h1>
        <h1 class="font-semibold text-6xl pt-3 pl-32 text-red-500" >Arreza</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Piano Teacher</h1>

        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Liza, as her students fondly call her, is<br>
        one of the Piano and Electone Teachers at<br>
        YUPANGCO MUSIC ACADEMY YAMAHA SM<br>
        MEGAMALL BRANCH. She has experience in<br>
        teaching group courses under the YMES<br>
        (Yamaha Music Education System). She is also<br>
        an arranger and has produced a book entitled<br>
        "Favorite Piano Solos" from Sound Publishing<br>
        corp.
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Roxanne Germaine</h1>
        <h1 class="font-semibold text-6xl pt-3 pl-32 text-red-500" >C. Taylo</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Classical, Bass, Electric Guitar</h1>
        <h1 class="font-semibold text-3xl pt-2 pl-44" style="color:#ccb18e;" >Teacher</h1>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Josephine Eleazar is passionate,<br>
        dedicated, and has a great amount of<br>
        patience with pursuing tasks and duties that<br>
        need to be done, as much as possible in the<br>
        most proficient way. She is a graduate of<br>
        Integrated Course (I.C.) at Yamaha School of<br>
        Music major in Voice and minor in Piano of<br>
        batch 2012. She makes sure to blend well with<br>
        the student, oftentimes mixing the song<br>
        choices depending on the student's needs and<br>
        wants. Adaptable to lesson methods that work<br>
        best for the student, including the level of<br>
        strictness and patience that's needed for the<br>
        student to progress properly.<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Rommel Reyes</h1>
      
      
        <h1 class="font-semibold text-3xl pt-6" style="color:#ccb18e;">Classical, Bass, Electric Guitar</h1>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Rommel Reyes studied classical<br>
        guitar in a special course at P.W.U. under the<br>
        tutelage of Professor Silvestre. He was a guitar<br>
        teacher at Yamaha School of Music last 2006<br>
        to 2007 and later on went working in the<br>
        Sultanate of Oman as an Electrical engineer<br>
        and continued his passion for music by giving<br>
        music lessons in guitar as a private tutor from<br>
        2007 – 2014. He is also an Audio Engineer at<br>
        Kerplunk Studios from July to December of<br>
        2018 and a freelance recording engineer and<br>
        audio editor. He can teach guitar chords and<br>
        music theories and arrangements for students<br>
        of all levels.<br>
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Gonzalo Palattao Jr.</h1>
  
        
        <h1 class="font-semibold text-3xl pt-8 pl-44" style="color:#ccb18e;" >Piano Teacher</h1>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Gonzalo Palattao Jr. is a very <br>
        dedicated, patient, and flexible piano<br>
        instructor. He acquired his Music Educational<br>
        background at Yupangco-Music Integrated<br>
        Music Course, major in Piano, and minor in<br>
        Organ. He has attended seminars on Liturgical<br>
        Music, Music in Worship & Leadership Training<br>
        hat makes him a very active church organist<br>
        and keyboardist.<br>
       </p>
       <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        He aims to develop the playing skills of every<br>
        student and appreciate the benefits it will bring<br>
        to them.<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28 pl-20" style="color:#c35a3a;" >Ray Magno</h1>
      
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Classical, Bass, Electric Guitar</h1>
        <h1 class="font-semibold text-3xl pt-2 pl-44" style="color:#ccb18e;" >Teacher</h1>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Ray Magno has a strong objective to<br>
        impart the art of playing guitar most<br>
        comprehensively. He is very flexible to teaching<br>
        methods and different genres though he<br>
        encourages students to learn classical music<br>
        as a basis of acquiring playing techniques in<br>
        guitar playing.<br>
        </p>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        He acquired his Music Educational<br>
        background at Yupangco-Music Integrated<br>
        Music Course, major in Guitar & minor in Piano.<br>
        And acquired certification of Grade 5 level<br>
        Performance & Fundamentals from Yamaha<br>
        Music Foundation Japan thus became an<br>
        authorized Guitar Examiner. He taught in<br>
        various music schools & had various<br>
        performances.<br>
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >John Robbie Niedo</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Violin, Flute & Saxophone Teacher</h1>
   
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher John Robbie Niedo is a versatile <br>
        instrumentalist presently taking Masters in<br>
        Theory Pedagogy at St. Paul University<br>
        Manila. His teaching objective is to impart good<br>
        playing skills to the student’s chosen<br>
        instrument and make them become future<br>
        musicians/ performers.
        </p>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        He graduated with a Bachelor of Music in <br>
        Music Education majored in Violin at St.Paul<br>
        University Manila. He plays Guitar, Drums, and<br>
        Piano as additional instruments. He is currently<br>
        a Wind & Violin Headteacher of Yupangco<br>
        Music Academy.<br>

        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Luisa Marte</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Piano Teacher</h1>
       
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Luisa Marte is a dedicated piano<br>
        teacher with 7 years of experience in teaching.<br>
        She loves to teach children and focuses on the<br>
        development of musical skills of the students.<br>
        She also manages private music academies.<br>
        She develops good relationships with parents,<br>
        students, and co-teachers. She teaches<br>
        developed lesson plans for private lessons and<br>
        early childhood music. And she prepares<br>
        students for participation in recitals and<br>
        examinations as well. <br>
        She collaborates with students and parents to<br>
        set long and short-term goals and plans<br>
        including participation in recitals, competitions,<br>
        and examinations.<br>
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
        <div class="pl-20 pt-60 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Jenalyn Baldon</h1>
 
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Voice Teacher</h1>
     
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Jenalyn Baldon is currently taking her<br>
        Bachelor in Music degree in Voice<br>
        Performance at the University of Santo Tomas<br>
        under Assistant Professor Thea Perez. She<br>
        started taking interest in music when she took<br>
        voice and piano lessons at the age of 12 and<br>
        eventually decided to take it as her career. She<br>
        participated in various events and concerts as<br>
        a performer, particularly concerts of Paco Park<br>
        presents and Concert at the Park where they<br>
        help young artists to share their talent with the<br>
        public.<br>
        
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Gene Figueras</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Piano Teacher</h1>
    
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Gene Figueras is a multi-talented<br>
        teacher committed to providing a solid<br>
        education and instilling music appreciation in<br>
        all students. She is compassionate and<br>
        inspiring and maintains a motivated and well-<br>
        disciplined environment where each student<br>
        feels special, successful, and cared for. She is<br>
        an educator with interpersonal and leadership<br>
        skills to cultivate strong relationships with<br>
        parents, students, and all members of the<br>
        school community. 
        </p>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        She studied Bachelor of Music Major in Music<br>
        Education with Concentration in Piano, 2019 at<br>
        Santa Isabel College Manila. Her skills are<br>
        Musicianship Skills (well-versed in classical<br>
        music), Student Motivation, Performance<br>
        Assessment, and Technology Integration.
       
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Vianie Labaro</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Voice Teacher</h1>

        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Vianie Labaro is a very passionate,<br>
        dedicated, and flexible vocal coach, whose<br>
        teaching objective is to reach the singing<br>
        potential to its peak with every student she<br>
        mentors. She graduated with a Bachelor of<br>
        Music, major in Voice & minor in Piano at UST.<br>
        She is a fully certified professional singer and<br>
        vocal coach, a theatre artist, a solo performer,<br>
        and a band vocalist, performed in various five-<br>
        star hotels and luxury ships in and outside the<br>
        country.<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Levy Bandola</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Drums Teacher</h1>
    
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Levy Bandola is a very patient drum<br>
        instructor whose teaching objective is to<br>
        impart knowledge and skills to the students to<br>
        attain drumming excellence and to experience<br>
        enjoyment as well.<br>
        </p>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        He acquired his music knowledge & skills at<br>
        Yupangco Integrated Music Course, major in<br>
        Drums & minor in Piano. Studied further drums<br>
        with Mr. Jun Regalado.<br>
       
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Eric Dimson</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Piano Teacher</h1>
       
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Eric Dimson is a pianist and organist,<br>
        is a graduate of UP College of Music, and was<br>
        a faculty of the UST Conservatory of Music. He<br>
        has recorded 14 albums for Vicor Music<br>
        Corporation and was a recipient of the Awit<br>
        award as “Best Instrumentalist of the Year”. He<br>
        received his training in Electone under Koichi<br>
        Oki and jazz piano under Michiko Horikawa at<br>
        the Yamaha Music Foundation in Tokyo, Japan.<br>
        And some lessons in pipe organ with Wolfgang<br>
        Oehms in Trier, Germany. Piano mentors were<br>
        Bernardino Custodio, Rodolfo Cornejo, Russell<br>
        Brandon, and Nita Quinto<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Kieren Dima-ala</h1>
     
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Classical, Bass, Electric Guitar</h1>
        
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Kieren Dima-ala is a young guitar<br>
        instructor but has enough patience & flexibility<br>
        in teaching. She acquired her music skills &<br>
        knowledge at Yupangco Integrated Music<br>
        Course majoring in Classical Guitar & Piano as<br>
        my minor instrument. She has been with<br>
        Yupangco Music Academy for 2 years now.<br>
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Cynthia Francisco</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Voice Teacher</h1>
   
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Cynthia Francisco is a dynamic,<br>
        flexible, and competitive vocal coach. She<br>
        graduated with a Bachelor of Music at UST<br>
        majoring in Voice & Piano as a minor<br>
        instrument. She has produced Grand Prix<br>
        winners during the Vocal competitions &<br>
        actively participated in all musical activities<br>
        held by the Voice Department. She has been<br>
        with the music school for 31 years now.<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Jun Sumalbag</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Drums Teacher</h1>
       
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Jun Sumalbag studied classical<br>
        percussion at the UST Conservatory of Music.<br>
        He also studied Jazz music abroad and<br>
        attended various master classes both local &<br>
        international. Been drummer of Adam Jazz<br>
        Quartet, Singapore, Fuse Anonymous Acoustic<br>
        Band, a session drummer, Percussionist of UST<br>
        wind orchestra, and MMCO. He also taught at<br>
        various music schools. He has been with<br>
        Yupangco Music Academy for 10 years now.<br>
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Mary Jon Llanza</h1>
  
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Violin Teacher</h1>

        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Mary Jon Llanza is adept at playing <br>
        and teaching the violin with good<br>
        communication skills, adaptable in any<br>
        working environment, and flexible in teaching<br>
        the violin instrument.<br>
        </p>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        She acquired her playing skills at Serenade <br>
        Orchestra and was a member at the same<br>
        time. She is currently taking violin classes at<br>
        the UST Conservatory of Music to further<br>
        enhance her playing skills. She also taught at<br>
        various music schools & had various<br>
        performances with the Serenade Orchestra.<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Stephanie Estoque</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Voice Teacher</h1>
      
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Stephanie Estoque’s first objective is<br>
        that her students must acquire quality in<br>
        learning piano & voice and sufficient musical<br>
        knowledge and secondly the development of<br>
        their proper & good persona.<br>
        </p>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        She is presently in the Master's class of Arts in<br>
        Music at UST. She graduated with a Bachelor<br>
        of Music, Voice in Liceo Cagayan University &<br>
        Piano at Lourdes College. She also acquired<br>
        certification from ABRSM Piano G4 and<br>
        attended various seminars on Kodaly Method,<br>
        Vocal Clinics, & Choral conducting. Her skills<br>
        are Communication, Patience, Adaptability,<br>
        Leadership. She is proficient in Voice (Soprano)<br>
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Ma. Carmela</h1>
        <h1 class="font-semibold text-6xl pt-3 pl-32 text-red-500" >Maniego</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Piano Teacher</h1>
  
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Ma. Carmela Maniego is a very active, <br>
        enthusiastic & competitive piano instructor.<br>
        She handles students from Primary to<br>
        Advance level. She strives for excellence and<br>
        that is her foremost teaching objective.<br>
        She graduated with a Bachelor of Music, Piano<br>
        in UST, with certification of Advancement from<br>
        Yamaha Music Foundation Japan on<br>
        Fundamentals & Grade 5 level Piano<br>
        Performance. She has also produced winners<br>
        during the Piano Competitions organized by<br>
        Yupangco Music Academy.<br>
        </p>
        </div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
          
  
<div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Norman Garcia</h1>

        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Piano Teacher</h1>
   
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Norman Garcia is a passionate &<br>
        dedicated instructor. He studied Music at the<br>
        Asian Institute of Liturgy & Music. Trained to<br>
        handle Group Classes by Yamaha Music<br>
        Education System Japan. Had participated in<br>
        Piano competitions by Yupangco Music<br>
        Academy and have produced winners. Active<br>
        church organist/ pianist.<br>
        </p>
        </div>
        <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about2a.png" alt="Lesson"></a></div>
  </div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="h-full"><img src="/img/bg_about1.png" alt="Lesson"></a></div>
  
            <div class="pl-20 pt-32 ">
        <h1 class="font-semibold text-6xl pt-28" style="color:#c35a3a;" >Jeremiah</h1>
        <h1 class="font-semibold text-6xl pt-3 pl-32 text-red-500" >Valenzuela</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Classical, Bass, Electric Guitar</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-10 " style="color:#ccb18e;" >Teacher</h1>
        <p class="text-2xl  leading-none  pt-6 " style="color:#d3aea8;">
        Teacher Jeremiah Valenzuela acquired<br>
        musical skills & knowledge at Yupangco-<br>
        Integrated Music Course. He is a patient &<br>
        dedicated teacher. He is also a musician, a<br>
        band member with various gig performances<br>
        that has attended various guitar clinics for<br>
        skills enhancement.<br>
        </p>
        </div>
  </div>
</div>
  </section>
</body>      
<footer class="w-full bg-white"  style="height: 400px;"> 
<h1 class=" text-3xl pt-10 text-gray-500" style="text-align:center">Subscribe Form</h1>  
<div class="pt-6" style="text-align:center"> 
<input class=" w-96 bg-white text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Email Address">
</div>
<div  style="text-align:center">
<button class="  w-96 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
Button
</button>  
</div>


<h1 class=" text-2xl pt-10 text-gray-500" style="text-align:center">0997 250 1654</h1> 



<h1 class=" text-2xl pt-10 text-gray-500" style="text-align:center">@2021 by Yupangco Music Academy Proudly Created with Jordan Cardines</h1> 
</footer>
    
<html>