<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                print_r($this->price);
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
        echo "<br/>";
       

        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $width;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $width) {
                $this->name = $name;
                $this->height = $height;
                $this->width = $width;
            }

            public function show_height() {
                print_r($this->height);
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);
        echo "<br/>";
        $food->show_price();
        echo "<br/>";
        $animal->show_height();
        ?>
    </p>
</body>

</html>
