<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-navbar>
    <a class="btn btn-outline-primary" href="/Home">Back</a>
  </x-navbar>
      <div class="d-flex justify-content-center vw-100 vh-100 align-items-center">
      <div
        class="container bg-light h-75 border border-secondary-subtle rounded m-2 mt-0 mb-0 overflow-scroll"
      >
        <div>
          <form class="d-flex py-3 bg-light sticky-top" role="search">
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
          <div class="overflow-y-scroll w-100">
            @foreach ($users as $user)
            <div
              class="p-1 px-3 bg-dark-subtle d-flex align-items-center justify-content-between rounded-3 mb-2"
            >
              <img
                src="{{asset('/resource/img/foto_profile/'.$user->foto_profile)}}"
                class="rounded-circle object-fit-cover"
                width="50px"
                height="50px"
                alt=""
              />
              <h6 class="p-2 pt-0 pb-0">{{$user->name}}</h6>
              <a href="/Accounts/Detail-account/{{$user->nik_name}}" class="btn btn-warning">View </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</x-layout>