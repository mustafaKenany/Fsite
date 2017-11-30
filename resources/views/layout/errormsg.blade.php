@if($errors->any())



<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading"></h4>
  <p>
  <ul>
    @foreach($errors->all() as $e)
        <li>{{$e}}</li>
    @endforeach
</ul>
  </p>
  <p class="mb-0"></p>
</div>
@endif