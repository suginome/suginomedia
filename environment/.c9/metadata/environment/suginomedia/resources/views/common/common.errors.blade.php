{"filter":false,"title":"common.errors.blade.php","tooltip":"/suginomedia/resources/views/common/common.errors.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":12,"column":6},"action":"insert","lines":["@if (count($errors) > 0)","    <!-- Form Error List -->","    <div class=\"alert alert-danger\">","        <div><strong>入力した文字を修正してください。</strong></div>","        <div>","            <ul>","                @foreach ($errors->all() as $error)","                    <li>{{ $error }}</li>","                @endforeach","            </ul>","        </div>","    </div>","@endif"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":27},"end":{"row":8,"column":27},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1649847959939,"hash":"9a126dbc96adce3e27d45b783bcdc67ff4090c1c"}