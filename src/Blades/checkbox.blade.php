<div class="form-check">
  <input
          type="checkbox"
          class="{{ $drawer->hasClasses() ? $drawer->getClasses() : 'form-check-input' }} {{$errors->has($drawer->getName()) ? 'is-invalid' : ''}}"
          name="{{ $drawer->getName() }}"
          id="{{ $uuid = uniqid() }}"
          value="{{ old($drawer->getName(), $drawer->getValue()) }}"
          @if($drawer->isReadOnly())
          readonly="true"
          @endif
          @if($drawer->isChecked())
          checked="true"
          @endif
  >
  <label class="form-check-label" for="{{ $uuid }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $drawer->getLabel() }}</label>

  @if(!empty($drawer->getDescription()))
    <small class="form-text text-muted">
      {!! $drawer->getDescription() !!}
    </small>
  @endif
  @if($errors->has($drawer->getName()))
    <div class="invalid-feedback">
      @if($errors->get($drawer->getName()) > 1)
        <ul>
          @foreach($errors->get($drawer->getName()) as $error)
            <li>{!! $error !!}</li>
          @endforeach
        </ul>
      @else
        {!! $errors->first($drawer->getName()) !!}
      @endif
    </div>
  @endif
</div>
