<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-header-das>
    

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div>
            <div
              class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom"
            >
              <h1 class="h2">Dashboard</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                  <button
                    class="btn btn-sm btn-outline-primary"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseExample"
                    aria-expanded="false"
                    aria-controls="collapseExample"
                  >
                    more
                  </button>
                  <a href="/Home" class="btn btn-sm btn-outline-primary">
                    Back
                  </a>
                </div>
              </div>
            </div>
            <div class="collapse mb-2" id="collapseExample">
              <div class="card card-body">
                <div class="container">
                  <div class="d-flex overflow-x-scroll">
                    <a
                      href="/Dasboard/Add"
                      class="btn btn-outline-primary px-2 py-0 mx-1"
                      >Add</a
                    >
                    <a
                      href="/Dasboard/Edit"
                      class="btn btn-outline-primary px-2 py-0 mx-1"
                      >Edit</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <canvas
            class="my-4 w-100"
            id="myChart"
            width="900"
            height="380"
          ></canvas>
        @if(session()->has("success"))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <h5>Success: {{session("success")}}</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      @endif

          <h2>Section title</h2>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Tanggal</th>
                  <th scope="col">By</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Nominal</th>
                  <th scope="col">Note</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($finances as $finance)
                <tr>
                  <td>{{$finance->created_at}}</td>
                  <td>{{$finance->user->nik_name}}</td>
                  <td>{{$finance->keterangan}}</td>
                  @if ($finance->type == "plus")
                  <td>+{{ $finance->nominal}}</td>
                  @else
                  <td>-{{ $finance->nominal}}</td>
                  @endif

                  <td>{{$finance->note}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </main>
  </x-header-das>

    
        <script src="{{asset('resource/chart.js-4.4.4/package/dist/chart.umd.js')}}"></script>
    <script>
        const ctx = document.getElementById("myChart");
new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
        @foreach ($finances as $finance)
        "{{$finance->created_at}}",
        @endforeach
      ],
    datasets: [
      {
        label: "Values of RP",
        data: [
        @foreach ($finances as $finance)
        @if ($finance->type == "plus")
        {{"+" . $finance->nominal}},
        @else
        {{"-" . $finance->nominal}},
        @endif
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