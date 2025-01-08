<h1>My Controller</h1>
<h1><?php echo $myvalue; ?></h1>
<h1>{{ $myvalue; }}</h1>
<form mathod="port" 
      action="{{ url ('/mycontroller') }} ">
       @csrf
      <input type="text" name="myinput">
      <button type="submit">submit</button>
</from>