<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-navbar>
    <x-navbar_link></x-navbar_link>
  </x-navbar>
      <br />
    <div class="pt-5 container">
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      <hr />
      <h2 class="text-center">Features</h2>
      <div class="container">
        <div class="container text-center">
          <div
            class="row w-100 d-flex align-items-center overflow-y-scroll justify-content-center"
            style="height: 100px"
          >
            <div class="col">
              <a
                class="text-decoration-none btn btn-primary p-0 my-2"
                style="width: 20%; min-width: 60px; max-width:90px"
                href="/Profile"
              >
                <img
                  class="object-fit-contain img-thumbnail rounded-2"
                  src="{{asset('resource/img/icon/person.svg')}}"
                  alt=""
                  width="100px"
                  height="100px"
                />
              </a>
            </div>
            <div class="col">
              <a
                class="text-decoration-none btn btn-primary p-0 my-2"
                style="width: 20%; min-width: 60px; max-width:90px"
                href="/Accounts"
              >
                <img
                  class="object-fit-contain img-thumbnail rounded-2"
                  src="{{asset('resource/img/icon/people.svg')}}"
                  alt=""
                  width="100px"
                  height="100px"
                />
              </a>
            </div>
            <div class="col">
              <a
                class="text-decoration-none btn btn-primary p-0 my-2"
                style="width: 20%; min-width: 60px; max-width:90px"
                href="/Dasboard/Final"
              >                
              <img
                  class="object-fit-contain img-thumbnail rounded-2"
                  src="{{asset('resource/img/icon/bar-chart-line.svg')}}"
                  alt=""
                  width="100px"
                  height="100px"
                />

              </a>
            </div>
            <div class="col">
              <a
                class="text-decoration-none btn btn-primary p-0 my-2"
                style="width: 20%; min-width: 60px; max-width:90px"
                href="Profile/setting"
              >
                <img
                  class="object-fit-contain img-thumbnail rounded-2"
                  src="{{asset('resource/img/icon/gear.svg')}}"
                  alt=""
                  width="100px"
                  height="100px"
                />
              </a>
            </div>
            <div class="col">
              <a
                class="text-decoration-none btn btn-primary p-0 my-2"
                style="width: 20%; min-width: 60px; max-width:90px"
                href="Home/Notification"
              >
                <img
                  class="object-fit-contain img-thumbnail rounded-2"
                  src="{{asset('resource/img/icon/bell.svg')}}"
                  alt=""
                  width="100px"
                  height="100px"
                />
              </a>
            </div>

          </div>
        </div>
      </div>
      <hr />
      <div class="container">
                  <a
            class="btn btn-outline-dark mt-1 w-100 text-start"
            data-bs-toggle="collapse"
            href="#collapseExample"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample"
          >
            Quick access
          </a>
          <div class="collapse mb-1" id="collapseExample">
            <div class="card card-body">
              
        <div class="card text-bg-success my-2">
          <div class="card-header">Featured</div>
          <div class="card-body d-flex justify-content-between">
            <div>
              <h5 class="card-title">View total data finance</h5>
              <p class="card-text">
                Note: hanya user dengan role teacher yang dapat menambahkan data
              </p>
            </div>
            <a href="/Dasboard/Final" class="btn btn-outline-light"
              >
              <img
                  class="object-fit-contain img-thumbnail rounded-2"
                  src="{{asset('resource/img/icon/bar-chart-line.svg')}}"
                  alt=""
                  width="100px"
                  height="100px"
                />
              </a
            >
          </div>
        </div>
        <div class="card text-bg-primary my-2">
          <div class="card-header">Featured</div>
          <div class="card-body d-flex justify-content-between">
            <div>
              <h5 class="card-title">View data finance</h5>
              <p class="card-text">
                Note: hanya user dengan role tresurer yang dapat menambahkan data
              </p>
            </div>
            <a href="/Dasboard" class="btn btn-outline-light"
              >
              <img
                  class="object-fit-contain img-thumbnail rounded-2"
                  src="{{asset('resource/img/icon/ui-checks.svg')}}"
                  alt=""
                  width="100px"
                  height="100px"
                />
            </a
            >
          </div>
        </div>
        <div class="card text-bg-warning my-2">
          <div class="card-header">Featured</div>
          <div class="card-body d-flex justify-content-between">
            <div>
              <h5 class="card-title">Edit data finance</h5>
              <p class="card-text">
                Note: hanya user dengan role teacher dan tresurer yang dapat meng-edit data
              </p>
            </div>
            <a href="/Dasboard/Edit" class="btn btn-outline-light"
              >
              <img
                  class="object-fit-contain img-thumbnail rounded-2"
                  src="{{asset('resource/img/icon/pen.svg')}}"
                  alt=""
                  width="100px"
                  height="100px"
                />
            </a
            >
          </div>
        </div>
      </div>
            </div>
          </div>
    </div>
    <div class="container">
      <footer
        class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"
      >
        <p class="col-md-4 mb-0 text-body-secondary">
          &copy; 2024 Uni-cash, Gfors corporation
        </p>

        <a
          href="/"
          class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
        >
          <img
            class="img-thumbnail object-fit-contain"
            width="50px"
            height="50px"
            src="{{asset('resource/img/unicashlogo.png')}}"
            alt=""
          />
        </a>
        <div class="foot">
          BY: Givaldi
        </div>
      </footer>
    </div>
    
    <script src="{{asset('resource/chart.js-4.4.4/package/dist/chart.umd.js')}}"></script>
    <script>
        const ctx = document.getElementById("myChart");
new Chart(ctx, {
  type: "line",
  data: {
    labels: [
        @foreach ($finances as $finance)
        "{{$finance->created_at}}",
        @endforeach
      ],
    datasets: [
      {
        label: "Value of RP",
        data: [
        @foreach ($finances as $finance)
        {{$finance->nominal}},
        @endforeach
          ],
        borderWidth: 1
      }
    ]
  },
  options: {
    scales: {
      x: {
        display: false
      },
      y: {
        beginAtZero: true
      }
    }
  }
});
    </script>
</x-layout>