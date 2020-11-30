@extends('plantilla.index')
@section('contenido')
    <div>
        <form action="{{route('guardarregistro')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4  shadow">
                    <div class="card-header " style="background-color: #27AE60">
                        <h4 class="text-center text-light">DATOS PERSONALES</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control border-primary  @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" >
                            @error('nombre')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" class="form-control border-primary @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}">
                            @error('apellido')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Identificación</label>
                            <input type="number" class="form-control border-primary @error('identificacion') is-invalid @enderror" name="identificacion" value="{{ old('identificacion') }}">
                            @error('identificacion')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Fecha De Nacimiento</label>
                            <input type="date" class="form-control border-primary @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
                            @error('fecha_nacimiento')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Número Telefonico</label>
                            <input type="number" class="form-control border-primary @error('numero_telefonico') is-invalid @enderror" name="numero_telefonico" value="{{ old('numero_telefonico') }}">
                            @error('numero_telefonico')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pais</label>
                            <select class="form-control border-primary @error('pais') is-invalid @enderror" name="pais" >
                                <option value="">Seleccione su Pais</option>
                                <option value="1">
                                    Afganistan                        </option>
                                <option value="2">
                                    Albania                        </option>
                                <option value="3">
                                    Alemania                        </option>
                                <option value="4">
                                    American Samoa                        </option>
                                <option value="5">
                                    Andorra                        </option>
                                <option value="6">
                                    Angola                        </option>
                                <option value="7">
                                    Anguila                        </option>
                                <option value="10">
                                    Antartida                        </option>
                                <option value="8">
                                    Antigua and Barbuda                        </option>
                                <option value="9">
                                    Antillas Holandesas                        </option>
                                <option value="11">
                                    Arabia Saudita                        </option>
                                <option value="12">
                                    Argelia                        </option>
                                <option value="13">
                                    Argentina                        </option>
                                <option value="14">
                                    Armenia                        </option>
                                <option value="15">
                                    Aruba                        </option>
                                <option value="17">
                                    Australia                        </option>
                                <option value="18">
                                    Austria                        </option>
                                <option value="19">
                                    Azerbaijan                        </option>
                                <option value="20">
                                    Bahamas                        </option>
                                <option value="21">
                                    Bahrein                        </option>
                                <option value="22">
                                    Bangladesh                        </option>
                                <option value="23">
                                    Barbados                        </option>
                                <option value="39">
                                    Bélgica                        </option>
                                <option value="24">
                                    Belice                        </option>
                                <option value="25">
                                    Benin                        </option>
                                <option value="26">
                                    Bermuda                        </option>
                                <option value="27">
                                    Bielorrusia                        </option>
                                <option value="28">
                                    Bolivia                        </option>
                                <option value="29">
                                    Bosnia y Herzegovina                        </option>
                                <option value="30">
                                    Botsuana                        </option>
                                <option value="31">
                                    Bouvet Island                        </option>
                                <option value="32">
                                    Brasil                        </option>
                                <option value="33">
                                    British Indian Ocean Territory                        </option>
                                <option value="34">
                                    Brunei Darussalam                        </option>
                                <option value="35">
                                    Bulgaria                        </option>
                                <option value="36">
                                    Burkina Faso                        </option>
                                <option value="37">
                                    Burundi                        </option>
                                <option value="38">
                                    Bután                        </option>
                                <option value="40">
                                    Cabo Verda                        </option>
                                <option value="41">
                                    Camboya                        </option>
                                <option value="42">
                                    Camerún                        </option>
                                <option value="44">
                                    Canadá                        </option>
                                <option value="45">
                                    Chad                        </option>
                                <option value="46">
                                    Chile                        </option>
                                <option value="47">
                                    China                        </option>
                                <option value="48">
                                    Chipre                        </option>
                                <option value="49">
                                    Colombia                        </option>
                                <option value="50">
                                    Comores                        </option>
                                <option value="51">
                                    Congo                        </option>
                                <option value="52">
                                    Corea del Norte                        </option>
                                <option value="53">
                                    Corea del Sur                        </option>
                                <option value="54">
                                    Costa Rica                        </option>
                                <option value="55">
                                    Cote D Ivoire                        </option>
                                <option value="56">
                                    Croacia                        </option>
                                <option value="57">
                                    Cuba                        </option>
                                <option value="58">
                                    Dinamarca                        </option>
                                <option value="59">
                                    Djibouti                        </option>
                                <option value="60">
                                    Dominica                        </option>
                                <option value="61">
                                    East Timor                        </option>
                                <option value="62">
                                    Ecuador                        </option>
                                <option value="63">
                                    Egipto                        </option>
                                <option value="64">
                                    El Salvador                        </option>
                                <option value="65">
                                    El Vaticano                        </option>
                                <option value="66">
                                    Emiratos Arabes Unidos                        </option>
                                <option value="67">
                                    Eritrea                        </option>
                                <option value="68">
                                    Eslovaquia                        </option>
                                <option value="69">
                                    Eslovenia                        </option>
                                <option value="70">
                                    Españaa                        </option>
                                <option value="71">
                                    Estados Unidos                        </option>
                                <option value="72">
                                    Estonia                        </option>
                                <option value="73">
                                    Etiopía                        </option>
                                <option value="74">
                                    Fiji                        </option>
                                <option value="75">
                                    Filipinas                        </option>
                                <option value="76">
                                    Finlandia                        </option>
                                <option value="77">
                                    Francia                        </option>
                                <option value="78">
                                    French Guiana                        </option>
                                <option value="79">
                                    French Polynesia                        </option>
                                <option value="80">
                                    French Southern Territories                        </option>
                                <option value="81">
                                    Gabán                        </option>
                                <option value="82">
                                    Gambia                        </option>
                                <option value="83">
                                    Georgia                        </option>
                                <option value="84">
                                    Ghana                        </option>
                                <option value="85">
                                    Gibraltar                        </option>
                                <option value="86">
                                    Granada                        </option>
                                <option value="87">
                                    Grecia                        </option>
                                <option value="88">
                                    Groenlandia                        </option>
                                <option value="89">
                                    Guadalupe                        </option>
                                <option value="90">
                                    Guam                        </option>
                                <option value="91">
                                    Guatemala                        </option>
                                <option value="92">
                                    Guinea                        </option>
                                <option value="93">
                                    Guinea Ecuatorial                        </option>
                                <option value="94">
                                    Guinea-Bissau                        </option>
                                <option value="95">
                                    Guyana                        </option>
                                <option value="96">
                                    Haití                        </option>
                                <option value="97">
                                    Heard Island and McDonald Isla                        </option>
                                <option value="98">
                                    Holanda                        </option>
                                <option value="99">
                                    Honduras                        </option>
                                <option value="100">
                                    Hong Kong                        </option>
                                <option value="101">
                                    Hungría                        </option>
                                <option value="102">
                                    India                        </option>
                                <option value="103">
                                    Indonesia                        </option>
                                <option value="104">
                                    Iraq                        </option>
                                <option value="105">
                                    Irlanda                        </option>
                                <option value="106">
                                    Isalas Cocos                        </option>
                                <option value="107">
                                    Isla Christmas                        </option>
                                <option value="108">
                                    Islandia                        </option>
                                <option value="109">
                                    Islas Caimán                        </option>
                                <option value="110">
                                    Islas Cook                        </option>
                                <option value="111">
                                    Islas Feroe                        </option>
                                <option value="112">
                                    Islas Malvinas                        </option>
                                <option value="113">
                                    Islas Marshall                        </option>
                                <option value="114">
                                    Islas Mauricio                        </option>
                                <option value="115">
                                    Islas Salomón                        </option>
                                <option value="116">
                                    Islas Sandwhich                        </option>
                                <option value="117">
                                    Islas Turks y Caicos                        </option>
                                <option value="118">
                                    Islas Wallis y Futuna                        </option>
                                <option value="119">
                                    Israel                        </option>
                                <option value="120">
                                    Italia                        </option>
                                <option value="121">
                                    Jamaica                        </option>
                                <option value="122">
                                    Japón                        </option>
                                <option value="123">
                                    Jordania                        </option>
                                <option value="124">
                                    Kazakhstán                        </option>
                                <option value="125">
                                    Kenia                        </option>
                                <option value="126">
                                    Kiribati                        </option>
                                <option value="127">
                                    Kuwait                        </option>
                                <option value="128">
                                    Kyrgyzstán                        </option>
                                <option value="129">
                                    Laos                        </option>
                                <option value="130">
                                    Latvia                        </option>
                                <option value="137">
                                    Líbano                        </option>
                                <option value="131">
                                    Lesoto                        </option>
                                <option value="132">
                                    Liberia                        </option>
                                <option value="133">
                                    Libia                        </option>
                                <option value="134">
                                    Liechtenstein                        </option>
                                <option value="135">
                                    Lituania                        </option>
                                <option value="136">
                                    Luxemburgo                        </option>
                                <option value="156">
                                    M?xico                        </option>
                                <option value="138">
                                    Macao                        </option>
                                <option value="139">
                                    Macedonia                        </option>
                                <option value="140">
                                    Madagascar                        </option>
                                <option value="141">
                                    Malasia                        </option>
                                <option value="142">
                                    Malaui                        </option>
                                <option value="145">
                                    Malí                        </option>
                                <option value="143">
                                    Maldivas                        </option>
                                <option value="144">
                                    Malta                        </option>
                                <option value="146">
                                    Marruecos                        </option>
                                <option value="147">
                                    Martinique                        </option>
                                <option value="148">
                                    Mauritania                        </option>
                                <option value="149">
                                    Mayotte                        </option>
                                <option value="157">
                                    Mónaco                        </option>
                                <option value="150">
                                    Micronesia                        </option>
                                <option value="151">
                                    Moldavia                        </option>
                                <option value="152">
                                    Mongolia                        </option>
                                <option value="153">
                                    Montserrat                        </option>
                                <option value="154">
                                    Mozambique                        </option>
                                <option value="155">
                                    Myanmar                        </option>
                                <option value="158">
                                    Namibia                        </option>
                                <option value="159">
                                    Nauru                        </option>
                                <option value="169">
                                    Níger                        </option>
                                <option value="160">
                                    Nepal                        </option>
                                <option value="161">
                                    Nicaragua                        </option>
                                <option value="162">
                                    Nigeria                        </option>
                                <option value="163">
                                    Niue                        </option>
                                <option value="164">
                                    Norfolk Island                        </option>
                                <option value="165">
                                    Northern Mariana Islands                        </option>
                                <option value="166">
                                    Noruega                        </option>
                                <option value="167">
                                    Nueva Caledonia                        </option>
                                <option value="168">
                                    Nueva Zelanda                        </option>
                                <option value="170">
                                    Omán                        </option>
                                <option value="171">
                                    Pakistán                        </option>
                                <option value="172">
                                    Palau                        </option>
                                <option value="173">
                                    Palestinian Territory                        </option>
                                <option value="174">
                                    Panamá                        </option>
                                <option value="175">
                                    Papía Nueva Guinea                        </option>
                                <option value="176">
                                    Paraguay                        </option>
                                <option value="177">
                                    Perú                        </option>
                                <option value="178">
                                    Pitcairn                        </option>
                                <option value="179">
                                    Polonia                        </option>
                                <option value="180">
                                    Portugal                        </option>
                                <option value="181">
                                    Puerto Rico                        </option>
                                <option value="182">
                                    Qatar                        </option>
                                <option value="183">
                                    Reino Unido                        </option>
                                <option value="184">
                                    República Centroafricana                        </option>
                                <option value="185">
                                    República Checa                        </option>
                                <option value="186">
                                    República Democr?tica del Con                        </option>
                                <option value="187">
                                    República Dominicana                        </option>
                                <option value="188">
                                    República Isl?mica de Ir?n                        </option>
                                <option value="189">
                                    Ruanda                        </option>
                                <option value="190">
                                    Rumania                        </option>
                                <option value="191">
                                    Rusian                        </option>
                                <option value="192">
                                    Saint Kitts and Nevis                        </option>
                                <option value="193">
                                    Saint Pierre y Miquelon                        </option>
                                <option value="194">
                                    Samoa                        </option>
                                <option value="195">
                                    San Marino                        </option>
                                <option value="196">
                                    San Vicente y Las Granadinas                        </option>
                                <option value="197">
                                    Santa Elena                        </option>
                                <option value="198">
                                    Santa Lucía                        </option>
                                <option value="199">
                                    Sao Tome and Principe                        </option>
                                <option value="200">
                                    Senegal                        </option>
                                <option value="201">
                                    Serbia y Montenegro                        </option>
                                <option value="202">
                                    Seychelles                        </option>
                                <option value="203">
                                    Sierra Leona                        </option>
                                <option value="204">
                                    Singapur                        </option>
                                <option value="205">
                                    Siria                        </option>
                                <option value="206">
                                    Somalía                        </option>
                                <option value="207">
                                    Sri Lanka                        </option>
                                <option value="208">
                                    Suazilandia                        </option>
                                <option value="209">
                                    Sudáfrica                        </option>
                                <option value="210">
                                    Sudán                        </option>
                                <option value="211">
                                    Suecia                        </option>
                                <option value="212">
                                    Suiza                        </option>
                                <option value="213">
                                    Surinam                        </option>
                                <option value="214">
                                    Svalbard and Jan Mayen                        </option>
                                <option value="215">
                                    Tailandia                        </option>
                                <option value="216">
                                    Taiwan                        </option>
                                <option value="217">
                                    Tajikistán                        </option>
                                <option value="218">
                                    Tanzania                        </option>
                                <option value="226">
                                    Túnez                        </option>
                                <option value="219">
                                    Togo                        </option>
                                <option value="220">
                                    Tonga                        </option>
                                <option value="221">
                                    Toquelau                        </option>
                                <option value="222">
                                    Trinidad y Tobago                        </option>
                                <option value="223">
                                    Turkmenistán                        </option>
                                <option value="224">
                                    Turquía                        </option>
                                <option value="225">
                                    Tuvalu                        </option>
                                <option value="227">
                                    Ucrania                        </option>
                                <option value="228">
                                    Uganda                        </option>
                                <option value="229">
                                    United States Minor Outlying I                        </option>
                                <option value="230">
                                    Uruguay                        </option>
                                <option value="231">
                                    Uzbekistan                        </option>
                                <option value="232">
                                    Vanuatu                        </option>
                                <option value="233">
                                    Venezuela                        </option>
                                <option value="234">
                                    Vietnam                        </option>
                                <option value="235">
                                    Virgin Islands British                        </option>
                                <option value="236">
                                    Virgin Islands U.S.                        </option>
                                <option value="237">
                                    Western Sahara                        </option>
                                <option value="238">
                                    Yemen                        </option>
                                <option value="239">
                                    Zaire                        </option>
                                <option value="240">
                                    Zambia                        </option>
                                <option value="241">
                                    Zimbabue                        </option>
                            </select>
                            @error('pais')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col-md-4  shadow">
                    <div class="card-header " style="background-color: #27AE60">
                        <h4 class="text-center text-light">DATOS DE LA CUENTA</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input type="email" class="form-control border-primary @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                            @error('email')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control border-primary @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}">
                            @error('usuario')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control border-primary @error('password') is-invalid @enderror" name="password">
                            @error('password')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Confirmar Contraseña</label>
                            <input type="password" class="form-control border-primary " name="password_confirmation">

                        </div>
                        <input type="hidden"  name="usuarioId" value="{{Auth::id()}}">
                        <input type="hidden"  name="idNodoPadre" value="{{Auth::id()}}">

                    </div>
                    <div class="card-header" style="background-color: #27AE60">
                        <h4 class="text-center text-light">Referidor / Patrocinante</h4>
                    </div>
                    <div class="card-body ">
                        <input type="text" class="form-control" disabled value="Patrocinador">
                    </div>

                </div>
                <div class="col-md-4  shadow">
                    <div class="card-header " style="background-color: #27AE60">
                        <h4 class="text-center text-light">TIPO DE CUENTA</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select class="form-control border-primary" >
                                <option value="">Seleccione un tipo de cuenta</option>
                                <option value="1">School</option>
                                <option value="2">Academy</option>
                                <option value="3">University</option>
                                <option value="4">Participante</option>
                            </select>
                        </div>
                        <div class="form-group bg-dark p-2 text-light">
                            <div class="form-radio">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input text-primary" name="orden" id="optionsRadios2" value="1">
                                    Registro Izquierda
                                </label>
                            </div>
                            <div class="form-radio">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="orden" id="optionsRadios1" value="2" checked="">
                                    Registro Derecha
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
           <button type="submit" class="btn btn-primary my-5 btn-block p-2">REGISTRAR NUEVO AFILIADO</button>
        </form>
    </div>

    <button type="button" onclick="MenssajeConfirmacion()" >OK</button>
@endsection
@section('script')
    <script>
        function MenssajeConfirmacion()
        {
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'question'
            )
        }
    </script>
@endsection
