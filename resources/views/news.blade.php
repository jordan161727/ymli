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
  <body>
  <section class="w-full h-64 bg-white"> 
     <h1 class="font-bold text-6xl pt-20 " style="text-align:center; color:#c35a3a;">News Updates</h1>  
     <h1 class="text-3xl pt-10 text-gray-100" style="text-align:center; color:#ccb18e;">Get the Latest</h1>  
</section>
<section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
           
            <video 
            autoplay 
            muted
            loop class="object-fill w-2/4" style="height: 980px; ">
               <source src="img/video1.mp4">
            </video>

        <div>
        <h1 class="font-semibold text-6xl pl-20 pt-28" style="color:#c35a3a;" >First Music Recital</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-52 " style="color:#ccb18e;" >April 05, 2021</h1>

        <p class="text-2xl  leading-none pl-20 mx-4  pt-6 py-8" style="color:#d3aea8;">
        The first ever virtual graduation and recital of <br>
        Yupangco Music Academy (YMA) has taken its <br>
        place on the Facebook Page. <br>
        </p>
        <p class="text-2xl  leading-none pl-20 mx-4  pt-6 py-8" style="color:#d3aea8;">
        More than 15 students have showcased their<br>
         potentials in singing, and playing musical <br>
         instruments. They have proved that learning <br>
         music is indeed magical. They have truly <br>
         comforted everyone with cool performances in <br>
         the middle of the summer. <br>
        </p>
        <p class="text-2xl  leading-none pl-20 mx-4  pt-6 py-8" style="color:#d3aea8;">
        This first virtual recital is a proof that even<br>
        in the online setup we can spread and <br>
        express their love for music.<br>
        </p>
        </div>

        </div>
</div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
         

        <div class="">
        <h1 class="font-semibold text-6xl pl-48 pt-28" style="color:#c35a3a;" >Second</h1>
        <h1 class="font-semibold text-6xl pt-3 pl-28" style="color:#c35a3a;" >Music Recital</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-52 " style="color:#ccb18e;" >July 13, 2021</h1>
 
        <p class="text-2xl  leading-none pl-20  pt-6 py-8" style="color:#d3aea8;">
        The Yupangco Music Academy (YMA) held its <br>
         2nd Virtual Recital on its Facebook Page <br>
         featuring the students who performed their <br>
         outstanding talent in music through singing, <br>
         and playing musical instruments such as <br>
         piano, guitar, and more. <br>
        </p>
        <p class="text-2xl pl-20  leading-none  pt-6 py-8" style="color:#d3aea8;">
        More than 15 YMA students have showcased 
        their skills and musical prowess that made all 
        the parents, teachers, and audiences proud. 
        They have showcased not just their musical 
        skills but also their creativity and
        professionalism as musicians. 
        </p>
        <p class="text-2xl pl-20  leading-none  pt-6 py-8" style="color:#d3aea8;">
        With this event, music students will be more
        encouraged and empowered to play, express,
        and create music. YMA will continue to inspire 
        talented & passionate musicians to sing and 
        play musical instruments beyond limits.
        </p>
        </div>
  
     
        </div>
        <video
         autoplay 
         loop
         muted 
         class="object-fill w-2/4" style="height: 980px; ">
               <source src="img/video2.mp4">
            </video>
</div>
</div>
  </section>
  <section class="w-full  bg-gray-300" style="height: 980px;">
  
  <section class="w-full  bg-gray-300" style="height: 980px;">
<div class="flex justify-between">
            <div class="flex">
           
            <video 
             autoplay
             loop
             muted
              class="object-fill w-2/4" style="height: 980px; ">
               <source src="img/video3.mp4">
            </video>

            <div>
        <h1 class="font-semibold text-6xl pl-20 pt-28" style="color:#c35a3a;" >Music SEPTacular</h1>
          <h1 class="font-semibold text-6xl pl-20 pt-3" style="color:#c35a3a;" >PROMO</h1>
        <h1 class="font-semibold text-3xl pt-8 pl-52 " style="color:#ccb18e;" >September 01 - 30, 2021</h1>

        <p class="text-2xl  leading-none pl-20 mx-4  pt-6 py-8" style="color:#d3aea8;">
        The Yupangco Music Academy  has an early<br>
        gift this BER month!<br>
        </p>
        <p class="text-2xl  leading-none pl-20 mx-4  pt-6 py-8" style="color:#d3aea8;">
        Discounts for music lessons, and books upon<br>
        enrollment will be given to all aspiring<br>
        musicians. And there's are freebies waiting for<br>
        the students as well.<br>

​
        </p>
        <p class="text-2xl  leading-none pl-20 mx-4  pt-6 py-8" style="color:#d3aea8;">
        Join this exciting promo this month of<br>
        September now. Like Yupangco Music <br>
        Academy on Facebook and follow us on <br>
        Instagram for more details.<br>
        </p>
        </div>

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