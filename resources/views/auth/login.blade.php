<div class="row justify-content-center"style="text center";>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <h6 class="card-subtitle mb-2 text-center text-muted">Isi dengan lengkap</h6>
            <form action="/authenticate" method="post" class="user">
                @csrf
                <div class="form-group mt-3">
                   <input type="text" name="nama" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan nama anda" value="{{ old('nama') }}">
                </div>
                <div class="form-group mt-3">
             	 <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{ old('password') }}">
                </div>
               
                <div class="form-group mt-3 text-center">
     			  <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>