aqui se crea un Aprendiz
<br><br>
<form action="{{ url('/aprendiz') }}" method="post" enctype="multipart/form-data">
@csrf
@include('aprendiz.form');

</form>