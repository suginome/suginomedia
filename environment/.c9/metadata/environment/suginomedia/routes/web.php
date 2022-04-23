{"filter":false,"title":"web.php","tooltip":"/suginomedia/routes/web.php","undoManager":{"mark":31,"position":31,"stack":[[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":1}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":41},"action":"insert","lines":["use App\\Http\\Controllers\\BookController; "],"id":2}],[{"start":{"row":2,"column":28},"end":{"row":2,"column":29},"action":"remove","lines":["k"],"id":3},{"start":{"row":2,"column":27},"end":{"row":2,"column":28},"action":"remove","lines":["o"]},{"start":{"row":2,"column":26},"end":{"row":2,"column":27},"action":"remove","lines":["o"]},{"start":{"row":2,"column":25},"end":{"row":2,"column":26},"action":"remove","lines":["B"]}],[{"start":{"row":2,"column":25},"end":{"row":2,"column":26},"action":"insert","lines":["F"],"id":4},{"start":{"row":2,"column":26},"end":{"row":2,"column":27},"action":"insert","lines":["o"]},{"start":{"row":2,"column":27},"end":{"row":2,"column":28},"action":"insert","lines":["o"]}],[{"start":{"row":2,"column":28},"end":{"row":2,"column":29},"action":"insert","lines":["d"],"id":5},{"start":{"row":2,"column":29},"end":{"row":2,"column":30},"action":"insert","lines":["s"]},{"start":{"row":2,"column":30},"end":{"row":2,"column":31},"action":"insert","lines":["t"]},{"start":{"row":2,"column":31},"end":{"row":2,"column":32},"action":"insert","lines":["u"]}],[{"start":{"row":2,"column":32},"end":{"row":2,"column":33},"action":"insert","lines":["f"],"id":6},{"start":{"row":2,"column":33},"end":{"row":2,"column":34},"action":"insert","lines":["f"]}],[{"start":{"row":16,"column":0},"end":{"row":19,"column":0},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});",""],"id":8}],[{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":16,"column":0},"end":{"row":29,"column":66},"action":"insert","lines":["// 本のダッシュボード表示","Route::get('/', [BookController::class, 'index']);","","// 新「本」を追加","Route::post('/books', [BookController::class, 'store']);","","//「本」の更新画面表示","Route::get('/booksedit/{book}',[BookController::class, 'edit']);","","//「本」の更新処理","Route::post('books/update',[BookController::class, 'update']);","","// 本を削除","Route::delete('/book/{book}', [BookController::class, 'destroy']);"],"id":10}],[{"start":{"row":17,"column":17},"end":{"row":17,"column":21},"action":"remove","lines":["Book"],"id":11},{"start":{"row":17,"column":17},"end":{"row":17,"column":26},"action":"insert","lines":["foodstuff"]},{"start":{"row":20,"column":14},"end":{"row":20,"column":18},"action":"remove","lines":["book"]},{"start":{"row":20,"column":14},"end":{"row":20,"column":23},"action":"insert","lines":["foodstuff"]},{"start":{"row":20,"column":28},"end":{"row":20,"column":32},"action":"remove","lines":["Book"]},{"start":{"row":20,"column":28},"end":{"row":20,"column":37},"action":"insert","lines":["foodstuff"]},{"start":{"row":23,"column":13},"end":{"row":23,"column":17},"action":"remove","lines":["book"]},{"start":{"row":23,"column":13},"end":{"row":23,"column":22},"action":"insert","lines":["foodstuff"]},{"start":{"row":23,"column":29},"end":{"row":23,"column":33},"action":"remove","lines":["book"]},{"start":{"row":23,"column":29},"end":{"row":23,"column":38},"action":"insert","lines":["foodstuff"]},{"start":{"row":23,"column":42},"end":{"row":23,"column":46},"action":"remove","lines":["Book"]},{"start":{"row":23,"column":42},"end":{"row":23,"column":51},"action":"insert","lines":["foodstuff"]},{"start":{"row":26,"column":13},"end":{"row":26,"column":17},"action":"remove","lines":["book"]},{"start":{"row":26,"column":13},"end":{"row":26,"column":22},"action":"insert","lines":["foodstuff"]},{"start":{"row":26,"column":33},"end":{"row":26,"column":37},"action":"remove","lines":["Book"]},{"start":{"row":26,"column":33},"end":{"row":26,"column":42},"action":"insert","lines":["foodstuff"]},{"start":{"row":29,"column":16},"end":{"row":29,"column":20},"action":"remove","lines":["book"]},{"start":{"row":29,"column":16},"end":{"row":29,"column":25},"action":"insert","lines":["foodstuff"]},{"start":{"row":29,"column":27},"end":{"row":29,"column":31},"action":"remove","lines":["book"]},{"start":{"row":29,"column":27},"end":{"row":29,"column":36},"action":"insert","lines":["foodstuff"]},{"start":{"row":29,"column":41},"end":{"row":29,"column":45},"action":"remove","lines":["Book"]},{"start":{"row":29,"column":41},"end":{"row":29,"column":50},"action":"insert","lines":["foodstuff"]}],[{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"remove","lines":["f"],"id":12}],[{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["F"],"id":13}],[{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"remove","lines":["f"],"id":14}],[{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"insert","lines":["F"],"id":15}],[{"start":{"row":20,"column":28},"end":{"row":20,"column":47},"action":"remove","lines":["FoodstuffController"],"id":16},{"start":{"row":20,"column":28},"end":{"row":20,"column":47},"action":"insert","lines":["FoodstuffController"]}],[{"start":{"row":23,"column":42},"end":{"row":23,"column":43},"action":"remove","lines":["f"],"id":17}],[{"start":{"row":23,"column":42},"end":{"row":23,"column":43},"action":"insert","lines":["F"],"id":18}],[{"start":{"row":23,"column":42},"end":{"row":23,"column":61},"action":"remove","lines":["FoodstuffController"],"id":19},{"start":{"row":23,"column":42},"end":{"row":23,"column":61},"action":"insert","lines":["FoodstuffController"]}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"remove","lines":["f"],"id":20}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"insert","lines":["F"],"id":21}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":52},"action":"remove","lines":["FoodstuffController"],"id":22},{"start":{"row":26,"column":33},"end":{"row":26,"column":52},"action":"insert","lines":["FoodstuffController"]}],[{"start":{"row":29,"column":41},"end":{"row":29,"column":42},"action":"remove","lines":["f"],"id":23}],[{"start":{"row":29,"column":41},"end":{"row":29,"column":42},"action":"insert","lines":["F"],"id":24}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"remove","lines":["/"],"id":32}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["t"],"id":33},{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":["o"]},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"insert","lines":["p"]}],[{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["p"],"id":34},{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":["a"]},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["g"]},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["/"],"id":35}],[{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"remove","lines":["g"],"id":36},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"remove","lines":["a"]},{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"remove","lines":["p"]}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"remove","lines":["e"],"id":37},{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"remove","lines":["p"]},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"remove","lines":["o"]},{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"remove","lines":["t"]}],[{"start":{"row":17,"column":13},"end":{"row":17,"column":17},"action":"insert","lines":["tope"],"id":38}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":["p"],"id":39},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["a"]}],[{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["g"],"id":40}]]},"ace":{"folds":[],"scrolltop":39,"scrollleft":0,"selection":{"start":{"row":8,"column":26},"end":{"row":8,"column":26},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":1,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1649906790657,"hash":"33f1085939274db5338185098ff9bf724a5cc0dc"}