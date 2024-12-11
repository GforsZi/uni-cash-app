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

              <button type="button" class="btn btn-outline-primary mx-1 py-0 px-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
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

      <h2>Section title</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Nominal</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($finances as $finance)
            <tr>
              <td>{{$finance->created_at}}</td>
              <td>{{$finance->keterangan}}</td>
              <td>{{$finance->nominal}}</td>
              <td>
                <form action="/Dasboard/Final/delete" method="post">
                  @csrf
                  <input type="text" hidden name="id" value="{{$finance->id}}">
                  <button type="submit" class="btn btn-danger py-0 px-2">delete</button>
                </form>
              </td>
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/Dasboard/Final/add" method="post">
      <div class="modal-body">
          @csrf
          <input type="text" hidden name="user_id" value="{{auth()->user()->id}}">
          <label for="keterangan" class="form-label">Keterangan</label>
          <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" autocomplete="off" placeholder="" name="keterangan" value="{{old('keterangan')}}" required/>
          <label for="note" class="form-label">Note <span class="text-body-secondary">(Optional)</span></label>
          <textarea type="text" name="note" class="form-control" id="note" >{{old('note')}}</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary mx-1">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
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