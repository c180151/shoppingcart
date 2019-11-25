<?php
class Item {
private $name;
private $price;
private $author;
private $isbn;


function __construct(string $name,int $price, string $author, string $isbn) {
$this->name = $name;
$this->price = $price;
$this->authorB = $author;
$this->codeB = $isbn;
}

function setName(string $name):void {
$this->nameB = $name;
}
function getName():string {
return $this->name;
}

function setPrice(int $price):void {
$this->price = $price;
}
function getPrice():string {
return number_format($this->price);
}
function setAuthor(string $author):void {
   $this->authorB = $author;
}
function getAuthor():string {
return $this->authorB;
}
function setCode(string $code):void {
   $this->codeB = $code;
}
function getCode():string {
return $this->codeB;
}
}
?>