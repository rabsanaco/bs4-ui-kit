<form
        method="{{ $drawer->getMethod() }}"
        action="{{ $drawer->getAction() }}"

>
@if($drawer->getMethod() != 'GET')
@csrf
@endif
@if($errors->form->count())
<div class="alert alert-danger">
    @foreach($errors->form->all() as $error)
      {!! $error !!}
    @endforeach
</div>
@endif
@foreach($drawer->getGraphics() as $graphic)
{!! $graphic->draw() !!}
@endforeach
</form>
