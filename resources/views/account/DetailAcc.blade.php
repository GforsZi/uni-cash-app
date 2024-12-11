<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-navbar>
    <a class="btn btn-outline-primary" href="/Accounts">Back</a>
  </x-navbar>
      <div class="container mx-auto pt-4">
        <br>
      <div class="w-100">
        <img
          src="{{asset('/resource/img/foto_profile/'.$users->foto_profile)}}"
          class="mt-4 d-inline-block rounded-circle object-fit-cover"
          width="90px"
          height="90px"
          alt=""
        />
        <div class="align-items-center d-inline-flex">
          <div class="card-title">
            <span class="mx-2 my-0 d-block">
              <h1 class="fw-bold m-0 fs-1">{{$users->name}}</h1>
              <h3 class="fs-3">{{$users->nik_name}}</h3>
              <h3 class="fs-3">{{$users->role}}</h3>
            </span>
          </div>
        </div>
      </div>

      <hr />
    </div>
    <br />
</x-layout>