<div class="col-8 col-sm-6 col-md-4 col-lg-3 mb-4">
  <a class="text-decoration-none text-body" href="#">
    <div class="card h-100 text-center border border-primary">
      <img src="{{ url(Storage::url('random.jpg')) }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Hand Bouquet</h5>
      </div>

      @auth
      @else
        <div class="card-footer container-fluid">
          <div class="row">
            <div class="col m-1">
              <a class="btn btn-danger" href="#1">
                Delete Category
              </a>
            </div>
            <div class="col m-1">
              <a class="btn btn-primary" href="#2">
                Update Category
              </a>
            </div>
          </div>
        </div>
      @endauth
    </div>
  </a>
</div>
