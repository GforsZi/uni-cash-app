<x-layout>
  <x-slot:tittle></x-slot:tittle>
    <x-navbar>
    <a class="btn btn-outline-primary" href="/Home">Back</a>
    </x-navbar>
        <br />
    <div class="container mx-auto pt-5">
      <div class="w-100">
        <img
        class="rounded-circle object-fit-cover"
          src="{{asset('/resource/img/foto_profile/'.auth()->user()->foto_profile)}}"
          width="90px"
          height="90px"
          alt=""
        />
        <div class="align-items-center d-inline-flex">
          <div class="card-title">
            <span class="mx-2 my-0 d-block">
              <h1 class="fw-bold m-0 fs-1">{{auth()->user()->name}}</h1>
              <h3 class="fs-3">{{auth()->user()->role}}</h3>
              <a class="btn m-0 btn-outline-dark" href="/Profile/setting"
                >setting</a
              >
            </span>
          </div>
        </div>
      </div>

      <hr />

      <a
        class="btn btn-outline-dark w-100 mt-4"
        data-bs-toggle="collapse"
        href="#collapseUI"
        role="button"
        aria-expanded="false"
        aria-controls="collapseUI"
      >
        Note developer
      </a>
      <div class="collapse" id="collapseUI">
        <div class="card card-body">
          Aplikasi ini masih belum sempurna dan masih berpotensi munculnya suatu bug atau error, jika itu terjadi mohon hubungi developer untuk melaporkan bug.
        </div>
      </div>
    </div>
    <br />
</x-layout>