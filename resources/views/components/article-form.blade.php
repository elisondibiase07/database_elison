<form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nome Articolo</label>
      <input type="text" class="form-control" name="title">
    </div>
  

      <div class="mb-3">Descrizione Articolo</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control" ></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Copertina</label>
        <input type="file" class="form-control" name="img">
      </div>

      <div class="mb-3">
        <label class="form-label">Autore</label>
        <input type="text" class="form-control" name="author">
      </div>
    <button type="submit" class="btn btn-danger">Submit</button>
  </form>