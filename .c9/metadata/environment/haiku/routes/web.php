{"filter":false,"title":"web.php","tooltip":"/haiku/routes/web.php","undoManager":{"mark":6,"position":6,"stack":[[{"start":{"row":13,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});",""],"id":2}],[{"start":{"row":13,"column":0},"end":{"row":15,"column":50},"action":"insert","lines":["Route::get('/', 'MessagesController@index');","","Route::resource('messages', 'MessagesController');"],"id":3}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":24},"action":"remove","lines":["Message"],"id":4},{"start":{"row":13,"column":17},"end":{"row":13,"column":22},"action":"insert","lines":["haiku"]},{"start":{"row":15,"column":17},"end":{"row":15,"column":24},"action":"remove","lines":["message"]},{"start":{"row":15,"column":17},"end":{"row":15,"column":22},"action":"insert","lines":["haiku"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":34},"action":"remove","lines":["Message"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":32},"action":"insert","lines":["haiku"]}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"remove","lines":["h"],"id":5}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":["H"],"id":6}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["h"],"id":7}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["H"],"id":8}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":42},"end":{"row":13,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527576815023,"hash":"c5e2bdbe86d81b3612e0afdb6741157ad1658266"}