<div class="form-group">
  <label>{{ $drawer->getLabel() }}</label>
  <textarea
          @if($drawer->hasId())
          id="{{ $drawer->getId() }}"
          @endif
          class="form-control {{$errors->has($drawer->getName()) ? 'is-invalid' : ''}}"
          placeholder="{{ $drawer->getPlaceholder() }}"
          name="{{ $drawer->getName() }}"
          rows="3"
          @if($drawer->isReadOnly())
          readonly="true"
          @endif
  >{{ old($drawer->getName(), $drawer->getValue()) }}</textarea>
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
