<form action="{{ url('/aprendiz/'.$aprendiz->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('aprendiz.form');

</form>