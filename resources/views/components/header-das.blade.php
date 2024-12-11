      <header
      class="navbar sticky-top bg-primary-subtle flex-md-nowrap p-0 shadow"
      data-bs-theme="dark"
    >
      <a
        class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white"
        href="/Home"
        >Uni-cash</a
      >

      <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
          <button
            class="btn btn-outline-primary py-0 px-3"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            Navbar
          </button>
        </li>
      </ul>

      <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input
          class="form-control w-100 rounded-0 border-0"
          type="text"
          placeholder="Search"
          aria-label="Search"
        />
      </div>
    </header>

    <div class="container-fluid bg-body" style="transition: 0.4">
      <div class="row">
        <div
          class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary"
        >
          <div
            class="offcanvas-md offcanvas-end bg-body-tertiary"
            tabindex="-1"
            id="sidebarMenu"
            aria-labelledby="sidebarMenuLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="sidebarMenuLabel">
                Uni-cash
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                data-bs-target="#sidebarMenu"
                aria-label="Close"
              ></button>
            </div>
            <div
              class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto"
            >
              <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                  <a href="/Dasboard" class="nav-link d-flex align-items-center gap-2">Dasboard</a>
                </li>
                <li class="nav-item">
                  <a href="/Dasboard/Final" class="nav-link d-flex align-items-center gap-2">Final dasboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="/Profile/setting">
                    Setting
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        {{$slot}}
        </div>
</div>