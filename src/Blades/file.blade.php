<div class="form-group">
  <label>{{ $drawer->getLabel() }}</label>
  <input
          type="file"
          class="form-control {{$errors->has($drawer->getName()) ? 'is-invalid' : ''}}"
          placeholder="{{ $drawer->getPlaceholder() }}"
          name="{{ $drawer->getName() }}"
  >
  @if($errors->has($drawer->getName()))
  <div class="invalid-feedback">
    @if($errors->get($drawer->getName())->count() > 1)
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
