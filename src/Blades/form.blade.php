<form
        @if(in_array($drawer->getMethod(), ['GET', 'POST']))
        method="{{ $drawer->getMethod() }}"
        @else
        method="POST"
        @endif
        action="{{ $drawer->getAction() }}"
        enctype="multipart/form-data"

>
  @if($drawer->getMethod() != 'GET')
    @csrf
  @endif
  @if(!in_array($drawer->getMethod(), ['GET', 'POST']))
    @method($drawer->getMethod())
  @endif
  @if($drawer->showErrors())
    @if($errors->count())
      <div class="alert alert-danger">
        <h3>{{__('messages.server_error')}}!</h3>
        <ul>
          @foreach($errors->all() as $error)
            <li>{!! $error !!}</li>
          @endforeach
        </ul>
      </div>
    @endif
    @if($errors->form->count())
      <div class="alert alert-danger">
        @foreach($errors->form->all() as $error)
          {!! $error !!}
        @endforeach
      </div>
    @endif
  @endif
  @foreach($drawer->getGraphics() as $graphic)
    {!! $graphic->draw() !!}
  @endforeach
</form>
