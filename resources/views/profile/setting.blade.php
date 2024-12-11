<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-navbar>
    <a class="btn btn-outline-primary" href="/Profile">Back</a>
  </x-navbar>
      <br />
    <div class="container mx-auto pt-5">
      <div class="w-100 text-center">
        <img
        class="rounded-circle object-fit-cover"
          src="{{asset('/resource/img/foto_profile/'.auth()->user()->foto_profile)}}"
          width="150px"
          height="150px"
          alt=""
        />
      </div>
      <div class="my-2">
        <h5 class="card-title text-center">{{auth()->user()->name}}</h5>
      </div>
        @if(session()->has("success"))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <h5>Success: {{session("success")}}</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      @endif
      @if(session()->has("error"))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <h5>Success: {{session("error")}}</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      @endif
      <div class="card-body">
        <hr />
        <p class="text-center fw-bold mb-2">Setting</p>
        <div class="container w-75">
          <a
            class="btn btn-outline-dark mt-1 w-100 text-start"
            data-bs-toggle="collapse"
            href="#collapseExample"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample"
          >
            Account
          </a>
          <div class="collapse mb-1" id="collapseExample">
            <div class="card card-body">
              <form action="/Profile/setting/deleteNotif" method="post">
              @csrf
              <input type="text" hidden name="user_id" value="{{auth()->user()->id}}">
              <button type="submit" class="btn btn-danger my-1 w-100">delete notif</button>
              </form>
            </div>
          </div>
          <div class="row d-block mt-1">
            <form action="/Profile/Logout" method="post" class="col mb-1">
              @csrf
              <button class="btn btn-outline-dark w-100" type="submit">
                <p class="text-start m-0 p-0">Log-out</p>
              </button>
            </form>
          </div>
        </div>
        <hr />
      </div>
    </div>
</x-layout>