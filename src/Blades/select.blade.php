<div class="form-group">
  <label>{{ $drawer->getLabel() }}</label>
  <select
          class="form-control {{$errors->has($drawer->getName()) ? 'is-invalid' : ''}}"
          placeholder="{{ $drawer->getPlaceholder() }}"
          name="{{ $drawer->getName() }}"
          value="{{ old($drawer->getName(), $drawer->getValue()) }}"
  >
    @foreach($drawer->getOptions() as $o)
      <option value="{{ $o->id }}" @if(old($drawer->getName(), $drawer->getValue()) == $o->id) selected="" @endif >{{ $o->name }}</option>
    @endforeach
  </select>
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
