@include('layouts.header')

<div class="container">
<form action="{{url('/')}}/" method="post">
@csrf
    
    <x-input type="text" title="Name" name="name"/>
    <x-input type="email" title="Email" name="email"/>
    <x-input type="password" title="Password" name="password"/>
    <x-input type="password" title="Confirm Password" name="password_confirmation"/>
  
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
</div>

@include('layouts.footer')