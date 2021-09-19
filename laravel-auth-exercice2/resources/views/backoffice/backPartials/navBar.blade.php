{{-- <ul class="nav d-flex flex-column  m-2">
  <li class="nav-item"><a  href="{{route('index')}}" class="nav-link border text-center @if(request()->routeIs('index')) active @else '' @endif">Front</a></li>
<li class="nav-item"><a  href="{{route('header_data.index')}}" class="nav-link border text-center @if(request()->routeIs('header_data.index')) active @else '' @endif">Header</a></li>
<li class="nav-item"><a  href="{{route('portfolios.index')}}" class="nav-link border text-center @if(request()->routeIs('portfolios.index')) active @else '' @endif">Portfolio</a></li>
  <li class="nav-item"><a  href="{{route('abouts.index')}}" class="nav-link border text-center @if(request()->routeIs('abouts.index')) active @else '' @endif">About</a></li>
  <li class="nav-item"><a  href="{{route('footers.index')}}" class="nav-link border text-center @if(request()->routeIs('footers.index')) active @else '' @endif">Footer</a></li>
</ul> --}}

<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">CodingLab</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list ">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{route('header_data.index')}}" class="text-light">
          <i class='bx bx-heading'></i>
          <span class="links_name">Header</span>
        </a>
         <span class="tooltip">Header</span>
      </li>
      <li>
        <a href="{{route('portfolios.index')}}" class="text-light">
          <i class='bx bx-folder-open'></i>
          <span class="links_name">Portfolio</span>
        </a>
         <span class="tooltip">Portfolio</span>
      </li>
      <li>
       <a href="{{route('abouts.index')}}" class="text-light">
         <i class='bx bx-user' ></i>
         <span class="links_name">About</span>
       </a>
       <span class="tooltip">About</span>
     </li>
     <li>
       <a href="{{route('footers.index')}}" class="text-light">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Footer</span>
       </a>
       <span class="tooltip">Footer</span>
     </li>


     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">{{Auth::user()!==NULL?Auth::user()->name:""}}</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <form action="{{route('logout')}}" method="post">
        @csrf

       <button type="submit">
           <a href="#">

       <i class='bx bx-log-out' id="log_out" ></i>
        <span class="links_name">Logout</span>
      </a>
           </button> 
        </form>
       {{-- <span class="tooltip">Logout</span> --}}


    <li class="border border-light w-100 mt-2"></li>
    <li class="mt-3">
        <a href="{{route('index')}}"> 
            <i class='bx bx-home'></i>
            <span class="tooltip">Home</span>
        </a>
       
     </li>
    </ul>
  </div>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>