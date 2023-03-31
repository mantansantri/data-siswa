  <!doctype html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>

  <body>

      <div class="container">
          <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                  <svg class="bi me-2" width="40" height="32">
                      <use xlink:href="#bootstrap" />
                  </svg>
                  <span class="fs-4">Data Siswa</span>
              </a>

              <ul class="nav nav-pills">
                  <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="{{ route('siswa.create') }}" class="nav-link">Make Data</a></li>
              </ul>
          </header>
      </div>

      <div class="container">
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jurursan</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($siswa as $row)
                  <tr>
                      <th scope="row">-</th>
                      <th scope="col">{{ $row->nama }}</th>
                      <th scope="col">{{ $row->jurusan }}</th>
                      <th scope="col">{{ $row->kelas }}</th>
                      <td>
                          <a href="{{ route('siswa.edit', $row->id) }}" class="btn btn-warning">
                              Edit
                          </a>
                          <form action="{{ route('siswa.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>                                   
                            </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>

  </html>