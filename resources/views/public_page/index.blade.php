<x-layout>
  <x-slot:tittle></x-slot:tittle>
    <nav
      class="px-5 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom"
    >
      <div class="col-md-3 mb-2 mb-md-0">
          <img
            src="{{asset('resource/img/unicashlogo.png')}}"
            alt="..."
            width="50"
            height="50"
            class="d-inline-block object-fit-cover rounded-circle align-text-top"
          />
        <a
          href=""
          class="d-inline-flex link-body-emphasis text-decoration-none"
          ><h4 class=""></h4>
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/Home" class="nav-link px-2">Home</a></li>
        <li><a href="#" class="nav-link px-2">Features</a></li>
        <li><a href="#" class="nav-link px-2">Pricing</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="/Login" class="btn btn-outline-primary me-2">
          Login
        </a>
        <a href="/Register" class="btn btn-primary">Sign-up</a>
      </div>
    </nav>

<!-- header -->
    <header class="navbar border-bottom sticky-top navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse align-items-center navbar-collapse"
          id="navbarSupportedContent"
        >
          <ol class="breadcrumb me-auto my-auto">
            <li class="breadcrumb-item">Public</li>
            <li class="breadcrumb-item" aria-current="page">Landing</li>
          </ol>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </header>

<!-- hero -->
  <div class="position-relative overflow-hidden mt-4 p-5 text-center bg-body-tertiary">
    <div class="col p-lg-5 mx-auto my-5">
      <h1 class="display-3 fw-bold">Uni-cash</h1>
      <h3 class="fw-normal text-muted mb-3">Kemudahan dalam pen-data-an</h3>
      <div class="d-flex gap-3 justify-content-center lead fw-normal">
        <a class="icon-link" href="#">
          Learn more
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
        <a class="icon-link" href="#">
          View product
          <svg class="bi"><use xlink:href="#chevron-right"/></svg>
        </a>
      </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
  
<!-- about -->
    <div class="row mt-4 container mx-auto">
      <div class="col" style="min-width:300px;">
        <div class="h-100 p-5 text-bg-dark ">
          <h2>Tujuan</h2>
          <p>Uni-cash pertama kali dirancang untuk dapat mempermudah proses pendataan keuangan yang dimiliki oleh suatu organisasi.</p>
        </div>
      </div>
      <div class="col" style="min-width:300px;">
        <div class="h-100 p-5 bg-body-tertiary border">
          <h2>Teknologi yang dipakai</h2>
          <p>Aplikasi Uni-cash berbasis website yang dapat berjalan disemua platform baik mobile ataupun dekstop, teknologi utama Uni-cash merupakan Laravel yang menjadi pondasi aplikasi Uni-cash.</p>
          <a class="btn btn-outline-secondary" href="/Welcome/Laravel">Laravel</a>
        </div>
      </div>
    </div>
    
</x-layout>