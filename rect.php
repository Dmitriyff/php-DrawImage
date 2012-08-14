<?php 
// тут сейчас опишем реализацию для прямоугольника

class Rect extends Shape {

	// храним тут количество созданных экземпляров
	public static $count = 0;

	// конструктор объекта
	public function __construct($x, $y, $width, $height) {

		//при создании нового увеличиваем счетчик
		Rect::$count++;
	}

	// абстрактный метод
	public function draw() {
		// оставим его пока пустым
	}
}

?>