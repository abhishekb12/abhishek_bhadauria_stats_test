<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
      {{-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div> --}}
      {{-- <div class="sidebar-brand-text">{{ config('app.name') }}</div> --}}
       <a class="navbar-brand"  href="{{url('/admin/dashboard')}}"><img style="height: 50%; width: 100%;" src="{{url('public/Cross-Check Health Logo-05.jpg')}}"> </a>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">  

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-user"></i>
        <span>Profile</span>
      </a>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('profile.list') }}">Profile List</a>
          {{-- <a class="collapse-item" href="">Add Admin</a> --}}
        </div>
      </div>
     
        
    </li>
 
    <hr class="sidebar-divider">

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-user"></i>
        <span>Order</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('order.kit') }}">Order DNA Kit</a>
        </div>
      </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
        <i class="fas fa-fw fa-user"></i>
        <span>Item</span>
      </a>
      <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('item.list') }}">Iteam List</a>
        </div>
      </div>
    </li>
 
    <hr class="sidebar-divider">

     {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="">
        <i class="fas fa-fw fa-envelope"></i>
        <span>Access Code</span>
      </a>    
      </li>

    <hr class="sidebar-divider">

      <li class="nav-item">
      <a class="nav-link collapsed" href="">
        <i class="fas fa-fw fa-address-book"></i>
        <span>Contacts</span>
      </a>    
      </li>
<hr class="sidebar-divider">

     <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOther" aria-expanded="true" aria-controls="collapseOther">
        <i class="fas fa-fw fa-user"></i>
        <span>Other</span>
      </a>
      <div id="collapseOther" class="collapse" aria-labelledby="headingOther" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="">Industries</a>
          <a class="collapse-item" href="">Maturity</a>
          <a class="collapse-item" href="">Organization Size</a>
          <a class="collapse-item" href="">Organization Form</a>
        </div>
      </div> 
    </li> 
    <hr class="sidebar-divider">

    <li class="nav-item">
      <a class="nav-link collapsed" href="">
        <i class="fas fa-fw fa-credit-card"></i>
        <span>Payment List</span>
      </a>    
    </li>
 
    <hr class="sidebar-divider">

    <li class="nav-item">
      <a class="nav-link collapsed" href="">
        <i class="fas fa-fw fa-cog"></i>
        <span>Settings</span>
      </a>    
      </li> --}}
 

  </ul>