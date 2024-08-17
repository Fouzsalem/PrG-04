<!DOCTYPE html>
   <html dir="rtl" lang="ar">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">
      <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
 

    <title>بانوراما القصيم للبرمجه و التصميم</title>
   </head>
   <body>
      <!--=============== HEADER ===============-->
      <div class="header">
         <nav class="nav container">
               <div class="nav__data">
                  <img src="./images/logo (2).png" alt=""  class="nav__logo">
              
               
                  <div class="nav__toggle" id="nav-toggle">
                     <i class="ri-menu-line nav__burger"></i>
                     <i class="ri-close-line nav__close"></i>
                  </div>
               </div>

            <!--=============== NAV MENU ===============-->
                 <div class="nav__menu" id="nav-menu">
                     <ul class="nav__list">
                        <li><a href="/welcome" class="nav__link nav-active">الرئيسية</a></li>

                        <li><a href="/about" class="nav__link">من نحن</a></li>
         
                        <li><a href="services.html" class="nav__link">خدماتنا</a></li>
                        
                        <li><a href="/client" class="nav__link">عملائنا</a></li>
                        <li><a href="#" class="nav__link">تواصل معنا</a></li>
                      </ul>
                  </div>
         </nav>
      </div>












         @yield('content')



      <div class="copyright">
   <p class="copyright">&copy; تم التصميم بواسطة<a href=""> بانوراما القصيم للبرمجة والتصميم</a>.</p>2024 - 2014
</div>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js">


      </script>
   </body>
</html>