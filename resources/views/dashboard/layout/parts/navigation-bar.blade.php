<!-- Overlays -->
<div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft">

</div>
<div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight">

</div>
<!-- Sidebar Navigation Left -->
<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
  <!-- Logo -->
  <div class="logo-sn ms-d-block-lg">
    <a class="pl-0 ml-0 text-center" href="index.html"> <img src="{{ asset('img/descarga.png') }}" alt="logo"> </a>
    <a href="#" class="text-center ms-logo-img-link"> <img src="{{ asset('img/user.jpg') }}" alt="logo"></a>
    <h5 class="text-center text-white mt-2">{{ auth()->user()->nickname }}</h5>
    <h6 class="text-center text-white mb-3">{{ auth()->user()->rol->nombre}}</h6>

  </div>
  <!-- Navigation -->
  <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
    <!-- Schedule -->
    <li class="menu-item">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#schedule" aria-expanded="false" aria-controls="schedule">
        <span><i class="fas fa-list-alt"></i>Ventas</span>
      </a>
      <ul id="schedule" class="collapse" aria-labelledby="schedule" data-parent="#side-nav-accordion">
        <li> <a href="pages/doctor-schedule/add-schedule.html">Lista de ventas</a> </li>
        <li> <a href="pages/doctor-schedule/schedule-list.html">Añadir nueva venta</a> </li>
      </ul>
    </li>
    <!-- /Schedule -->
    <!-- Appointment -->
    <li class="menu-item">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#appointment" aria-expanded="false" aria-controls="appointment">
        <span><i class="far fa-check-square"></i>Productos</span>
      </a>
      <ul id="appointment" class="collapse" aria-labelledby="appointment" data-parent="#side-nav-accordion">
        <li> <a href="pages/appointment/add-appointment.html">Lista de productos</a> </li>
        <li> <a href="pages/appointment/appointment-list.html">Añadir productos</a> </li>
      </ul>
    </li>
    <!-- /Appointment -->
    <!-- Report -->
    <li class="menu-item">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#report" aria-expanded="false" aria-controls="report">
        <span><i class="fas fa-file-alt"></i>Report</span>
      </a>
      <ul id="report" class="collapse" aria-labelledby="report" data-parent="#side-nav-accordion">
        <li> <a href="pages/report/patient-report.html">Patient Wise Report</a> </li>
        <li> <a href="pages/report/doctor-report.html">Doctor Wise Report</a> </li>
        <li> <a href="pages/report/total-report.html">Total Report</a> </li>
      </ul>
    </li>
    <!-- /Report -->
    <!-- Icons -->
    <li class="menu-item">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons">
        <span><i class="material-icons fs-16">border_color</i>Imventarios</span>
      </a>
      <ul id="icons" class="collapse" aria-labelledby="icons" data-parent="#side-nav-accordion">
        <li> <a href="pages/maps/google-maps.html">Lista de compra</a> </li>
        <li> <a href="pages/maps/vector-maps.html">Añadir productos</a> </li>
      </ul>
    </li>
    <!-- /Icons -->
    <!-- Maps -->
    <li class="menu-item">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps">
        <span><i class="material-icons fs-16">map</i>Proveedores</span>
      </a>
      <ul id="maps" class="collapse" aria-labelledby="maps" data-parent="#side-nav-accordion">
        <li> <a href="pages/maps/google-maps.html">Lista de proveedores</a> </li>
        <li> <a href="pages/maps/vector-maps.html">Añadir proveedores</a> </li>
      </ul>
    </li>
    <!-- /Maps -->
    <li class="menu-item">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#patient" aria-expanded="false" aria-controls="patient">
        <span><i class="fas fa-user"></i>Usuarios</span>
      </a>
      <ul id="patient" class="collapse" aria-labelledby="patient" data-parent="#side-nav-accordion">
        <li> <a href="../patient/patient-list.html">Lista usuario</a> </li>
        <li> <a href="../patient/add-patient.html">Add usuario</a> </li>
      </ul>
  </li>
  </ul>
</aside>