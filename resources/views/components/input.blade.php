@props(['type' ,'name', 'id', 'label'])


<div class="ui-input-box">
  <label for={{ $id }} class="ui-input-label">{{ $label }}</label>

  <input {{ $attributes->merge(['type'=> $type, 'name'=> $name, 'id'=> $id, 'placeholder'=> $label ,'value'=> old($name) ,'class' => 'ui-input']) }} />

  @error($name)
    <span role="alert" class="ui-input-error">
      {{ $message }}
    </span>
  @enderror

</div>
