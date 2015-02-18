<?php



$r = Router::Instance();


$r->get("\/wake_up", 'rise');
$r->get("\/sleep", 'fall');
$r->get("\/", 'win');
$r->post("\/", 'test');


function win(){
	print "Hello World!";
}

function rise(){
	print "It's a life!!";
}

function fall(){
	print "GoodBye World!";
}

function test(){
    var_dump($_POST);
    var_dump($_GET);
    print "GoodBye World!";
}