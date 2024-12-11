    <nav class="navbar position-fixed top-0 end-0 start-0 z-3 bg-light">
      <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="/Home">
          <img
            src="{{asset('resource/img/unicashlogo.png')}}"
            alt="..."
            width="30"
            height="30"
            class="d-inline-block object-fit-cover rounded-circle align-text-top"
          />
          Uni-cash
        </a>
        {{$slot}}
      </div>
    </nav>