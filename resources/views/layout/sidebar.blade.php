<div class="vertical-menu">


    <!-- LOGO -->
    <div class="navbar-brand-box">
       <a href="#" class="logo logo-dark">
           <span class="logo-sm">
           
           </span>
           <span class="logo-lg">
           Job Portal
           </span>
       </a>

       
   </div>

   <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
       <i class="fa fa-fw fa-bars"></i>
   </button>

   <div data-simplebar class="sidebar-menu-scroll">

       <!--- Sidemenu -->
       <div id="sidebar-menu">
           <!-- Left Menu Start -->
           <ul class="metismenu list-unstyled" id="side-menu">
               <li class="menu-title" data-key="t-menu">For Admin</li>

               <li>
                   <a href="{{route('admin.dash')}}">
                       <i class="bx bx-home-circle nav-icon"></i>
                       <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                   </a>
               </li>


               <li>
                   <a href="{{route('job.index')}}" class="">
                       <i class="bx bx-shield-quarter nav-icon"></i>
                       <span class="menu-item" data-key="t-ecommerce">Job</span>
                   </a>
                 
               </li>

           </ul>
       </div>
       <!-- Sidebar -->
   </div>
</div>
<!-- Left Sidebar End -->