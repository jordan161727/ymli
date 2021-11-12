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
          href="/contact"
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
  


<body class="bg-white text-gray-900 dark:bg-gray-800 text-sm">
<section class="carousel"> 
<div class="swiper mySwiper">
      <div class="swiper-wrapper">
       
      
      <div class="swiper-slide">
      <div class="bg-cover bg-center  h-screen text-white py-24 px-10 object-fill" style="background-image: url(/img/bg_carousel1.jpg)">
      <div class="pl-96">
        <h1 class="font-bold text-6xl pt-64">Yupangco Music</h1>
        <p class="text-6xl font-bold pl-20 pt-4">Academy</p>
        <p class="text-yellow-300 text-2xl mb-10 leading-none pl-12 pt-4">An Investment for your Future</p>
       
        </div>  
    </div>   
       </div>
       <div class="swiper-slide">
      <div class="bg-cover bg-center  h-screen text-white py-24 px-10 object-fill" style="background-image: url(/img/bg_carousel2.jpg)">
      <div class="pl-96">
        <h1 class="font-bold text-6xl pt-64">Yupangco Music</h1>
        <p class="text-6xl font-bold pl-20 pt-4">Academy</p>
        <p class="text-yellow-300 text-2xl mb-10 leading-none pl-12 pt-4">An Investment for your Future</p>
       
        </div>
    </div>   
       </div>
       <div class="swiper-slide">
      <div class="bg-cover bg-center  h-screen text-white py-24 px-10 object-fill" style="background-image: url(/img/bg_carousel3.jpg)">
      <div class="pl-96">
        <h1 class="font-bold text-6xl pt-64">Yupangco Music</h1>
        <p class="text-6xl font-bold pl-20 pt-4">Academy</p>
        <p class="text-yellow-300 text-2xl mb-10 leading-none pl-12 pt-4">An Investment for your Future</p>
       
        </div>
    </div>   
       </div>
       <div class="swiper-slide">
      <div class="bg-cover bg-center  h-screen text-white py-24 px-10 object-fill" style="background-image: url(/img/bg_carousel4.jpg)">
      <div class="pl-96">
        <h1 class="font-bold text-6xl pt-64">Yupangco Music</h1>
        <p class="text-6xl font-bold pl-20 pt-4">Academy</p>
        <p class=" text-2xl mb-10 leading-none pl-12 pt-4" style="color:#c6a68d;" >An Investment for your Future</p>
       
        </div>
    </div>   
       </div>


      </div>
     
      <div class="swiper-pagination"></div>
    </div>

</section>
<section class="w-full h-screen" style="background-color:#d3b488;" > 
<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class="flex items-center pl-32 py-3 px-3 pt-80"><img src="/img/bg_intro.png" alt="Intro"></a></div>

            <div class="pl-20">
        <h1 class="font-bold text-6xl pt-32 text-white">About</h1>
        <h1 class="font-bold text-6xl pt-2  pr-60 text-white">Yupangco Music</h1>
        <h1 class="text-6xl font-bold pr-40   text-white">Academy</h1>
        <p class="text-2xl mb-10 leading-none text-white pt-6">We're proud of the reputation that yupangco<br>
          music Academy has gained throughout the <br>
          years-for a place where students and<br>
          instruction alike can thrive and make the most<br>
          of their talents. Every year, we gladly welcome<br>
          creative and passionate students from around the <br>
          world.<br>
          Yupanco Music Academy is the ideal Music<br>
          School for Students to prepare for a career in<br>
          the industry. Whether you're enrolled or<br>
          thinking of applying, continued browsing to find<br>
          out about our programs, admissions and more.<br>
      
        
        
        </p>
       

        <p class="text-2xl mb-10 leading-none text-white pt-6">Learn More</p>
       
        </div>
                     </div>
</section>

<section class="w-full h-64" style="background-color:#c0543f;"> 
<h1 class="font-bold text-6xl pt-20 text-gray-100" style="text-align:center">Music Lesson</h1>  
</section>


<section class="w-full" style="background-color:white; height: 800px;"> 
<div class="swiper mySwiper">
      <div class="swiper-wrapper">

     <!-- <div class="swiper-slide">
            <div class="flex justify-between">
            <div class="flex items-center pl-32 py-3 px-3 pt-80"><img src="/img/bg_carousel2.jpg" alt="Logo"></div>
            <div class="pl-20">
       
        <h1 class="font-bold text-6xl pt-2  pr-60 text-yellow-600">Yupangco Music</h1>    
        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
          Enroll
        </button>
        </div>  
        </div>
        </div>
  </div>
       </div>
  </div>
  -->
       
  <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_instrument1.png" alt="Piano"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-34 pb-20" style="color:#ba563b;">Piano Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
       
        </div>
    </div>   
       </div>

             
  <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_voice.png" alt="Voice"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20" style="color:#ba563b;">Voice Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
        
       
        </div>
    </div>   
       </div>
             
  <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_acoustic.png" alt="Acoustic"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20" style="color:#ba563b;">Acoustic Guitar Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
        
       
        </div>
    </div>   
       </div>
             
  <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_electric.png" alt="Electric"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20" style="color:#ba563b;">Electric Guitar Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
        
       
        </div>
    </div>   
       </div>
               
  <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_bass.png" alt="Bass"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20" style="color:#ba563b;">Bass Guitar Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
        
       
        </div>
    </div>   
       </div>
      


           
  <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_acousticdrums.png" alt="Acousticdrums"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20" style="color:#ba563b;">Acoustic Drums Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
        
       
        </div>
    </div>   
       </div>


      
       <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_electricdrums.png" alt="Drums"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20" style="color:#ba563b;">Electric Drums Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
        
       
        </div>
    </div>   
       </div>

      
       <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_violin.png" alt="Violin"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20" style="color:#ba563b;">Violin Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
        
       
        </div>
    </div>   
       </div>



            
  <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_ukalele.png" alt="Ukalele"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20" style="color:#ba563b;">Ukulele Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
        
       
        </div>
    </div>   
       </div>
             
  <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_flute.png" alt="Flute"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20" style="color:#ba563b;">Flute Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
       
        </div>
    </div>   
       </div>

            
  <div class="swiper-slide">
      <div class="flex jsutify-between">
      <div class="flex items-center pl-32 py-3 px-3 pt-40 pb-20"><img src="/img/bg_saxophone.png" alt="Saxophone"></div>
      <div class="pl-20">
        <h1 class="font-bold text-5xl pt-64 pr-32 pb-20 " style="color:#ba563b;">Saxophone Lesson</h1>
        <div class="pl-16">
        <button class="bg-transparent hover:bg-blue-500 font-semibold hover:text-white py-4 px-8 
         border border-yellow-800 hover:border-transparent rounded" style="color:#ba563b;" >
        <p class="text-2xl " style="color:#ba563b;">Enroll Now</p>
       </button>
  </div>
        
       
        </div>
    </div>   
       </div>



 
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
</section>
<section class="w-full h-1/2 " style="background-color:#c0543f;">




<div class="flex justify-between">
            <div class="flex">
            <div><a href="/" class=""><img src="/img/bg_lesson.png" alt="Lesson"></a></div>

            <div class="pl-20">
        <h1 class="font-bold text-6xl pt-28 text-white">Online Lesson</h1>
        <p class="text-2xl mb-10 leading-none text-white pt-6">
        Yupangco Music Academy offers their musical <br>
        lessons through live sessions via Zoom.  <br>
        They aim to reach all the aspiring musicians who  <br>
        wants to learn vocal and musical instruments  <br>
        in the comfort of their homes. <br>
      
        </p>
        </div>
                     </div>
  </section>

  <section class="w-full h-1/2 " style="background-color:#c0543f;">
<div class="flex justify-between">
          
            <div class="pl-20">
        <h1 class="font-bold text-6xl pt-28 text-white">Studio Lesson</h1>
        <p class="text-2xl mb-10 leading-none text-white pt-6">
        Yupangco Music Academy offers their musical <br>
        lessons on their studio. They offer face-to-face  <br>
        lessons for the students who wants a direct  <br>
        exchange of thoughts, concerns, and  <br>
        information with the teachers. <br>
      
        </p>
        </div>
        <div class="flex">
        <div><a href="/" class=""><img src="/img/bg_studio.png" alt="Studio"></a></div>
        </div>
            
  </section>

  <section class="w-full h-64" style="background-color:#d3b488;"> 
<h1 class="font-bold text-6xl pt-20 text-gray-100" style="text-align:center">Music Books</h1>  
</section>




  <section class="w-full h-96 bg-white"  > 

</section>



<section class="w-full h-64" style="background-color:#c0543f;"> 
<h1 class="font-bold text-6xl pt-20 text-gray-100" style="text-align:center">News</h1>  
</section>



<section class="w-full bg-white" style="height: 800px;" > 
<div class="flex justify-between">
            <div class="flex">
               <div><a href="/" class="flex items-center pl-20 py-3 px-3 pt-20"><img src="/img/bg_recital.png" alt="Recital"></a>
                 <h1 class="text-5xl pt-20 pl-40" style="color:#ba563b;">First Music Recital</h1>  
                 <h1 class="text-3xl pt-20 pl-60" style="color:#c8b494;">April 5, 2021</h1>  
               </div>
               <div><a href="/" class="flex items-center pl-20 py-3 px-3 pt-72"><img src="/img/bg_recital.png" alt="Recital"></a>
                 <h1 class="text-5xl pt-20 pl-40" style="color:#ba563b;">Second Music Recital</h1>  
                 <h1 class="text-3xl pt-20 pl-60" style="color:#c8b494;">August 20, 2025</h1>  
               </div>
            </div>
          
               
  </div>                    
</section>
<section class="w-full bg-white" style="height: 1000px;" > 
<div class="flex justify-between">
            <div class="flex">
               <div><a href="/" class="flex items-center pl-20 py-3 px-3 pt-20"><img src="/img/bg_recital.png" alt="Recital"></a>
                 <h1 class="text-5xl pt-20 pl-40" style="color:#ba563b;">Music SEPTacular Promo</h1>  
                 <h1 class="text-3xl pt-20 pl-60" style="color:#c8b494;">September</h1>  
               </div>
              
            </div>
          
               
  </div>                    
</section>




<section class="w-full h-64" style="background-color:#c0543f;"> 
<h1 class="font-bold text-6xl pt-20 text-gray-100" style="text-align:center">FAQs</h1>  
<h1 class="text-3xl pt-10 text-gray-100" style="text-align:center">Get Informed</h1>  
</section>


<section class="w-full " style="background-color:#d3b488; height: 1000px;"> 
<h1 class="font-bold text-5xl pt-20 text-gray-100 pl-40">What music lessons do you offer?</h1>  
<p class="text-2xl pt-5 text-gray-100 pl-40">
Yupangco Music Academy offers Piano, Acoustic Guitar, Electric Guitar, Bass,<br>
Guitar, Acoustic Drums, Electric Drums, Violin, Ukulele, Flute, Saxophone, and<br>
Voice Lessons through studio and online programs.​
</p>
<p class="text-2xl pt-5 text-gray-100 pl-40">
You may proceed to our<a href="#"><u> Music Programs</u></a> for our available programs, and for the<br>
lessons you may proceed at <a href="#"><u>Enroll Online</u></a> section. We are looking forward to<br>
having you in our academy as we both explore the world of music!
</p>

<h1 class="font-bold text-5xl pt-20 text-gray-100 pl-40">How can I enroll at YMA?</h1>  
<p class="text-2xl pt-5 text-gray-100 pl-40">
You may follow this guideline for the student's enrollment.
</p>
<p class="text-2xl pt-5 text-gray-100 pl-40">
1. The customer has to decide which music course to enroll in. 
</p>
<p class="text-2xl pt-5 text-gray-100 pl-40">
2. Send your preferred schedule(s) up to 2x a week. After that, kindly provide the</br>
details of the students such as name, contact details, etc.
</p>
<p class="text-2xl pt-5 text-gray-100 pl-40">
3. Choose your preferred mode of payment. 
</p>
<p class="text-2xl pt-5 text-gray-100 pl-40">
4. Send the proof of payment to us for verification. E-Receipt will be sent after<br>
together with the copy of the student's class card. 
</p>
<p class="text-2xl pt-5 text-gray-100 pl-40">
Or you may also directly enroll here on our website at <a href="#"><u>Enroll Online.</u></a>
</p>

</section>

<section class="w-full h-64" style="background-color:#343e3e;"> 
<h1 class="font-bold text-6xl pt-20 text-gray-100" style="text-align:center">Testimonials</h1>  
<h1 class="text-3xl pt-10 text-gray-100" style="text-align:center">From Our Students</h1>  
</section>




<section class="w-full" style="background-color:#c0543f; height: 1000px;"> 
<div class="flex justify-center pt-10">
<img src="/img/bg_text.png" alt="Recital">
  </div>
<p class="text-2xl pt-10 text-gray-100" style="text-align:center">T. Jun Sumalbag is a good teacher. My son's progress was fast and his playing</p>  
<p class="text-2xl text-gray-100" style="text-align:center">confidence was developed. Thanks to t. Jun and to Yupangco Music Academy</p>  
<h1 class="text-3xl pt-10 text-gray-100" style="text-align:center">Carol Agudong (Mom) & Dwayne (Drum Student)</h1>  
<div class="flex justify-center pt-10">
<img src="/img/bg_text.png" alt="Recital">
  </div>
<p class="text-2xl pt-10 text-gray-100" style="text-align:center">The lesson has been teaching her how to play properly and she has been</p>  
<p class="text-2xl text-gray-100" style="text-align:center">improving. She has learned quite a lot from the lessons.</p>  
<h1 class="text-3xl pt-10 text-gray-100" style="text-align:center">Tina Go (Parent) & Sofia Go (Violin Student, 12+1)</h1>  
<div class="flex justify-center pt-10">
<img src="/img/bg_text.png" alt="Recital">
  </div>
<p class="text-2xl pt-10 text-gray-100" style="text-align:center">Teacher Josephine was able to impart her enthusiasm and love of playing the</p>  
<p class="text-2xl text-gray-100" style="text-align:center">piano onto our son. Zeke enjoyed taking lessons with her from the very</p>  
<p class="text-2xl pt-10 text-gray-100" style="text-align:center">beginning, connecting with her warmth and her consistently positive approach.</p>  
<p class="text-2xl text-gray-100" style="text-align:center">Her patience and commitment to the students is evident.</p> 
<h1 class="text-3xl pt-10 text-gray-100" style="text-align:center">Zeke Marqueda & His Mother</h1>  
</section>



<section class="w-full bg-white"  style="height: 1000px;"> 
<h1 class="text-8xl pt-20" style="text-align:center; color:#be593c;" >Gallery</h1>  
<div class="swiper mySwiper">
      <div class="swiper-wrapper">
       
  <div class="swiper-slide">
       <div class="flex justify-center pt-10">
       <img class="w-3/4" src="/img/bg_flute1.png" alt="flute1" style="height:500px;">
       </div>
   </div>

             
   <div class="swiper-slide">
       <div class="flex justify-center pt-10">
       <img   class="w-3/4" src="/img/bg_clarinit.png" alt="Clarinit" style="height:500px;">
       </div>
   </div>
   <div class="swiper-slide">
       <div class="flex justify-center pt-10">
       <img  class="w-3/4" src="/img/bg_notes.png" alt="notes" style="height:500px;">
       </div>
   </div>
      
      
   <div class="swiper-slide">
       <div class="flex justify-center pt-10">
       <img  class="w-3/4" src="/img/bg_teacher.png" alt="Young Musician" style="height:500px;">
       </div>
   </div>
   <div class="swiper-slide">
       <div class="flex justify-center pt-10">
       <img  class="w-3/4" src="/img/bg_conductor.png" alt="Conductor" style="height:500px;">
       </div>
   </div>
   <div class="swiper-slide">
       <div class="flex justify-center pt-10">
       <img class="w-3/4" src="/img/bg_concerthall.png" alt="Concert Hall" style="height:500px;">
       </div>
   </div>
          
             
 


 
      </div>
      
    </div>
</section>


<section class="w-full" style="background-color:#c0543f; height: 500px;"> 

    
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=548&amp;height=512&amp;hl=en&amp;q=339 sen gil. puyat, makati, 1209 metro manila,Philippines yupang building&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">FNF</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:512px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:512px;}.gmap_iframe {height:512px!important;}</style></div>  </div>

</section>


  <section class="w-full" style="background-color:#c0543f; height: 800px;"> 
  <div class="flex jsutify-between">
  <div class="pl-20">
      <h1 class=" text-7xl pt-64 pr-32  pl-20" style="color:white;">Contact</h1>
        <h1 class=" text-2xl  pr-32 pt-10 pb-20 pl-20" style="color:white;">339 Sen Gil J. Puyat Ave, Makati, 1209 Metro</br>Manila, Philippines</h1>
        <h1 class=" text-2xl  pr-32 pt-10 pb-20 pl-20" style="color:white;">yupangcomusicacademy@gmail.com</h1> 
        <h1 class=" text-2xl  pr-32 pt-10 pb-20 pl-20" style="color:white;">0997 250 1654</h1> 
      </div>
       

      <form class="space-y-4 text-gray-700 pt-60 pr-20"  style="background-image: url('/img/bg_contact1.png');">
       
  <div class="flex flex-wrap">
    <div class="w-full">
      <label class="block mb-1 text-white" for="formGridCode_card">Name</label>
      <input class="w-full h-10 px-3 text-base  placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" placeholder="Name" style="background-color:#c0543f;"/>
    </div>
  </div>
  <div class="flex flex-wrap">
    <div class="w-full">
      <label class="block mb-1 text-white" for="formGridCode_card">Address</label>
      <input class="w-full h-10 px-3 text-base placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" placeholder="Address" style="background-color:#c0543f;"/>
    </div>
  </div>
  <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
    <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1 text-white" for="formGridCode_name">Email</label>
      <input class="w-full h-10 px-3 text-base placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_name" placeholder=" Enter Email" style="background-color:#c0543f;"/>
    </div>
    <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1 text-white "  for="formGridCode_last">Number</label>
      <input class="w-full h-10 px-3 text-base placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_last" placeholder=" Enter Number" style="background-color:#c0543f;"/>
    </div>
  </div>
  <div class="flex flex-wrap">
    <div class="w-full">
      <label class="block mb-1 text-white" for="formGridCode_card">Subject</label>
      <input class="w-full h-10 px-3text-base placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" placeholder="Type Subject" style="background-color:#c0543f;"/>
    </div>
  </div>
  <div class="flex flex-wrap">
    <div class="w-full">
      <label class="block mb-1 text-white" for="formGridCode_card">Message</label>
      <input class="w-full h-20 px-3 text-base placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" placeholder="Type Your Message Here...." style="background-color:#c0543f;"/>
    </div>
  </div>

  <div  style="text-align:center">
  <button class="  w-40 bg-white hover:bg-gray-200 text-grqy-200 font-bold py-2 px-4 rounded">
  Submit
</button>  
</form>
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








     <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

    </script>
