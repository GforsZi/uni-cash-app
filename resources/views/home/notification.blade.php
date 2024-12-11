<x-layout>
  <x-slot:tittle></x-slot:tittle>
  <x-navbar>
    <div>
<a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Send
</a>
    <a class="btn btn-outline-primary" href="/Home">Back</a>
    </div>
  </x-navbar>
      <br />
    <div class="container mt-2 pt-5 justify-content-center">
      @if(session()->has("success"))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <h5>Success: {{session("success")}}</h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
      @endif
      @foreach ($notifications as $notification)
      <div
        class="bg-secondary-subtle my-2 rounded-3 pt-1 d-flex w-100 "
      >
        <div class="d-flex justify-content-between h-100 w-100 align-items-center">
          <img
            src="{{asset('/resource/img/foto_profile/'.$notification->user->foto_profile)}}"
            width="70px"
            height="70px"
            class="p-2 rounded-circle object-fit-cover"
            alt=""
          />
          <div class="d-flex h-100 align-items-center w-100 justify-content-between">
            
          <div class="ms-3 pb-2">
            <h4 class="m-0">{{$notification->user->nik_name}}</h4>
            <div class="collapse" id="{{$notification->id}}">
              <div class="card card-body">
              {{$notification->massage}}
              </div>
          </div>
        </div>
        <div class="d-flex h-100 p-2 align-items-center">
          <a class="btn text-end btn-warning mx-0" data-bs-toggle="collapse" href="#{{$notification->id}}" role="button" aria-expanded="false" aria-controls="{{$notification->id}}">More</a>
        </div>
          </div>
      </div>
    </div>
      @endforeach
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form action="/Home/Notification" method="post" class="modal-content">
      @csrf
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Global notification</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-12">
                    <select class="form-select" aria-label="Default select example" required name="massage_to">
                    <option value="teacher">Teacher</option>
                    <option value="treasurer">Tresurer</option>
                    <option selected value="student">Student</option>
                  </select>

                </div>
                  <div class="col-12">
                    <label for="massage" class="form-label"
                      >Pesan</label>
                    <textarea
                      type="text"
                      name="massage"
                      class="form-control"
                      id="massage"
                    >{{old('massage')}}</textarea>
                  </div>
                </div>
                      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
      </div>

    </form>
  </div>
</x-layout>