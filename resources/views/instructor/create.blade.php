aqui va el formulario instructor
<br><br>
<form action="{{ url('/instructor') }}" method='post' enctype="multipart/form-data"> 
@csrf
@include('instructor.form')
</form>