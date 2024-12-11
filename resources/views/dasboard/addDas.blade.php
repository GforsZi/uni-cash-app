<x-layout>
    <x-slot:tittle></x-slot:tittle>
        <main>
      <div class="container">
        <main>
          <div class="py-5 text-center">
            <a href="/Dasboard">
            <img
              class="d-block mx-auto mb-4 object-fit-contain"
              src="{{asset('resource/img/unicashlogo.png')}}"
              alt=""
              width="72"
              height="57"
            />
            </a>
            <h2>Add data</h2>
          </div>

          <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
              <h1>Pastikan menambahkan data dengan benar dan teliti</h1>
            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Billing address</h4>
              <form action="/Dasboard/Add" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input
                      type="text"
                      class="form-control @error('keterangan') is-invalid @enderror"
                      id="keterangan"
                      autocomplete="off"
                      placeholder=""
                      name="keterangan"
                      value="{{old('keterangan')}}"
                      required
                    />
          @error('keterangan')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
                  </div>

                  <div class="col-sm-6">
                    <label for="nominal" class="form-label">Nominal</label>
                    <input
                      type="number"
                      class="form-control @error('nominal') is-invalid @enderror"
                      id="nominal"
                      name="nominal"
                      autocomplete="off"
                      placeholder=""
                      value="{{old('nominal')}}"
                      required
                    />
          @error('nominal')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
                  </div>

                  <div class="col-12">
                    <select class="form-select" aria-label="Default select example" required name="type">
                    <option selected value="plus">( + )</option>
                    <option value="minus">( - )</option>
                  </select>

                </div>
                  <div class="col-12">
                    <label for="note" class="form-label"
                      >Note
                      <span class="text-body-secondary">(Optional)</span></label
                    >
                    <textarea
                      type="text"
                      name="note"
                      class="form-control"
                      id="note"
                    >{{old('note')}}</textarea>
                  </div>
                </div>

                <hr class="my-4" />

                <button class="w-100 btn btn-primary btn-lg" type="submit"
                  >Submit</button
                >
              </form>
            </div>
          </div>
        </main>
        <br />
      </div>
    </main>
</x-layout>