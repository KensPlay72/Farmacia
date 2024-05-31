@include('head.head')
<div class="l-navbar" id="navbar">
  <nav class="nav">
    <div>
      <div class="nav__brand">
        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
        <a href="#" class="nav__logo">FarmaCOM</a>
      </div>
      <div class="nav__list">
        <a href="{{ url('/dashboard') }}" class="nav__link">
          <ion-icon name="home-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Dashboard</span>
        </a>
        <a href="#" class="nav__link">
          <ion-icon name="cart-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Productos</span>
        </a>
        <a href="#" class="nav__link">
          <ion-icon name="receipt-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Ventas</span>
        </a>
        <a href="#" class="nav__link">
          <ion-icon name="people-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Clientes</span>
        </a>
        <a href="#" class="nav__link">
          <ion-icon name="person-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Usuarios</span>
        </a>
        <a href="#" class="nav__link">
          <ion-icon name="people-circle-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Proveedores</span>
        </a>
        <a href="#" class="nav__link">
          <ion-icon name="person-circle-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Empleados</span>
        </a>
      </div>
    </div>

    <a href="#" class="nav__link">
      <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
      <span class="nav__name">Log Out</span>
    </a>
  </nav>
</div>
<div class="">
  <h1>CAJA</h1>
</div>

@include('footer.footer')
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}

{{-- <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}