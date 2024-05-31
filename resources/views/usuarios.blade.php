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
        <a href="{{ url('/productos') }}" class="nav__link">
          <ion-icon name="cart-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Productos</span>
        </a>
        <a href="{{ url('/ventas') }}" class="nav__link">
          <ion-icon name="receipt-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Ventas</span>
        </a>
        <a href="{{ url('/clientes') }}" class="nav__link">
          <ion-icon name="people-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Clientes</span>
        </a>
        <a href="{{ url('/usuarios') }}" class="nav__link active">
          <ion-icon name="person-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Usuarios</span>
        </a>
        <a href="{{ url('/proveedores') }}" class="nav__link">
          <ion-icon name="people-circle-outline" class="nav__icon"></ion-icon>
          <span class="nav__name">Proveedores</span>
        </a>
        <a href="{{ url('/empleados') }}" class="nav__link">
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
  <h1>USUARIOS</h1>
</div>

@include('footer.footer')