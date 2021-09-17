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
        <a href="#portfolio">
          <i class='bx bx-folder-open'></i>
          <span class="links_name">Portfolio</span>
        </a>
         <span class="tooltip">Portfolio</span>
      </li>
      <li>
       <a href="#about">
         <i class='bx bx-user' ></i>
         <span class="links_name">About</span>
       </a>
       <span class="tooltip">About</span>
     </li>
     <li>
       <a href="#contact">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Contact</span>
       </a>
       <span class="tooltip">Contact</span>
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
           <a href="">

       <i class='bx bx-log-out' id="log_out" ></i>
        {{-- <span class="links_name">Logout</span> --}}
      </a>
           </button> 
        </form>
       {{-- <span class="tooltip">Logout</span> --}}

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