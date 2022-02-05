<div class="form-group mt-4">
    <label for="">{{$title}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" id="" aria-describedby="" placeholder="" 
    value="@php
        if($name !== "password" && $name !== "password_confirmation" && old($name) !== "")
        echo old($name)
        @endphp"
    >
    <span class="text-danger">
        @php
            echo $errors->first($name)
        @endphp
    </span>

</div>