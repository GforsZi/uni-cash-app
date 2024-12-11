<x-layout>
  <x-slot:tittle></x-slot:tittle>
      <main
      class="container vh-100 align-items-center justify-content-center d-flex w-100 mx-auto"
    >
      <form style="width: 300px" action="/Login" method="post">
        @csrf
        <img
          class="mb-4 object-fit-cover"
          src="{{asset('resource/img/unicashlogo.png')}}"
          alt=""
          width="72"
          height="60"
        />
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      @if(session()->has("errorLogin"))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <h5>Error: {{session("errorLogin")}}</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      @endif
      @if(session()->has("success"))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <h5>Success: {{session("success")}}</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      @endif

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="nik_name"
            value="{{old('nik_name')}}"
            name="nik_name"
            placeholder="Username"
            required="on"
            autocomplete="off"
          />
          <label for="nik_name">nik name</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            placeholder="Password"
            required="on"
            autocomplete="off"
          />
          <label for="password">Password</label>
        </div>

        <button class="btn mt-3 btn-primary w-100 py-2" type="submit">
          Sign in
        </button>
        <p class="mb-3 text-body-secondary">
          Don't have account? <a href="/Register">Sign-up now!</a>
        </p>
      </form>
    </main>
  
</x-layout>