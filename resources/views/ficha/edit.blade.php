Form de editar ficha

<form action="{{ url('/ficha/'.$ficha->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('ficha.form');

</form>