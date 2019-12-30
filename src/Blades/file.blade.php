<div class="form-group">
  <label>{{ $drawer->getLabel() }} @if($drawer->getValue()) <a href="{{ $drawer->getValue() }}" target="_blank">{{ __('messages.view') }}</a> @endif</label>
  <input
          type="file"
          class="form-control {{$errors->has($drawer->getName()) ? 'is-invalid' : ''}}"
          placeholder="{{ $drawer->getPlaceholder() }}"
          name="{{ $drawer->getName() }}"
          @if($drawer->isReadOnly())
          readonly="true"
          disabled="true"
          @endif
  >
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
