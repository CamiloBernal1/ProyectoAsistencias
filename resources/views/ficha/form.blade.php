
<label for="numFicha"> Numero de ficha </label>
    <input type="number" name="numFicha" value="{{ isset($ficha-> numFicha)?$ficha-> numFicha: '' }}" id="numFicha">
    <br><br>

<label for="cantAprendiz"> Cantidad de aprendices </label>
    <input type="number" name="cantAprendiz" value="{{ isset($ficha-> cantAprendiz)?$ficha-> cantAprendiz: '' }}" id="cantAprendiz">
    <br><br>

<label for="instuEncargado"> Instructor encargado </label>
    <input type="text" name="instuEncargado" value="{{ isset($ficha-> instuEncargado)?$ficha-> instuEncargado: '' }}" id="instuEncargado">
    <br><br>

<label for="idPrograma"> Programa </label>
    <input type="number" name="idPrograma" value="{{ isset($ficha-> idPrograma)?$ficha-> idPrograma: '' }}" id="idPrograma">
    <br><br>

    <input type="submit" value="Guardar">
    <br><br>

    <a href="{{ url('ficha/') }}">Regresar</a>