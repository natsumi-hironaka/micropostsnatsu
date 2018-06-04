{"filter":false,"title":"slime.php","tooltip":"/slime.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":71,"column":14},"action":"insert","lines":["<?php","","require_once 'character.php';","","class Slime extends Character {","    // クラス変数なので、初期化段階で代入する","    public static $type = 'スライム';","","    public $suffix = '';","","    function __construct($suffix) {","        parent::__construct(10, 3);","        $this->suffix = $suffix;","    }","","    function name() {","        // parent::name() は、 $this::$type を返すので、","        // この Slime クラスのクラス変数 $type ('スライム') を返す","        return parent::name() . $this->suffix;","    }","","    static function description() {","        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;","    }","}","Again, like class Slime, we do use extends Character, so we need to require_once the character_php file where class Character is defined.","","hero.php","","<?php","","require_once 'character.php';","","class Hero extends Character {","    // クラス変数なので、初期化段階で代入する","    public static $type = '主人公';","","    function __construct() {","        parent::__construct(1000, 30);","    }","","    static function description() {","        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;","    }","}","That’s the core class files taken care of. But now we need a class that requires all the others and starts the game itself, or we can’t actually do anything. The code above is just a blueprint, but you’ll find we never actually make an instance of it.","","So, let’s define class Game, and give it a function start() that uses instances of class Slime and class Hero to run the game.","","We can’t instantiate class Slime and class Hero without their respective files, so we use require_once to get both of them.","","game.php","","<?php","","require_once 'hero.php';","require_once 'slime.php';","","class Game {","    static function start() {","        $hero = new Hero();","        $slime_A = new Slime('A');","","        $slime_A->attack($hero);","        $hero->attack($slime_A);","","        Hero::description();","        Slime::description();","    }","}","","Game::start();"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":71,"column":14},"action":"remove","lines":["<?php","","require_once 'character.php';","","class Slime extends Character {","    // クラス変数なので、初期化段階で代入する","    public static $type = 'スライム';","","    public $suffix = '';","","    function __construct($suffix) {","        parent::__construct(10, 3);","        $this->suffix = $suffix;","    }","","    function name() {","        // parent::name() は、 $this::$type を返すので、","        // この Slime クラスのクラス変数 $type ('スライム') を返す","        return parent::name() . $this->suffix;","    }","","    static function description() {","        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;","    }","}","Again, like class Slime, we do use extends Character, so we need to require_once the character_php file where class Character is defined.","","hero.php","","<?php","","require_once 'character.php';","","class Hero extends Character {","    // クラス変数なので、初期化段階で代入する","    public static $type = '主人公';","","    function __construct() {","        parent::__construct(1000, 30);","    }","","    static function description() {","        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;","    }","}","That’s the core class files taken care of. But now we need a class that requires all the others and starts the game itself, or we can’t actually do anything. The code above is just a blueprint, but you’ll find we never actually make an instance of it.","","So, let’s define class Game, and give it a function start() that uses instances of class Slime and class Hero to run the game.","","We can’t instantiate class Slime and class Hero without their respective files, so we use require_once to get both of them.","","game.php","","<?php","","require_once 'hero.php';","require_once 'slime.php';","","class Game {","    static function start() {","        $hero = new Hero();","        $slime_A = new Slime('A');","","        $slime_A->attack($hero);","        $hero->attack($slime_A);","","        Hero::description();","        Slime::description();","    }","}","","Game::start();"],"id":2},{"start":{"row":0,"column":0},"end":{"row":24,"column":1},"action":"insert","lines":["<?php","","require_once 'character.php';","","class Slime extends Character {","    // クラス変数なので、初期化段階で代入する","    public static $type = 'スライム';","","    public $suffix = '';","","    function __construct($suffix) {","        parent::__construct(10, 3);","        $this->suffix = $suffix;","    }","","    function name() {","        // parent::name() は、 $this::$type を返すので、","        // この Slime クラスのクラス変数 $type ('スライム') を返す","        return parent::name() . $this->suffix;","    }","","    static function description() {","        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;","    }","}"]}],[{"start":{"row":0,"column":0},"end":{"row":24,"column":1},"action":"remove","lines":["<?php","","require_once 'character.php';","","class Slime extends Character {","    // クラス変数なので、初期化段階で代入する","    public static $type = 'スライム';","","    public $suffix = '';","","    function __construct($suffix) {","        parent::__construct(10, 3);","        $this->suffix = $suffix;","    }","","    function name() {","        // parent::name() は、 $this::$type を返すので、","        // この Slime クラスのクラス変数 $type ('スライム') を返す","        return parent::name() . $this->suffix;","    }","","    static function description() {","        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;","    }","}"],"id":3},{"start":{"row":0,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["<?php","","namespace TechAcademy\\RPG\\Characters;","","require_once 'character.php';","","class Slime extends Character {","    // クラス変数なので、初期化段階で代入する","    public static $type = 'スライム';","","    public $suffix = '';","","    function __construct($suffix) {","        parent::__construct(10, 3);","        $this->suffix = $suffix;","    }","","    function name() {","        // parent::name() は、 $this::$type を返すので、","        // この Slime クラスのクラス変数 $type ('スライム') を返す","        return parent::name() . $this->suffix;","    }","","    static function description() {","        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;","    }","}"]}]]},"ace":{"folds":[],"scrolltop":119.9375,"scrollleft":0,"selection":{"start":{"row":26,"column":1},"end":{"row":26,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1526368016949,"hash":"45a46e15e40dfd1b615c4d5e6d5071d8672962eb"}