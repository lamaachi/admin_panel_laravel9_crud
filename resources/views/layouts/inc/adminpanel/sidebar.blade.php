<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active ">
          <a class="nav-link" href="./dashboard.html">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="{{url('/categories')}}">
            <i class="material-icons">category</i>
            <p>Categories</p>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ url('/categories')}}">Categories List</a></li>
            <li><a class="dropdown-item" href="{{ url('/categories/create')}}">Add Categories</a></li>
          </ul>
        </li>

        <li class="nav-item ">
          <a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="{{url('/categories')}}">
            <i class="material-icons">category</i>
            <p>Products</p>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ url('/products')}}">Products List</a></li>
            <li><a class="dropdown-item" href="{{ url('/products/create')}}">Add Product</a></li>
          </ul>
        </li>
      </ul>
      {{--  --}}
      
    </div>
</div>