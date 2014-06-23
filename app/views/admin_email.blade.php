
<div class="row-fluid">
    <div class="span3" style="width: 20%">
      <img src="<?php echo $message->embed(asset('images/kiguma.png')); ?>">
    </div>
    <div class="span9"  style="width: 80%">
        <h2>Email From {{ $name }} <{{ $email }}></h2>
    </div>
</div>
<div class="row-fluid">
    <p class="lead" style="font-size: 20px; font-family: "Helvetica Neue Light", "HelveticaNeue-Light", "Helvetica Neue", Calibri, Helvetica, Arial, sans-serif">
        {{ $msg }}
    </p>
</div>
<div class="row-fluid">
    <footer>&copy; Kiguma Development Foundation {{ date('Y') }}</footer>
</div>
<h4></h4>