<div class="form-group">
  <label>{{ $drawer->getLabel() }}</label>
  <select
          class="form-control {{$errors->has($drawer->getName()) ? 'is-invalid' : ''}}"
          placeholder="{{ $drawer->getPlaceholder() }}"
          name="{{ $drawer->getName() }}"
          value="{{ old($drawer->getName(), $drawer->getValue()) }}"
          @if($drawer->isDisabled())
          disabled=""
          @endif
          id="{{ $drawer->getId() }}"
  >
    @if(!is_string($drawer->getOptions()))
      @foreach($drawer->getOptions() as $o)
        @php
          $oid = null;
        $oname = null;
        if(isset($o->id)){
          $oid = $o->id;
        }else if(isset($o['id'])){
          $oid = $o['id'];
        }
        if(isset($o->name)){
          $oname = $o->name;
        }else if(isset($o['name'])){
          $oname = $o['name'];
        }
        @endphp
        <option value="{{ $oid }}"
                @if(!is_null($oid) && old($drawer->getName(), $drawer->getValue()) == $oid) selected="" @endif >{{ $oname }}</option>
      @endforeach
    @endif
  </select>
  @if(!empty($drawer->getDescription()))
    <small class="form-text text-muted">
      {!! $drawer->getDescription() !!}
    </small>
  @endif
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
