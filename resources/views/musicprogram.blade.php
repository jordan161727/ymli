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
          Another action
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
          Something else here
        </a>
        <div
          class="
            h-0
            my-2
            border border-solid border-t-0 border-blueGray-800
            opacity-25
          "
        ></div>
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
            text-gray-700
            hover:bg-gray-100
          "
        >
          Seprated link
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
       <section class="aw-full h-full ">
       <div class="bg-cover bg-center  h-screen text-white py-24 px-10 object-fill" style="background-image: url(/img/bg_carousel1.jpg)">
  
        <h1 class="font-bold text-6xl pt-64 " style="text-align:center">Studio Music Programs</h1>
        <h1 class=" font-bold text-3xl pt-10 text-gray-300" style="text-align:center">What we Offer</h1> 
       
    </div>   
       </section>


       <section class="w-full" style="background-color:#343e3e; height:2600px;">
       <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class=" w-full h-64"><a href="/"><img src="/img/bg_studio1.png" alt="Lesson"></a></div>
           </div>
           <div class=" flex pt-8 pl-5 ">
           <div class="box-content  bg-white">
           <h1 class=" font-bold text-5xl pt-32 pl-16 text-red-500">One-on-one Class</h1>
           <div class="px-3 pb-48 ">
           <h1 class="text-2xl pl-5 pt-10  text-red-300">Take a one-on-one class and engage with you</h1>
           <h1 class="text-2xl pl-5  text-red-300">music teacher in a high-quality interaction.</h1>
           <h1 class="text-2xl pl-5  text-red-300">Students can take piano, acoustic guitar,</h1>
           <h1 class="text-2xl pl-5  text-red-300">electric guitar, bass guitar, acoustic drums,</h1>
           <h1 class="text-2xl pl-5  text-red-300">electric drums, violin, ukulele, flute, saxophone</h1>
           <h1 class="text-2xl pl-5  text-red-300">or voice lessons.</h1>
          </div>
           
 
</div>
       </div>
       </div>
  </div>
  <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class="box-content  bg-white">
           <h1 class=" font-bold text-5xl pt-32 pl-16 text-red-500">Group Class</h1>
           <div class="px-3 pb-48 ">
           <h1 class="text-2xl pl-5 pt-10  text-red-300">Take a one-on-one class and engage with you</h1>
           <h1 class="text-2xl pl-5  text-red-300">music teacher in a high-quality interaction.</h1>
           <h1 class="text-2xl pl-5  text-red-300">Students can take piano, acoustic guitar,</h1>
           <h1 class="text-2xl pl-5  text-red-300">electric guitar, bass guitar, acoustic drums,</h1>
           <h1 class="text-2xl pl-5  text-red-300">electric drums, violin, ukulele, flute, saxophone</h1>
           <h1 class="text-2xl pl-5  text-red-300">or voice lessons.</h1>
           </div>
           </div>
           
           
        
           </div>






           <div class=" flex pt-8 pl-5 ">
           <div class="w-full h-64"><a href="/"><img src="/img/bg_studio2.png" alt="Lesson"></a></div>
           </div>
    </div>
  </div>

  <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class="w-full h-64"><a href="/"><img src="/img/bg_studio3.png" alt="Lesson"></a></div>
           </div>
           <div class=" flex pt-8 pl-5 ">
           <div class="box-content  bg-white">
           <h1 class=" font-bold text-5xl pt-32 pl-16 text-red-500">Family Class</h1>
           <div class="px-3 pb-56 ">
           <h1 class="text-2xl pl-5 pt-10  text-red-300">Bond with your family while taking up musical</h1>
           <h1 class="text-2xl pl-5  text-red-300">lessons. Be known as a family of musicians as</h1>
           <h1 class="text-2xl pl-5  text-red-300">you can choose from voice, ukulele, and guitar</h1>
           <h1 class="text-2xl pl-5  text-red-300">elessons for this program.  The maximum</h1>
           <h1 class="text-2xl pl-5  text-red-300">number of students for this class is 4.</h1>
    
   
          </div>
           
 
</div>
       </div>
       </div>
  </div>


 

  <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class="box-content  bg-white">
           <h1 class=" font-bold text-5xl pt-32 pl-16 text-red-500">Sibling or Friends</h1>
           <h1 class=" font-bold text-5xl  pl-16 text-red-500">Class</h1>
           <div class="px-3 pb-48 ">
           <h1 class="text-2xl pl-5 pt-10  text-red-300">Have fun learning music with your partner at</h1>
           <h1 class="text-2xl pl-5  text-red-300">our Siblings or Friends Class. Students can</h1>
           <h1 class="text-2xl pl-5  text-red-300">take piano, acoustic guitar, electric guitar, bass</h1>
           <h1 class="text-2xl pl-5  text-red-300">guitar, acoustic drums, electric drums, violin,</h1>
           <h1 class="text-2xl pl-5  text-red-300">ukulele, flute, saxophone, or voice lessons.</h1>
   
           </div>
           </div>
           
           
        
           </div>






           <div class=" flex pt-8 pl-5 ">
           <div class="w-full h-64"><a href="/"><img src="/img/bg_studio4.png" alt="Lesson"></a></div>
           </div>
    </div>
  </div>

  </section>   
  
  



  <section>
  <div class="bg-cover bg-center h-72 text-white py-24 px-10 object-fill" style="background-image: url(/img/bg_carousel1.jpg)">
  
  <h1 class="font-bold text-6xl " style="text-align:center">Online Lessons Program</h1>
  <h1 class=" font-bold text-3xl pt-10 text-gray-300" style="text-align:center">What we Offer</h1> 
 
</div>   


  </section>



  <section class="w-full" style="background-color:white; height:2600px;">
       <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class=" w-full h-64"><a href="/"><img src="/img/bg_studio5.png" alt="Lesson"></a></div>
           </div>
           <div class=" flex pt-8 pl-5 ">
           <div class="box-content" style="background-color:#c0543f;">
           <h1 class=" font-bold text-5xl pt-32 pl-16 text-white">One-on-one Class</h1>
           <div class="px-3 pb-48 ">
           <h1 class="text-2xl pl-5 pt-10  text-white">Take a one-on-one class and engage with your</h1>
           <h1 class="text-2xl pl-5  text-white">music teacher in a high-quality interaction.</h1>
           <h1 class="text-2xl pl-5  text-white">Students can take piano, acoustic guitar,</h1>
           <h1 class="text-2xl pl-5  text-white">electric guitar, bass guitar, acoustic drums,</h1>
           <h1 class="text-2xl pl-5  text-white">electric drums, violin, ukulele, flute, saxophone,</h1>
           <h1 class="text-2xl pl-5  text-white">or voice lessons.</h1>
          </div>
           
 
</div>
       </div>
       </div>
  </div>
  <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class="box-content " style="background-color:#c0543f;">
           <h1 class=" font-bold text-5xl pt-32 pl-16 text-white">Group Class</h1>
           <div class="px-3 pb-48 ">
           <h1 class="text-2xl pl-5 pt-10  text-white">Take a one-on-one class and engage with you</h1>
           <h1 class="text-2xl pl-5  text-white">music teacher in a high-quality interaction.</h1>
           <h1 class="text-2xl pl-5  text-white">Students can take piano, acoustic guitar,</h1>
           <h1 class="text-2xl pl-5  text-white">electric guitar, bass guitar, acoustic drums,</h1>
           <h1 class="text-2xl pl-5  text-white">electric drums, violin, ukulele, flute, saxophone</h1>
           <h1 class="text-2xl pl-5  text-white">or voice lessons.</h1>
           </div>
           </div>
           
           
        
           </div>






           <div class=" flex pt-8 pl-5 ">
           <div class="w-full h-64"><a href="/"><img src="/img/bg_studio6.png" alt="Lesson"></a></div>
           </div>
    </div>
  </div>

  <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class="w-full h-64"><a href="/"><img src="/img/bg_studio7.png" alt="Lesson"></a></div>
           </div>
           <div class=" flex pt-8 pl-5 ">
           <div class="box-content"  style="background-color:#c0543f;">
           <h1 class=" font-bold text-5xl pt-32 pl-16 text-white">Family Class</h1>
           <div class="px-3 pb-56 ">
           <h1 class="text-2xl pl-5 pt-10  text-white">Bond with your family while taking up musical</h1>
           <h1 class="text-2xl pl-5   text-white">lessons. Be known as a family of musicians as</h1>
           <h1 class="text-2xl pl-5  text-white">you can choose from voice, ukulele, and guitar</h1>
           <h1 class="text-2xl pl-5   text-white">elessons for this program.  The maximum</h1>
           <h1 class="text-2xl pl-5   text-white">number of students for this class is 4.</h1>
    
   
          </div>
           
 
</div>
       </div>
       </div>
  </div>


 

  <div class="flex">
            <div class="flex pt-8 pl-24">
            <div class="box-content"  style="background-color:#c0543f;">
           <h1 class=" font-bold text-5xl pt-32 pl-16  text-white">Sibling or Friends</h1>
           <h1 class=" font-bold text-5xl  pl-16  text-white">Class</h1>
           <div class="px-3 pb-48 ">
           <h1 class="text-2xl pl-5 pt-10   text-white">Bond with your family while taking up musical</h1>
           <h1 class="text-2xl pl-5   text-white">our Siblings or Friends Class. Students can</h1>
           <h1 class="text-2xl pl-5   text-white">take piano, acoustic guitar, electric guitar, bass</h1>
           <h1 class="text-2xl pl-5   text-white">guitar, acoustic drums, electric drums, violin,</h1>
           <h1 class="text-2xl pl-5   text-white">ukulele, flute, saxophone, or voice lessons.</h1>
   
           </div>
           </div>
           
           
        
           </div>






           <div class=" flex pt-8 pl-5 ">
           <div class="w-full h-64"><a href="/"><img src="/img/bg_studio8.png" alt="Lesson"></a></div>
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