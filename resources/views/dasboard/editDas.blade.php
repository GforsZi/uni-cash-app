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
                  <a href="/Dasboard" class="btn btn-sm btn-outline-primary">back</a>
                </div>
              </div>
            </div>
          </div>

          <h2>Section title</h2>
      @if(session()->has("success"))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <h5>Success: {{session("success")}}</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      @endif
      @if(session()->has("error"))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <h5>Success: {{session("error")}}</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      @endif
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Tanggal</th>
                  <th scope="col">keterangan</th>
                  <th scope="col">nominal</th>
                  <th scope="col">utility</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($finances as $finance)
                <tr>
                  <td>{{$finance->created_at}}</td>
                  <td>{{$finance->keterangan}}</td>
                  @if ($finance->type == "plus")
                  <td>+{{ $finance->nominal}}</td>
                  @else
                  <td>-{{ $finance->nominal}}</td>
                  @endif
                  <td>
                    <div class="d-flex">
                      
                      <form action="/Dasboard/Edit/delete" method="post">
                        @csrf
                        <input type="text" hidden name="id" value="{{$finance->id}}">
                      <button type="submit" class="btn btn-danger py-0 px-2">delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </main>
</x-header-das>

</x-layout>