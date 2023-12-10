@extends('masterSirup')

@section('konten')
    <h2 class="text-center">Detail Sirup</h2><br>

    @foreach($sirup as $s)
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-sm-7">
                    <div class="card-group" style="height: 400px">
                        <div class="card bg-secondary">
                          <div class="card-body text-center">
                            {{-- konten card 1 --}}
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body d-flex flex-column justify-content-center">
                              <p class="card-text">Kode Sirup: {{ $s->kodesirup }}</p>
                              <p class="card-text">Merk: {{ $s->merksirup }}</p>
                              <p class="card-text">Stock: {{ $s->stocksirup }}</p>
                              <p class="card-text">Ketersediaan: {{ $s->tersedia }}</p>
                              <div class="text-center">
                                  <a href="/sirup" class="btn btn-primary">Kembali</a>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
