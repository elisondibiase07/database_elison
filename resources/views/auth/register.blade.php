<x-layout>
  <x-header title="Registrati"/>
  
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-6"></div>
      
      <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
          <label class="form-label">Nome Utente</label>
          <input type="text" class="form-control" name="name">
        </div>
        
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" name="email">
        </div>
        
        
        <div class="mb-3">
          <label class="form-label">Inserisci la Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        
        <div class="mb-3">
          <label class="form-label">Conferma la Password</label>
          <input type="password" class="form-control" name="password_confirmation">
        </div>
        
        <button type="submit" class="btn btn-danger">Submit</button>
      </form>
    </div>
  </div>
</x-layout>