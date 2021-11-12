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
      <section class="w-full h-full" style="background-color:#d3b488;"> 
      <div class="flex justify-between">
            <div class="flex">
         

        <div class="">
        <h1 class="font-bold text-7xl pl-48 pt-28 text-white" >Contact</h1>
       
 
        <p class="text-2xl text-white leading-none pl-20  pt-6 ">
         339 Sen. Gil J. Puyat Ave, Makati, 1209 Metro 
        </P>
        <p class="text-2xl text-white leading-none pl-20 pt-2">
         Manila, Philippines <br>
        </p>
        <p class="text-2xl text-white leading-none pl-20  pt-2 ">
         yupangcomusicacademyph@gmail.com<br>
        </p>
        <p class="text-2xl text-white leading-none pl-20  pt-2 ">
         0997 250 1654<br>
         </P>
         <div class="pt-2">
         <a href="#" class="text-lg text-white pl-20 "><i class="fa fa-facebook"></i></a> 
                    <a href="#" class="text-lg text-white pl-2"><i class="fa fa-instagram"></i></a> 
        </div>
        <div class="flex flex-wrap pt-10">
    <div class="w-4/5 pl-20">
      <label class="block mb-1 text-white" for="formGridCode_card">Name</label>
      <input class="w-full h-10 px-3 text-base  placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" placeholder="Name" style="background-color:#d3b488;"/>
    </div>
    <div class="w-4/5 pl-20">
      <label class="block mb-1 text-white" for="formGridCode_card">Address</label>
      <input class="w-full h-10 px-3 text-base  placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" placeholder="Enter your Address" style="background-color:#d3b488;"/>
    </div>
    <div class="pl-20 flex flex-wrap -mx-2 space-y-4 md:space-y-0">
    <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1 text-white" for="formGridCode_name">Email</label>
      <input class="w-full h-10 px-3 text-base placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_name" placeholder=" Enter Email" style="background-color:#d3b488;"/>
    </div>
    <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1 text-white "  for="formGridCode_last">Number</label>
      <input class="w-full h-10 px-5 text-base placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_last" placeholder=" Enter Number" style="background-color:#d3b488;"/>
    </div>
  </div>
</div>
<div class="w-4/5 pl-20">
      <label class="block mb-1 text-white" for="formGridCode_card">Subject</label>
      <input class="w-full h-10 px-3 text-base  placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" placeholder="Type Subject " style="background-color:#d3b488;"/>
    </div>
  <div class="flex flex-wrap">
    <div class="w-4/5 pl-20">
      <label class="block mb-1 text-white" for="formGridCode_card">Message</label>
      <input class="w-full h-20 px-3 text-base placeholder-white border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" placeholder="Type Your Message Here...." style="background-color:#d3b488;"/>
    </div>
  </div>
  
  <div class="pt-5 pr-10"  style="text-align:center">
  <button class="  w-40 bg-white hover:bg-gray-200 text-grqy-200 font-bold py-2 px-4 rounded">
  Submit
</button>  
  </div>
        </div>
      
</div>
<div class="flex w-4/5 ">
            <div><img src="/img/bg_contact1.png" alt="Lesson"></div>
  </div>
</div>

      </section>   
      <section class="w-full  pt-10 pl-10 pr-10 " style="background-color:#d3b488; height: 600px;"> 

    
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=548&amp;height=512&amp;hl=en&amp;q=339 sen gil. puyat, makati, 1209 metro manila,Philippines yupang building&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">FNF</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:512px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:512px;}.gmap_iframe {height:512px!important;}</style></div>  </div>

</section>
</body>
<footer class="w-full bg-white "  style="height: 400px;"> 
  <h1 class=" text-3xl pt-20 text-gray-500" style="text-align:center">Subscribe Form</h1>  
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

</html>