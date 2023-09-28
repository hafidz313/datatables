<div class="sidebar">
  <div class="logo-details">
  <link rel="icon" href="{{ asset('assets/logo.jpg') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <span class="logo_name">DataTableOi</span>
  </div>
  <ul class="nav-links">
   
   
    
    <li>
      <a href="/tabel" class="{{ request()->Is('tabel*') ? 'active' : '' }}">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">table</span>
      </a>
    </li>
   
    </li>
  </ul>
</div>