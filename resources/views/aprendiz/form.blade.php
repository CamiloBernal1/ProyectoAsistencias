<label for="nombreAprend"> Nombre del Aprendiz </label>
    <input type="text" name="nombreAprend" value="{{ isset($aprendiz-> nombreAprend)?$aprendiz-> nombreAprend: '' }}" id="nombreAprend">
<br><br>

<label for="apelliAprend"> Apellido del Aprendiz </label>
    <input type="text" name="apelliAprend" value="{{ isset($aprendiz-> apelliAprend)?$aprendiz-> apelliAprend: '' }}" id="apelliAprend">
<br><br>

<label for="tipoDoc"> Tipo de documento </label>
    <input type="text" name="tipoDoc" value="{{ isset($aprendiz-> tipoDoc)?$aprendiz-> tipoDoc: '' }}" id="tipoDoc">
<br><br>

<label for="numDoc"> Número de documento </label>
    <input type="number" name="numDoc" value="{{ isset($aprendiz-> numDoc)?$aprendiz-> numDoc: '' }}" id="numDoc">
<br><br>

<label for="correoMisena"> Correo Misena </label>
    <input type="text" name="correoMisena" value="{{ isset($aprendiz-> correoMisena)?$aprendiz-> correoMisena: '' }}" id="correoMisena">
<br><br>

<label for="correoAprend"> Correo personal </label>
    <input type="text" name="correoAprend" value="{{ isset($aprendiz-> correoAprend)?$aprendiz-> correoAprend: '' }}" id="correoAprend">
<br><br>

<label for="telefonoAprend"> Telefono </label>
    <input type="text" name="telefonoAprend" value="{{ isset($aprendiz-> telefonoAprend)?$aprendiz-> telefonoAprend: '' }}" id="telefonoAprend">
<br><br>

<label for="idFicha"> Ficha </label>
    <input type="number" name="idFicha" value="{{ isset($aprendiz-> idFicha)?$aprendiz-> idFicha: '' }}" id="idFicha">
<br><br>

<input type="submit" value="Guardar">
<br><br>

<a href="{{ url('aprendiz/') }}">Regresar</a>
