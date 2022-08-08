aqui se crea un Aprendiz

<form action="{{ url('/aprendiz') }}" method="post" enctype="multipart/form-data">
@csrf
@include('aprendiz.form');

</form>