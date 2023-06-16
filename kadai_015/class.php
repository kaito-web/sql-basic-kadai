<?php
// クラスを定義する
class Food
{
    // プロパティを定義する
    private $name;
    private $price;

    // コンストラクタを定義する
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function show_name(){
        echo $this->price . '<br>';
    }
}
// クラスを定義する
class Animal
{
    // プロパティを定義する
    private $name;
    private $height;
    private $width;

    // コンストラクタを定義する
    public function __construct(string $name, int $height, int $width){
        $this->name = $name;
        $this->height = $height;
        $this->width = $width;
    }

    public function show_height(){
        echo $this->height . '<br>';
    }

}

$food = new Food("potato", 250);
print_r($food);
echo '<br>';

$animal = new Animal("dog", 60, 5000);
print_r($animal);
echo '<br>';

$food -> show_name();

$animal -> show_height();

?>