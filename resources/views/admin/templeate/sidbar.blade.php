 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion " id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
         <div class="sidebar-brand-icon ">
             <p class="fs-5"><span class="text-success">One</span>-Helth</p>
         </div>

     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link " href="{{ url('/') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span class="text-success">Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Interface
     </div>
     {{-- admin dashboard --}}

     <li class="nav-item">
         <a class="nav-link" href="">
             <i class="fa-solid fa-pen-nib" style="color: #a82497;"></i>
             <span class="text-success">Specialities</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="">
             <i class="fa-solid fa-user-doctor" style="color: #e524a8;"></i>
             <span class="text-success">Add Doctor</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="">
             <i class="fa-solid fa-user-doctor" style="color: #e524a8;"></i>
             <span class="text-success"> Doctor List</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="">
            <i class="fa-regular fa-handshake" style="color: #d4025d;"></i>
             <span class="text-success">Appointments</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="">
             <i class="fa-solid fa-list-check" style="color: #db2988;"></i>
             <span class="text-success">User list</span>
         </a>

     </li>

     <li class="nav-item">
         <a class="nav-link  " href="">
            <i class="fa-solid fa-bed" style="color: #dc0984;"></i>
             <span class="text-success">Patient list</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="">
             <i class="fa-solid fa-comment" style="color: #e316ad;"></i>
             <span class="text-success">Comments</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="">
            <i class="fa-solid fa-reply" style="color: #d70f55;"></i>
             <span class="text-success">Replies</span>
         </a>

     </li>
     <li class="nav-item">
         <a class="nav-link  " href="">
            <i class="fa-regular fa-newspaper" style="color: #cd184e;"></i>
             <span class="text-success">Events </span>
         </a>

     </li>

    
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

     <!-- Sidebar Message -->


 </ul>
 <!-- End of Sidebar -->
